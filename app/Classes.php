<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{

	public function scopeGetClasses($query, $id){
    	return Classes::where('profID', $id)->get();
    }

    public function scopeSelectClass($query, $id){
    	return Classes::where('id', $id)->get();
    }

	protected $fillable = ['name', 'profID', 'code'];
    protected $table = 'classes';
    public $timestamps = false;
}
