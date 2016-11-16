<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\PublishCarrentalsStoreRequest;
use App\Http\Requests\PublishCarrentalsUpdateRequest;
use App\Http\Controllers\Controller;
use App\CarRentals;
use Carbon\Carbon;
use App\Images;
use Illuminate\Contracts\Filesystem\Factory as Storage;
use Illuminate\Filesystem\Filesystem;

class CarrentalsController extends Controller
{
    public function index()
    {
        $carrental = new CarRentals;
        $carrental = $carrental -> get();
        return view('back-end.carrentals.list-carrentals',['carrentals'=>$carrental]); 
    }


    public function create()
    {
        return view('back-end.carrentals.add-carrentals');
    }


    public function store(PublishCarrentalsStoreRequest $request, Storage $storage)
    {
        $carrental = new CarRentals;
        $carrental->name = $request->input('name');
        $carrental->place = $request->input('place');
        $carrental->phone_no = $request->input('phone_no');
        $carrental->vehicle = $request->input('vehicle');
        $carrental->rate = $request->input('rate');
        $image = $request->file('featured_image');
        $timestamp = $this->getFormattedTimestamp();
        $savedImageName = $this->getSavedImageName( $timestamp, $image );
        $savedImageName = 'carrentals/'.$savedImageName;
        $imageUploaded = $this->uploadImage( $image, $savedImageName, $storage);
       if ( $imageUploaded )
       {
        $carrental->featured_image = $savedImageName;
        $carrental->save();
                return redirect('carrentals/create')
                ->withFlashMessage('Car Rental Added Succesfully')
                ->withType('success');
       }
       else{
       return redirect('carrentals/create')
                ->withFlashMessage('Car Rentals Adding Failed!')
                ->withType('danger');
      }
       
    }

    protected function uploadImage($image, $imageFullName, $storage )
    {
        $filesystem = new Filesystem;
        return $storage->disk('images')->put( $imageFullName, $filesystem->get( $image ) );
      
    }

    protected function getFormattedTimestamp()
    {
        return str_replace( ['',':','-',' '],'',Carbon::now()->toDateTimeString());
    }

    protected function getSavedImageName( $timestamp, $image )
    {
        return $timestamp . '-' .$image->getClientOriginalName();
    }

    public function show($id)
    {
        $carrental = new CarRentals;
        $carrental = $carrental -> find($id);
        return view('back-end.carrentals.show-carrentals',['carrental'=>$carrental]); 
    }

    public function edit($id)
    {
        $carrental = new CarRentals;
        $carrental = $carrental -> find($id);
        return view('back-end.carrentals.edit-carrentals',['carrental'=>$carrental]); 
    }


    public function update($id, PublishCarrentalsUpdateRequest $request, Storage $storage)
    {
        $carrental = CarRentals::find($id);
        $carrental->name = $request->input('name');
        $carrental->place = $request->input('place');
        $carrental->phone_no = $request->input('phone_no');
        $carrental->vehicle = $request->input('vehicle');
        $carrental->rate = $request->input('rate');
        $image = $request->file('featured_image');
        if($image != null){
            $timestamp = $this->getFormattedTimestamp();
            $savedImageName = $this->getSavedImageName( $timestamp, $image );
            $savedImageName = 's/'.$savedImageName;
            $imageUploaded = $this->uploadImage( $image, $savedImageName, $storage);
            if ( $imageUploaded )
            {
                $carrental->featured_image = $savedImageName;
                $carrental->save();
                return redirect('carrentals/create')
                    ->withFlashMessage('Car Rental Edited Succesfully')
                    ->withType('success');
            }else{
                return redirect('carrentals/create')
                    ->withFlashMessage('Car Rental Editing Failed!')
                    ->withType('danger');
            }
       
        }
        $carrental->save();
        return redirect('carrentals/create')
                    ->withFlashMessage('Car Rental Edited Succesfully')
                    ->withType('success');
    }
       
    public function destroy($id)
    {
        $carrental = new CarRentals;
        $carrental = $carrental -> where ('id',$id) -> delete();
        return redirect()->route('carrentals.index');
   } 

}
