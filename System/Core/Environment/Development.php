<?php namespace System\Core\Environment;

use System\Core\Environment\Environment;

class Development implements Environment{

	public function setErrors(){

			error_reporting(-1);
			ini_set('display_errors', 1);
	}

}



