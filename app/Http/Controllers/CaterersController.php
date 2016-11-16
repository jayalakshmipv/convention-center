<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\PublishCaterersStoreRequest;
use App\Http\Requests\PublishCaterersUpdateRequest;
use App\Http\Controllers\Controller;
use App\Caterers;
use Carbon\Carbon;
use App\Images;
use Illuminate\Contracts\Filesystem\Factory as Storage;
use Illuminate\Filesystem\Filesystem;

class CaterersController extends Controller
{
 public function index()
    {
        $caterers = new Caterers;
        $caterers = $caterers -> get();
        return view('back-end.caterers.list-caterers',['caterers'=>$caterers]); 
    }


    public function create()
    {
        return view('back-end.caterers.add-caterers');
    }


    public function store(PublishCaterersStoreRequest $request, Storage $storage)
    {
        $caterers = new Caterers;
        $caterers->name = $request->input('name');
        $caterers->place = $request->input('place');
        $caterers->phone_no = $request->input('phone_no');
        $caterers->food_type = $request->input('food_type');
        $caterers->rate = $request->input('rate');
        $image = $request->file('featured_image');
        $timestamp = $this->getFormattedTimestamp();
        $savedImageName = $this->getSavedImageName( $timestamp, $image );
        $savedImageName = 'caterers/'.$savedImageName;
        $imageUploaded = $this->uploadImage( $image, $savedImageName, $storage);
       if ( $imageUploaded )
       {
        
        $caterers->featured_image = $savedImageName;
        $caterers->save();
                return redirect('caterers/create')
                ->withFlashMessage('Caterers Added Succesfully')
                ->withType('success');

       }
       else{
       return redirect('caterers/create')
                ->withFlashMessage('Caterers Adding Failed!')
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
        $caterers = new Caterers;
        $caterers = $caterers -> find($id);
        return view('back-end.caterers.show-caterers',['caterers'=>$caterers]); 
    }

    public function edit($id)
    {
        $caterers = new Caterers;
        $caterers= $caterers -> find($id);
        return view('back-end.caterers.edit-caterers',['caterers'=>$caterers]); 
    }


    public function update($id, PublishCaterersUpdateRequest $request, Storage $storage)
    {
        $caterers = Caterers::find($id);
        $caterers->name = $request->input('name');
        $caterers->place = $request->input('place');
        $caterers->phone_no = $request->input('phone_no');
        $caterers->food_type = $request->input('food_type');
        $caterers->rate = $request->input('rate');
        $image = $request->file('featured_image');
        if($image != null){
            $timestamp = $this->getFormattedTimestamp();
            $savedImageName = $this->getSavedImageName( $timestamp, $image );
            $savedImageName = 's/'.$savedImageName;
            $imageUploaded = $this->uploadImage( $image, $savedImageName, $storage);
            if ( $imageUploaded )
            {
                $caterers->featured_image = $savedImageName;
                $caterers->save();
                return redirect('caterers/create')
                    ->withFlashMessage('caterers Edited Succesfully')
                    ->withType('success');
            }else{
                return redirect('caterers/create')
                    ->withFlashMessage('caterers Editing Failed!')
                    ->withType('danger');
            }
       
        }
        $caterers->save();
        return redirect('caterers/create')
                    ->withFlashMessage('caterers Edited Succesfully')
                    ->withType('success');
    }
       
    public function destroy($id)
    {
        $caterers = new Caterers;
        $caterers = $caterers -> where ('id',$id) -> delete();
        return redirect()->route('caterers.index');
   } 


}
