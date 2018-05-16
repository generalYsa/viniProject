<?php

namespace App;
use App\Classes;

use Illuminate\Database\Eloquent\Model;
use App\StudentList;

use Auth;

class userActivity extends Model
{
     protected $table = 'userActivity';

     public function userClass(){	
		return $this->belongsTo('App\User', 'studentNum');
	}

	public function activityClass(){	
		return $this->belongsTo('App\Activity', 'activityID');
	}


	// save a set of userActivity of users in a specific Class
	public function scopeSavePostActivity($query, $classID, $activityID){
		$students = StudentList::GetStudents($classID);
		foreach ($students as $student) {
			$newUserAct= new userActivity();
			$newUserAct->userID = $student['studentNum'];
			$newUserAct->activityID = $activityID;
			$newUserAct->isPost = 1;
			$newUserAct->save();
		}
	}


	// get all ToDos (Activities that the Teacher has posted in the Timeline)
	public function scopeGetStudentActivity($query, $studentID){
		return userActivity::where('userID', $studentID)->where('isPost', 1)
							->get()->sortByDesc('created_at');
	}
     
    // sets all ToDos of user as viewed.
    public function scopeSetView($query){
    	userActivity::where('userID', '=', Auth::user()->id)
					->update(['viewed' => '1']);
    }

    //get last userActivity
    public function scopeGetLastUserActivity($query){
    	return userActivity::scopeGetStudentActivity($query, Auth::user()->id)->first();
    }
}
