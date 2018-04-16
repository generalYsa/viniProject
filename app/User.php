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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    function scopeVerifyLoginStudent($query, $id, $password){
        return $query->where('user_id', $id)
                    ->where('password', Hash::make($password))
                    ->where('status', 's')
                    ->get();

    }
    function scopeVerifyLoginTeacher($query, $id, $password){
        return $query->where('user_id', $id)
                    ->where('password', Hash::make($password))
                     ->where('status', 't')
                    ->get();

    }
}
