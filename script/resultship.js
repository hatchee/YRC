(function(){
$(function(){
	$(window).scroll(function(){
	  screenwidth = $(window).width();
	  screenheight = $(window).height();
	  mytop = $(document).scrollTop();
	  getPosLeft = screenwidth/2-450;
		 getPosTop = screenheight/2-250;
	  $(".cruiseform").css({"left":getPosLeft,"top":getPosTop+mytop});
	 });

	$('.btn_bts').click(function(e){
		e.preventDefault();
		var boat=$(this).parent().prev('.boatinfo').children('.cont').children('h4').children('a').text();
		var date=$(this).attr("alt");
		var arrdate=date.split('-');
		var montharray=new Array("","Jan","Feb", "Mar","Apr","May","June","July","Aug","Sept","Oct","Nov","Dec"); 
		
		var price=$(this).prev('.jg').text();
	
		var ms=parseInt(arrdate[1],10);
		
		var hideform='<input type="hidden" id="Boatname" class="txt" value="'+boat+'" name="boatname"><input type="hidden" name="Price" value="'+price+'"><input type="hidden" id="date" class="txt" name="Date" value="'+montharray[ms]+'.'+arrdate[2]+'.'+arrdate[0]+'">';
		var str='<ul><li><h3>Your Booking Summary</h3></li><li><strong>Cruise ship:</strong> '+boat+'</li><li><strong>Price:</strong> '+price+' per person</li><li><strong>Cruise date:</strong> '+montharray[ms]+'.'+arrdate[2]+'.'+arrdate[0]+'</li></ul>';
		$(".shipname").text(boat);
		$(".formrightinfo").html(str);
		$(".hideninfo").html(hideform);
		$(".cruiseform").fadeIn("fast");
		 var docheight = $(document).height();
		 $("body").append("<div id='greybackground'></div>");
		 $("#greybackground").css({"opacity":"0.5","height":docheight});
	});	

	$('.ups').click(function(e){
		e.preventDefault();
		var boat=$(this).parent().siblings('h4').children('a').text();
		var date=$(this).attr("alt");
		var arrdate=date.split('-');
		var montharray=new Array("","Jan","Feb", "Mar","Apr","May","June","July","Aug","Sept","Oct","Nov","Dec"); 
		
		var price=$(this).parent().parent('.cont').parent('.boatinfo').next('.price').children('.jg').text();
	
		var ms=parseInt(arrdate[1],10);
		
		var hideform='<input type="hidden" id="Boatname" class="txt" value="'+boat+'" name="boatname"><input type="hidden" name="Price" value="'+price+'"><input type="hidden" id="date" class="txt" name="Date" value="'+montharray[ms]+'.'+arrdate[2]+'.'+arrdate[0]+'">';
		var str='<ul><li><h3>Your Booking Summary</h3></li><li><strong>Cruise ship:</strong> '+boat+'</li><li><strong>Price:</strong> '+price+' per person</li><li><strong>Cruise date:</strong> '+montharray[ms]+'.'+arrdate[2]+'.'+arrdate[0]+'</li></ul>';
		$(".shipname").text(boat);
		$(".formrightinfo").html(str);
		$(".hideninfo").html(hideform);
		$(".cruiseform").fadeIn("fast");
		 var docheight = $(document).height();
		 $("body").append("<div id='greybackground'></div>");
		 $("#greybackground").css({"opacity":"0.5","height":docheight});
	});	
	$('.downs').click(function(e){
		e.preventDefault();
		var boat=$(this).parent().siblings('h4').children('a').text();
		var date=$(this).attr("alt");
		var arrdate=date.split('-');
		var montharray=new Array("","Jan","Feb", "Mar","Apr","May","June","July","Aug","Sept","Oct","Nov","Dec"); 
		
		var price=$(this).parent().parent('.cont').parent('.boatinfo').next('.price').children('.jg').text();
	
		var ms=parseInt(arrdate[1],10);
		
		var hideform='<input type="hidden" id="Boatname" class="txt" value="'+boat+'" name="boatname"><input type="hidden" name="Price" value="'+price+'"><input type="hidden" id="date" class="txt" name="Date" value="'+montharray[ms]+'.'+arrdate[2]+'.'+arrdate[0]+'">';
		var str='<ul><li><h3>Your Booking Summary</h3></li><li><strong>Cruise ship:</strong> '+boat+'</li><li><strong>Price:</strong> '+price+' per person</li><li><strong>Cruise date:</strong> '+montharray[ms]+'.'+arrdate[2]+'.'+arrdate[0]+'</li></ul>';
		$(".shipname").text(boat);
		$(".formrightinfo").html(str);
		$(".hideninfo").html(hideform);
		$(".cruiseform").fadeIn("fast");
		 var docheight = $(document).height();
		 $("body").append("<div id='greybackground'></div>");
		 $("#greybackground").css({"opacity":"0.5","height":docheight});
	});	
	$(".exit_ico").click(function(){
		$(".cruiseform").hide();
		$("#greybackground").remove();
	});
});
})(jQuery)