<?php echo $this->Html->script('jquery'); ?>
<style type="text/css">
	@charset "utf-8";
	/* CSS Document */
	*{
		margin:0;
		padding:0;
	}

	body{
	    color: #333333;
	    direction: ltr;
	    font-family: "lucida grande",tahoma,verdana,arial,sans-serif;
	    font-size: 11px;
	    text-align: left;
	}

	div.mainbar{
		top:0;
		z-index:99;
		padding:0;
		position:fixed;
		width:100%;
	}

	div.mainbarInner{
		background:url(/images/pre_top.png);
		border:1px solid #bcb6aa;
		border-top:0;
		border-bottom:0;
		margin:0 15px;
	}

	ul.mainMenu{
		list-style:none;

	}

	ul.mainMenu li{
		float:left;
		border-right:1px solid #bcb6aa;
	}

	.mainMenu li a{
		padding:5px 4px 5px 4px;
		margin-bottom:1px;
		display:block;
		font-weight:bold;
		color:#444444;
		line-height:15px;
		text-decoration:none;
	}

	.mainMenu li a:hover{
		background:white;
		text-decoration:none;
	}

	.staticMenu dl{ }
	.staticMenu dd { position:relative; }

	/* DT styles for sliding doors */
	.staticMenu dt a {
		padding:5px 4px 5px 4px;
		margin-bottom:1px;
		display:block;
		font-weight:bold;
		color:#444444;
		line-height:15px;
		text-decoration:none;
	}

	.staticMenu dt a.selected{
		background:white;
		position:relative;
		z-index:99;
		padding-bottom:6px;
	}

	/* UL styles */
	.staticMenu dd ul {
		display:none;
	    list-style:none;
		position:absolute;
	    cursor:pointer;
	}

	ul.mainMenuSub{
		position:absolute;
		top:-2px;
		left:-1px;
		padding:2px;
		border:1px solid #b4a291;
		background: white;
	}

	ul.mainMenuSub li{
		border:0;
		width:223px;
	}

	ul.mainMenuSub li.seperator{
		width:223px;
		height:2px;
		display:block;
		background:url(/images/mainmenusep.png) repeat-x;
		margin-bottom:6px;
		margin-top:4px;
		overflow:visible;
	}

	ul.mainMenuSub li a:link{
		display:block;
		font-weight:bold;
		text-align:left;
		overflow:hidden;
		padding:2px 4px 3px 19px;
		color:#444444;
		text-decoration:none;
	}

	ul.mainMenuSub li a:hover{
		background:#444444;
		color:white;
		text-decoration:none;
	}

	ul.mainMenuSub li a img{

		border:0;
	}

	ul.mainMenuSmall li{
		width:173px;
	}

	div.mainMenuSubTwo{
		display:none;
		left:220px;
		position:absolute;
		top:3px;
		z-index:99;
		background:white;
	}

	div.mainMenuSubTwo ul{
		border:1px solid #b4a291;
		padding:2px;
		background:white;
	}

	a.MainSubExpandable{
		background:white url(/images/mainmenuexpandable.png) no-repeat right top;

	}

	ul.mainMenuSub li a.MainSubExpandable:hover{
		background:#444444 url(/images/mainmenuexpandable.png) no-repeat;
		background-position:right -20px;
	}
</style>
<script type="text/javascript">
	var SubMenutimer;
	var last_o;

	$(".mainbar").ready(function() {
		$(".staticMenu dt a").click(function() {

			$(".staticMenu dd ul").not($(this).parents(".staticMenu").find("ul")).hide();
			$(".staticMenu dt a").not($(this)).removeClass("selected");
			$(this).parents(".staticMenu").find("ul").toggle();

			if($(this).parents(".staticMenu").find("ul").css("display") == "none"){
				$(this).removeClass("selected");
			}else{
				$(this).addClass("selected");
			}

		});

		$(".staticMenu dd ul li a").click(function() {
			var text = $(this).html();
			$(".staticMenu dt a span").html(text);
			$(".staticMenu dd ul").hide();
		});

		$(document).bind('click', function(e) {
			var $clicked = $(e.target);
			if (! $clicked.parents().hasClass("staticMenu")){
				$(".staticMenu dd ul").hide();
				$(".staticMenu dt a").removeClass("selected");
			}

		});
	});

	function openSubMenu(o){
		cancelSubMenuClose();

		if(last_o) $(last_o).parent().find("div").hide();

		last_o = o;
		$(o).parent().find("div").show();
	}

	function closeSubMenu(){
		SubMenutimer = setTimeout("close()",500);
	}

	function cancelSubMenuClose(){
		clearTimeout(SubMenutimer);
	}

	function close(){
		$(last_o).parent().find("div").hide();
	}
</script>

	<div class="mainbar">
		<div class="mainbarInner" style="overflow:visible; position:relative; display:block; height:26px;">
					
	                <div style="float:right;">
	                <ul class="mainMenu" style="float:right;">
	                	<li style="border-right:0;">
	                        <dl class="staticMenu">
	                           <dt><a href="/settings" onclick="return false;" class="selected">Sam</a></dt>
	                             <dd>
	                                    <ul class="mainMenuSub" style="right: 0px; left: auto; display: block; ">
	                                        <li><a href="javascript:;" class="dropdownglobalchange" id="A" style="cursor:pointer;">Available</a></li>
	                                        <li><a href="javascript:;" class="dropdownglobalchange" id="F" style="cursor:pointer;">Busy</a></li>
	                                        <li><a href="javascript:;" class="dropdownglobalchange" id="F" style="cursor:pointer;">Away</a></li>
	                                        <li><a href="javascript:;" class="dropdownglobalchange" id="F" style="cursor:pointer;">Appear Offline</a></li>
	                                        <li class="seperator"><!-- --></li>
	                                        <li><a href="javascript:;" class="dropdownglobalchange" id="M" style="cursor:pointer;">Log out</a></li>
	                                        <li><a href="javascript:;" class="dropdownglobalchange" id="M" style="cursor:pointer;">Switch User</a></li>
	                                    </ul>
	                             </dd>
	                       </dl>
	                   </li>
	               </ul>
	                	<div class="notificationArea" style="float:right;">
	                    	Notification Icons
	                    </div>
	                </div>
		</div>
	</div>
