<?php /* Smarty version Smarty-3.1.8, created on 2012-08-06 03:12:45
         compiled from "./templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:70224fb3773fcd1457-48889978%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc1c3ef5cc9c08dc853f6b428d15c38ce0aa533a' => 
    array (
      0 => './templates\\index.html',
      1 => 1344221321,
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
  'nocache_hash' => '70224fb3773fcd1457-48889978',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fb3773fd42529_99907454',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fb3773fd42529_99907454')) {function content_4fb3773fd42529_99907454($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<div id="wrap">
	<?php /*  Call merged included template "header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '70224fb3773fcd1457-48889978');
content_501f362da3b250_84522370($_smarty_tpl);
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

		<h1>Yangtze River Cruise Calendar in July, 2012</h1>
		<p>
			To help you find the ideal Yangtze cruise ship more easily, we classify the following chart more clearly, so please be patinet, and follow your travel date to find a perfect ship. If you don't find anyone, please feel free to contact our cruise experts online or drop us a line, and we'll try our best to contact you within 0.5 hour. 
		</p>

<script type="text/javascript">
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
</script>
		<div id="can-nav">
			<ul class="tabnav clearfix">
				<li>2012</li>
				<li>2013</li>
			</ul>
			<ul class="tabmonth clearfix">
					<li ref="1">Jan.</li>
					<li ref="2">Feb.</li>
					<li ref="3">Mar.</li>
					<li ref="4">Apr.</li>
					<li ref="5">May.</li>
					<li ref="6">June.</li>
					<li ref="7">July.</li>
					<li ref="8">Aug.</li>
					<li ref="9">Sept.</li>
					<li ref="10">Oct.</li>
					<li ref="11">Nov.</li>
					<li ref="12">Dec.</li>
			</ul>
			<table>
				<tr>
					<th>Date</th>
					<th>Chongqing - Yichang<br>(downstream 4days)</th>
					<th>Chongqing - Yichang<br>(downstream 4days)</th>
					<th>Chongqing - Yichang<br>(downstream 4days)</th>
					<th>Chongqing - Yichang<br>(downstream 4days)</th>
				</tr>
			</table>

		</div>
		<div class="tabunit">
			
			<table>
				<!-- <tr>
					<th>Date</th>
					<th>Chongqing - Yichang<br>(downstream 4days)</th>
					<th>Chongqing - Yichang<br>(downstream 4days)</th>
					<th>Chongqing - Yichang<br>(downstream 4days)</th>
					<th>Chongqing - Yichang<br>(downstream 4days)</th>
				</tr> -->
				<tr>
					<td>
						<div class="date">July 13 <br><i>Fri</i></div>
					</td>
					<td>
						* Victoria Anna  super-5 star   <i>$305-$410</i><br>
						* Victoria Anna  super-5 star   <i>$305-$410</i><br>
						* Victoria Anna  super-5 star   <i>$305-$410</i><br>
						* Victoria Anna  super-5 star   <i>$305-$410</i>
					</td>
					<td>
						* Victoria Anna  super-5 star   <i>$305-$410</i><br>
						* Victoria Anna  super-5 star   <i>$305-$410</i><br>
						* Victoria Anna  super-5 star   <i>$305-$410</i><br>
						* Victoria Anna  super-5 star   <i>$305-$410</i>
					</td>
					<td>
						No availbale
					</td>
					<td>
						No availbale
					</td>
				</tr>

				<tr>
					<td>
						<div class="date">July 13 <br>Fri</div>
					</td>
					<td>
						* Victoria Anna  super-5 star   $305-$410<br>
						* Victoria Anna  super-5 star   $305-$410<br>
						* Victoria Anna  super-5 star   $305-$410<br>
						* Victoria Anna  super-5 star   $305-$410
					</td>
					<td>
						* Victoria Anna  super-5 star   $305-$410<br>
						* Victoria Anna  super-5 star   $305-$410<br>
						* Victoria Anna  super-5 star   $305-$410<br>
						* Victoria Anna  super-5 star   $305-$410
					</td>
					<td>
						No availbale
					</td>
					<td>
						No availbale
					</td>
				</tr>
			</table>
		</div>
	</div>

	<?php /*  Call merged included template "footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '70224fb3773fcd1457-48889978');
content_501f362da54943_17913897($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "footer.tpl" */?>
</div>
</body>

</html><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2012-08-06 03:12:45
         compiled from "./templates\header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_501f362da3b250_84522370')) {function content_501f362da3b250_84522370($_smarty_tpl) {?> <div id="header">
 	<a id="logo" href="/" title="Home"></a>
 </div><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2012-08-06 03:12:45
         compiled from "./templates\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_501f362da54943_17913897')) {function content_501f362da54943_17913897($_smarty_tpl) {?><div id="footer">
	footer
</div><?php }} ?>