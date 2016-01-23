<?php
namespace App\Controller;

class PagesController extends AppController {

	public function index($id){
		$this->set(['var'=>$id]);
	}

}
