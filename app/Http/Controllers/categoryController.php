<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PublishCategoryRequest;
use App\category;


class CategoryController extends Controller
{
    protected $category;
    public function __construct(category $category){
        $this->category=$category;
    }
public function index()
    {
    $category = new category;
    $category = $category -> get();
    return view('back-end.category.list-category',['category'=>$category]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('back-end.Events.add-events');
    }

    public function store(PublishCategoryRequest $request )
    {
        $category = new category;
        $category->category= $request['category'];
        $category->save();
           return redirect()->route('category.create')
                           ->withFlashMessage(' Category added successfully!')
                           ->withType('success');

    } 
  // public function show($id)
   // {

 //   }
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



