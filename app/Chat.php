<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
		public function chatMates(){	
			return $this->belongsTo('App\User', 'chatMate');
		}

		public function scopeGetChatMate($query, $userID){
			$user1 = Chat::select('id', 'user1 as chatMate', 'updated_at')->where('user2', $userID)->get();
			$user2 = Chat::select('id', 'user2 as chatMate', 'updated_at')->where('user1', $userID)->get();
			return $user1->merge($user2)->sortByDesc('date');

		}
    protected $table = 'chat';
}
