<div class="pictures index">
	<h2><?php __('Pictures');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('normal');?></th>
			<th><?php echo $this->Paginator->sort('thumbnail');?></th>
			<th><?php echo $this->Paginator->sort('square');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('album_id');?></th>
			<th><?php echo $this->Paginator->sort('sofish_object_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($pictures as $picture):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $picture['Picture']['id']; ?>&nbsp;</td>
		<td><?php echo $picture['Picture']['description']; ?>&nbsp;</td>
		<td><?php echo $picture['Picture']['normal']; ?>&nbsp;</td>
		<td><?php echo $picture['Picture']['thumbnail']; ?>&nbsp;</td>
		<td><?php echo $picture['Picture']['square']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($picture['User']['name'], array('controller' => 'users', 'action' => 'view', $picture['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($picture['Album']['name'], array('controller' => 'albums', 'action' => 'view', $picture['Album']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($picture['SofishObject']['id'], array('controller' => 'sofish_objects', 'action' => 'view', $picture['SofishObject']['id'])); ?>
		</td>
		<td><?php echo $picture['Picture']['created']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $picture['Picture']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $picture['Picture']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $picture['Picture']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $picture['Picture']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Picture', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Albums', true), array('controller' => 'albums', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Album', true), array('controller' => 'albums', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sofish Objects', true), array('controller' => 'sofish_objects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sofish Object', true), array('controller' => 'sofish_objects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profiles', true), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profile', true), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
	</ul>
</div>