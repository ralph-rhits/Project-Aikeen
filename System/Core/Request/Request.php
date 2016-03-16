<?php namespace System\Core\Request;


class Request {
	
	public static function getUrl(){

		if(isset($_GET['url'])){

			return $_GET['url'];
		}else{
			return "/";
		}
		
	}
}

