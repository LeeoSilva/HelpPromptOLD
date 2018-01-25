<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class longitude extends Model{
	protected $table = 'longitudes';
  protected $fillable = ['usr_lon'];
	protected $dates = ['created_at', 'updated_at'];
}
