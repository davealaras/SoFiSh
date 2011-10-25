<div class="sofishObjectTypes view">
<h2><?php  __('Sofish Object Type');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sofishObjectType['SofishObjectType']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sofishObjectType['SofishObjectType']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sofishObjectType['SofishObjectType']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sofishObjectType['SofishObjectType']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sofish Object Type', true), array('action' => 'edit', $sofishObjectType['SofishObjectType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Sofish Object Type', true), array('action' => 'delete', $sofishObjectType['SofishObjectType']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $sofishObjectType['SofishObjectType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sofish Object Types', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sofish Object Type', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sofish Objects', true), array('controller' => 'sofish_objects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sofish Object', true), array('controller' => 'sofish_objects', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Sofish Objects');?></h3>
	<?php if (!empty($sofishObjectType['SofishObject'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Sofish Object Type Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($sofishObjectType['SofishObject'] as $sofishObject):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $sofishObject['id'];?></td>
			<td><?php echo $sofishObject['sofish_object_type_id'];?></td>
			<td><?php echo $sofishObject['user_id'];?></td>
			<td><?php echo $sofishObject['created'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'sofish_objects', 'action' => 'view', $sofishObject['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'sofish_objects', 'action' => 'edit', $sofishObject['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'sofish_objects', 'action' => 'delete', $sofishObject['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $sofishObject['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sofish Object', true), array('controller' => 'sofish_objects', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
