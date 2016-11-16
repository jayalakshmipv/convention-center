<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\PublishEventsRequest;
use App\Http\Requests\PublishEventsUpdateRequest;
use App\Http\Controllers\Controller;
use App\events;
use Carbon\Carbon;
use App\Images;
use Illuminate\Contracts\Filesystem\Factory as Storage;
use Illuminate\Filesystem\Filesystem;

class EventsController extends Controller
{
    public function index()
    {
        $event = new events;
        $event = $event -> get();
        return view('back-end.events.list-events',['events'=>$event]); 
    }


    public function create()
    {
        return view('back-end.events.add-events');
    }


    public function store(PublishEventsRequest $request, Storage $storage)
    {
        $event = new events;
        $event->event_name = $request->input('event_name');
        $event->event_date_from = $request->input('event_date_from');
        $event->event_date_to = $request->input('event_date_to');
        $event->event_hoster = $request->input('event_hoster');
        $event->hoster_phno = $request->input('hoster_phno');
        $event->hoster_emailid = $request->input('hoster_emailid');
        $event->event_details = $request->input('event_details');
        $image = $request->file('featured_image');
        $timestamp = $this->getFormattedTimestamp();
        $savedImageName = $this->getSavedImageName( $timestamp, $image );
        $savedImageName = 'events/'.$savedImageName;
        $imageUploaded = $this->uploadImage( $image, $savedImageName, $storage);
       if ( $imageUploaded )
       {
        $event->featured_image = $savedImageName;
        $event->save();
                return redirect('events/create')
                ->withFlashMessage('Events Added Succesfully')
                ->withType('success');
       }
       else{
       return redirect('events/create')
                ->withFlashMessage('Events Adding Failed!')
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
        $event = new events;
        $event = $event -> find($id);
        return view('back-end.events.show-events',['event'=>$event]); 
    }

    public function edit($id)
    {
        $event = new events;
        $event = $event -> find($id);
        return view('back-end.events.edit-events',['event'=>$event]); 
    }


    public function update($id, PublishEventsUpdateRequest $request, Storage $storage)
    {
        $event = events::find($id);
        $event->event_name = $request->input('event_name');
        $event->event_date_from = $request->input('event_date_from');
        $event->event_date_to = $request->input('event_date_to');
        $event->event_hoster = $request->input('event_hoster');
        $event->hoster_phno = $request->input('hoster_phno');
        $event->hoster_emailid = $request->input('hoster_emailid');
        $event->event_details = $request->input('event_details');
        $image = $request->file('featured_image');
        if($image != null){
            $timestamp = $this->getFormattedTimestamp();
            $savedImageName = $this->getSavedImageName( $timestamp, $image );
            $savedImageName = 'events/'.$savedImageName;
            $imageUploaded = $this->uploadImage( $image, $savedImageName, $storage);
            if ( $imageUploaded )
            {
                $event->featured_image = $savedImageName;
                $event->save();
                return redirect('events/create')
                    ->withFlashMessage('Event Edited Succesfully')
                    ->withType('success');
            }else{
                return redirect('events/create')
                    ->withFlashMessage('Events Editing Failed!')
                    ->withType('danger');
            }
       
        }
        $event->save();
        return redirect('events/create')
                    ->withFlashMessage('Events Edited Succesfully')
                    ->withType('success');
    }
       
    public function destroy($id)
    {
        $event = new events;
        $event = $event -> where ('id',$id) -> delete();
        return redirect()->route('events.index');
   } 

}



