<?php namespace System\Mvc\Model;

use System\Configurations\Config;

class BaseModel{
	
	
	public function collect($_collection){

		$this->collection = $this->database->$_collection;
		return $this->collection;
	}

	
	
		
}