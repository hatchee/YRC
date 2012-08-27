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
		var boat=$("#boatname").val();
		var date=$("#shipcal").val();
		var arrdate=date.split('-');
		var dnow=$(this).children("span").text();
		var t=new Date(Date.UTC(arrdate[0],arrdate[1]-1,dnow));
		var sd=$(this).children('.rday').val();
		var t = parseInt((t.getTime())/1000)+sd*3600*24;
		var data=new Date(parseInt(t)*1000);
		var ed=data.getFullYear()+"-"+(data.getMonth()+1)+"-"+data.getDate();
		var montharray=new Array("","Jan","Feb", "Mar","Apr","May","June","July","Aug","Sept","Oct","Nov","Dec"); 
		var arrdateend=ed.split('-');
		var price=$(this).children("i").text();
		var route=$(this).children(".route").val();
		var ms=parseInt(arrdate[1],10);
		var me=parseInt(arrdateend[1],10);
		var hideform='<input type="hidden" id="Boatname" class="txt" value="'+boat+'" name="boatname"><input type="hidden" name="Price" value="'+price+'"><input type="hidden" id="route" class="txt" name="Route" value="'+route+'"><input type="hidden" id="date" class="txt" name="Date" value="'+montharray[ms]+'.'+dnow+'.'+arrdate[0]+' - '+montharray[me]+'.'+arrdateend[2]+'.'+arrdateend[0]+'">';
		var str='<ul><li><h3>Your Booking Summary</h3></li><li><strong>Cruise ship:</strong> '+boat+'</li><li><strong>Price:</strong> '+price+' per person</li><li><strong>Cruise date:</strong> '+montharray[ms]+'.'+dnow+'.'+arrdate[0]+' - '+montharray[me]+'.'+arrdateend[2]+'.'+arrdateend[0]+'</li><li><strong>Itinerary:</strong> '+route+'</li></ul>';
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