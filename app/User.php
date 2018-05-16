<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'IDnum', 'password', 'userType',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // public function chatMates(){    
    //         return $this->belongsTo('App\User', 'chatMate');
    //     }
	
	public function scopeGetName($query, $userID)
	{
		return $query->select('name')
					->where('id',$userID)
					->get();
	}
}
