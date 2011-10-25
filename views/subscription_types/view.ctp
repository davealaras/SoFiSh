<div class="subscriptionTypes view">
<h2><?php  __('Subscription Type');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subscriptionType['SubscriptionType']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subscriptionType['SubscriptionType']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subscriptionType['SubscriptionType']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subscriptionType['SubscriptionType']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Subscription Type', true), array('action' => 'edit', $subscriptionType['SubscriptionType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Subscription Type', true), array('action' => 'delete', $subscriptionType['SubscriptionType']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subscriptionType['SubscriptionType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Subscription Types', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subscription Type', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subscriptions', true), array('controller' => 'subscriptions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subscription', true), array('controller' => 'subscriptions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Subscriptions');?></h3>
	<?php if (!empty($subscriptionType['Subscription'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Sofish Object Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Subscription Type Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($subscriptionType['Subscription'] as $subscription):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $subscription['id'];?></td>
			<td><?php echo $subscription['sofish_object_id'];?></td>
			<td><?php echo $subscription['user_id'];?></td>
			<td><?php echo $subscription['subscription_type_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'subscriptions', 'action' => 'view', $subscription['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'subscriptions', 'action' => 'edit', $subscription['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'subscriptions', 'action' => 'delete', $subscription['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subscription['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Subscription', true), array('controller' => 'subscriptions', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
