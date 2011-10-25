<div class="accesses index">
	<h2><?php __('Accesses');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('sofish_object_id');?></th>
			<th><?php echo $this->Paginator->sort('bunch_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($accesses as $access):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $this->Html->link($access['SofishObject']['id'], array('controller' => 'sofish_objects', 'action' => 'view', $access['SofishObject']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($access['Bunch']['name'], array('controller' => 'bunches', 'action' => 'view', $access['Bunch']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $access['Access']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $access['Access']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $access['Access']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $access['Access']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Access', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sofish Objects', true), array('controller' => 'sofish_objects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sofish Object', true), array('controller' => 'sofish_objects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bunches', true), array('controller' => 'bunches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bunch', true), array('controller' => 'bunches', 'action' => 'add')); ?> </li>
	</ul>
</div>