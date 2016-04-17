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
    return view('home', ["title" => "Home Page", "subtitle" => "Home"]);
});


Route::auth();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'web'], function () {
	Route::resource('categories', 'CategoriesController');
	Route::resource('kriterias', 'KriteriaController');
	Route::get('/kriterias-ic', 'KriteriaController@indexIC');
	Route::get('/kriterias-lp', 'KriteriaController@indexLP');


	Route::get('/welcome', function () {
    return view('welcome', ["title" => "Home Page", "subtitle" => "Home"]);
});
});
