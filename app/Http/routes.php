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
//  return view('welcome');
//  });



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

//Route::get('approv_comment/{id}', 'AdminController@approv_comment');
    Route::get('/', 'HomeController@index');
    Route::get('comment/{id}', 'UserController@comment');
    Route::get('admincomment', 'AdminController@admincomment');
    Route::post('savecomment', 'UserController@savecomment');
    Route::get('deletecomment/{id}','AdminController@deletecomment');
 	Route::get('/Admin', 'AdminController@index');
 	Route::get('home', 'HomeController@index');
	Route::get('blogpost', 'AdminController@blogpost');
	Route::get('showblog', 'UserController@showblog1');
	Route::post('save', 'AdminController@save');
	Route::get('delete/{id}','AdminController@delete');
	Route::get('blogedit/{id}','AdminController@blogedit');
	Route::post('update', 'AdminController@update');
	Route::get('cms', 'AdminController@cms');
	Route::get('showcms', 'UserController@showcms');
	Route::post('savecms', 'AdminController@savecms');
	Route::get('contact', 'HomeController@contact');
	Route::get('about', 'HomeController@about');
	Route::get('editprofile', 'UserController@editprofile1');
	Route::get('editprofile/{id}', 'AdminController@editprofile1');
	Route::post('updateprofile', 'UserController@updateprofile');
	Route::get('showuser', 'AdminController@showuser');
	Route::get('deleteuser/{id}','AdminController@deleteuser');
	Route::post('savecontact', 'HomeController@savecontact');
	Route::get('showcontact', 'AdminController@showcontact');
	Route::get('deletecontact/{id}','AdminController@deletecontact');
	
	//approv_comment
	
});
