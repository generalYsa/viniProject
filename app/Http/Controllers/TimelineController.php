<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Posts;
use App\Events;
use App\Activity;
use App\Classes;
use App\userActivity;


class TimelineController  extends Controller
{

    
    // for index
    public function index(Request $request)
    {

        $className = $request->className;
        $classID = $request->classID;
        $classes = Classes::GetClasses(Auth::user()->id);
        $timelineFeed = TimelineController::getTimelineFeed($classID);
        $toDos = userActivity::GetStudentActivity(Auth::user()->id);
        
        return view('timeline.timeline', compact('timelineFeed', 'classes', 'className', 'classID', 'toDos'));
    }
    

    // for inserting Posts in DB
    public function savePost(Request $request){
        $post = Posts::create($request->all());
        $post['name'] = $post['content'];
        unset($post['content']);
        
        return TimelineController::postToAppend($post, 'post');
    }

    // for inserting Posts in DB
    public function saveEvent(Request $request){
        $event = Events::create($request->all());
        return TimelineController::postToAppend($event, 'event');
    }

    // for inserting Activity in DB
    public function saveActivity(Request $request){
        $activity = Activity::create($request->all());
        $activity['date'] = $activity['deadline'];
        unset($activity['deadline']);
        userActivity::SavePostActivity($request->classID, $activity['id']);
        return TimelineController::postToAppend($activity, 'activity');
    }


    // for getting latest post in DB
    public function getLatestPost(Request $request){
         return TimelineController::getTimelineFeed($request->classID)
                                    ->where('author', '!=', Auth::id())
                                    ->where('updated_at', '>', $request->latestDate);

    }

    // returns HTML of posts to append
    public function appendLatestPosts(Request $request){
        $timelineFeed = TimelineController::getLatestPost($request);
        return view('timeline.timelineFeed', compact('timelineFeed'));

    }


    // return all contents of Timeline
    public function getTimelineFeed($classID){
        $activities = Activity::GetActivity($classID);
        $events = Events::GetEvents($classID);
        $posts = Posts::GetPosts($classID);
        return $activities->merge($events)->merge($posts)->sortByDesc('updated_at');

    }


    // returns the HTML code of the post to append (post of the current user)
    public function postToAppend($data, $postType){
        $data['type'] = $postType;
        $post = $data;
        return view('timeline.individualPost', compact('post'));
    }
    
}
