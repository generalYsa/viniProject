<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'activity';
    protected $fillable = ['name', 'classID', 'description', 'deadline', 'score', 'gradeReqID', 'date', 'author'];


	// this specifies that classID is an ID of table Class
	public function classIDTable(){	
		return $this->belongsTo('App\Class', 'classID');
	}

	// this specifies that gradeReq is an ID of gradeReq Class
	public function gradeReqTable(){	
		return $this->belongsTo('App\GradeReq', 'gradeReq');
	}

	// this specifies that author is an ID of User Class
	public function authorTable(){	
		return $this->belongsTo('App\User', 'author');
	}

	// this specifies that author is an ID of gradeReq Class
	// public function author(){	
	// 	return $this->belongsTo('App\User', 'author');
	// }

	// returns all Activty under Class with id $id
	public function scopeGetActivity($query, $id){
		return Activity::	select('id', 'name', 'author', 'description', 'deadline as date', 'updated_at',  DB::raw('"activity" as type')/*, author*/)
							->where('classID', $id)
							->get()->sortByDesc('updated_at');
	}

}
