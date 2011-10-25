<div class="sofishActionTypes index">
	<h2><?php __('Sofish Action Types');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($sofishActionTypes as $sofishActionType):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $sofishActionType['SofishActionType']['id']; ?>&nbsp;</td>
		<td><?php echo $sofishActionType['SofishActionType']['name']; ?>&nbsp;</td>
		<td><?php echo $sofishActionType['SofishActionType']['created']; ?>&nbsp;</td>
		<td><?php echo $sofishActionType['SofishActionType']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $sofishActionType['SofishActionType']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $sofishActionType['SofishActionType']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $sofishActionType['SofishActionType']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $sofishActionType['SofishActionType']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Sofish Action Type', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sofish Actions', true), array('controller' => 'sofish_actions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sofish Action', true), array('controller' => 'sofish_actions', 'action' => 'add')); ?> </li>
	</ul>
</div>