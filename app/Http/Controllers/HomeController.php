<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    
use App\Classes;
use App\StudentList;
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
        if(Auth::user()->userType=='t'){
            $this->validate($request, [
                'className'=>'required',
                'classCode'=> 'required|max:5',
            ]);
            $name = $request->input('className');            
            $code = $request->input('classCode');
            $exists = DB::table('class')->where('code', $code)->first();

            if(!$exists){
                $profNum = (Auth::user()->id);
                $class = array('name'=>$name, 'profNum'=>$profNum, 'code'=>$code);

                DB::table('class')->insert($class); 

                return redirect()->back();
            }
        }else{
            $this->validate($request, [
                'classCode'=> 'required|max:5',
            ]);

            $classCode = $request->classCode;
            $exists = DB::table('class')->where('code', $classCode)->first();

            if($exists){
                $codeDetails = Classes::GetClassID($classCode); 
                $classID = $codeDetails[0]['id'];
                $studentNum = (Auth::user()['id']);
                $status = ('active');

                $list = array('classID'=>$classID, 'studentNum'=>$studentNum, 'status'=>$status);
                DB::table('studentlist')->insert($list); 

                return redirect()->back();
            }
        }
    }
            

    public function index()
    {
        $id = Auth::user()->id;
        if(Auth::user()->userType=='t'){
            $classes = Classes::GetClasses($id);
        }else{
            $classes = DB::table('class')
                            ->join('studentlist', 'class.id', '=', 'studentlist.classID')
                            ->select('class.*')
                            ->where([
                                    ['studentlist.studentNum', '=', $id],
                                    ['studentlist.status', '=', 'active']
                                    ])
                            ->get();
        }
        return view('home', compact('classes'));
    }

    public function update(Request $request, $id)
    {
        if(Auth::user()->userType=='t'){
            $theClass = Classes::find($id); //ang row ka selected class?
            $theClass->name = $request->className;
            $theClass->save();
            return redirect()->back();
        }else{
             $theClass = StudentList::GetTheClass($id);
             $theClass->status = 'dropped';
             $theClass->save();
             return redirect()->back();
        }
    }

    public function destroy($id){
        $delClass = Classes::findOrFail($id);
        $delClass->delete();
        return redirect()->back();
    }
}
