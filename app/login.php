<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class login extends Model{
	protected $table = 'logins';
	protected $fillable = ['*'];
	protected $dates = ['created_at', 'updated_at'];
}
