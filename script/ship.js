;(function() {

	function getcalendar(boat,cal,action)
		{
			var width=$('#shipcalendar').width();
			var height=$('#shipcalendar').height();
			$('.mask').css({'width':width,'height':height,'z-index':100});
			$('.mask').show();
			$.ajax({
				type:'POST',
				url :'/assets/snippets/boatcalendar/shipcalendarajax.php',
				data:{
					boat:boat,date:cal,ac:action
				},
				success:function(result){
					$('#shipcalendar').html(result);
					$('.mask').hide();
				}

			});
		}

		function getcompanycalendar(sdate,series)
		{
			$.ajax({
				type:'POST',
				url :'/assets/snippets/boatcalendar/shipcompanyajax.php',
				data:{
					start:sdate,companyid:series
				},
				success:function(result){
					$('.cal-company').html(result);
					$('.mask').hide();
				}

			});
		}



$(function() {



	// 选项卡切换
	$(".row-top li").each(function(index) {
		$(this).click(function() {
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

	$('.enquiry').click(function(e){
		e.preventDefault();
		var hidedata='<label>Your cruise date:</label><select name="ddate"><option id="c7" value="">--date</option><option id="c1" value="1">1</option><option id="c2" value="2">2</option><option id="c3" value="3">3</option><option id="c4" value="4">4</option><option id="c5" value="5">5</option><option id="c6" value="6">6</option><option id="c7" value="7">7</option><option id="c5" value="8">8</option><option id="c6" value="9">9</option><option id="c1" value="10">10</option><option id="c2" value="11">11</option><option id="c3" value="12">12</option><option id="c4" value="13">13</option><option id="c5" value="14">14</option><option id="c6" value="15">15</option><option id="c7" value="16">16</option><option id="c5" value="17">17</option><option id="c6" value="18">18</option><option id="c1" value="19">19</option><option id="c20" value="2">20</option><option id="c3" value="21">21</option><option id="c4" value="22">22</option><option id="c5" value="23">23</option><option id="c6" value="24">24</option><option id="c7" value="25">25</option><option id="c5" value="26">26</option><option id="c6" value="27">27</option><option id="c7" value="28">28</option><option id="c5" value="29">29</option><option id="c6" value="30">30</option><option id="c7" value="31">31</option></select><select name="month"><option value="">--Month</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select><select name="year"><option value="">--Year</option><option value="2012">2012</option><option value="2013">2013</option></select></br><label>Your preferred cruises intinerary:</label><select name="route"><option value="Chongqing - Yichang">Chongqing - Yichang (4 days;downstream)</option><option value="Yichang - Chongqing">Yichang - Chongqing (5 days; upstream)</option><option value="Chongqing - Shanghai">Chongqing - Shanghai (7 days; downstream)</option><option value="Shanghai - Chongqing">Shanghai - Chongqing (9 days; upstream)</option><option value="Wanzhou - Yichang">Wanzhou - Yichang (3 days; downstream)</option><option value="Yichang - Wanzhou">Yichang - Wanzhou (3 days; upstream)</option></select>';
		var price=$('.price b').text();
		var boat=$("#boatname").val();
		var str='<h3 class="">Price: '+price+' per person</h3>';
		$(".formrightinfo").html(str);
		$('.dateinfo').html(hidedata);
		$('.dateinfo').show();
		$(".cruiseform").fadeIn("fast");
		var hideform='<input type="hidden" id="Boatname" class="txt" value="'+boat+'" name="boatname">';
		$(".hideninfo").html(hideform);
		 var docheight = $(document).height();
		 $("body").append("<div id='greybackground'></div>");
		 $("#greybackground").css({"opacity":"0.5","height":docheight});

	});

	$(".exit_ico").click(function(){
		$('.dateinfo').html('');
		$(".hideninfo").html('');
		$(".cruiseform").hide();
		$("#greybackground").remove();
	});

	$(".booknow").live("click",function(){
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

	/***船期翻页****/
	$('.prevMon').live("click",function(){
		var boat=$('#boatname').val();
		var date=$('#shipcal').val();
		getcalendar(boat,date,'up');
	});
	$('.nextMon').live("click",function(){
		var boat=$('#boatname').val();
		var date=$('#shipcal').val();
		getcalendar(boat,date,'next');
	});

	$('.nextyear').live("click",function(){
		var boat=$('#boatname').val();
		var date=$('.nextyear').text();
		var d=new Date();
		if(date==d.getFullYear())
		{
			date+='-'+(d.getMonth()+1)+'-1';
		}
		else
		{
			date+="-1-1";
		}
		getcalendar(boat,date,'nextyear');
	});
/********************************company ships calendar*********************************/
	var date=new Date();
	var year=date.getFullYear();
	var month=date.getMonth()+1;
	var arrmonth=new Array('','Jan.','Feb.','Mar.','Apr.','May','June.','July.','Aug.','Sept.','Oct.','Nov.','Dec.');
	var monthli='';
	for(var i=1;i<=12;i++)
	{
		if(month==i)
		{
			monthli+='<dd alt="'+year+'-'+i+'-1" class="active"> '+arrmonth[i]+' </dd>';
		}
		else
		{
			monthli+='<dd alt="'+year+'-'+i+'-1"> '+arrmonth[i]+' </dd>';
		}

	}
	$('.tawrap dl').html(monthli);




	$('.tawrap dl dd').each(function(){
		$(this).click(function(){
			$('.mask').show();
			var start=$(this).attr('alt');
			$(this).addClass('active').siblings().removeClass('active');
			var companyid=$('.shipcompany').val();
			getcompanycalendar(start,companyid);
		});
	});

})
})(jQuery);