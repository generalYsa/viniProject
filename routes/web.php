<?php



Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    // Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/home', 'HomeController');
	Route::resource('/chat', 'ChatController');
	// Route::get('/chat', 'ChatController@theClass');
	// Route::post('/update', 'HomeController@update');
	// Route::post('/store', 'HomeController@store');
	// Route::post('/getID/{id}', 'HomeController@getID');
	Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

	Route::get('/studySets', function () {
	    return view('studySets');
	});

	// Route::get('/studentList', function() {
	// 	return view('studentList');
	// });

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


	Route::get('/toDo', function() {
		return view('toDo');
	});

	Route::resource('/viewGrades', 'ViewGradesController');


	// CHAT
	Route::get('/getSentMessage', 'ChatMsgController@getSentMessage');
	Route::get('/getSearchChatmate', 'ChatMsgController@getSearchChatmate');
	Route::get('/getMessages', 'ChatMsgController@getMessages');

	// TIMELINE
	Route::post('/timeline', 'TimelineController@index');
	Route::get('/timeline/getLatestPost', 'TimelineController@getLatestPost');
	Route::post('/timeline/savePost', 'TimelineController@savePost');
	Route::post('/timeline/saveEvent', 'TimelineController@saveEvent');
	Route::post('/timeline/saveActivity', 'TimelineController@saveActivity');
	Route::get('/timeline/appendLatestPosts', 'TimelineController@appendLatestPosts');
	// Route::resource('/timeline', 'TimelineController');
	
	Route::get('/calendar', '\App\Http\Controller\CalendarController@display');
	Route::get('/studentList','\App\Http\Controllers\StudentListController@show');
	Route::get('/recordForm', '\App\Http\Controllers\RecordFormsController@display');
	Route::get('/requirements', '\App\Http\Controllers\RequirementsController@display');
});


Route::get('/', '\App\Http\Controllers\Auth\LoginController@showLoginForm');
Route::post('login', '\App\Http\Controllers\Auth\LoginController@login');

