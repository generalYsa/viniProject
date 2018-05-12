<?php

namespace App;
use Auth;
use DateTime;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
	protected $table = 'messages';
	protected $fillable = ['receiverID', 'senderID', 'message']; 

	public function chatMates(){	
		return $this->belongsTo('App\User', 'chatMate');
	}

	public function sender(){	
		return $this->belongsTo('App\User', 'senderID');
	}

	public function receiver(){	
		return $this->belongsTo('App\User', 'receiverID');
	}

	public function scopeGetChatMates($query){
		$userID = Auth::id();
		
		// users that have sent a message to logged in user
		$snder = Messages::  select('id', 'senderID as chatMate', 'created_at')
						  -> where('receiverID', $userID)->get()->sortByDesc('created_at');
		
		// users that have receives a message from logged user
		$rcvr = Messages:: select('id', 'receiverID as chatMate', 'created_at')
						-> where('senderID', $userID)->get()->sortByDesc('created_at');
		
		return $snder->merge($rcvr)->unique('chatMate');
		
	}


	public function scopeGetMessages($query, $chatMate){
		$userID = Auth::id();
		return Messages::where('senderID', $chatMate)->where('receiverID', $userID)
						->orWhere('receiverID', $chatMate)->where('senderID', $userID)
						->orderBy('created_at','desc')
						->get();
	} 


	public function scopeGetSentMessage($query, $chatMate, $date){
		$user = Auth::user()->id;
		$message = Messages::select('id', 'message', 'created_at')
						->where('senderID', $chatMate)
						->where('receiverID', $user)
						->where('created_at','>',  $date)
						->orderBy('created_at','desc')->limit('1')
						->get();
        return $message;
	}
}
