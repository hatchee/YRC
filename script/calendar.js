;(function(){




$(function(){
	
	// 当点击年份或月份时改变hash
	$('.tabnav li').each(function(){
		$(this).click(function(e){
			$(this).addClass("active").siblings().removeClass('active');

			var year = $(this).text();
			var month = $(".tabmonth li.active").attr("ref");
			window.location.hash = "#!"+year+month;
		})
	})

	$('.tabmonth li').each(function(){
		$(this).click(function(e){
			$(this).addClass("active").siblings().removeClass('active');
			
			var year = $(".tabnav li.active").text();
			var month = $(this).attr("ref");
			window.location.hash = "#!"+year+month;
		})
	})


	// 当hash改变时触发ajax提交
	$(window).bind("hashchange", function(event){


		var year_var = window.location.hash.slice(2,6);
		var month_var = window.location.hash.slice(6);
		var loading = $('.loading');
		var poLeft = $(window).width()/2;
		var poTop = $(window).height()/2+30;
		if(loading.length){
			loading.remove();
			$('body').append("<img class='loading' style='left:"+poLeft+"px;"+"top:"+poTop+"px' src='image/loading.gif'>")
		}else{
			$('body').append("<img class='loading' style='left:"+poLeft+"px;"+"top:"+poTop+"px' src='image/loading.gif'>");
		}
		
		$.ajax({
			url: 'assets/snippets/boatcalendar/testcruisescalendar.php',
			type: "POST",
			data: {
				btime: year_var+"-"+month_var,
			},
			success: function( result ){
				$('.loading').remove();
				$(".tabunit table").replaceWith(result);

				if($(".tabnav li").eq(0).attr("class") == "active" ){
				    var now = new Date();
					var month_var2 = now.getMonth();
				    $(".tabmonth li:lt("+month_var2+")").css({"text-decoration":"line-through","cursor":"default"});   
				}else{
					$('.tabmonth li').css({"text-decoration":"none","cursor":"pointer"});
				}

			}
		});

	})

	//TAB fiexd
	$( window ).unbind( 'scroll' );
	var t = $( '#can-nav' );
	var tabunit = $('.tabunit');
	t_top = t.offset().top;
	$( window ).bind( 'scroll',function(){

		var s_top = $(this).scrollTop();
		if( s_top > t_top ){
			t.css({'position':'fixed','top':0, 'z-index':10,});
			tabunit.css({'margin-top':'158px'});	
		}else{
			t.css({'position':'static'});
			tabunit.css({'margin-top':'0px'});	
		}
	}); 



	// 根据hash值来对li进行active操作
	window.onload = initialize;
	function initialize(){

		var url = window.location.toString();

		if(window.location.hash){
				
				// 改变li当前项样式
				$(".tabnav li").each(function(){

					var year_var = window.location.hash.slice(2,6);
					if($(this).text() == year_var){
						$(this).addClass('active').siblings().removeClass("active");
					}
				});

				$(".tabmonth li").each(function(){

					var month_var = window.location.hash.slice(6);
					if($(this).attr("ref") == month_var){
						$(this).addClass('active').siblings().removeClass("active");
					}
				});


			$(window).trigger("hashchange");

		}else{
			// 定位到当前年月
			var now = new Date();
			var year_var = now.getFullYear();
			var month_var = now.getMonth() + 1;

			// hash改变 会自动促发hashchange事件
			window.location.hash = "#!"+year_var+month_var; 

			// 改变li当前项样式
			$(".tabnav li").each(function(){

					var year_var = window.location.hash.slice(2,6);
					if($(this).text() == year_var){
						$(this).addClass('active').siblings().removeClass("active");
					}
				});

				$(".tabmonth li").each(function(){

					var month_var = window.location.hash.slice(6);
					if($(this).attr("ref") == month_var){
						$(this).addClass('active').siblings().removeClass("active");
					}
				});

		}
	};

	// the explain prompt
	$('.explain img').hover(function(){
		$('.explain .prompt').show();
	},function(){
		$('.explain .prompt').hide();
	})


})
})(jQuery);