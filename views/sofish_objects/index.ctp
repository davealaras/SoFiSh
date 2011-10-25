<div class="sofishObjects index">
	<h2><?php __('Sofish Objects');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('sofish_object_type_id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($sofishObjects as $sofishObject):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $sofishObject['SofishObject']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sofishObject['SofishObjectType']['name'], array('controller' => 'sofish_object_types', 'action' => 'view', $sofishObject['SofishObjectType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($sofishObject['User']['name'], array('controller' => 'users', 'action' => 'view', $sofishObject['User']['id'])); ?>
		</td>
		<td><?php echo $sofishObject['SofishObject']['created']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $sofishObject['SofishObject']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $sofishObject['SofishObject']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $sofishObject['SofishObject']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $sofishObject['SofishObject']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Sofish Object', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sofish Object Types', true), array('controller' => 'sofish_object_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sofish Object Type', true), array('controller' => 'sofish_object_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accesses', true), array('controller' => 'accesses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Access', true), array('controller' => 'accesses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Albums', true), array('controller' => 'albums', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Album', true), array('controller' => 'albums', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bubbles', true), array('controller' => 'bubbles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bubble', true), array('controller' => 'bubbles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pictures', true), array('controller' => 'pictures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Picture', true), array('controller' => 'pictures', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profiles', true), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profile', true), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sofish Actions', true), array('controller' => 'sofish_actions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sofish Action', true), array('controller' => 'sofish_actions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subscriptions', true), array('controller' => 'subscriptions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subscription', true), array('controller' => 'subscriptions', 'action' => 'add')); ?> </li>
	</ul>
</div>