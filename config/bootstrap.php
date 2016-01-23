<?php

use TRW\Core\Configure;
use TRW\Router\Router;
use TRW\ActiveRecord\BaseRecord;
use TRW\ActiveRecord\Database\Driver\MySql;
use TRW\Exception\ErrorHandler;

//ini_set('display_errors',1);

Configure::load(dirname(__FILE__) . '/config.php');

set_exception_handler('TRW\Exception\ErrorHandler::handleException');

BaseRecord::setConnection(new MySql(Configure::read('Database', 'MySql')));


Router::add('/', ['controller'=>'Pages', 'action'=>'index']);
