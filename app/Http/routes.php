<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('front-end.index');
});
Route::get('/about-us', function () {
    return view('front-end.about-us');
});
Route::get('/event', function () {
    return view('front-end.event');
});
Route::get('/contact-us', function () {
    return view('front-end.contact-us');
});
Route::get('/pricing-plan', function () {
    return view('front-end.pricing-plan');
});
Route::get('/vendor-listing-bubba', function () {
    return view('front-end.vendor-listing-bubba');
});
Route::get('/listing-row-map', function () {
    return view('front-end.listing-row-map');
});
   Route::get('/carrental-listing', function () {
    return view('front-end.carrental-listing');
}); 
Route::get('/studio-listing', function () {
    return view('front-end.studio-listing');
}); 
  Route::resource('events', 'EventsController');
  
Route::get('dashboard', 'dashboardController@index');

Route::resource('category', 'categoryController');

Route::get('/details', function () {
    return view('front-end.details');
});
 
//Route::resource('/admin/Events', function () {
//    return view('back-end');
//    });

# Admin Routes.
//Route::group(['middleware' => ['auth','admin']], function (){
  # Home
  //Route::get('admin', ['as' => 'admin_dashboard', 'uses' => 'Admin\AdminComtroller@getHome']);
 // });

Route::get('login', 'sessionsController@create');
