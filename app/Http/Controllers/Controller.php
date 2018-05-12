<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
//use App\Class;
use DB;
use Auth;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // function insert(Request $request){
    // 	$name = $request->input('className');
    // 	$profNum = (Auth::user()->id);
    // 	$code = $request->input('classCode');

    // 	$class = array('name'=>$name, 'profNum'=>$profNum, 'code'=>$code);

    // 	DB::table('class')->insert($class); 

    // 	return redirect()->back();
    // }
}
