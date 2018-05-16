<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Classes;
use Auth;

class GradeReq extends Model
{
    protected $table = 'gradeReq';
   
	protected $fillable = ['classID', 'author', 'name', 'description', 'date'];
	
	public function scopeGetGradeReqs($query, $classID){
    	return GradeReq::where('classID', $classID)->get();
    }
}
