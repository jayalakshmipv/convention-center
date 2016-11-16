<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\PublishInvitesStoreRequest;
use App\Http\Requests\PublishInvitesUpdateRequest;
use App\Http\Controllers\Controller;
use App\invites;
use Carbon\Carbon;
use App\Images;
use Illuminate\Contracts\Filesystem\Factory as Storage;
use Illuminate\Filesystem\Filesystem;

class InvitesController extends Controller
{
    public function index()
    {
        $invites = new invites;
        $invites= $invites -> get();
        return view('back-end.invites.list-invites',['invites'=>$invites]); 
    }


    public function create()
    {
        return view('back-end.invites.add-invites');
    }


    public function store(PublishInvitesStoreRequest $request, Storage $storage)
    {
        $invites = new invites;
        $invites->name = $request->input('name');
        $invites->place = $request->input('place');
        $invites->phone_no = $request->input('phone_no');
        $invites->type = $request->input('type');
        $invites->rate = $request->input('rate');
        $image = $request->file('featured_image');
        $timestamp = $this->getFormattedTimestamp();
        $savedImageName = $this->getSavedImageName( $timestamp, $image );
        $savedImageName = 'invites/'.$savedImageName;
        $imageUploaded = $this->uploadImage( $image, $savedImageName, $storage);
       if ( $imageUploaded )
       {
        
        $invites->featured_image = $savedImageName;
        $invites->save();
                return redirect('invites/create')
                ->withFlashMessage('invites Added Succesfully')
                ->withType('success');

       }
       else{
       return redirect('invites/create')
                ->withFlashMessage('invites Adding Failed!')
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
        $invites = new invites;
        $invites = $invites -> find($id);
        return view('back-end.invites.show-invites',['invites'=>$invites]); 
    }

    public function edit($id)
    {
        $invites = new invites;
        $invites= $invites -> find($id);
        return view('back-end.invites.edit-invites',['invites'=>$invites]); 
    }


    public function update($id, PublishInvitesUpdateRequest $request, Storage $storage)
    {
        $invites = invites::find($id);
        $invites->name = $request->input('name');
        $invites->place = $request->input('place');
        $invites->phone_no = $request->input('phone_no');
        $invites->type = $request->input('type');
        $invites->rate = $request->input('rate');
        $image = $request->file('featured_image');
        if($image != null){
            $timestamp = $this->getFormattedTimestamp();
            $savedImageName = $this->getSavedImageName( $timestamp, $image );
            $savedImageName = 's/'.$savedImageName;
            $imageUploaded = $this->uploadImage( $image, $savedImageName, $storage);
            if ( $imageUploaded )
            {
                $invites->featured_image = $savedImageName;
                $invites->save();
                return redirect('invites/create')
                    ->withFlashMessage('invites Edited Succesfully')
                    ->withType('success');
            }else{
                return redirect('invites/create')
                    ->withFlashMessage('invites Editing Failed!')
                    ->withType('danger');
            }
       
        }
        $invites->save();
        return redirect('invites/create')
                    ->withFlashMessage('invites Edited Succesfully')
                    ->withType('success');
    }
       
    public function destroy($id)
    {
        $invites = new invites;
        $invites = $invites -> where ('id',$id) -> delete();
        return redirect()->route('invites.index');
   } 

}
