<?php namespace System\Mvc\Paths;

use call_user_func;
use System\Core\Request\Request;
use System\Configurations\Config;
use System\Mvc\Controller\BaseController;
use System\Mvc\Controller\Mainloader;
use System\Core\Sword\Sword;

class Paths  extends BaseController{

	protected static $syntax = "";
	protected static $controller = "";
	protected static $method = "";
	protected static $count = 0;
	protected static $route_url;

	public static function get($route_url,$_controller){

		if(self::parseUrls($route_url) == self::parseUrls(Request::getUrl())){

			self::$count ++;
			self::$syntax = $_controller;
			self::callController();
			
		}
	} 

	public static function callController(){

		self::$BaseController = explode("@",self::$syntax);

		require_once BASE_PATH.SYSTEM.'/Mvc/Controller/'.self::$BaseController[0].'.php';

		$controller = new  self::$BaseController[0]();
		$method = self::$BaseController[1];
		$controller->$method();

	}

	public static function parseUrls($route_url){

		$routeUrl = substr($route_url, -1);

		if($routeUrl == "/"){
			substr($routeUrl, 0, -1);
		}

		return $routeUrl;
	}

	public static function end(){
		
		if(self::$count == 0){
			echo "404 Not Found";
			return;
		}
	}
}