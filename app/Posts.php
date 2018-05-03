<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = 'posts';
    protected $fillable = ['classID', 'author', 'content', /*'file'*/];

	// this specifies that author is an ID of table User
	public function authorTable(){	
		return $this->belongsTo('App\User', 'author');
	}

	// this specifies that author is an ID of table Class
	public function classIDTable(){	
		return $this->belongsTo('App\Class', 'classID');
	}

	// this returns all Events under Class with id $id
	public function scopeGetPosts($query, $id){	
		return Posts::	select('id', 'content as name', 'updated_at', 'author',  DB::raw('"post" as type')/*, author*/)
							->where('classID', $id)
							->get()->sortByDesc('updated_at');;
	}	
}
