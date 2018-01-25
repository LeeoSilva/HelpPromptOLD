<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model{
	protected $table = 'users';
	protected $fillable = ['usr_level', 'usr_cpf'];
	protected $dates = ['created_at', 'updated_at'];
}
