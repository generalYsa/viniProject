<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
// 	return view('welcome');
// });


Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    // Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/home', 'HomeController');
	Route::resource('/chat', 'ChatController');
	// Route::get('/chat', 'ChatController@theClass');
	Route::post('/update', 'HomeController@update');
	Route::post('/store', 'HomeController@store');
	Route::post('/getID/{id}', 'HomeController@getID');
	Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

	Route::get('/studySets', function () {
	    return view('studySets');
	});

	Route::get('/recordForm', function() {
		return view('recordForm');
	});

	Route::get('/requirements', function() {
		return view('requirements');
	});

	Route::get('/viewFiles', function() {
		return view('viewFiles');
	});

	Route::get('/calendar', function() {
		return view('calendar');
	});

	Route::get('/studentList', function() {
		return view('studentList');
	});

	Route::get('/editPicture', function() {
		return view('editPicture');
	});

	Route::get('/learnStudySet', function () {
    return view('learnStudySet');
	});

	Route::get('/playStudySet', function () {
	    return view('playStudySet');
	});

	Route::get('/editStudySet', function () {
	    return view('editStudySet');
	});

	Route::get('/recordForm', function() {
		return view('recordForm');
	});
	
		// Route::get('/welcome', function() {
		// 	return view('layouts.app');
		// });
	});

Route::get('/', '\App\Http\Controllers\Auth\LoginController@showLoginForm');
Route::post('login', '\App\Http\Controllers\Auth\LoginController@login');