<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GradeReq extends Model
{
    protected $table = 'gradeReq';
   
	protected $fillable = ['classID', 'author', 'name', 'description', 'date'];
}
