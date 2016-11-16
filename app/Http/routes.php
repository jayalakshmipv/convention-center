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
#Front End
# Home
Route::get('/', function () {
    return view('front-end.index');
});

#About Us
Route::get('/about-us', function () {
    return view('front-end.about-us');
});

#Events
Route::get('/event', function () {
    return view('front-end.event');
});

#Contact Us
Route::get('/contact-us', function () {
    return view('front-end.contact-us');
});

#Pricing Plan
Route::get('/pricing-plan', function () {
    return view('front-end.pricing-plan');
});

#All Centers List
Route::get('/vendor-listing-bubba', function () {
    return view('front-end.vendor-listing-bubba');
});

#Map List
Route::get('/listing-row-map', function () {
    return view('front-end.listing-row-map');
});

#Detail Centers
Route::get('/details', function () {
    return view('front-end.details');
});

#Car Rental List
   Route::get('/carrental-listing', function () {
    return view('front-end.carrental-listing');
});

#Studio List 
Route::get('/studio-listing', function () {
    return view('front-end.studio-listing');
}); 
#studio
Route::get('/search', function() {
	return view('front-end.studio-listing');
});
#Caterers List 
Route::get('/catering-listing', function () {
    return view('front-end.catering-listing');
}); 
#Jeweller List 
Route::get('/jewellery-listing', function () {
    return view('front-end.jewellery-listing');
}); 
#Invites List 
Route::get('/invites-listing', function () {
    return view('front-end.invites-listing');
}); 
#Decorators List 
Route::get('/decorators-listing', function () {
    return view('front-end.decorators-listing');
}); 
#Beauty and Grooming List 
Route::get('/beauty-listing', function () {
    return view('front-end.beauty-listing');
});
#Apparel List 
Route::get('/apparel-listing', function () {
    return view('front-end.apparel-listing');
});  

#Entertainment List
Route::get('/entertainment-listing', function () {
    return view('front-end.entertainment-listing');
});  

#Giveways List
Route::get('/giveways-listing', function () {
    return view('front-end.giveways-listing');
});
#Back-End

#Login
Route::get('/login', function () {
    return view('back-end.login');
});

#Login
Route::get('login', 'SessionsController@create');

#login admin
Route::post('login',['as'=>'sessions.store','uses'=>'SessionsController@store']);

#Admin Routes.
//Route::group(['middleware' => ['auth','admin']], function (){


#Change Password
Route::get('changePassword/{id}',['uses' => 'ChangePasswordController@edit']);
Route::post('changePassword/{id}', ['as' => 'password.change', 'uses' => 'ChangePasswordController@update']);



#Dashboard
Route::get('dashboard', 'DashboardController@index');

#Convention Center
Route::resource('conventions','ConventionsController');

#Events
Route::resource('events', 'EventsController');

#Category
Route::resource('category', 'CategoryController');

#Car Rental
Route::resource('carrentals', 'CarrentalsController');

#Studio
Route::resource('studio', 'StudioController');

#Caterers
Route::resource('caterers', 'CaterersController');

#Jewellers
Route::resource('jewellers', 'JewellersController');

#Decorators
Route::resource('decorators', 'DecoratorsController');

#Invites
Route::resource('invites', 'InvitesController');

#Decorators
Route::resource('decorators', 'DecoratorsController');

#Invites
Route::resource('invites', 'InvitesController');

#Beauty & Grooming
Route::resource('beauty', 'BeautyController');

#Apparels
Route::resource('apparels', 'ApparelsController');

#Entertainments
Route::resource('entertainments', 'EntertainmentsController');

#Giveways
Route::resource('giveaways', 'GiveawaysController');


Route::get('search/','categoryController@disp');
	  
 #Home
    Route::get('admin', ['as' => 'admin_dashboard', 'uses' => 'Admin\AdminComtroller@getHome']);
    Route::get('/logout','AdminController@logout');




 
//Route::resource('/admin/Events', function () {
//    return view('back-end');
//    });



