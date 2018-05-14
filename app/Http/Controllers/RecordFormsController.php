<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RecordForm;
use Auth;
use App\Classes;

class RecordFormsController extends Controller
{
    //
	public function display()
	{
		$instance = new RecordForm();
		$classes = Classes::GetClasses(Auth::user()->id);
		return view($instance->display(),compact('classes'));
	}
}
