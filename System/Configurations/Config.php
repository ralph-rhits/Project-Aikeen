<?php namespace System\Configurations;


class Config{
	
	public static $App; 

	public static function app($input){

		self::$App = require BASE_PATH.SYSTEM.'/Configurations/App/app.php';

		return self::$App[0][$input];
	}
	
}

