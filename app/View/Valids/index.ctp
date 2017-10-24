<?php 
	echo $this->Form->create('Valid', array('action'=> 'index', 'novalidate' =>true));
	echo $this->Form->input('name', array('div'=>array('class' => 'col-md-8 col-md-offset-2'), 'class'=>'form-control'));
	echo $this->Form->input('email', array('div'=>array('class'=>'col-md-8 col-md-offset-2'), 'class' => 'form-control'));
	echo $this->Form->end('email', array('class'=>'col-md-8 col-md-offset-2'));

?>