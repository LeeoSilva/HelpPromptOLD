<?php namespace App\Http\Controllers;
use Request;
use App\users; // Tabela de 'users' banco de dados.
use App\geo; // Tabela de 'geo' banco de dados.
use Ivory\HttpAdapter\CurlHttpAdapter; // Transferidor de conteúdo de URLs

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



	$curl     = new CurlHttpAdapter(); 
	$locale   = '';
	$region   = 'Brasil';
	$useSsl   = True;
	$apiKey   = 'AIzaSyD-g7a-4gCBbEH4gdpMePsox99lOK412XM';

	public function index(){
		// $geocoder = new \Geocoder\Provider\GoogleMaps(
	    	// $curl,
	    	// $region,
		// $locale,
		// $useSsl,
		// $apiKey
		echo $curl;
	 );

	}




}
