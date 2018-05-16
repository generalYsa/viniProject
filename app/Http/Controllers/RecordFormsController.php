<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RecordForm;
use App\Activity;
use Auth;
use App\Classes;

class RecordFormsController extends Controller
{
    // $id is requirement ID
	public function display($classID, $id)
	{
		$instance = new RecordForm();
		$activities = Activity::GetActivity($classID, $id);
		$classes = Classes::GetClasses(Auth::user()->id);
		return view($instance->defaultLink(),compact('classes','activities','classID'));
		// echo "<pre> ";
		// print_r($activities);
	}
}
