<?php 
	echo $this->Form->create('Valid', array('action'=> 'index', 'novalidate' =>true));
	echo $this->Form->input('name');
	echo $this->Form->input('email');
	echo $this->Form->end('Check thu coi nao');

?>