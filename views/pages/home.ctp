<?php echo $this->Html->css('user.unauth'); ?>
<div id="aquarium" class="m-auto">
	<div class="bubble m-auto">
		<h1 id="tagline">
			Your social file sharing buddy!
		</h1>
	</div>
	<div class="wave deep"></div>
	<div class="wave deeper"></div>
	<div class="wave deepest"></div>
</div>
<div class="users form left" id="register">
<?php echo $this->element('register'); ?>
</div>
<div class="users form right" id="login">
<?php echo $this->element('login'); ?>
</div>
<div class="clear"></div>