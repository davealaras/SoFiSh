<div class="subscriptionTypes form">
<?php echo $this->Form->create('SubscriptionType');?>
	<fieldset>
		<legend><?php __('Edit Subscription Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('SubscriptionType.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('SubscriptionType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Subscription Types', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Subscriptions', true), array('controller' => 'subscriptions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subscription', true), array('controller' => 'subscriptions', 'action' => 'add')); ?> </li>
	</ul>
</div>