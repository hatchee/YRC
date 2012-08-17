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

	/*$(".booknow").live("click",function(){
		var boat=$("#boatname").val();
		var date=$("#shipcal").val();
		var arrdate=date.split('-');
		var dnow=$(this).children("span").text();
		var t=new Date(Date.UTC(arrdate[0],arrdate[1]-1,arrdate[2]));
		var sd=$('.rday').val();
		var t = parseInt((t.getTime())/1000)+sd*3600*24;
		var data=new Date(parseInt(t)*1000);
		var ed=data.getFullYear()+"-"+(data.getMonth()+1)+"-"+data.getDate();
		var montharray=new Array("","Jan","Feb", "Mar","Apr","May","June","July","Aug","Sept","Oct","Nov","Dec"); 
		var arrdateend=ed.split('-');
		var price=$(this).children("i").text();
		var route=$(".route").val();
		var str='<ul><li><h3>Your Booking Summary</h3></li><li><strong>Cruise ship:</strong> '+boat+'</li><li><strong>Price:</strong> '+price+' per person</li><li><strong>Cruise date:</strong> '+montharray[arrdate[1]]+'.'+dnow+'.'+arrdate[0]+' - '+montharray[arrdateend[1]]+'.'+arrdateend[2]+'.'+arrdateend[0]+'</li><li><strong>Itinerary:</strong> '+route+'</li></ul>';
		$(".formrightinfo").html(str);
		$(".cruiseform").fadeIn("fast");
		 var docheight = $(document).height();
		 $("body").append("<div id='greybackground'></div>");
		 $("#greybackground").css({"opacity":"0.5","height":docheight});
	});*/

})
})(jQuery);