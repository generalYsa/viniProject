<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class Studentlist extends Model
{
    public function scopeGetStudentlist($query, $id){
        return DB::table('users')
        	   ->join('studentlist','users.id','=','studentlist.userID')
               ->select('users.name','users.IDnum')
               ->get();
    }

    public function scopeGetStudents($query, $classID){
    	return Studentlist::select('studentNum')->where('classID', $classID)->get();
    }
    protected $table = 'studentlist';
    public $timestamps = false;

}
