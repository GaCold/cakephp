<div class="books form">
<?php echo $this->Form->create('Book'); ?>
	<fieldset>
		<legend><?php echo __('Edit Book'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Save')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Book.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Book.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Books'), array('action' => 'index')); ?></li>
	</ul>
</div>