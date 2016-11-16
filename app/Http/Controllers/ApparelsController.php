<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\PublishApparelsStoreRequest;
use App\Http\Requests\PublishApparelsUpdateRequest;
use App\Http\Controllers\Controller;
use App\Apparels;
use Carbon\Carbon;
use App\Images;
use Illuminate\Contracts\Filesystem\Factory as Storage;
use Illuminate\Filesystem\Filesystem;

class ApparelsController extends Controller
{
    public function index()
    {
        $apparel = new Apparels;
        $apparel = $apparel -> get();
        return view('back-end.apparels.list-apparels',['apparels'=>$apparel]); 
    }


    public function create()
    {
        return view('back-end.apparels.add-apparels');
    }


    public function store(PublishApparelsStoreRequest $request, Storage $storage)
    {
        $apparel = new Apparels;
        $apparel->name = $request->input('name');
        $apparel->place = $request->input('place');
        $apparel->phone_no = $request->input('phone_no');
        $apparel->type = $request->input('type');
        $apparel->rate = $request->input('rate');
        $image = $request->file('featured_image');
        $timestamp = $this->getFormattedTimestamp();
        $savedImageName = $this->getSavedImageName( $timestamp, $image );
        $savedImageName = 'apparels/'.$savedImageName;
        $imageUploaded = $this->uploadImage( $image, $savedImageName, $storage);
       if ( $imageUploaded )
       {
        $apparel->featured_image = $savedImageName;
        $apparel->save();
                return redirect('apparels/create')
                ->withFlashMessage('Apparels Added Succesfully')
                ->withType('success');
       }
       else{
       return redirect('apparels/create')
                ->withFlashMessage('Apparels Adding Failed!')
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
        $apparel = new Apparels;
        $apparel = $apparel -> find($id);
        return view('back-end.apparels.show-apparels',['apparels'=>$apparel]); 
    }

    public function edit($id)
    {
        $apparel = new Apparels;
        $apparel = $apparel -> find($id);
        return view('back-end.apparels.edit-apparels',['apparels'=>$apparel]); 
    }


    public function update($id, PublishApparelsUpdateRequest $request, Storage $storage)
    {
        $apparel = Apparels::find($id);
        $apparel->name = $request->input('name');
        $apparel->place = $request->input('place');
        $apparel->phone_no = $request->input('phone_no');
        $apparel->type = $request->input('type');
        $apparel->rate = $request->input('rate');
        $image = $request->file('featured_image');
        if($image != null){
            $timestamp = $this->getFormattedTimestamp();
            $savedImageName = $this->getSavedImageName( $timestamp, $image );
            $savedImageName = 'apparels/'.$savedImageName;
            $imageUploaded = $this->uploadImage( $image, $savedImageName, $storage);
            if ( $imageUploaded )
            {
                $apparel->featured_image = $savedImageName;
                $apparel->save();
                return redirect('apparels/create')
                    ->withFlashMessage('Apparel Edited Succesfully')
                    ->withType('success');
            }else{
                return redirect('apparels/create')
                    ->withFlashMessage('Apparel Editing Failed!')
                    ->withType('danger');
            }
       
        }
        $apparel->save();
        return redirect('apparels/create')
                    ->withFlashMessage('Apparel Edited Succesfully')
                    ->withType('success');
    }
       
    public function destroy($id)
    {
        $apparel = new Apparels;
        $apparel = $apparel -> where ('id',$id) -> delete();
        return redirect()->route('apparels.index');
   } 

}
