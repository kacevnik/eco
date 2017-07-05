jQuery(document).ready(function ($) {

	setTimeout(function(){
		$('.top_main_menu').append('<div class="fancy_bottom"></div>');
		$('.fancy_bottom').width($('.current-menu-item').width());
		var fancy_bottom = $('.current-menu-item').offset();
		$('.fancy_bottom').offset({left: fancy_bottom.left});
	}, 300);

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

	$('body').append('<div class="body_hide"></div>');

	$('.body_hide').height($(document).height());
	$('.inter_img_hide_left').css({'left': $(window).width()+'px'});
	$('.inter_img_hide_right').css({'right': $(window).width()+'px'});

	$('.inter_img_left').click(function(){
		var a = $(this).next().clone();
		a.width($(window).width()-40+'px');
		if(a.width() > 800)a.width(800-40+'px');
		$("html,body").css("overflow","hidden");
		$(".body_hide").show().css({'top': $(window).scrollTop()});
		$(".body_hide").append(a);
		if($(window).height()< a.height()+200)a.css({'overflow-y' : 'scroll'});
		var c = ($(window).width()-a.width())/2+20+'px';
		a.stop().show().css({'top': '0px'}).height($(window).height()-200).animate({'left': $(window).width()/2-(a.width()+40)/2+'px'}, 300);
		setTimeout(function(){
			$('.inter_img_arrow_back_left').show().css({'right': c});
		}, 300);
	});	

	$('.inter_img_right').click(function(){
		var a = $(this).next().clone();
		a.width($(window).width()-40+'px');
		if(a.width() > 800)a.width(800-40+'px');
		$("html,body").css("overflow","hidden");
		$(".body_hide").show().css({'top': $(window).scrollTop()});
		$(".body_hide").append(a);
		if($(window).height()< a.height()+200)a.css({'overflow-y' : 'scroll'});
		var c = ($(window).width()-a.width())/2+20+'px';
		a.stop().show().css({'top': '0px'}).height($(window).height()-200).animate({'right': $(window).width()/2-(a.width()+40)/2+'px'}, 300);
		setTimeout(function(){
			$('.inter_img_arrow_back_right').show().css({'left': c});
		}, 300);
	});


	$('.inter_img_arrow_back_left').click(function(){
		$(this).hide();
		$('.inter_img_hide_left').stop().animate({'left': $(window).width()+'px'}, 300);
		setTimeout(function(){
			$('.body_hide').hide();
			$('.body_hide').find('.inter_img_hide_left').remove();
			$("html,body").css("overflow","auto");
		}, 300);
	});	

	$('.inter_img_arrow_back_right').click(function(){
		$(this).hide();
		$('.inter_img_hide_right').stop().animate({'right': $(window).width()+'px'}, 300);
		setTimeout(function(){
			$('.body_hide').hide();
			$('.body_hide').find('.inter_img_hide_right').remove();
			$("html,body").css("overflow","auto");
		}, 300);
	});

	$(window).resize(function(){
		$('.inter_img_hide_left').width($(window).width() - 80);
		$('.inter_img_hide_left').css({'left': $(window).width()/2-($('.inter_img_hide_left').width()+40)/2+'px', 'max-width':'740px'});
		$('.inter_img_arrow_back_left').css({'right': ($(window).width()-$('.inter_img_hide_left').width())/2+20+'px'});

		$('.inter_img_hide_right').width($(window).width() - 80);
		$('.inter_img_hide_right').css({'right': $(window).width()/2-($('.inter_img_hide_right').width()+40)/2+'px', 'max-width':'740px'});
		$('.inter_img_arrow_back_right').css({'left': ($(window).width()-$('.inter_img_hide_right').width())/2+20+'px'});
	});

	if(theme_data_object["position-main-menu"] == 2){
		$('#top_main_menu').css({'margin-left': ($('#top_main_menu').parent().width()-$('#top_main_menu').width())/2+'px'});
	}else if(theme_data_object["position-main-menu"] == 3){
		$('#top_main_menu').css({'float': 'right'});
	}

});