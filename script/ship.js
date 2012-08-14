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


})
})(jQuery);