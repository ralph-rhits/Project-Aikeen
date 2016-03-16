<?php namespace System\Mvc\Controller;

use System\Core\Request\Request;
use Philo\Blade\Blade;

class BaseController extends Blade{

	protected static $BaseController;

	public function __construct(){

		$views = BASE_PATH.SYSTEM.'/Mvc/Resources/Views/';
		$cache = BASE_PATH.SYSTEM.'/Mvc/Resources/Cache/';

		parent::__construct($views, $cache);
	}

	public function show($view){

		return $this->view()->make($view);
	}


}