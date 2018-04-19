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

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
});
Route::get('/timeline', function () {
    return view('timeline');
});
Route::get('/chat', function () {
    return view('chat');
});
Route::get('/studySets', function () {
    return view('studySets');
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
=======

<<<<<<< HEAD
=======
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/studySets', function () {
//     return view('studySets');
// });
// Route::get('/recordForm', function() {
// 	return view('recordForm');

// });

// Route::get('/requirements', function() {
// 	return view('requirements');
// });

// Route::get('/viewFiles', function() {
// 	return view('viewFiles');
// });

// Route::get('/calendar', function() {
// 	return view('calendar');
// });

// Route::get('/studentList', function() {
// 	return view('studentList');
// });

// Route::get('/editPicture', function() {
// 	return view('editPicture');
// });

// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
// Route::post('/home', 'ChatControl@store')->name('insertMessage');
// Route::resource('/chat', 'ChatController');





>>>>>>> 9b669e6d237a7f0eb9eb9807890d1f7c156f4b2c

>>>>>>> c09b547bbb10a8964a511a5afc3c1c673400c280
Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', 'HomeController@index')->name('home');
	Route::resource('/chat', 'ChatController');
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

