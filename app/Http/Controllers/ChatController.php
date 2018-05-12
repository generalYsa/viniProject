<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chat;
use App\Student;
use App\Messages;
use App\Classes;
use Auth;
use DB;
use Response;

use DateTime;

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
        $user = Auth::id();
        $chat= Messages::GetChatMates();

        if($chat->count() > 0){
            $id = $chat->first()->chatMate;
            $messages = Messages::GetMessages($id);
        }else{
            $id = null;
            $messages = Messages::GetMessages(null);
        }
        
        return view('/chat', compact('chat', 'messages', 'id'));

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
        $message = Messages::create($request->all());

         return [
            'message' => $message->message,
            'created_at' => $message->created_at->diffForHumans(),
        ];
    }


    // public function storeMsg(Request $request, $id){
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::id();
        $chat= Messages::GetChatMates();
        $messages = Messages::GetMessages($id);
        return view('chat', compact('messages', 'chat', 'id'));
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

<<<<<<< HEAD
    // public function theClass()
    // {
    //     $classes = Classes::GetClasses(Auth::user()->id);
    //     return view('chat', compact('classes'));
    // }
=======


    public function getSentMessage(){
        // return json_encode("Helooooo");
        
        return Messages::GetSentMessage();

        // return json([
        //     'message' => $sent->message,
        //     'created_at' => $sent->created_at->diffForHumans(),
        // ]);
    }
>>>>>>> 23e05b0cddc6d09cd20c1e31e7fd802b3b40751a
}
