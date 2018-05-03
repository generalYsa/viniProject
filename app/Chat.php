<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Chat extends Model
{

	protected $table = 'chat';
	
	public function chatMates(){	
		return $this->belongsTo('App\User', 'chatMate');
	}

	public function scopeGetChatMate($query){
		$userID = Auth::id();
		$user1 = Chat::select('id', 'user1 as chatMate', 'updated_at')->where('user2', $userID)->get();
		$user2 = Chat::select('id', 'user2 as chatMate', 'updated_at')->where('user1', $userID)->get();
		return $user1->merge($user2)->sortByDesc('date');
	}

    
}
