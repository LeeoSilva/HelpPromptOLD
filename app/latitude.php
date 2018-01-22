<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class latitude extends Model{
	protected $table = 'latitudes';
	protected $fillable = ['usr_lat'];
	protected $dates = ['created_at', 'updated_at'];
}
