(function(){
	function searchresult(time,flex,route)
	{   var width=$('.searchbox').width()+20;
		var height=$('.searchbox').height()+20;
		$('.loading').css({'width':width,'height':height,'z-index':100});
		$('.loading').show();
		$.ajax({
			url: 'assets/snippets/boatcalendar/searchship.php',
			type: "POST",
			data: {
				stime: time,flex:flex, route:route
			},
			success:function(result){
				$('.restitle').text(result);
				$('.loading').hide();
			}
		});
	}
$(function(){
	var date=new Date();
	var year=date.getFullYear();
	var month=date.getMonth()+1;
	var arrmonth=new Array('','Jan.','Feb.','Mar.','Apr.','May','June.','July.','Aug.','Sept.','Oct.','Nov.','Dec.');
	var href=new Array('',year+'1',year+'2',year+'3',year+'4',year+'5',year+'6',year+'7',year+'8',year+'9',year+'10',year+'11',year+'12');
	if(month+5>12)
	{
		var s=12;
	}
	else
	{
		s=month+5;
	}
	var strli='';
	for(var i=month;i<=s;i++)
	{
		if(i==month)
		{
			strli +='<li class="now"><a href="'+href[i]+'">'+arrmonth[i]+'</a></li>';
		}
		else
		{
			strli +='<li><a href="'+href[i]+'">'+arrmonth[i]+'</a></li>';
		}
	}
	$('.tabcal').html(strli);

	//及时返回搜索结果
	var day;
	var month;
	var year;
	var flex;
	var route;
	$('.shipsearch').change(function(){
		day=$('.calday').val();
		month=$('.calmonth').val();
		year=$('.calyear').val();
		if(day=='')
		{
			day=date.getDate();
		}
		if(month=='')
		{
			month=date.getMonth()+1;
		}
		if(year=='')
		{
			year=date.getFullYear();
		}
		var stime=year+'-'+month+'-'+day;
		var timenow=date.getFullYear()+'-'+(date.getMonth()+1)+'-'+date.getDate();
		if(stime<timenow)
		{
			stime=timenow;
		}
		$('.calstime').val(stime);
		flex=$('.calflex').val();
		route=$('.calroute').val();
		searchresult(stime,flex,route);
	});

});
})(jQuery);