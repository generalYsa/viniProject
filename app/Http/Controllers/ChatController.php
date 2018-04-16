<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chat;
use App\Student;
use App\Messages;
use Auth;
use DB;

class ChatController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user = Auth::id();
        $user = 1;
        // $chat = Chat::
                    
        //                 where('user2', $user)
        //                 ->orWhere('user1', $user)
        //                 ->get();
        // print_r($chat);

        // $chat = DB::select(`student.name`,`chat.id`,`chat.date`)
        // ->from(`chat`)
        // ->from(`student`)
        // ->where(DB::raw(`( chat.user1 = $user OR chat.user2 = $user )` ))
        // ->where(DB::raw(`( ( (chat.user1 = student.id) or (chat.user2 = student.id) ) AND student.id != $user )` ))
        // ->orderBy(`date`, `DESC`)
        // ->orderBy(`student.name`, `ASC`)
        // ->get();

        // $chat = DB::
        // from(`chat`)
        // ->from(`student`)
        // // ->where(DB::raw(`( chat.user1 = $user OR chat.user2 = $user )` ))
        // ->get();

        // echo "<pre>";
        // print_r($chat);
        // return view('chat', compact('chat'));

        $chat= Chat::GetChatMate($user);
        return view('chat', compact('chat'));

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
        Messages::create($request->all());
        return back();
    }


    // public function storeMsg(Request $request, $id){
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {   
        $id = $request->chatID;
        $user = 1;
        $chat= Chat::GetChatMate($user);
        $messages = Messages::where('chatID', $id)->orderBy('created_at','desc')->get();
        return view('chat', compact('messages', 'chat'));
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
}
