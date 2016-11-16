<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PublishConventionsRequest;
use App\Convention;
use Carbon\Carbon;
use App\Images;
use Illuminate\Contracts\Filesystem\Factory as Storage;
use Illuminate\Filesystem\Filesystem;

class ConventionsController extends Controller
{
    public function index()
    {
        $conventions = new convention;
        $conventions = $conventions -> get();
        return view('back-end.Conventions.list-convention-center',['conventions'=>$conventions]);       
    }
  
    public function create()
    {
        return view('back-end.conventions.add-convention-center');
    }

    public function store(PublishConventionsRequest $request, Storage $storage)
    {
		
     $convention = new Convention;
     $convention->name = $request->input('name');
	   $convention->address=$request->input('address');
	   $convention->location=$request->input('location');
	   $convention->name_owner=$request->input('name_owner');
	   $convention->phone_no=$request->input('phone_no');
	   $convention->mobile_no=$request->input('mobile_no');
	   $convention->mail_id=$request->input('mail_id');
	   $convention->website_address=$request->input('website_address');
	   $convention->latitude=$request->input('latitude');
	   $convention->longitude=$request->input('longitude');
	   $image = $request->file('featured_image');
	   $timestamp = $this->getFormattedTimestamp();
       $savedImageName = $this->getSavedImageName( $timestamp, $image );
       $savedImageName = 'conventioncenter/'.$savedImageName;
       $imageUploaded = $this->uploadImage( $image, $savedImageName, $storage);
  
       if ( $imageUploaded )
       {
       	$convention->featured_image = $savedImageName;
       	$convention->save();
				return redirect('conventions/create')
				->withFlashMessage('Convention Center Added Succesfully')
				->withType('success');
       }
       else{
       return redirect('conventions/create')
				->withFlashMessage('Convention Center Added Succesfully')
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
      $conventions = new Convention;
   	  $conventions = $conventions -> where ('id',$id) -> first();

   	  return view('back-end.Conventions.show-convention-center',['convention'=>$conventions]);
      }

    public function edit($id)
     {
       $conventions = new Convention;
   	   $conventions = $conventions -> where ('id',$id) -> first();
       return view('back-end.Conventions.edit-convention-center',['convention'=>$conventions]);
     }

   public function update($id, PublishConventionsRequest $request, Storage $storage)
     { 
       $convention = Convention::find($id);
       $convention->name= $request->input('name');
	     $convention->address=$request->input('address');
	     $convention->location=$request->input('location');
	     $convention->name_owner=$request->input('name_owner');
	     $convention->phone_no=$request->input('phone_no');
	     $convention->mobile_no=$request->input('mobile_no');
	     $convention->mail_id=$request->input('mail_id');
	     $convention->website_address=$request->input('website_address');
	     $convention->latitude=$request->input('latitude');
	     $convention->longitude=$request->input('longitude');
       $image = $request->file('featured_image');
	     $convention->save();
				return redirect('conventions')
				->withFlashMessage(' Updated Succesfully')
				->withType('success');
     }

   public function destroy($id)
   {
   $conventions = new convention;
   $conventions = $conventions -> where ('id',$id) -> delete();
   return redirect()->route('conventions.index');    
   } 

}



