<div class="profiles index">
	<h2><?php __('Profiles');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('first_name');?></th>
			<th><?php echo $this->Paginator->sort('last_name');?></th>
			<th><?php echo $this->Paginator->sort('gender');?></th>
			<th><?php echo $this->Paginator->sort('birthday');?></th>
			<th><?php echo $this->Paginator->sort('alternate_name');?></th>
			<th><?php echo $this->Paginator->sort('address');?></th>
			<th><?php echo $this->Paginator->sort('sofish_object_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('picture_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($profiles as $profile):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $profile['Profile']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($profile['User']['name'], array('controller' => 'users', 'action' => 'view', $profile['User']['id'])); ?>
		</td>
		<td><?php echo $profile['Profile']['first_name']; ?>&nbsp;</td>
		<td><?php echo $profile['Profile']['last_name']; ?>&nbsp;</td>
		<td><?php echo $profile['Profile']['gender']; ?>&nbsp;</td>
		<td><?php echo $profile['Profile']['birthday']; ?>&nbsp;</td>
		<td><?php echo $profile['Profile']['alternate_name']; ?>&nbsp;</td>
		<td><?php echo $profile['Profile']['address']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($profile['SofishObject']['id'], array('controller' => 'sofish_objects', 'action' => 'view', $profile['SofishObject']['id'])); ?>
		</td>
		<td><?php echo $profile['Profile']['created']; ?>&nbsp;</td>
		<td><?php echo $profile['Profile']['modified']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($profile['Picture']['id'], array('controller' => 'pictures', 'action' => 'view', $profile['Picture']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $profile['Profile']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $profile['Profile']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $profile['Profile']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $profile['Profile']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Profile', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sofish Objects', true), array('controller' => 'sofish_objects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sofish Object', true), array('controller' => 'sofish_objects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pictures', true), array('controller' => 'pictures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Picture', true), array('controller' => 'pictures', 'action' => 'add')); ?> </li>
	</ul>
</div>