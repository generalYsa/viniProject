<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;
use App\Classes;

class Studentlist extends Model
{
    protected $fillable = [
        'classID', 'studentNum', 'status',
    ];

    public function scopeGetStudentlist($query, $id){
        return DB::table('users')
        	   ->join('studentlist','users.id','=','studentlist.userID')
               ->select('users.name','users.IDnum')
               ->get();
    }


    public function scopeGetStudClass($query, $id){
        return StudentList::where('studentNum', $id)->get();
    }

    public function scopeGetTheClass($query, $id){
        return StudentList::where('classID', $id)->first();
    }

    public function scopeGetStudents($query, $classID){
    	return Studentlist::select('studentNum')->where('classID', $classID)->get();
    }

    protected $table = 'studentlist';
    public $timestamps = false;
}
