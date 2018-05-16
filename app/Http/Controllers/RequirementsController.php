<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes;
use Auth;
use App\GradeReq;

class RequirementsController extends Controller
{
    //
	public function display($classID) 
	{
		$classes = Classes::GetClasses(Auth::user()->id);
		$requirements = GradeReq::GetGradeReqs($classID);
		return view('/requirements',compact('classes', 'requirements', 'classID'));
	}
	
	public function updateStudents(Request $request)
	{
		$activityID = $request->id;
		$classID = $request->classID;
	}
}
