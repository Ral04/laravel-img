<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;// Почему не работают статичные меторды для DB ?

class User_agr extends Model
{
	/*
	protected function all(){
		return DB::select('select * from users');
	}
	*/
}
