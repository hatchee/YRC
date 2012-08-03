<?php /* Smarty version Smarty-3.1.8, created on 2012-08-03 08:32:31
         compiled from "./templates\content.html" */ ?>
<?php /*%%SmartyHeaderCode:69665018f107a2b9a2-76501401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f6b02720da15c44ffce9e66ccaab847196c9172' => 
    array (
      0 => './templates\\content.html',
      1 => 1343982750,
      2 => 'file',
    ),
    '577cb3b5f2047bc4eeb0585f5d7acabd05cd2fcd' => 
    array (
      0 => './templates\\layout.html',
      1 => 1337852250,
      2 => 'file',
    ),
    'e83a1f498144167217acd8695de63ca7939774db' => 
    array (
      0 => './templates\\header.tpl',
      1 => 1343871967,
      2 => 'file',
    ),
    '1f1e9edc8553ba14e1b0d4fcf318d777601b0013' => 
    array (
      0 => './templates\\footer.tpl',
      1 => 1343638772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69665018f107a2b9a2-76501401',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5018f107ab4125_63463947',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5018f107ab4125_63463947')) {function content_5018f107ab4125_63463947($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>扬子江2.0</title>
	<meta charset="utf-8" />
	<link href="/style/global.css" rel="stylesheet" type="text/css"/>
	<link href="/style/jquery.lightbox-0.5.css" rel="stylesheet" type="text/css"  media="screen" />
	<script src="/script/jquery-1.7.1.min.js" type="text/javascript"></script>
	<script src="/script/jquery.lightbox-0.5.pack.js" type="text/javascript" ></script>
	<script src="/script/global.js" type="text/javascript"></script>
	

</head>
	
<body>

<script type="text/javascript">
$(function(){

	if($('.tips').length) { 
		var offset = $(".tips").offset(); 
		var topPadding = 15; 
		$(window).scroll(function() { 
			if ($(window).scrollTop() > offset.top){ 

				$(".tips").stop().animate({ 
					marginTop: $(window).scrollTop() - offset.top + topPadding 
				}); 

			} else { 

				$(".tips").stop().animate({ 
					marginTop: 0 
				}); 

			}; 
		}); 
	}; 

})

</script>

<div id="wrap">
	<?php /*  Call merged included template "header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '69665018f107a2b9a2-76501401');
content_501b8c9f738805_28575157($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "header.tpl" */?>
	
	<div id="menu">
		<ul class="clearfix">
			<li class="active">
				<a href="/" class="home">Home</a>
			</li>
			<li>
				<a href="tour.html">China Yangtze Tours</a>
			</li>
			<li>
				<a href="ships.html" class="menucurr">Ships</a>
			</li>
			<li class="active">
				<a href="http://www.yangtze-river-cruises.com/calendar/calendar2012-7.html" class="menucalendar">Calendar 2012</a>
				<div class="new"></div>
			</li>
			<li>
				<a href="yangtze-river-guide.html">Cruise Guide</a>
			</li>
			<li>
				<a href="experience.html">Onboard</a>
			</li>
			<li>
				<a href="about-us.html">About Us</a>
			</li>
		</ul>
	</div>
	<div id="mainbody" class="clearfix">
		<div class="breadcrum">
			You are here:
			<span class="B_crumbBox">
				<span class="B_firstCrumb">
					<a class="B_homeCrumb" href="/index.html" title="Yangtze River Cruise Home Page">Home</a>
				</span>
				&gt;
				<a class="B_crumb" href="/ships.html" title="Yangtze River Cruise Ships">Yangtze Cruise Ships</a>
				&gt;
				<span class="B_lastCrumb">
					<span class="B_currentCrumb">Victoria Jenna Cruise</span>
				</span>
			</span>
		</div>

		<div class="sidebar">
			<dl class="besttour">
				<dt>Ready-made Itineraries for inspiration</dt>
				<dd>
					<h3>Top 10 Best China Tour</h3>
					<span>( Top 10 Best China Tour -from Beijing to shanghai )</span>
				</dd>
				<dd>
					<h3>Top 10 Best China Tour</h3>
					<span>( Top 10 Best China Tour -from Beijing to shanghai )</span>
				</dd>
				<dd>
					<h3>Top 10 Best China Tour</h3>
					<span>( Top 10 Best China Tour -from Beijing to shanghai )</span>
				</dd>
				<dd>
					<h3>Top 10 Best China Tour</h3>
					<span>( Top 10 Best China Tour -from Beijing to shanghai )</span>
				</dd>
				<dd class="last">
					<h3>Top 10 Best China Tour</h3>
					<span>( Top 10 Best China Tour -from Beijing to shanghai )</span>
				</dd>
				
			</dl>
		</div>
		<div class="content">
			<h1>8 Days Beijing Yangtze Cruise Tour</h1>
			<div class="slide">
				<ul class="clearfix">
					<li><img src="image/slide.jpg" alt=""></li>
					<li><img src="image/slide.jpg" alt=""></li>
				</ul>
				<div class="caption">
					The Forum    <img src="image/slide-right-arrow.png"><img src="image/slide-left-arrow.png">
				</div>
			</div>
			<div class="visit clearfix">
				<p>
					<img src="image/slide.jpg" alt="" width="170" height="100">
				<b>You’ll visit: </b><br>
				
					Beijing, Xian, Shanghai, Yangtze River Cruise Shanghai,
					Beijing, Xian, Shanghai, Yangtze River Cruise, 
				</p>
			</div>
			<div class="route">
				<h2>Itinerary Details - day by day</h2>	
				<ul>
					<li>
						<span class='day'>Day 1</span>
						<h3>Bangkok to Chiang Mai >></h3>
						<p>
							First stop this morning is Bangkok’s increble RoyalPalace..........................
						</p>
					</li>
					
				</ul>
			</div>
		</div>

		<div class="aside">
			<dl class="tips">
				<dt>
					Price from $6,500<br>
					<a href=""> Condition? </a>
				</dt>
				<dd>
					<b>Tour Code:</b> YRC-BJ-03
				</dd>
				<dd>
					<b>Travel Style: </b>private<img class="why" src="">
				</dd>
				<dd>
					<b>Departure: </b>you choose<img class="why" src="">
				</dd>
				<dd>
					<a class="btn" href="">Get a Quote</a>
				</dd>
				<dd>
					<h4>What's Included? </h4>
					<p>
						• All sights entrance; <br>
						• Meals specified in itinerary; <br>
						• Private guide, driver <br>
						• Domestic flight/train; <br>
						• Cruise ticket & transfer; 
					</p>	
				</dd>
				<dd class="share">
					SHARE
				</dd>
			</dl>
		</div>
		
	</div>

	<?php /*  Call merged included template "footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '69665018f107a2b9a2-76501401');
content_501b8c9f742a65_87523167($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "footer.tpl" */?>
</div>
</body>

</html><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2012-08-03 08:32:31
         compiled from "./templates\header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_501b8c9f738805_28575157')) {function content_501b8c9f738805_28575157($_smarty_tpl) {?> <div id="header">
 	<a id="logo" href="/" title="Home"></a>
 </div><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2012-08-03 08:32:31
         compiled from "./templates\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_501b8c9f742a65_87523167')) {function content_501b8c9f742a65_87523167($_smarty_tpl) {?><div id="footer">
	footer
</div><?php }} ?>