<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\PublishStudioStoreRequest;
use App\Http\Requests\PublishStudioUpdateRequest;
use App\Http\Controllers\Controller;
use App\Studio;
use Carbon\Carbon;
use App\Images;
use Illuminate\Contracts\Filesystem\Factory as Storage;
use Illuminate\Filesystem\Filesystem;

class StudioController extends Controller
{
    public function index()
    {
        $studio = new Studio;
        $studio = $studio -> get();
        return view('back-end.studio.list-studio',['studio'=>$studio]); 
    }


    public function create()
    {
        return view('back-end.studio.add-studio');
    }


    public function store(PublishStudioStoreRequest $request, Storage $storage)
    {
        $studio = new Studio;
        $studio->name = $request->input('name');
        $studio->place = $request->input('place');
        $studio->phone_no = $request->input('phone_no');
        $studio->type = $request->input('type');
        $studio->rate = $request->input('rate');
        $image = $request->file('featured_image');
        $timestamp = $this->getFormattedTimestamp();
        $savedImageName = $this->getSavedImageName( $timestamp, $image );
        $savedImageName = 'studio/'.$savedImageName;
        $imageUploaded = $this->uploadImage( $image, $savedImageName, $storage);
       if ( $imageUploaded )
       {
        $studio->featured_image = $savedImageName;
        $studio->save();
                return redirect('studio/create')
                ->withFlashMessage('Studio Added Succesfully')
                ->withType('success');
       }
       else{
       return redirect('studio/create')
                ->withFlashMessage('Studio Adding Failed!')
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
        $studio = new Studio;
        $studio = $studio -> find($id);
        return view('back-end.studio.show-studio',['studio'=>$studio]); 
    }

    public function edit($id)
    {
        $studio = new Studio;
        $studio = $studio -> find($id);
        return view('back-end.studio.edit-studio',['studio'=>$studio]); 
    }


    public function update($id, PublishStudioUpdateRequest $request, Storage $storage)
    {
        $studio = studio::find($id);
        $studio->name = $request->input('name');
        $studio->place = $request->input('place');
        $studio->phone_no = $request->input('phone_no');
        $studio->type = $request->input('type');
        $studio->rate = $request->input('rate');
        $image = $request->file('featured_image');
        if($image != null){
            $timestamp = $this->getFormattedTimestamp();
            $savedImageName = $this->getSavedImageName( $timestamp, $image );
            $savedImageName = 's/'.$savedImageName;
            $imageUploaded = $this->uploadImage( $image, $savedImageName, $storage);
            if ( $imageUploaded )
            {
                $studio->featured_image = $savedImageName;
                $studio->save();
                return redirect('studio/create')
                    ->withFlashMessage('Studio Edited Succesfully')
                    ->withType('success');
            }else{
                return redirect('studio/create')
                    ->withFlashMessage('Studio Editing Failed!')
                    ->withType('danger');
            }
       
        }
        $studio->save();
        return redirect('studio/create')
                    ->withFlashMessage('Studio Edited Succesfully')
                    ->withType('success');
    }
       
    public function destroy($id)
    {
        $studio = new Studio;
        $studio = $studio -> where ('id',$id) -> delete();
        return redirect()->route('studio.index');
   } 
}
