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
    return view('welcome');
});

// Route::get('/', function () {
//   return view('welcome',['name' => 'ServiceDesk']);
// });
Route::get('/','HomeController@getHomePage');
Route::get('/example',function() {
  return "example routes";
});

Route::get('/blade',function() {
  return view('bladeExample');
});

Route::resource('/message','MessageBoardController');

