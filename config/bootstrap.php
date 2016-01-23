<?php

use TRW\Core\Configure;
use TRW\Router\Router;
use TRW\ActiveRecord\BaseRecord;
use TRW\ActiveRecord\Database\Driver\MySql;

//ini_set('display_errors',1);

Configure::load(dirname(__FILE__) . '/config.php');

BaseRecord::setConnection(new MySql(Configure::read('Database', 'MySql')));


Router::add('/', ['controller'=>'Pages', 'action'=>'index']);
