<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class login extends Model{
	protected $table = 'logins';
	protected $fillable = ['usr_name', 'usr_pass', 'usr_birth'];
	protected $dates = ['created_at', 'updated_at'];
}
