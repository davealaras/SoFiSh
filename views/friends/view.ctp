<div class="friends view">
<h2><?php  __('Friend');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Bunch'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($friend['Bunch']['name'], array('controller' => 'bunches', 'action' => 'view', $friend['Bunch']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($friend['User']['name'], array('controller' => 'users', 'action' => 'view', $friend['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $friend['Friend']['created']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Friend', true), array('action' => 'edit', $friend['Friend']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Friend', true), array('action' => 'delete', $friend['Friend']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $friend['Friend']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Friends', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Friend', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bunches', true), array('controller' => 'bunches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bunch', true), array('controller' => 'bunches', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
