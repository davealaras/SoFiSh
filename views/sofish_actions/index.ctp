<div class="sofishActions index">
	<h2><?php __('Sofish Actions');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('sofish_action_type_id');?></th>
			<th><?php echo $this->Paginator->sort('sofish_object_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($sofishActions as $sofishAction):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $sofishAction['SofishAction']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sofishAction['User']['name'], array('controller' => 'users', 'action' => 'view', $sofishAction['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($sofishAction['SofishActionType']['name'], array('controller' => 'sofish_action_types', 'action' => 'view', $sofishAction['SofishActionType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($sofishAction['SofishObject']['id'], array('controller' => 'sofish_objects', 'action' => 'view', $sofishAction['SofishObject']['id'])); ?>
		</td>
		<td><?php echo $sofishAction['SofishAction']['created']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $sofishAction['SofishAction']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $sofishAction['SofishAction']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $sofishAction['SofishAction']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $sofishAction['SofishAction']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Sofish Action', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sofish Action Types', true), array('controller' => 'sofish_action_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sofish Action Type', true), array('controller' => 'sofish_action_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sofish Objects', true), array('controller' => 'sofish_objects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sofish Object', true), array('controller' => 'sofish_objects', 'action' => 'add')); ?> </li>
	</ul>
</div>