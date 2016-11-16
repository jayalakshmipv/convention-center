<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Convention;
use App\Apparels;
use App\Beautys;
use App\CarRentals;
use App\Caterers;
use App\Decorators;
use App\Entertainments;
use App\Giveaways;
use App\Invites;
use App\Jewellers;
use App\Studio;


class DashboardController extends Controller
{

  protected $basic_center_details,$apparels,$carrental,$caterers,$decorators,$entertainments,$giveaways,$invites,$jewellers,$studio;

  public function __construct(Convention $basic_center_details, Apparels $apparels, Beautys $beautys, CarRentals $carrental, Caterers $caterers, Decorators $decorators, Giveaways $giveaways, Invites $invites, Jewellers $jewellers, Studio $studio,Entertainments $entertainments){
    $this->basic_center_details = $basic_center_details;
    $this->apparels = $apparels;
    $this->carrental = $carrental;
    $this->caterers = $caterers;
    $this->decorators = $decorators;
    $this->entertainments = $entertainments;
    $this->giveaways = $giveaways;
    $this->invites = $invites;
    $this->jewellers = $jewellers;
    $this->studio = $studio;
    $this->beautys = $beautys;
  }

    public function index()
    {
      $count = array();
      $count['convention'] = $this->basic_center_details->count();
      $count['apparels'] = $this->apparels->count();
      $count['carrental'] = $this->carrental->count();
      $count['caterers'] = $this->caterers->count();
      $count['decorators'] = $this->decorators->count();
      $count['entertainments'] = $this->entertainments->count();
      $count['giveaways'] = $this->giveaways->count();
      $count['invites'] = $this->invites->count();
      $count['jewellers'] = $this->jewellers->count();
      $count['studio'] = $this->studio->count();
      $count['beautys'] = $this->beautys->count();

        return view('back-end.dashboard.dashboard',compact('count'));
    }

 //   public function create()
   // {
//        return view('back-end.Events.add-events');
   // }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
  //  public function store(Requests\PublishEventsRequest $requestData)
   // {
//        $Events = new \App\Events;
//        $Events->name= $requestData['name'];//
//           $Events->save();
//           return redirect()->route('Events.create')
//                            ->withFlashMessage(' Events added successfully!')
//                            ->withType('success');

   // }

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


