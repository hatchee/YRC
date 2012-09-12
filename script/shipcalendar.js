(function(){
		function getcalendar(boat,cal,action)
		{
			$.ajax({
				type:'POST',
				url :'/assets/snippets/boatcalendar/shipcalendarajax.php',
				data:{
					boat:boat,date:cal,ac:action
				},
				success:function(result){
					$('#shipcalendar').html(result);
				}
			
			});
		}
		function autoScroll( target ,slidetime, timeout )
		{
			setInterval( function(){
			$( target+' li:first' ).slideUp( slidetime,function(){
			$( this ).appendTo( target ).show();
			});
			}, timeout);
		} 
$(function(){
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
	autoScroll ( '.Recent-Inquiry ul', 1500, 3000 );
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
});
})(jQuery);