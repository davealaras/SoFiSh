<div class="sofishActions form">
<?php echo $this->Form->create('SofishAction');?>
	<fieldset>
		<legend><?php __('Add Sofish Action'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('sofish_action_type_id');
		echo $this->Form->input('sofish_object_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sofish Actions', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sofish Action Types', true), array('controller' => 'sofish_action_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sofish Action Type', true), array('controller' => 'sofish_action_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sofish Objects', true), array('controller' => 'sofish_objects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sofish Object', true), array('controller' => 'sofish_objects', 'action' => 'add')); ?> </li>
	</ul>
</div>