<?php

namespace App\Http\Controllers;
use App\Messages;
use App\User;
use Auth;
use Illuminate\Http\Request;

class ChatMsgController extends Controller
{
    public function getSentMessage(Request $request){
        $message =  Messages::GetSentMessage($request->chatMate, $request->latestDate);
		
		foreach ($message as $msg) {
			return json_encode  ([
					            'message' => $msg->message,
					            'created_at' => $msg->created_at,
					            'created_atDiff' => $msg->created_at->diffForHumans(),
        						]);
		}				       
    }


    public function getSearchChatmate(Request $request){

    	return User::select('id as chatMate', 'name')
    				->where('name', 'like', $request->search.'%')
    				->where('id', '!=', Auth::id())
    				->get();
    }


    public function getMessages(Request $request){
        $messages = Messages::GetMessages($request->chatMate);
        return view('chat.messages', compact('messages'));
    }


}
