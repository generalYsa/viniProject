<?php

namespace App;
use App\Activity;
use App\GradeReq;
use App\userActivity;
use DB;
use Auth;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'activity';
    protected $fillable = ['name', 'score', 'classID', 'gradeReqID', 'deadline', 'description'];


	// this specifies that classID is an ID of table Class
	public function classModel(){	
		return $this->belongsTo('App\Class', 'classID');
	}

	// this specifies that gradeReq is an ID of gradeReq Class
	public function gradeReqClass(){	
		return $this->belongsTo('App\GradeReq', 'gradeReq');
	}

	// this specifies that author is an ID of User Class
	public function authorTable(){	
		return $this->belongsTo('App\User', 'author');
	}


	// returns all Activty under Class with id $id
	public function scopeGetActivity($query, $id){
		return Activity::	select('id', 'name', 'author', 'description', 'deadline as date', 'updated_at',  DB::raw('"activity" as type')/*, author*/);
	}
	// this specifies that author is an ID of gradeReq Class
	// public function author(){	
	// 	return $this->belongsTo('App\User', 'author');
	// }

	// returns all Activty under Class with id $id and $reqID
	
// public function scopeGetActivity($query, $id, $reqID){
// 	return Activity::	select('id', 'name', 'author', 'score', 'description', 'deadline as date', 'updated_at',  DB::raw('"activity" as type')/*, author*/)
// 						->where('classID', $id)
// 						->where('gradeReqID', $reqID)
// 						->get()->sortByDesc('updated_at');
// }

	//get rows activities of current class
	// public function scopeGetTheActivity($query, $id){ 
 //    	return Activity::where('classID', $id)->get();
 //    }

 //    public function scopeGetUserScore(){	
	// 	return userActivity::where('activityID', $this->id)->first()->score;
	// }

    // public function scopGetUserActivity($query, $gradeReqID){ 
    // 	return DB::table('activity')
    // 			->join('gradereq', 'activity.gradeReqID', '=', $id)
    // 			->join('useractivity', 'activity.id', '=', 'useractivity.activityID')    				
    // 			->select('useractivity.score', 'gradereq.name', 'actvitiy.score')
    // 			->where([
    //  	               	['useractivity.userID', '=',  Auth::user()->id]
    //                    	])
    // 			->get();
    // }


}
