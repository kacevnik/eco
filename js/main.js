jQuery(document).ready(function ($) {		
	$('.top_main_menu').append('<div class="fancy_bottom"></div>');
	$('.fancy_bottom').width($('.current-menu-item').width());
	var fancy_bottom = $('.current-menu-item').offset();
	$('.fancy_bottom').offset({left: fancy_bottom.left});

	$('.top_main_menu >.menu-item').hover(function(){
		var t = $('.top_main_menu').offset();
		var a = $(this).offset();
		var c = $(this).width();
		$('.fancy_bottom').stop().animate({width: c, left: a.left-t.left}, 100);
	});

	$('.top_main_menu').mouseleave(function(){
		var c = $('.current-menu-item').width();
		var a = $('.current-menu-item').offset();
		var t = $('.top_main_menu').offset();
		$('.fancy_bottom').stop().animate({width: c, left: a.left-t.left}, 100);
	});

	$.stellar();

});