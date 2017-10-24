<?php
App::uses('AppController', 'Controller');
/**
* 
*/
class ValidsController extends AppController
{
	public $name = "Valids";
	public $helpers = array('Html', 'Form');

	public function index(){
		$this->Valid->set($this->data);
		if($this->data){
			if($this->Valid->setValidate())
				$this->Session->setFlash('Du lieu hop le');
			else
				$this->Session->setFlash('Du lieu khong hop le');
		}
	}

	public function compo(){
		$this->autoRender = false;
		$this->layout = 'index';
		$val = $this->Data->randd();
		echo $val;
	}
}