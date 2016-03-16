<?php namespace System\Mvc\View;

use Philo\Blade\Blade;
use System\Mvc\Model\Model;

class view extends Blade{
	

	public function __construct(){

		$views = BASE_PATH.SYSTEM.'/Mvc/Resources/Views/';
		$cache = BASE_PATH.SYSTEM.'/Mvc/Resources/Cache/';

		parent::__construct($views, $cache);
	}



}