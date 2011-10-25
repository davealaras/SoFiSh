<div class="bunches form">
<?php echo $this->Form->create('Bunch');?>
	<fieldset>
		<legend><?php __('Edit Bunch'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Bunch.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Bunch.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Bunches', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accesses', true), array('controller' => 'accesses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Access', true), array('controller' => 'accesses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Friends', true), array('controller' => 'friends', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Friend', true), array('controller' => 'friends', 'action' => 'add')); ?> </li>
	</ul>
</div>