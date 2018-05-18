<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Classes;
use App\GradeReq;
use Auth;
use DB;

class ViewGradesController extends Controller
{
    public function show(){
    	return view('viewgrades');  
    }

    public function index(){
    	$gradeReqs = GradeReq::where('classID', 9)->get();

    	$classes = DB::table('class')
                ->join('studentlist', 'class.id', '=', 'studentlist.classID')
                ->select('class.*')
                ->where([
     	                ['studentlist.studentNum', '=',  Auth::user()->id],
                        ['studentlist.status', '=', 'active']
                        ])
                ->get();    
    	return view('viewgrades', compact('gradeReqs', 'classes'));
    }
    	
}
