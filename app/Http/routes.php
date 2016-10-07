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