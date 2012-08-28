(function(){

function Submitform(){
	var formobj=document.getElementById("inquiryform");
	formobj.method="post";
	formobj.action="crmsys/getmail/";
	formobj.submit();
}

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
		$(this).mouseover(function(){
			$(".map img").eq(index).trigger("mouseover");
		})

		$(this).mouseout(function(){
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
			$(this).css({"width" : wd,"left" : left, "top":top });
		});
		$(this).mouseout(function(){
			$(this).css({"width" : wd-10,"left" : left+5, "top":top+5 });
		})
	})


$(".container").click(function(){

	$(this).children("h2").addClass("active").siblings();
	$(this).siblings().children("h2").removeClass("active");

})










	// var choosed = '<span class="ok"></span>'
	// $( '.destination li' ).each(function(){
	// 	$( this ).click(function(){
	// 		$( '.container h2' ).removeClass( 'active' ).eq( 0 ).addClass( 'active' ); 
	// 		if( $(this).children('input:checked').length>0){
	// 			$( this ).removeClass( 'active' ).children( '.ok' ).remove();
	// 			$( this ).children( 'input' ).attr( 'checked', false );
	// 		}else{
	// 			$( this ).addClass( 'active' ).append( choosed ).children( 'input' ).attr( 'checked', true );
	// 		}
	// 	})	
	// });	










	
	// $( '.city li' ).each(function(){
	// 	$( this ).click(function(){
	// 		$( '.container h2' ).removeClass( 'active' ).eq( 0 ).addClass( 'active' ); 
	// 		if( $(this).children('input:checked').length>0){
	// 			$( this ).removeClass( 'active' ).children( '.ok' ).remove();
	// 			$( this ).children( 'input' ).attr( 'checked', false );
	// 		}else{
	// 			$( this ).addClass( 'active' ).append( choosed ).children( 'input' ).attr( 'checked', true );
	// 			$( this ).siblings().removeClass( 'active' ).children( 'input' ).attr( 'checked', false);
	// 			$( this ).siblings().children( '.ok' ).remove();
	// 		}
	// 	});
	// });
	
	// $( '.first-block input' ).focus(function(){
	// 	$( '.container h2' ).removeClass( 'active' ).eq( 0 ).addClass( 'active' ); 
	// });
	// $( '.first-block' ).focus(function(){
	// 	$( '.container h2' ).removeClass( 'active' ).eq( 0 ).addClass( 'active' ); 
	// });
	// $( '.other-choice' ).focus(function(){
	// 	$( '.container h2' ).removeClass( 'active' ).eq( 1 ).addClass( 'active' ); 
	// });
	// $( '.third-block' ).focus(function(){
	// 	$( '.container h2' ).removeClass( 'active' ).eq( 2 ).addClass( 'active' ); 
	// });
	// $( '.fourth-block' ).focus(function(){
	// 	$( '.container h2' ).removeClass( 'active' ).eq( 3 ).addClass( 'active' ); 
	// });

	
	// $( '#customsub' ).click(function( e ){
	// 	e.preventDefault();
	// 	Submitform();
	// });
	
});
})(jQuery);
