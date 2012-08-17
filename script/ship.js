;(function(){




$(function(){
	
	// 价格解释 
	$('.why').hover(function(){
		$(this).children('i').show();
	}, function(){
		$(this).children('i').hide();
	})

	// 选项卡切换
	$(".row-top li").each(function(index){
		$(this).click(function(){
			$(this).addClass('active').siblings().removeClass('active');
			$('.col-lt .unit').hide();
			$('.col-lt .unit').eq(index).slideDown();
		})
	})

	$(".row-top li").eq(0).click();

	$(window).scroll(function(){
	  screenwidth = $(window).width();
	  screenheight = $(window).height();
	  mytop = $(document).scrollTop();
	  getPosLeft = screenwidth/2-450;
		 getPosTop = screenheight/2-250;
	  $(".cruiseform").css({"left":getPosLeft,"top":getPosTop+mytop});
	 });

	$('.enquiry a').click(function(){
		$('.dateinfo').show();
		$(".cruiseform").fadeIn("fast");
		 var docheight = $(document).height();
		 $("body").append("<div id='greybackground'></div>");
		 $("#greybackground").css({"opacity":"0.5","height":docheight});

	});

	$(".exit_ico").click(function(){
		$(".cruiseform").hide();
		$("#greybackground").remove();
	});

})
})(jQuery);