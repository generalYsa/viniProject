<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Posts;
use App\Events;
use App\Activity;

class TimelineController  extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = Activity::GetActivity(1); 
        $events = Events::GetEvents(1);
        $posts = Posts::GetPosts(1);
        $timelineFeed = $activities->merge($events)->merge($posts)->sortByDesc('updated_at');

        return view('timeline', compact('timelineFeed'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // for inserting Posts in DB
    public function savePost(Request $request){
        return Posts::create($request->all());
    }

    // for inserting Posts in DB
    public function saveEvent(Request $request){
        return Events::create($request->all());
    }

    // for inserting Activity in DB
    public function saveActivity(Request $request){
        return Activity::create($request->all());
    }
}
