<div class="profiles form left">
	<div class="tab-head">
		<span>
			Basic Information
		</span>
	</div>
	<div class="tab-content">
<?php echo $this->Form->create('Profile');?>
	<?php
		echo $this->Form->input('user_id',array('type'=>'hidden'));
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('alternate_name');
		echo $this->Form->input('gender',array('type'=>'select', 'options'=>array('0'=>'Male' , '1'=>'Female')));
		echo $this->Form->input('birthday');
		echo $this->Form->input('address');
		echo $this->Form->input('sofish_object_id',array('type'=>'hidden'));
		echo $this->Form->input('picture_id',array('type'=>'hidden'));
	?>
<?php echo $this->Form->end(__('Save', true));?>
</div>
</div>
<div class="profiles form right">
	<div class="tab-head">
		<span>
			Profile Picture
		</span>
	</div>
	<div class="tab-content">
	<div class="profile-picture left"></div>
	
	<?php
	echo $this->Form->create('Document', array('type' => 'file'));
	echo $this->Form->file('Document.submittedfile');
	?>
	<div class="actions left">or <a>Edit thumbnail</a></div>
	<div class="clear"></div>
</div>
</div>