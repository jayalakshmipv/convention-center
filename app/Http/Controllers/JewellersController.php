<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\PublishJewellersStoreRequest;
use App\Http\Requests\PublishJewellersUpdateRequest;
use App\Http\Controllers\Controller;
use App\Jewellers;
use Carbon\Carbon;
use App\Images;
use Illuminate\Contracts\Filesystem\Factory as Storage;
use Illuminate\Filesystem\Filesystem;

class JewellersController extends Controller
{
 public function index()
    {
        $jewellers = new Jewellers;
        $jewellers = $jewellers -> get();
        return view('back-end.jewellers.list-jewellers',['jewellers'=>$jewellers]); 
    }


    public function create()
    {
        return view('back-end.jewellers.add-jewellers');
    }


    public function store(PublishJewellersStoreRequest $request, Storage $storage)
    {
        $jewellers = new Jewellers;
        $jewellers->name = $request->input('name');
        $jewellers->place = $request->input('place');
        $jewellers->phone_no = $request->input('phone_no');
        $jewellers->type = $request->input('type');
        $jewellers->rate = $request->input('rate');
        $image = $request->file('featured_image');
        $timestamp = $this->getFormattedTimestamp();
        $savedImageName = $this->getSavedImageName( $timestamp, $image );
        $savedImageName = 'caterers/'.$savedImageName;
        $imageUploaded = $this->uploadImage( $image, $savedImageName, $storage);
       if ( $imageUploaded )
       {
        
        $jewellers->featured_image = $savedImageName;
        $jewellers->save();
                return redirect('jewellers/create')
                ->withFlashMessage('Jewellers Added Succesfully')
                ->withType('success');

       }
       else{
       return redirect('jewellers/create')
                ->withFlashMessage('Jewellers Adding Failed!')
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
        $jewellers = new Jewellers;
        $jewellers = $jewellers -> find($id);
        return view('back-end.jewellers.show-jewellers',['jewellers'=>$jewellers]); 
    }

    public function edit($id)
    {
        $jewellers = new Jewellers;
        $jewellers= $jewellers -> find($id);
        return view('back-end.jewellers.edit-jewellers',['jewellers'=>$jewellers]); 
    }


    public function update($id, PublishJewellersUpdateRequest $request, Storage $storage)
    {
        $jewellers = Jewellers::find($id);
        $jewellers->name = $request->input('name');
        $jewellers->place = $request->input('place');
        $jewellers->phone_no = $request->input('phone_no');
        $jewellers->type = $request->input('type');
        $jewellers->rate = $request->input('rate');
        $image = $request->file('featured_image');
        if($image != null){
            $timestamp = $this->getFormattedTimestamp();
            $savedImageName = $this->getSavedImageName( $timestamp, $image );
            $savedImageName = 's/'.$savedImageName;
            $imageUploaded = $this->uploadImage( $image, $savedImageName, $storage);
            if ( $imageUploaded )
            {
                $jewellers->featured_image = $savedImageName;
                $jewellers->save();
                return redirect('jewellers/create')
                    ->withFlashMessage('Jewellers Edited Succesfully')
                    ->withType('success');
            }else{
                return redirect('jewellers/create')
                    ->withFlashMessage('Jewellers Editing Failed!')
                    ->withType('danger');
            }
       
        }
        $jewellers->save();
        return redirect('jewellers/create')
                    ->withFlashMessage('Jewellers Edited Succesfully')
                    ->withType('success');
    }
       
    public function destroy($id)
    {
        $jewellers = new Jewellers;
        $jewellers = $jewellers -> where ('id',$id) -> delete();
        return redirect()->route('jewellers.index');
   } 


}
