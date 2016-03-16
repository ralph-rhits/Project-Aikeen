<?php

require_once  __DIR__.'/../vendor/autoload.php';
require_once  __DIR__.'/../System/Configurations/App/paths.php';

use System\Core\StartUp;

/*
|--------------------------------------------------------------------------
| START THE ENGINE
|--------------------------------------------------------------------------
|
| Aikeen Framework will use the StartUp class in order
| for our app to initialized.
|
*/
$Aikeen = new StartUp();
