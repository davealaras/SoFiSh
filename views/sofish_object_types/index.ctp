<div class="sofishObjectTypes index">
	<h2><?php __('Sofish Object Types');?></h2>
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
	foreach ($sofishObjectTypes as $sofishObjectType):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $sofishObjectType['SofishObjectType']['id']; ?>&nbsp;</td>
		<td><?php echo $sofishObjectType['SofishObjectType']['name']; ?>&nbsp;</td>
		<td><?php echo $sofishObjectType['SofishObjectType']['created']; ?>&nbsp;</td>
		<td><?php echo $sofishObjectType['SofishObjectType']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $sofishObjectType['SofishObjectType']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $sofishObjectType['SofishObjectType']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $sofishObjectType['SofishObjectType']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $sofishObjectType['SofishObjectType']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Sofish Object Type', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sofish Objects', true), array('controller' => 'sofish_objects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sofish Object', true), array('controller' => 'sofish_objects', 'action' => 'add')); ?> </li>
	</ul>
</div>