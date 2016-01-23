<?php

require '../vendor/autoload.php';

require '../config/bootstrap.php';

use TRW\Router\Dispatcher;
use TRW\Request\RequestAggregate;

//$_SERVER['REQUEST_URI'] = '/Users/index/1';

$dispatcher = new Dispatcher();
$dispatcher->dispatch(RequestAggregate::createFromGlobals());

