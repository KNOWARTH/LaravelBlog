<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', 'HomeController@index');
    Route::get('comment', 'HomeController@comment');
     Route::get('admincomment', 'AdminController@admincomment');
 	  Route::get('/Admin', 'AdminController@index');
	 Route::get('blogpost', 'AdminController@blogpost');
	 Route::post('save', 'AdminController@save');
	 Route::get('delete/{id}','AdminController@delete');
	 Route::get('edit/{id}','AdminController@edit');
	 Route::post('blogedit', 'AdminController@update');
	  Route::get('cms', 'AdminController@cms');
	 Route::get('contact', 'AdminController@contact');
	 Route::get('about', 'AdminController@about');
});
