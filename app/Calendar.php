<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use App\Classes;

class Calendar extends Model
{
    public function display()
	{
		return '/calendar';
	}
}
