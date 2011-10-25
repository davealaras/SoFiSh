<?php echo $this->Html->css('user.profile'); ?>

<div class="infoBar">
	<div class="upperInfo left">
		<div class="fname left">
			<h1>Dave</h1>
			<h2>Arroyo-Alaras</h2>
		</div>
		<div class="fstatus left">
			<h6>( Daveil )</h6>
		</div>
	
	</div>
	<div id="statInfo" class="right">
		<div id="popularity" class="statCategory">
			<div class="points">10</div>
			<div class="statDescripton">Hooks</div>
			<?php echo $this->Html->image('icons/star.png'); ?>
		</div>
		<div id="flirting" class="statCategory">
			<div class="points">0</div>
			<div class="statDescripton">Flirts</div>
			<div class="interactions">
				<?php echo $this->Html->image('icons/heart.png'); ?>	
			</div>	
		</div>
		<div id="flirting" class="statCategory">
			<div class="points">0</div>
			<div class="statDescripton">Evil</div>
			<div class="interactions">
				<?php echo $this->Html->image('icons/emoticon_evilgrin.png'); ?>	
			</div>	
		</div>
		<div id="bubbles" class="statCategory">
			<div class="points">7</div>
			<div class="statDescripton">Bubbles</div>
			<?php echo $this->Html->image('icons/comments.png'); ?>		
		</div>
		<div id="flirting" class="statCategory">
			<div class="points">12</div>
			<div class="statDescripton">Pictures</div>
			<?php echo $this->Html->image('icons/images.png'); ?>		
		</div>
		<div id="flirting" class="statCategory">
			<div class="points">45</div>
			<div class="statDescripton">Music</div>
			<?php echo $this->Html->image('icons/music.png'); ?>		
		</div>
		<div id="flirting" class="statCategory">
			<div class="points">40</div>
			<div class="statDescripton">Videos</div>
			<?php echo $this->Html->image('icons/film.png'); ?>		
		</div>
		<div id="flirting" class="statCategory">
			<div class="points">5</div>
			<div class="statDescripton">Articles</div>
			<?php echo $this->Html->image('icons/page_white_text.png'); ?>		
		</div>
	</div>
	<div class="clear"></div>
	<div class="lowerInfo">
		<div class="profileInfo left">
				This <a><span class="noun">boy</span></a>
				was born on <a><span id="birthday">
							<span id="month">Sep</span>
							<span id="date">29</span>
							<span id="year">1990</span>
							</a>
				and is currently at <a><span id="address"> Balayan, Batangas</span></a>.
				<span class="pronoun">He</span> is <a><span>single</span></a>.
		</div>
		<div class="imgstatus right">
			<div class="interactions">
				<span  class="pull_button" pull="frn"><?php echo $this->Html->image('icons/folder_user.png'); ?></span>
				<ul id="frn" class="mainMenuSub hide">
					<li><?php echo $this->Html->image('icons/group.png'); ?><a>View friends</a></li>
					<li><?php echo $this->Html->image('icons/cross.png'); ?><a>Unfriend</a></li>
				</ul>
			</div>
			<div class="interactions">
				<span  class="pull_button" pull="msg"><?php echo $this->Html->image('icons/email.png'); ?></span>
				<ul id="msg" class="mainMenuSub hide">
					<li><?php echo $this->Html->image('icons/email_edit.png'); ?><a>Send Message</a></li>
					<li><?php echo $this->Html->image('icons/drink.png'); ?><a>Invite to a party</a></li>
					<li><?php echo $this->Html->image('icons/newspaper.png'); ?><a>Tell a news</a></li>
				</ul>
			</div>
			<div class="interactions">
			<span class="pull_button" pull="acts"><?php echo $this->Html->image('icons/emoticon_waii.png'); ?></span>
			<ul id="acts" class="mainMenuSub hide">
				<li><?php echo $this->Html->image('icons/emoticon_smile.png'); ?><a>Smile</a></li>
				<li><?php echo $this->Html->image('icons/sport_basketball.png'); ?><a>Play</a></li>
				<li><?php echo $this->Html->image('icons/heart.png'); ?><a>Flirt</a></li>
				<li><?php echo $this->Html->image('icons/bomb.png'); ?><a>Bombard</a></li>
				<li><?php echo $this->Html->image('icons/lightning.png'); ?><a>Zap</a></li>
			</ul>
			</div>
			<div class="interactions"><span><?php echo $this->Html->image('icons/arrow_switch.png'); ?></span></div>
		</div>
		<div class="clear"></div>
	</div>
	
</div>
<div class="clear"></div>

<div id="bubblePost" class="m-auto">
	<div id="dropArea">
		<span>Drop files here<span>
	</div>
	<div class="clear"></div>
	<?php echo $this->Html->image('icons/comment.png'); ?>
	<?php echo $this->Html->image('icons/attach.png'); ?>
	<?php echo $this->Html->image('icons/link.png'); ?>
	<?php echo $this->Html->image('icons/tag_blue.png'); ?>
	<?php echo $this->Html->image('icons/tag.png'); ?>
	<div id="inputBubbble"class="m-auto">
	<textarea></textarea>
	</div>
	<div class="tip arrow-down right"></div>
	<div class="clear"></div>
	<div class="burst right">
		<button>Burst</button>
	</div>
	<div class="clear"></div>
</div>
<div class="clear"></div>
<?php echo $this->element('stream');?>

