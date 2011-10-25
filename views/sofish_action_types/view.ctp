<div class="sofishActionTypes view">
<h2><?php  __('Sofish Action Type');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sofishActionType['SofishActionType']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sofishActionType['SofishActionType']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sofishActionType['SofishActionType']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sofishActionType['SofishActionType']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sofish Action Type', true), array('action' => 'edit', $sofishActionType['SofishActionType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Sofish Action Type', true), array('action' => 'delete', $sofishActionType['SofishActionType']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $sofishActionType['SofishActionType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sofish Action Types', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sofish Action Type', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sofish Actions', true), array('controller' => 'sofish_actions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sofish Action', true), array('controller' => 'sofish_actions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Sofish Actions');?></h3>
	<?php if (!empty($sofishActionType['SofishAction'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Sofish Action Type Id'); ?></th>
		<th><?php __('Sofish Object Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($sofishActionType['SofishAction'] as $sofishAction):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $sofishAction['id'];?></td>
			<td><?php echo $sofishAction['user_id'];?></td>
			<td><?php echo $sofishAction['sofish_action_type_id'];?></td>
			<td><?php echo $sofishAction['sofish_object_id'];?></td>
			<td><?php echo $sofishAction['created'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'sofish_actions', 'action' => 'view', $sofishAction['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'sofish_actions', 'action' => 'edit', $sofishAction['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'sofish_actions', 'action' => 'delete', $sofishAction['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $sofishAction['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sofish Action', true), array('controller' => 'sofish_actions', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
