$(function () {
	$(".fermeture").click(function () {
	 $(".carrevertical").hide(500);
	 $(".navigation").hide(500);
	
});

	$(".bar").click(function () {
		$(".carrevertical").show(500).css({display : "block"});
	 	$(".navigation").show(500).css({visibility : "visible"});
	 	
	});
});