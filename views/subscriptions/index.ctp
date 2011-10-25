<div class="subscriptions index">
	<h2><?php __('Subscriptions');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('sofish_object_id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('subscription_type_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($subscriptions as $subscription):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $subscription['Subscription']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($subscription['SofishObject']['id'], array('controller' => 'sofish_objects', 'action' => 'view', $subscription['SofishObject']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($subscription['User']['name'], array('controller' => 'users', 'action' => 'view', $subscription['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($subscription['SubscriptionType']['name'], array('controller' => 'subscription_types', 'action' => 'view', $subscription['SubscriptionType']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $subscription['Subscription']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $subscription['Subscription']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $subscription['Subscription']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subscription['Subscription']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Subscription', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sofish Objects', true), array('controller' => 'sofish_objects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sofish Object', true), array('controller' => 'sofish_objects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subscription Types', true), array('controller' => 'subscription_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subscription Type', true), array('controller' => 'subscription_types', 'action' => 'add')); ?> </li>
	</ul>
</div>