<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\PublishDecoratorsStoreRequest;
use App\Http\Requests\PublishDecoratorsUpdateRequest;
use App\Http\Controllers\Controller;
use App\Decorators;
use Carbon\Carbon;
use App\Images;
use Illuminate\Contracts\Filesystem\Factory as Storage;
use Illuminate\Filesystem\Filesystem;

class DecoratorsController extends Controller
{
    public function index()
    {
        $decorator = new Decorators;
        $decorator = $decorator -> get();
        return view('back-end.decorators.list-decorators',['decorators'=>$decorator]); 
    }


    public function create()
    {
        return view('back-end.decorators.add-decorators');
    }


    public function store(PublishDecoratorsStoreRequest $request, Storage $storage)
    {
        $decorator = new Decorators;
        $decorator->name = $request->input('name');
        $decorator->place = $request->input('place');
        $decorator->phone_no = $request->input('phone_no');
        $decorator->type = $request->input('type');
        $decorator->rate = $request->input('rate');
        $image = $request->file('featured_image');
        $timestamp = $this->getFormattedTimestamp();
        $savedImageName = $this->getSavedImageName( $timestamp, $image );
        $savedImageName = 'decorators/'.$savedImageName;
        $imageUploaded = $this->uploadImage( $image, $savedImageName, $storage);
       if ( $imageUploaded )
       {
        $decorator->featured_image = $savedImageName;
        $decorator->save();
                return redirect('decorators/create')
                ->withFlashMessage('Decorator Added Succesfully')
                ->withType('success');
       }
       else{
       return redirect('decorators/create')
                ->withFlashMessage('Decorator Adding Failed!')
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
        $decorator = new Decorators;
        $decorator = $decorator -> find($id);
        return view('back-end.decorators.show-decorators',['decorators'=>$decorator]); 
    }

    public function edit($id)
    {
        $decorator = new Decorators;
        $decorator = $decorator -> find($id);
        return view('back-end.decorators.edit-decorators',['decorators'=>$decorator]); 
    }


    public function update($id, PublishDecoratorsUpdateRequest $request, Storage $storage)
    {
        $decorator = Decorators::find($id);
        $decorator->name = $request->input('name');
        $decorator->place = $request->input('place');
        $decorator->phone_no = $request->input('phone_no');
        $decorator->type = $request->input('type');
        $decorator->rate = $request->input('rate');
        $image = $request->file('featured_image');
        if($image != null){
            $timestamp = $this->getFormattedTimestamp();
            $savedImageName = $this->getSavedImageName( $timestamp, $image );
            $savedImageName = 'decorators/'.$savedImageName;
            $imageUploaded = $this->uploadImage( $image, $savedImageName, $storage);
            if ( $imageUploaded )
            {
                $decorator->featured_image = $savedImageName;
                $decorator->save();
                return redirect('decorators/create')
                    ->withFlashMessage('Decorator Edited Succesfully')
                    ->withType('success');
            }else{
                return redirect('decorators/create')
                    ->withFlashMessage('Decorator Editing Failed!')
                    ->withType('danger');
            }
       
        }
        $decorator->save();
        return redirect('decorators/create')
                    ->withFlashMessage('Decorator Edited Succesfully')
                    ->withType('success');
    }
       
    public function destroy($id)
    {
        $decorator = new Decorators;
        $decorator = $decorator -> where ('id',$id) -> delete();
        return redirect()->route('decorators.index');
   } 

}

