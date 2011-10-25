<div class="tab-head">
	<span>
		Register
	</span>
</div>
<div class="tab-content">
	<?php echo $this->Form->create('User', array('action'=>'add'));?>
		<?php
			echo $this->Form->input('name', array('label'=>'Username'));
			echo $this->Form->input('email');
			echo $this->Form->input('password');
		?>
	<?php echo $this->Form->end(__('Sign in', true));?>
</div>