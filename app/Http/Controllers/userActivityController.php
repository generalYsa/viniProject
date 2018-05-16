<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\userActivity;

class userActivityController extends Controller
{

	// sets all ToDos of user as viewed. Called when ToDo button is clicked
    public function SetViewed(){
    	userActivity::SetView();
    }

    public function getLastUserActivity(Request $request){
    	return userActivity::GetLastUserActivity();
    }
}
