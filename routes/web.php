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

<<<<<<< HEAD
Route::get('/studySets', function () {
    return view('studySets');
=======
Route::get('/recordForm', function() {
	return view('recordForm');
>>>>>>> f07bb6c4c610c026ef139857fccc9d6e616865c3
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::post('/chat/{id}', 'ChatController@storeMsg')->name('storeMsg')->where('id', '[0-9]+');
Route::resource('/chat', 'ChatController');