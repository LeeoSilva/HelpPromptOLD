<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class email extends Model{
	protected $table = 'emails';
	protected $fillable = ['usr_mail'];
	protected $dates = ['created_at', 'updated_at'];

	public function getName(){
		return $this->hasOne('App\login', 'usr_name');
	}


}
