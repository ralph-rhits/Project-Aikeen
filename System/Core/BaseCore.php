<?php namespace System\Core;

use System\Configurations\Config;
use System\Core\Tunnel\Tunnel;
use System\Core\Environment\Environment;
use System\Core\Environment\Development;


class BaseCore extends Tunnel {

	public function __construct(){
		
		$Development = new Development();

		if(Config::app('environment') == "development"){
			$this->setEnv($Development);
		}
	}

	public function load(){
		$this->sendToPipe();
	}

	public function setEnv(Environment $setErrors){
		return $setErrors->setErrors();
	}


}