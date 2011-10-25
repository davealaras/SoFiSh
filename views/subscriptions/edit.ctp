<div class="subscriptions form">
<?php echo $this->Form->create('Subscription');?>
	<fieldset>
		<legend><?php __('Edit Subscription'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('sofish_object_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('subscription_type_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Subscription.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Subscription.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Subscriptions', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Sofish Objects', true), array('controller' => 'sofish_objects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sofish Object', true), array('controller' => 'sofish_objects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subscription Types', true), array('controller' => 'subscription_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subscription Type', true), array('controller' => 'subscription_types', 'action' => 'add')); ?> </li>
	</ul>
</div>