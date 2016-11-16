<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\PublishGivewaysStoreRequest;
use App\Http\Requests\PublishGivewaysUpdateRequest;
use App\Http\Controllers\Controller;
use App\Giveaways;
use Carbon\Carbon;
use App\Images;
use Illuminate\Contracts\Filesystem\Factory as Storage;
use Illuminate\Filesystem\Filesystem;

class GiveawaysController extends Controller
{
    public function index()
    {
        $giveway = new Giveaways;
        $giveway = $giveway -> get();
        return view('back-end.giveaways.list-giveways',['giveways'=>$giveway]); 
    }


    public function create()
    {
        return view('back-end.giveaways.add-giveways');
    }


    public function store(PublishGivewaysStoreRequest $request, Storage $storage)
    {
        $giveway = new Giveaways;
        $giveway->name = $request->input('name');
        $giveway->place = $request->input('place');
        $giveway->phone_no = $request->input('phone_no');
        $giveway->type = $request->input('type');
        $giveway->rate = $request->input('rate');
        $image = $request->file('featured_image');
        $timestamp = $this->getFormattedTimestamp();
        $savedImageName = $this->getSavedImageName( $timestamp, $image );
        $savedImageName = 'giveways/'.$savedImageName;
        $imageUploaded = $this->uploadImage( $image, $savedImageName, $storage);
       if ( $imageUploaded )
       {
        $giveway->featured_image = $savedImageName;
        $giveway->save();
                return redirect('giveaways/create')
                ->withFlashMessage('Giveway Added Succesfully')
                ->withType('success');
       }
       else{
       return redirect('giveaways/create')
                ->withFlashMessage('Giveway Adding Failed!')
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
        $giveway = new Giveaways;
        $giveway = $giveway -> find($id);
        return view('back-end.giveaways.show-giveways',['giveways'=>$giveway]); 
    }

    public function edit($id)
    {
        $giveway = new Giveaways;
        $giveway = $giveway -> find($id);
        return view('back-end.giveaways.edit-giveways',['giveways'=>$giveway]); 
    }


    public function update($id, PublishGivewaysUpdateRequest $request, Storage $storage)
    {
        $giveway = Giveaways::find($id);
        $giveway->name = $request->input('name');
        $giveway->place = $request->input('place');
        $giveway->phone_no = $request->input('phone_no');
        $giveway->type = $request->input('type');
        $giveway->rate = $request->input('rate');
        $image = $request->file('featured_image');
        if($image != null){
            $timestamp = $this->getFormattedTimestamp();
            $savedImageName = $this->getSavedImageName( $timestamp, $image );
            $savedImageName = 'giveways/'.$savedImageName;
            $imageUploaded = $this->uploadImage( $image, $savedImageName, $storage);
            if ( $imageUploaded )
            {
                $giveway->featured_image = $savedImageName;
                $giveway->save();
                return redirect('giveaways/create')
                    ->withFlashMessage('Giveway Edited Succesfully')
                    ->withType('success');
            }else{
                return redirect('giveaways/create')
                    ->withFlashMessage('Giveway Editing Failed!')
                    ->withType('danger');
            }
       
        }
        $giveway->save();
        return redirect('giveaways/create')
                    ->withFlashMessage('Giveway Edited Succesfully')
                    ->withType('success');
    }
       
    public function destroy($id)
    {
        $giveway = new Giveaways;
        $giveway = $giveway -> where ('id',$id) -> delete();
        return redirect()->route('giveaways.index');
   } 

}
