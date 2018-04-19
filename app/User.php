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

    // public function userType(){   
    //     $userType = DB::table('users')->select('userType')->get();
    //     return $userType; 
    //         $userType = DB::table('users')->where('userType', 't')->value('userType');
    // }

    // public function chatMates(){    
    //         return $this->belongsTo('App\User', 'chatMate');
    //     }

    // public function scopeaStudent(){
    //     $aStudent = User::table('users')->where('userType', 's')->get();
    //     return $aStudent;
    // }

    // public function scopeaTeacher(){
    //     $aTeacher = User::table('users')->where('userType', 't')->get();
    //     return $aTeacher;
    // }

    // protected $table = 'users';


    // function scopeVerifyLoginStudent($query, $id, $password){
    //     return $query->where('user_id', $id)
    //                 ->where('password', Hash::make($password))
    //                 ->where('status', 's')
    //                 ->get();

    // }
    // function scopeVerifyLoginTeacher($query, $id, $password){
    //     return $query->where('user_id', $id)
    //                 ->where('password', Hash::make($password))
    //                  ->where('status', 't')
    //                 ->get();

    // }
}
