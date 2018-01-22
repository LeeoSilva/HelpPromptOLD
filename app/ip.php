<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ip extends Model{
	protected $table = 'ips';
	protected $fillable = ['usr_ip'];
	protected $dates = ['create_at', 'updated_at'];
}
