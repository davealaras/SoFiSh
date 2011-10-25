<div class="accesses form">
<?php echo $this->Form->create('Access');?>
	<fieldset>
		<legend><?php __('Edit Access'); ?></legend>
	<?php
		echo $this->Form->input('sofish_object_id');
		echo $this->Form->input('bunch_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Access.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Access.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Accesses', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Sofish Objects', true), array('controller' => 'sofish_objects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sofish Object', true), array('controller' => 'sofish_objects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bunches', true), array('controller' => 'bunches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bunch', true), array('controller' => 'bunches', 'action' => 'add')); ?> </li>
	</ul>
</div>