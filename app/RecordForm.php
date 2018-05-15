<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use App\Classes;

class RecordForm extends Model
{
	public function defaultLink()
	{
		return '/recordForm';
	}
}
