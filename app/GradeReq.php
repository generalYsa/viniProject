<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Activity;
use App\GradeReq;
use App\userActivity;
use DB;
use Auth;

class GradeReq extends Model
{

	public function scopeGetGradeReq($query, $id){
		return GradeReq::where('classID', $id);
	}

	public function scopeActivitiesClass(){
		return $this->hasMany('App\Activity');
	}

	public function scopeGetTheActivity($query, $gradeReqID){
		return Activity::where('gradeReqID', $gradeReqID)->get();
	}

	public function scopeGetActScore($query, $activityID){
		$score = userActivity::where('activityID', $activityID)
							->where('userID', Auth::user()->id)
							->get();
		return $score[0];
	}

    protected $table = 'gradeReq';
   
	protected $fillable = ['name', 'percentage', 'classID', 'profID', 'remember_token', 'created_at', 'updated_at'];
}
