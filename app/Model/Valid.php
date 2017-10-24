<?php 

App::uses('AppModel', 'Model');
/**
* model valid
*/
class Valid extends AppModel {
	
	public $useTable = false;
	public $validate = array();
	public function setValidate(){
		$this->validate = array(
			"name" => array(
				"rule" => "notBlank",
				"message" => "Name not empty",
			),
			"email" => array(
				"rule" => "notEmpty",
				"message" => "Email not empty",
			),
		);

		if($this->validates($this->validate))
			return true;
		else
			return false;
	}
}