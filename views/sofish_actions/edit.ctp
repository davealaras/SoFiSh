<div class="sofishActions form">
<?php echo $this->Form->create('SofishAction');?>
	<fieldset>
		<legend><?php __('Edit Sofish Action'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('SofishAction.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('SofishAction.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Sofish Actions', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sofish Action Types', true), array('controller' => 'sofish_action_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sofish Action Type', true), array('controller' => 'sofish_action_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sofish Objects', true), array('controller' => 'sofish_objects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sofish Object', true), array('controller' => 'sofish_objects', 'action' => 'add')); ?> </li>
	</ul>
</div>