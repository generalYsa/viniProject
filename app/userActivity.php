<?php

namespace App;
use App\Classes;

use Illuminate\Database\Eloquent\Model;

class userActivity extends Model
{
     protected $table = 'userActivity';

     public function userID(){	
		return $this->belongsTo('App\User', 'studentNum');
	}

	public function activityTable(){	
		return $this->belongsTo('App\Activity', 'activityID');
	}

	public function activityClass($classID){	
		$name = Classes::select('name')->where('id', $classID)->get();
		return $name[0]['name'];
	}

	public function scopeInsertNewActivity($query, $studentList){

	}



	public function scopeGetStudentActivity($query, $studentID){
		return userActivity::where('userID', $studentID)->get();
	}
     
}
