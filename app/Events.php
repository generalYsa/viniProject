<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $table = 'events';
    protected $fillable = ['classID', 'author', 'name', 'description', 'date'];

	// this specifies that author is an ID of table User
	public function authorClass(){	
		return $this->belongsTo('App\User', 'author');
	}

	// this specifies that author is an ID of table Class
	public function classIDTable(){	
		return $this->belongsTo('App\Class', 'classID');
	}

	// this returns all Events under Class with id $id
	public function scopeGetEvents($query, $id){	
		return Events::	select('id', 'name', 'author', 'description', 'date', 'updated_at',  DB::raw('"event" as type')/*, author*/)
							->where('classID', $id)
							->get()->sortByDesc('updated_at');
	}
}
