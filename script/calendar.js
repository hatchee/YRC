;(function(){




$(function(){
	
	// 当点击年份或月份时改变hash
	$('.tabnav li').each(function(){
		$(this).click(function(e){
			$(this).addClass("active").siblings().removeClass('active');

			var year = $(this).attr("ref");
			var month = $(".tabmonth li.active").attr("ref");
			window.location.hash = "#!"+year+month;
		})
	})

	$('.tabmonth li').each(function(){
		$(this).click(function(e){
			$(this).addClass("active").siblings().removeClass('active');
			
			var year = $(".tabnav li.active").attr("ref");
			var month = $(this).attr("ref");
			window.location.hash = "#!"+year+month;
		})
	})


	// 当hash改变时触发ajax提交
	$(window).bind("hashchange", function(event){

		// initialize();

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
				btime: year_var+"-"+month_var
			},
			success: function( result ){
				$('.loading').remove();
				$(".tabunit table").replaceWith(result).fadeIn();

			   var x = $(".tabmonth li.active").text();
			    var y = $(".tabnav li.active").attr("ref");
				$('.calendar h1').text("All Yangtze River Cruises in "+x+y);

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

	// 
	$('.tabcal li').each(function(index){
		$(this).click(function(){
			$('.tabmonth li').eq(index).addClass('active').siblings().removeClass('active');
		})
	})


	// 根据hash值来对li进行active操作
	window.onload = initialize;
	
		
	function initialize(){

		var url = window.location.toString();

		if(window.location.hash){
				
				// 改变li当前项样式
				$(".tabnav li").each(function(){

					var year_var = window.location.hash.slice(2,6);
					if($(this).attr("ref") == year_var){
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

			// hash改变 会自动触发hashchange事件
			window.location.hash = "#!"+year_var+month_var; 

			// 改变li当前项样式
			$(".tabnav li").each(function(){

					var year_var = window.location.hash.slice(2,6);
					if($(this).attr("ref") == year_var){
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

	//TAB fiexd
	$( window ).unbind( 'scroll' );
	var t = $( '#can-nav' );
	var tabunit = $('.tabunit');
	t_top = t.offset().top;
	$( window ).bind( 'scroll',function(){

		var s_top = $(this).scrollTop();
		if( s_top > t_top ){
			t.css({'position':'fixed','top':0, 'z-index':10});
			tabunit.css({'margin-top':'159px'});	
		}else{
			t.css({'position':'static'});
			tabunit.css({'margin-top':'0px'});	
		}
	}); 

	// the explain prompt
	$('.explain').hover(function(){
		$('.explain .prompt').show();
	},function(){
		$('.explain .prompt').hide();
	})



	// calendar prompt
		$(".aim").live("click", function(e){
			e.preventDefault();
			if ($(this).siblings(".cons").length) {

				$(this).siblings(".cons").remove();

			} else {
				$(".cons").remove();

				var l = $(this).attr("href");
				var d = $(this).siblings(".startime").val();
				var b = $(this).text();
				var type = $(this).siblings(".routetype").val();
				var route = $(this).siblings(".shiproute").val();

				var cons = '<div class="cons"><p>Click to enquire this ship or read its info of cabins, plan decks, and more details. </p><a class="inq" href="inquiry.html?d='+d+'&b='+b+'&type='+type+'&route='+route+'">Inquiry</a><a class="det" href="'+l+'">Details</a></div>'

				$(this).parent("p").append(cons);	
			};
		})


})
})(jQuery);