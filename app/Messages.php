<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{

	protected $fillable = ['chatID', 'senderID', 'message'];
    protected $table = 'messages';
}
