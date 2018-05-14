<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calendar;
use Auth;
use App\Classes;

class CalendarController extends Controller
{	
	public function display()
	{
		$instance = new Calendar();
		$classes = Classes::GetClasses(Auth::user()->id);
		return view($instance->display(),compact('classes'));
	}
}
