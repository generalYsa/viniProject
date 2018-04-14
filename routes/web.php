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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chat', function () {
    return view('chat');
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

Route::get('/#modal', function() {
	return view('layouts.app');
});

Route::get('/#unmodal', function() {
	return view('layouts.editClass');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/chat', 'ChatController');
