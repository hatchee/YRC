<?php /* Smarty version Smarty-3.1.8, created on 2012-08-10 03:34:09
         compiled from "./templates\calendar.html" */ ?>
<?php /*%%SmartyHeaderCode:321995020c049c32825-85511503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ebf8690c641f0ea8f64c54d0ec28c80b0632e55' => 
    array (
      0 => './templates\\calendar.html',
      1 => 1344566659,
      2 => 'file',
    ),
    '577cb3b5f2047bc4eeb0585f5d7acabd05cd2fcd' => 
    array (
      0 => './templates\\layout.html',
      1 => 1344324379,
      2 => 'file',
    ),
    'd360287b5561fbd7b01fa73e1a1771ff0fcfdad9' => 
    array (
      0 => './templates\\chunk\\header.tpl',
      1 => 1344566169,
      2 => 'file',
    ),
    'd04f62d5ea29f5a4ffc2ac5ebd832681b3488bc7' => 
    array (
      0 => './templates\\chunk\\footer.tpl',
      1 => 1343638772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '321995020c049c32825-85511503',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5020c049cfbf88_57233474',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5020c049cfbf88_57233474')) {function content_5020c049cfbf88_57233474($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>YRC calendar page</title>
	<meta charset="utf-8" />
	<link href="style/global.css" rel="stylesheet" type="text/css"/>
	<script src="script/jquery-1.7.1.min.js" type="text/javascript"></script>
	<script src="script/global.js" type="text/javascript"></script>
	
<link rel="stylesheet" type="text/css" href="/style/calendar.css">
<script type="text/javascript" src="script/calendar.js"></script>

</head>
	
<body>
<div id="wrap">

<?php /*  Call merged included template "chunk/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("chunk/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '321995020c049c32825-85511503');
content_50248131af2c25_46460092($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "chunk/header.tpl" */?>


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

	<div class="mainbody calendar clearfix">
		
		<h1>Yangtze River Cruise Calendar in July, 2012</h1>
		<p sytle="width: 657px;">
			To help you find the ideal Yangtze cruise ship more easily, we classify the following chart more clearly, so please be patinet, and follow your travel date to find a perfect ship. If you don't find anyone, please feel free to contact our cruise experts online or drop us a line, and we'll try our best to contact you within 0.5 hour.
		</p>
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
				<tr class="thead">
					<th class="thdate">Cruise Date</th>
					<th>
						Chongqing
						<img src="image/right-arrow.png">	
						Yichang
						<br>	
						<span>(downstream 4days)</span>
					</th>
					<th>
						Yichang
						<img src="image/right-arrow.png">	
						Chongqing
						<br>	
						<span>(upstream 5days)</span>
					</th>
					<th>
						Chongqing
						<img src="image/double-arrow.png">	
						Shanghai
						<span  class="explain">
							<img src="img/ico_question.png">	
							<p class="prompt">
								There is only one ship cruing between Chongqing and Shanghai - Victoria Sophia, which sails every Monday from Chongqing, and back on next Sunday from Shanghai.
							</p>
						</span>
						<br>	
						<span>(downstream 8days/upstream 9days)</span>

					</th>
				</tr>
			</table>

		</div>
		<div class="tabunit">

			<table>
				<tr>
					<td class="date">
						<div>
							July.&nbsp;1
							<br> <i>Mon.</i>
						</div>
					</td>
					<td>
						<p>
							*
							<a href="/ships/victoria-queen.html">Victoria Lianna</a>
							&nbsp; <i>$408 - $732</i>
							&nbsp;
							<img src="img/5star.gif" class="star"></p>
					</td>
					<td>
						<p>
							*
							<a href="/ships/viking-century-sun.html">Viking Century Sun</a>
							&nbsp;
							<i>$495 - $646</i>
							&nbsp;
							<img src="img/5star.gif" class="star"></p>
						<p>
							*
							<a href="/ships/victoria-grace.html">Victoria Grace</a>
							&nbsp;
							<i>$408 - $732</i>
							&nbsp;
							<img src="img/5star.gif" class="star"></p>
					</td>
					<td>
						<img title="No available ship today" alt="No available ship today" src="image/icon-unavailable.png" class="unva"></td>
				</tr>
			</table>
		</div>
	</div><!-- END OF #mainbody -->

	<?php /*  Call merged included template "chunk/footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("chunk/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '321995020c049c32825-85511503');
content_50248131afcdd2_70934378($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "chunk/footer.tpl" */?>
</div><!-- END OF #wrap -->
</body>

</html><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2012-08-10 03:34:09
         compiled from "./templates\chunk\header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50248131af2c25_46460092')) {function content_50248131af2c25_46460092($_smarty_tpl) {?><div class="headtop">
    0845 287 6177
    Contact us Mon - Fri 9am - 7pm
</div>

 <div id="header">
 	<a id="logo" href="/" title="Home"></a>
 </div>
 <div id="menu">
	<ul class="clearfix">
		<li class="">
			<a href="/" class="home">Home</a>
		</li>
		<li class="">
			<a href="">Find a Cruise</a>
		</li>
		<li>
			<a href="">China Yangtze Tour</a>
		</li>
		<li>
			<a href="">Travel Guide</a>
		</li>
		<li class="active">
			<a href=""> Cruise FAQs </a>
		</li>
		<li>
			<a href="">About Us</a>
		</li>
		<li>
			<a href="">Travel Agent</a>
		</li>
	</ul>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2012-08-10 03:34:09
         compiled from "./templates\chunk\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50248131afcdd2_70934378')) {function content_50248131afcdd2_70934378($_smarty_tpl) {?><div id="footer">
	footer
</div><?php }} ?>