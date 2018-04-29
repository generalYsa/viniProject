<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentList extends Model
{
    protected $table = 'studentlist';
	
    protected $fillable = [
        'classID', 'studentNum', 'status',
    ];
}
