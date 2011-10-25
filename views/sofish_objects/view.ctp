<div class="sofishObjects view">
<h2><?php  __('Sofish Object');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sofishObject['SofishObject']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sofish Object Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($sofishObject['SofishObjectType']['name'], array('controller' => 'sofish_object_types', 'action' => 'view', $sofishObject['SofishObjectType']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($sofishObject['User']['name'], array('controller' => 'users', 'action' => 'view', $sofishObject['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sofishObject['SofishObject']['created']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sofish Object', true), array('action' => 'edit', $sofishObject['SofishObject']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Sofish Object', true), array('action' => 'delete', $sofishObject['SofishObject']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $sofishObject['SofishObject']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sofish Objects', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sofish Object', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sofish Object Types', true), array('controller' => 'sofish_object_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sofish Object Type', true), array('controller' => 'sofish_object_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accesses', true), array('controller' => 'accesses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Access', true), array('controller' => 'accesses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Albums', true), array('controller' => 'albums', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Album', true), array('controller' => 'albums', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bubbles', true), array('controller' => 'bubbles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bubble', true), array('controller' => 'bubbles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pictures', true), array('controller' => 'pictures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Picture', true), array('controller' => 'pictures', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profiles', true), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profile', true), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sofish Actions', true), array('controller' => 'sofish_actions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sofish Action', true), array('controller' => 'sofish_actions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subscriptions', true), array('controller' => 'subscriptions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subscription', true), array('controller' => 'subscriptions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Accesses');?></h3>
	<?php if (!empty($sofishObject['Access'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Sofish Object Id'); ?></th>
		<th><?php __('Bunch Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($sofishObject['Access'] as $access):
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
	<h3><?php __('Related Albums');?></h3>
	<?php if (!empty($sofishObject['Album'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Sofish Object Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($sofishObject['Album'] as $album):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $album['id'];?></td>
			<td><?php echo $album['name'];?></td>
			<td><?php echo $album['user_id'];?></td>
			<td><?php echo $album['sofish_object_id'];?></td>
			<td><?php echo $album['created'];?></td>
			<td><?php echo $album['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'albums', 'action' => 'view', $album['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'albums', 'action' => 'edit', $album['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'albums', 'action' => 'delete', $album['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $album['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Album', true), array('controller' => 'albums', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Bubbles');?></h3>
	<?php if (!empty($sofishObject['Bubble'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Content'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Sofish Object Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($sofishObject['Bubble'] as $bubble):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $bubble['id'];?></td>
			<td><?php echo $bubble['content'];?></td>
			<td><?php echo $bubble['user_id'];?></td>
			<td><?php echo $bubble['sofish_object_id'];?></td>
			<td><?php echo $bubble['created'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'bubbles', 'action' => 'view', $bubble['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'bubbles', 'action' => 'edit', $bubble['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'bubbles', 'action' => 'delete', $bubble['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $bubble['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Bubble', true), array('controller' => 'bubbles', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Pictures');?></h3>
	<?php if (!empty($sofishObject['Picture'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Normal'); ?></th>
		<th><?php __('Thumbnail'); ?></th>
		<th><?php __('Square'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Album Id'); ?></th>
		<th><?php __('Sofish Object Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($sofishObject['Picture'] as $picture):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $picture['id'];?></td>
			<td><?php echo $picture['description'];?></td>
			<td><?php echo $picture['normal'];?></td>
			<td><?php echo $picture['thumbnail'];?></td>
			<td><?php echo $picture['square'];?></td>
			<td><?php echo $picture['user_id'];?></td>
			<td><?php echo $picture['album_id'];?></td>
			<td><?php echo $picture['sofish_object_id'];?></td>
			<td><?php echo $picture['created'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'pictures', 'action' => 'view', $picture['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'pictures', 'action' => 'edit', $picture['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'pictures', 'action' => 'delete', $picture['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $picture['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Picture', true), array('controller' => 'pictures', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Profiles');?></h3>
	<?php if (!empty($sofishObject['Profile'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('First Name'); ?></th>
		<th><?php __('Last Name'); ?></th>
		<th><?php __('Gender'); ?></th>
		<th><?php __('Birthday'); ?></th>
		<th><?php __('Alternate Name'); ?></th>
		<th><?php __('Address'); ?></th>
		<th><?php __('Sofish Object Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Picture Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($sofishObject['Profile'] as $profile):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $profile['id'];?></td>
			<td><?php echo $profile['user_id'];?></td>
			<td><?php echo $profile['first_name'];?></td>
			<td><?php echo $profile['last_name'];?></td>
			<td><?php echo $profile['gender'];?></td>
			<td><?php echo $profile['birthday'];?></td>
			<td><?php echo $profile['alternate_name'];?></td>
			<td><?php echo $profile['address'];?></td>
			<td><?php echo $profile['sofish_object_id'];?></td>
			<td><?php echo $profile['created'];?></td>
			<td><?php echo $profile['modified'];?></td>
			<td><?php echo $profile['picture_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'profiles', 'action' => 'view', $profile['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'profiles', 'action' => 'edit', $profile['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'profiles', 'action' => 'delete', $profile['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $profile['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Profile', true), array('controller' => 'profiles', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Sofish Actions');?></h3>
	<?php if (!empty($sofishObject['SofishAction'])):?>
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
		foreach ($sofishObject['SofishAction'] as $sofishAction):
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
<div class="related">
	<h3><?php __('Related Subscriptions');?></h3>
	<?php if (!empty($sofishObject['Subscription'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Sofish Object Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Subscription Type Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($sofishObject['Subscription'] as $subscription):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $subscription['id'];?></td>
			<td><?php echo $subscription['sofish_object_id'];?></td>
			<td><?php echo $subscription['user_id'];?></td>
			<td><?php echo $subscription['subscription_type_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'subscriptions', 'action' => 'view', $subscription['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'subscriptions', 'action' => 'edit', $subscription['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'subscriptions', 'action' => 'delete', $subscription['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subscription['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Subscription', true), array('controller' => 'subscriptions', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
