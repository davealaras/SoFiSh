<div class="bubbles form">
<?php echo $this->Form->create('Bubble');?>
	<fieldset>
		<legend><?php __('Edit Bubble'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('content');
		echo $this->Form->input('user_id');
		echo $this->Form->input('sofish_object_id');
		echo $this->Form->input('parent_sofish_object_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Bubble.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Bubble.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Bubbles', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sofish Objects', true), array('controller' => 'sofish_objects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sofish Object', true), array('controller' => 'sofish_objects', 'action' => 'add')); ?> </li>
	</ul>
</div>