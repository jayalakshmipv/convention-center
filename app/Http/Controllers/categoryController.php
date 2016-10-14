<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\category;


class categoryController extends Controller
{
    protected $category;
    public function __construct(category $category){
        $this->category=$category;
    }
public function index()
    {
    
       $allcategory = $this->category

                     ->get();
                    // dd("$allcategory");


          //Eloquent ORM method to return all matching results
//        //Redirecting to list_faculty.blade.php with $allFaculties  
////         foreach( $allExamtype as $Examtype ){
////             $Examtype->enc_id = Encrypt::encrypt($Examtype->id);
//   
//         }
        return View('back-end.category.categorylist', compact('allcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
//        return view('back-end.Events.add-events');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Requests\PublishcategoryRequest $requestData)
    {
        $category = new \App\category;
       $category->category= $requestData['category'];//
          $category->save();
           return redirect()->route('category.index')
                           ->withFlashMessage(' Events added successfully!')
                           ->withType('success');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     
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


