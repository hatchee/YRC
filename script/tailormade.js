(function(){

// function Submitform(){
// 	var formobj=document.getElementById("inquiryform");
// 	formobj.method="post";
// 	formobj.action="crmsys/getmail/";
// 	formobj.submit();
// }

$(function(){

	var selected = '<span class="ok"></span>'

	$(".city li").each(function(){


		$(this).click(function(){
			// $( '.container h2' ).removeClass( 'active' ).eq( 0 ).addClass( 'active' ); 
			if ( $(this).children('input:checked').length > 0 ){
				// alert(1);
				$( this ).children( 'input' ).attr( 'checked', false );
				$(this).children(".ok").remove();
			} else {
				// alert(0);
				$( this ).children( 'input' ).attr( 'checked', true );
				$(this).append(selected);
			}


		})
	})

	$(".map img").each(function(index){
	    $(this).click(function(){
	        $(".city li").eq(index).click();
	    })
	})

	$(".city li").each(function(index){
		$(this).hover(function(){

			$(".map img").eq(index).trigger("mouseover");
		},function(){
			$(".map img").eq(index).trigger("mouseout");
			
		})

		
	})

	// tailor made map

	$(".map img").each(function(){
		var wd = $(this).width();
		var left = parseInt($(this).css("left"));
		var top = parseInt($(this).css("top"));
		$(this).css({"width" : wd-10, "left" : left+5, "top":top+5 });

		$(this).mouseover(function(){
			var wd = $(this).width();
			$(this).css({"width" : wd,"left" : left, "top":top });
		});
		$(this).mouseout(function(){
			$(this).css({"width" : wd-10,"left" : left+5, "top":top+5 });
		})
	})


	$(".container").click(function(){
		$(this).addClass("active").siblings().removeClass("active");
	})


	
});
})(jQuery);
