<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\PublishEntertainmentsStoreRequest;
use App\Http\Requests\PublishEntertainmentsUpdateRequest;
use App\Http\Controllers\Controller;
use App\Entertainments;
use Carbon\Carbon;
use App\Images;
use Illuminate\Contracts\Filesystem\Factory as Storage;
use Illuminate\Filesystem\Filesystem;

class EntertainmentsController extends Controller
{
    public function index()
    {
        $entertainment = new Entertainments;
        $entertainment = $entertainment -> get();
        return view('back-end.entertainments.list-entertainments',['entertainments'=>$entertainment]); 
    }


    public function create()
    {
        return view('back-end.entertainments.add-entertainments');
    }


    public function store(PublishEntertainmentsStoreRequest $request, Storage $storage)
    {
        $entertainment = new Entertainments;
        $entertainment->name = $request->input('name');
        $entertainment->place = $request->input('place');
        $entertainment->phone_no = $request->input('phone_no');
        $entertainment->type = $request->input('type');
        $entertainment->rate = $request->input('rate');
        $image = $request->file('featured_image');
        $timestamp = $this->getFormattedTimestamp();
        $savedImageName = $this->getSavedImageName( $timestamp, $image );
        $savedImageName = 'entertainment/'.$savedImageName;
        $imageUploaded = $this->uploadImage( $image, $savedImageName, $storage);
       if ( $imageUploaded )
       {
        $entertainment->featured_image = $savedImageName;
        $entertainment->save();
                return redirect('entertainments/create')
                ->withFlashMessage('Entertainment Added Succesfully')
                ->withType('success');
       }
       else{
       return redirect('entertainments/create')
                ->withFlashMessage('Entertainment Adding Failed!')
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
        $entertainment = new Entertainments;
        $entertainment = $entertainment -> find($id);
        return view('back-end.entertainments.show-entertainments',['entertainments'=>$entertainment]); 
    }

    public function edit($id)
    {
        $entertainment = new Entertainments;
        $entertainment = $entertainment -> find($id);
        return view('back-end.entertainments.edit-entertainments',['entertainments'=>$entertainment]); 
    }


    public function update($id, PublishEntertainmentsUpdateRequest $request, Storage $storage)
    {
        $entertainment = Entertainments::find($id);
        $entertainment->name = $request->input('name');
        $entertainment->place = $request->input('place');
        $entertainment->phone_no = $request->input('phone_no');
        $entertainment->type = $request->input('type');
        $entertainment->rate = $request->input('rate');
        $image = $request->file('featured_image');
        if($image != null){
            $timestamp = $this->getFormattedTimestamp();
            $savedImageName = $this->getSavedImageName( $timestamp, $image );
            $savedImageName = 'entertainment/'.$savedImageName;
            $imageUploaded = $this->uploadImage( $image, $savedImageName, $storage);
            if ( $imageUploaded )
            {
                $entertainment->featured_image = $savedImageName;
                $entertainment->save();
                return redirect('entertainments/create')
                    ->withFlashMessage('Decorator Edited Succesfully')
                    ->withType('success');
            }else{
                return redirect('entertainments/create')
                    ->withFlashMessage('Decorator Editing Failed!')
                    ->withType('danger');
            }
       
        }
        $entertainment->save();
        return redirect('entertainments/create')
                    ->withFlashMessage('Entertainment Edited Succesfully')
                    ->withType('success');
    }
       
    public function destroy($id)
    {
        $entertainment = new Entertainments;
        $entertainment = $entertainment -> where ('id',$id) -> delete();
        return redirect()->route('entertainments.index');
   } 

}


