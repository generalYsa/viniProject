<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentList;
use App\Classes;
use Auth;
use DB;

class StudentListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 public function index()
    {
        // $id = Auth::user()->id;
        // if(Auth::user()->userType=='t'){
        //     $classes = Classes::GetClasses($id);
        // }else{
        //     $classes = DB::table('class')
        //                     ->join('studentlist', 'class.id', '=', 'studentlist.classID')
        //                     ->select('class.*')
        //                     ->where([
        //                             ['studentlist.studentNum', '=', $id],
        //                             ['studentlist.status', '=', 'active']
        //                             ])
        //                     ->get();
        // }
        // $studentlists = StudentList::GetStudentList(Auth::user()->id);
        // return view('studentList', compact('studentlists','classes'));
        // return view('home', compact('classes'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
       // $studentlists = StudentList::GetStudentList(Auth::user()->id);
       // return view('studentList', compact('studentlists'));
  
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
        $studentlists = StudentList::GetStudentList($request->classID);
        return view('studentList', compact('studentlists','classes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function drop(Request $request)
    {
        $student = StudentList::GetStudID($request->id);
        $student->status = $request->status;
        $student->save();
        return $student;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
