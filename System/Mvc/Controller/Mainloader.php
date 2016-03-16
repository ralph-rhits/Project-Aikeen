<?php

use System\Mvc\Controller\BaseController;
use System\Mvc\Model\Model;
use Philo\Blade\Blade;
use System\Configurations\Config;

class Mainloader extends BaseController{


	public function home(){

		
		$model = new Model();
		$collection = $model->collect('blog');


		echo $this->show('Main/home')->with('data',$collection->find()->limit(300));

	}



}