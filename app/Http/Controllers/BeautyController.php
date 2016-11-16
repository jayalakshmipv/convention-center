<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\PublishBeautysStoreRequest;
use App\Http\Requests\PublishBeautysUpdateRequest;
use App\Http\Controllers\Controller;
use App\Beautys;
use Carbon\Carbon;
use App\Images;
use Illuminate\Contracts\Filesystem\Factory as Storage;
use Illuminate\Filesystem\Filesystem;

class BeautyController extends Controller
{
    public function index()
    {
        $beauty = new Beautys;
        $beauty = $beauty -> get();
        return view('back-end.beautys.list-beautys',['beautys'=>$beauty]); 
    }


    public function create()
    {
        return view('back-end.beautys.add-beautys');
    }


    public function store(PublishBeautysStoreRequest $request, Storage $storage)
    {
        $beauty = new Beautys;
        $beauty->name = $request->input('name');
        $beauty->place = $request->input('place');
        $beauty->phone_no = $request->input('phone_no');
        $beauty->type = $request->input('type');
        $beauty->rate = $request->input('rate');
        $image = $request->file('featured_image');
        $timestamp = $this->getFormattedTimestamp();
        $savedImageName = $this->getSavedImageName( $timestamp, $image );
        $savedImageName = 'beautys/'.$savedImageName;
        $imageUploaded = $this->uploadImage( $image, $savedImageName, $storage);
       if ( $imageUploaded )
       {
        $beauty->featured_image = $savedImageName;
        $beauty->save();
                return redirect('beauty/create')
                ->withFlashMessage('Beauty Added Succesfully')
                ->withType('success');
       }
       else{
       return redirect('beauty/create')
                ->withFlashMessage('Beauty Adding Failed!')
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
        $beauty = new Beautys;
        $beauty = $beauty -> find($id);
        return view('back-end.beautys.show-beautys',['beautys'=>$beauty]); 
    }

    public function edit($id)
    {
        $beauty = new Beautys;
        $beauty = $beauty -> find($id);
        return view('back-end.beautys.edit-beautys',['beautys'=>$beauty]); 
    }


    public function update($id, PublishBeautysUpdateRequest $request, Storage $storage)
    {
        $beauty = Beautys::find($id);
        $beauty->name = $request->input('name');
        $beauty->place = $request->input('place');
        $beauty->phone_no = $request->input('phone_no');
        $beauty->type = $request->input('type');
        $beauty->rate = $request->input('rate');
        $image = $request->file('featured_image');
        if($image != null){
            $timestamp = $this->getFormattedTimestamp();
            $savedImageName = $this->getSavedImageName( $timestamp, $image );
            $savedImageName = 'beautys/'.$savedImageName;
            $imageUploaded = $this->uploadImage( $image, $savedImageName, $storage);
            if ( $imageUploaded )
            {
                $beauty->featured_image = $savedImageName;
                $beauty->save();
                return redirect('beauty/create')
                    ->withFlashMessage('Beauty Edited Succesfully')
                    ->withType('success');
            }else{
                return redirect('beauty/create')
                    ->withFlashMessage('Beauty Editing Failed!')
                    ->withType('danger');
            }
       
        }
        $beauty->save();
        return redirect('beauty/create')
                    ->withFlashMessage('Beauty Edited Succesfully')
                    ->withType('success');
    }
       
    public function destroy($id)
    {
        $beauty = new Beautys;
        $beauty = $beauty -> where ('id',$id) -> delete();
        return redirect()->route('beautys.index');
   } 

}
