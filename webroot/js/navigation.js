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