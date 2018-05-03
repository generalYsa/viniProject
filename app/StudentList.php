<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use DB;

class Studentlist extends Model
{
    public function scopeGetStudentlist($query, $id){
        return DB::table('users')
        	   ->join('studentlist','users.id','=','studentlist.userID')
               ->select('users.name','users.IDnum')
               ->get();
    }
    protected $table = 'studentlist';
    public $timestamps = false;
=======

class StudentList extends Model
{
    protected $table = 'studentlist';
	
    protected $fillable = [
        'classID', 'studentNum', 'status',
    ];
>>>>>>> 4bca629748fe9c4fa91c05109746079820a8ba76
}
