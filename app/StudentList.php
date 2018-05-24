<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;
use App\Classes;

class Studentlist extends Model
{
    protected $fillable = [
        'classID', 'userID', 'status',
    ];


	public function student(){	
		return $this->belongsTo('App\User', 'userID');
	}

    public function scopeGetStudentlist($query, $classID){
        return StudentList::where('classID', $classID)->get();
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

    public function scopeGetStudId($query, $id){
    	return Studentlist::where('id', $id)->first();
    }


    protected $table = 'studentlist';
    public $timestamps = false;
}
