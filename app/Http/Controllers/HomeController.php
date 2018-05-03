<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    
use App\Classes;
use Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    function store(Request $request){
        $this->validate($request, [
            'className'=>'required',
            'classCode'=> 'required|max:5',
        ]);
        $name = $request->input('className');
        $profNum = (Auth::user()->id);
        $code = $request->input('classCode');

        $class = array('name'=>$name, 'profNum'=>$profNum, 'code'=>$code);

        DB::table('class')->insert($class); 

        return redirect()->back();
    }

    public function index()
    {
        $classes = Classes::GetClasses(Auth::user()->id);
        return view('home', compact('classes'));
    }

    public function getID(){
        $theID = Classes::GetClasses($classes->$id);
        return $theID;
    }

    public function update(Request $request, $id)
    {
        // $item = Classes::findOrFail($id);
        $item = Classes::SelectClass($classes->id); //ang row ka selected class?
        $item->update($request->input('className'));
        return redirect('/classes/'.$item->name);
    }
}
