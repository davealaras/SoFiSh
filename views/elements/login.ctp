	<div class="tab-head">
		<span>
			Log in
		</span>
	</div>
	<div class="tab-content">
	<?php echo $this->Form->create('User', array('action'=>'login'));?>
		<?php
			echo $this->Form->input('name', array('label'=>'Username / Email'));
			echo $this->Form->input('password');
		?>
	<?php echo $this->Form->end(__('Go', true));?>
	</div>