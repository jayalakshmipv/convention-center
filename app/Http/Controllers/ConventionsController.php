<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ConventionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('back-end.Conventions.add-convention-center');
//        $allEvents = \App\Events::all();    //Eloquent ORM method to return all matching results
//        //Redirecting to list_faculty.blade.php with $allFaculties  
////         foreach( $allExamtype as $Examtype ){
////             $Examtype->enc_id = Encrypt::encrypt($Examtype->id);
//   
//         }
//        return View('Examdetails.list_Examtype', compact('allExamtype'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('back-end.conventions.add-convention-center');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Requests\PublishConventionsRequest $request)
    {
      $center = new center;
       $center->name= $request->input('name');
	   $center->address=$request->input('address');
	   $center->location=$request->input('location');
	   $center->name_owner=$request->input('name_owner');
	   $center->phone_no=$request->input('phone_no');
	   $center->mobile_no=$request->input('mobile_no');
	   $center->mail_id=$request->input('mail_id');
	   $center->website_address=$request->input('website_address');
	   $center->maplocation=$request->input('maplocation');
	   $image = $request->file('conventioncenter_img');
	   $timestamp = $this->getFormattedTimestamp();
        $savedImageName = $this->getSavedImageName( $timestamp, $image );
        $savedImageName = 'conventioncenter/'.$savedImageName;
        $imageUploaded = $this->uploadImage( $image, $savedImageName, $storage );
	   
           if ( $imageUploaded )
            {
				$center->conventioncenter_img = $savedImageName;
				$center->save();
				return redirect('Convention Center/new')
				->withFlashMessage('Convention Center Added Succesfully')
				->withType('success');
            }

            return redirect('Convention Center/new')
				->withFlashMessage('Convention Center Addition Failed!')
				->withType('danger');		
	}

	public function uploadImage( $image, $imageFullName, $storage )
    {
        $filesystem = new Filesystem;
        return $storage->disk( 'image' )->put( $imageFullName, $filesystem->get( $image ) );
    }

    /**
     * @return string
     */
    protected function getFormattedTimestamp()
    {
        return str_replace( ['-',' ', ':'], '', Carbon::now()->toDateTimeString() );
    }
	
	 /**
     * @param $timestamp
     * @param $image
     * @return string
     */
    protected function getSavedImageName( $timestamp, $image )
    {
        return $timestamp . '-' . $image->getClientOriginalName();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
//    public function show($id)
//    {
//         $enc_id=$id;
//        $id = Encrypt::decrypt($id);
//        $Examtype = Examtypes::find($id);
//
//        //Redirecting to showBook.blade.php with $book variable
//        return view('Examdetails.list_Examtype')->with('Examtype', $Examtype);  //
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  int $id
//     * @return Response
//     */
//    public function edit($id)
//    {
//         $enc_id=$id;
//        $id = Encrypt::decrypt($id);
//        $Examtype = \App\Examtypes::find($id);
//
//
//        return view('Examdetails.edit_Examtype')->with('Examtype', $Examtype); //
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  int $id
//     * @return Response
//     */
//    public function update($id, Requests\PublishExamtypeRequest $requestData)
//    {
//        $Examtype = \App\Examtypes::find($id);
//        $Examtype->name = $requestData['name'];
//        $Examtype->save();
//
//        //Send control to index() method
//        return redirect()->route('ExamType.index')
//                         ->withFlashMessage('Examtype updated successfully!')
//                         ->withType('success');
//    //
//
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  int $id
//     * @return Response
//     */
//    public function destroy($id)
//    {
//         $enc_id=$id;
//        $id = Encrypt::decrypt($id);
//        //find result by id and delete
//        \App\Examtypes::find($id)->delete();
//
//        //Redirecting to index() method
//        return redirect()->route('ExamType.index');
//    } //

}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



