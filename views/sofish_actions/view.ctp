<div class="sofishActions view">
<h2><?php  __('Sofish Action');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sofishAction['SofishAction']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($sofishAction['User']['name'], array('controller' => 'users', 'action' => 'view', $sofishAction['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sofish Action Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($sofishAction['SofishActionType']['name'], array('controller' => 'sofish_action_types', 'action' => 'view', $sofishAction['SofishActionType']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sofish Object'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($sofishAction['SofishObject']['id'], array('controller' => 'sofish_objects', 'action' => 'view', $sofishAction['SofishObject']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sofishAction['SofishAction']['created']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sofish Action', true), array('action' => 'edit', $sofishAction['SofishAction']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Sofish Action', true), array('action' => 'delete', $sofishAction['SofishAction']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $sofishAction['SofishAction']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sofish Actions', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sofish Action', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sofish Action Types', true), array('controller' => 'sofish_action_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sofish Action Type', true), array('controller' => 'sofish_action_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sofish Objects', true), array('controller' => 'sofish_objects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sofish Object', true), array('controller' => 'sofish_objects', 'action' => 'add')); ?> </li>
	</ul>
</div>
