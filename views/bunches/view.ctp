<div class="bunches view">
<h2><?php  __('Bunch');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bunch['Bunch']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bunch['Bunch']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($bunch['User']['name'], array('controller' => 'users', 'action' => 'view', $bunch['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bunch['Bunch']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $bunch['Bunch']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bunch', true), array('action' => 'edit', $bunch['Bunch']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Bunch', true), array('action' => 'delete', $bunch['Bunch']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $bunch['Bunch']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Bunches', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bunch', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accesses', true), array('controller' => 'accesses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Access', true), array('controller' => 'accesses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Friends', true), array('controller' => 'friends', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Friend', true), array('controller' => 'friends', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Accesses');?></h3>
	<?php if (!empty($bunch['Access'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Sofish Object Id'); ?></th>
		<th><?php __('Bunch Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($bunch['Access'] as $access):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $access['sofish_object_id'];?></td>
			<td><?php echo $access['bunch_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'accesses', 'action' => 'view', $access['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'accesses', 'action' => 'edit', $access['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'accesses', 'action' => 'delete', $access['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $access['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Access', true), array('controller' => 'accesses', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Friends');?></h3>
	<?php if (!empty($bunch['Friend'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Bunch Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($bunch['Friend'] as $friend):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $friend['bunch_id'];?></td>
			<td><?php echo $friend['user_id'];?></td>
			<td><?php echo $friend['created'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'friends', 'action' => 'view', $friend['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'friends', 'action' => 'edit', $friend['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'friends', 'action' => 'delete', $friend['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $friend['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Friend', true), array('controller' => 'friends', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
