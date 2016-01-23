<?php
namespace App\Controller;

use TRW\Controller\Controller;

class AppController extends Controller {

	public function initialize(){
		$this->loadComponent('Session');
	}


}
