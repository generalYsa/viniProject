<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class Studentlist extends Model
{
    protected $fillable = [
        'classID', 'studentNum', 'status',
    ];

    public function scopeGetStudents($query, $classID){
    	return Studentlist::select('studentNum')->where('classID', $classID)->get();
    }
	
    protected $table = 'studentlist';
    public $timestamps = false;
}
