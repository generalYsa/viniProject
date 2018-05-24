<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RecordForm;
use App\Activity;
use Auth;
use App\Classes;
use App\userActivity;

class RecordFormsController extends Controller
{
    // $id is requirement ID
	public function display($classID, $id)
	{
		$instance = new RecordForm();
		$activities = Activity::GetActivity($classID, $id);
		$classes = Classes::GetClasses(Auth::user()->id);
		$records = userActivity::GetActivities($id);
		return view($instance->defaultLink(),compact('classes','records','activities','classID'));
		// echo "<pre> ";
		// print_r($activities);
	}
	
	public function getRecords($id)
	{
		return userActivity::GetActivities($id); // Fetch records of students in a particular activity
	}
	
	public function getStudentForm(Request $request){
		$records = RecordFormsController::getRecords($request->id);
		return view('recordForm.recordFormStudents', compact('records'));
		
	}
}
