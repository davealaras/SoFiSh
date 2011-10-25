
	<div class="seperator"></div>
	<ul id="dropMenu" class="mainMenuSub hide no_top">
		<li><?php echo $this->Html->image('icons/user_edit.png'); ?><a>Edit Profile</a></li>
		<li><?php echo $this->Html->image('icons/cog.png'); ?><a>Settings</a></li>
		<li><?php echo $this->Html->image('icons/stop.png'); ?><a>Log out</a></li>
	</ul>
	<?php echo $this->Html->script('jquery'); ?>
	<script>
	$(document).ready(function(e){
		$('.pull_button').click(function(){
			$('#'+$(this).attr('pull')).slideToggle();
		});		
	});
	</script>