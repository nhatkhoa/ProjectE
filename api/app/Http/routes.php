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

Route::group(['prefix' => 'api'], function () {
	// --- Restful api for manage category
    Route::resource('category','CategoryController');

    // --- Restful api for manage Deal/Product 
    Route::resource('deal','DealController');

    // --- Restful api for manage catagory
    Route::resource('customer','CustomerController');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
	Route::get('/', function() {
		return 'Trang admin';
	});
});