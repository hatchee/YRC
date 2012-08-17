<?php /* Smarty version Smarty-3.1.8, created on 2012-08-17 09:07:58
         compiled from "./templates\calendar.html" */ ?>
<?php /*%%SmartyHeaderCode:29580502e09ee83b565-02046244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ebf8690c641f0ea8f64c54d0ec28c80b0632e55' => 
    array (
      0 => './templates\\calendar.html',
      1 => 1345016363,
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
      1 => 1345098361,
      2 => 'file',
    ),
    'd04f62d5ea29f5a4ffc2ac5ebd832681b3488bc7' => 
    array (
      0 => './templates\\chunk\\footer.tpl',
      1 => 1345013085,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29580502e09ee83b565-02046244',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_502e09ee8e2a29_76486020',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_502e09ee8e2a29_76486020')) {function content_502e09ee8e2a29_76486020($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<div class="wrap">

<?php /*  Call merged included template "chunk/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("chunk/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '29580502e09ee83b565-02046244');
content_502e09ee8c62b2_22563174($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "chunk/header.tpl" */?>


	<div class="mainbody calendar clearfix">
		<div class="conbody">
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
		</div>
	</div><!-- END OF .mainbody -->

	<?php /*  Call merged included template "chunk/footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("chunk/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '29580502e09ee83b565-02046244');
content_502e09ee8d8171_72353094($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "chunk/footer.tpl" */?>
</div><!-- END OF .wrap -->
</body>

</html><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2012-08-17 09:07:58
         compiled from "./templates\chunk\header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_502e09ee8c62b2_22563174')) {function content_502e09ee8c62b2_22563174($_smarty_tpl) {?><div class="headtop clearfix">
	<div class="ht-left">
		<a href="#">Home</a> |
		<a href="#">Customize a Tour</a>|
		<a href="#">Travel Agent</a>
	</div> 
	<div class="ht-mid">
		Specialized in Yangtze Cruise since 1999 !
	</div> 
	<div class="ht-right">
		<p>
			<span class="icon-call"></span> <b>86-23-89009012 </b>
		</p>
		<p>
			<span class="icon-email"></span> <b>info@yangtze-river-cruises.com </b>
		</p>
	</div> 
</div>

 <div class="header">
 	<a id="logo" href="/" title="Home"></a>
 </div>
 <div class="menu clearfix">
	<ul class="navleft">
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
	</ul>

	<ul class="navright">
		<li>
			<a href="">Victoria Cruise</a>
		</li>
		<li>
			<a href="">Century Cruise</a>
		</li>
		<li>
			<a href="">President Cruise</a>
		</li>
	</ul>
</div>
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

</div><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2012-08-17 09:07:58
         compiled from "./templates\chunk\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_502e09ee8d8171_72353094')) {function content_502e09ee8d8171_72353094($_smarty_tpl) {?><div class="footer">
	<div class="footnav clearfix">
		<dl>
			<dt>Yangtze Cruise</dt>
			<dd><a href=""> Cruise Boats </a></dd>
			<dd><a href="">Cruise Calendar 2012 & 2013 </a></dd>
			<dd><a href=""> Cruise Boats </a></dd>
			<dd><a href=""> Cruise Boats </a></dd>
			<dd><a href=""> Cruise Boats </a></dd>
			<dd><a href=""> Cruise Boats </a></dd>
			<dd><a href=""> Cruise Boats </a></dd>
			<dd><a href=""> Cruise Boats </a></dd>
			<dd><a href=""> Cruise Boats </a></dd>
		</dl>

		<dl>
			<dt>Extended Tour</dt>
			<dd><a href=""> China & Yangtze </a></dd>
			<dd><a href=""> Beijing & Yangtze </a></dd>
			<dd><a href="">Shanghai & Yangtze </a></dd>
			<dd><a href="">Hong Kong & Yangtz</a></dd>
		</dl>

		<dl>
			<dt>Extended Tour</dt>
			<dd><a href=""> Cruise Boats </a></dd>
			<dd><a href="">Cruise Calendar 2012 & 2013 </a></dd>
			<dd><a href="">  Cruise Guide  </a></dd>
			<dd><a href=""> Cruise Onboard </a></dd>
			<dd><a href=""> Cruise Boats </a></dd>
			<dd><a href=""> Cruise Calendar 2012 & 2013 </a></dd>
			<dd><a href=""> Cruise Boats </a></dd>
		</dl>

		<dl class="lastdl">
			<dt>Boot with a tour</dt>
			<dd>Receive special offers and</dd>
			<dd>Receive special offers and</dd>
			<dt>Boot with a tour</dt>
			<dd>Receive special offers and</dd>
			<dd>Receive special offers and</dd>
			<dt>Boot with a tour</dt>
			<dd>Receive special offers and</dd>
			<dd>Receive special offers and</dd>
		</dl>
	</div>

	<div class="social">
		Follow Us 
		<a href=""> <img src="/image/twitter.jpg"></a>
		<a href=""> <img src="/image/twitter.jpg"></a>
		<a href=""> <img src="/image/twitter.jpg"></a>
	</div>

	<div class="footinfo">
		<p>
		<a class="footlogo" href=""><img src="/image/footlogo.png"></a>	
			Any questions, please contact: info yangtze-river-cruises.com or Call us: +86-23-89009012 
		<br>
			<span style="font-size:12px;">Our office address : Room 1802, New Chongqing Apartment, No.18 Minzu Road,Yuzhong District, Chongqing, P.R.China 400010
Copyright © 2001 - 2012. YangtzeRiverCruises, professional Chongqing local travel agency and China tour operator . All rights reserved</span>
		</p>

		<p>
			Yangtze-river-cruises.com is a proud member of the Chengdu Bamboo International Tours Co., Ltd, the China leader in delievering outstanding discovery travel experiences. Registered Office: 1#23, No.288, Wuyang Avenue 1st Section, Wuhou District, Chengdu, China. The other members are: China Discovery Tours; Tibet Discovery Tours; and Beijing Holiday Tours.
		</p>

		<p>
			If you have any suggestions or comments about our websites, please <a href="">e-mail our webmaster</a>. 
		</p>
	</div>


</div><?php }} ?>