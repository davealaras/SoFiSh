<div class="bunches index">
	<h2><?php __('Bunches');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($bunches as $bunch):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $bunch['Bunch']['id']; ?>&nbsp;</td>
		<td><?php echo $bunch['Bunch']['name']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($bunch['User']['name'], array('controller' => 'users', 'action' => 'view', $bunch['User']['id'])); ?>
		</td>
		<td><?php echo $bunch['Bunch']['created']; ?>&nbsp;</td>
		<td><?php echo $bunch['Bunch']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $bunch['Bunch']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $bunch['Bunch']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $bunch['Bunch']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $bunch['Bunch']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Bunch', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accesses', true), array('controller' => 'accesses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Access', true), array('controller' => 'accesses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Friends', true), array('controller' => 'friends', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Friend', true), array('controller' => 'friends', 'action' => 'add')); ?> </li>
	</ul>
</div>