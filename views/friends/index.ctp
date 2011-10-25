<div class="friends index">
	<h2><?php __('Friends');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('bunch_id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($friends as $friend):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $this->Html->link($friend['Bunch']['name'], array('controller' => 'bunches', 'action' => 'view', $friend['Bunch']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($friend['User']['name'], array('controller' => 'users', 'action' => 'view', $friend['User']['id'])); ?>
		</td>
		<td><?php echo $friend['Friend']['created']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $friend['Friend']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $friend['Friend']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $friend['Friend']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $friend['Friend']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Friend', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Bunches', true), array('controller' => 'bunches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bunch', true), array('controller' => 'bunches', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>