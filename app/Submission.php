<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
	protected $table = 'submissions';
	
    protected $fillable = [
        'activityID', 'studentID', 'score', 'fileID',
    ];
}
