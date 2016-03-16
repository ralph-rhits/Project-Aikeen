<?php namespace System\Core;

use System\Core\Request\Request;
use System\Core\BaseCore;
use System\Core\Environment\Environment;
use System\Core\Environment\Development;
use System\Configurations\Config;


 class StartUp extends BaseCore {

	public function __construct(){
		
		parent::__construct();
		$this->load();

		
	}

}





