<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeoLocation extends Controller{
	/*
	|--
	| 
	|
	|
	|
	|
	|
	*/



	$curl     = new \Ivory\HttpAdapter\CurlHttpAdapter(); 
	$locale   = '';
	$region   = 'Brasil';
	$useSsl   = True;
	$apiKey   = 'AIzaSyD-g7a-4gCBbEH4gdpMePsox99lOK412XM';

	public function Index(){
		$geocoder = new \Geocoder\Provider\GoogleMaps(
	    	$curl,
		$locale,
	    	$region,
		$useSsl,
		$apiKey
	 );

	}




}
