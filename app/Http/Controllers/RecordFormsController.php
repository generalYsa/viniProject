<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RecordForm;
use App\Activity;
use Auth;
use App\Classes;

class RecordFormsController extends Controller
{
    //
	public function display($classID)
	{
		$instance = new RecordForm();
		$activities = Activity::GetActivity($classID);
		$classes = Classes::GetClasses(Auth::user()->id);
		return view($instance->defaultLink(),compact('classes','activities'));
		// echo "<pre> ";
		// print_r($activities);
	}
}
