<?php namespace System\Mvc\Model;

use System\Mvc\Model\BaseModel;
use System\Configurations\Config;

class Model extends BaseModel{

	protected  $connection;
	protected  $database;
	protected  $collection;

	public function __construct(){

		$this->connection = new \MongoClient();
		
		$db               = Config::app('D_Database');

		$this->database = $this->connection->$db;
		
	
	}

	public function setDB($_db){

		$this->connection = new \MongoClient();
		
		$db               = $_db;

		$this->database = $this->connection->$db;
	}
	

}