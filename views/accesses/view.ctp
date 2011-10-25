<div class="accesses view">
<h2><?php  __('Access');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sofish Object'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($access['SofishObject']['id'], array('controller' => 'sofish_objects', 'action' => 'view', $access['SofishObject']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Bunch'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($access['Bunch']['name'], array('controller' => 'bunches', 'action' => 'view', $access['Bunch']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Access', true), array('action' => 'edit', $access['Access']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Access', true), array('action' => 'delete', $access['Access']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $access['Access']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Accesses', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Access', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sofish Objects', true), array('controller' => 'sofish_objects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sofish Object', true), array('controller' => 'sofish_objects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bunches', true), array('controller' => 'bunches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bunch', true), array('controller' => 'bunches', 'action' => 'add')); ?> </li>
	</ul>
</div>
