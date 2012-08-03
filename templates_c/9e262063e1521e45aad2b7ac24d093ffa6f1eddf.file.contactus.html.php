<?php /* Smarty version Smarty-3.1.8, created on 2012-06-05 02:53:50
         compiled from "./templates\contactus.html" */ ?>
<?php /*%%SmartyHeaderCode:276434fc85e65393be3-82883970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e262063e1521e45aad2b7ac24d093ffa6f1eddf' => 
    array (
      0 => './templates\\contactus.html',
      1 => 1338791139,
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
      1 => 1338805648,
      2 => 'file',
    ),
    '08eb65ba2fb7574f09b3512a376af0760afb96ad' => 
    array (
      0 => './templates\\aside.tpl',
      1 => 1337929862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '276434fc85e65393be3-82883970',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fc85e6542e8b6_92517693',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fc85e6542e8b6_92517693')) {function content_4fc85e6542e8b6_92517693($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>关于我们</title>
	<meta charset="utf-8" />
	<link href="/style/global.css" rel="stylesheet" type="text/css"/>
	<link href="/style/jquery.lightbox-0.5.css" rel="stylesheet" type="text/css"  media="screen" />
	<script src="/script/jquery-1.7.1.min.js" type="text/javascript"></script>
	<script src="/script/jquery.lightbox-0.5.pack.js" type="text/javascript" ></script>
	<script src="/script/global.js" type="text/javascript"></script>
	
 <link href="/style/twocol.css" type="text/css" rel="stylesheet" /> 
 <link href="/style/googlemap.css" type="text/css" rel="stylesheet" /> 
 <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&language=ch"></script>
 <script type="text/javascript" src="gm.js"></script>
 
</head>
	
 <body class="contact_s">
 <div class="wrap">
 	<?php /*  Call merged included template "header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '276434fc85e65393be3-82883970');
content_4fcd74bed71807_52124379($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "header.tpl" */?>
 	<div class="content clearfix">
 		<div class="article hire">
 			<img src="/images/contactus.jpg"> 
 			<h2>联系我们</h2>
 			<p>
			<b>公司：</b>成都雅竹国际旅行社有限公司<br>
			<b>电话：</b>028-85227215<br>
			<b>传真：</b>028-61811579	<br>		
			<b>邮箱：</b>bm@utotrip.com<br>	
			<b>QQ：</b>1758863234<br>	
			<b>地址：</b>成都市武侯区武阳大道1段288号中央花园城市别墅1栋23号
			</p>
			<div id="map_canvas"></div> 
			
 		</div>
<?php /*  Call merged included template "aside.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("aside.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '276434fc85e65393be3-82883970');
content_4fcd74bed7bc10_36627758($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "aside.tpl" */?>
 	</div>
 	<!-- end of div.content --> </div>
 <!-- end of div.wrap --> </body>
 
</html><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2012-06-05 02:53:50
         compiled from "./templates\header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_4fcd74bed71807_52124379')) {function content_4fcd74bed71807_52124379($_smarty_tpl) {?> <div class="header">
    <a class="logo" href="/"></a>
    <div class="info">
      <p>电话：028-85227215</p>
      <p>QQ：1758863234</p>
      <p>地址：成都市武侯区武阳大道一段288号中央花园城市别墅1栋23号</p>
      <p>
        <a class="work home_x" href="/">首页</a>
      	<a class="work about_x" href="aboutus.php">关于我们</a>
        <a class="work hire_x" href="hire.php">工作机会</a>
      	<a class="work contact_x" href="contactus.php">联系我们</a>
      </p>
    </div>
  </div><?php }} ?><?php /* Smarty version Smarty-3.1.8, created on 2012-06-05 02:53:50
         compiled from "./templates\aside.tpl" */ ?>
<?php if ($_valid && !is_callable('content_4fcd74bed7bc10_36627758')) {function content_4fcd74bed7bc10_36627758($_smarty_tpl) {?>  <div class="aside">
    <div class="share">
      <div class="bshare-custom">
        <a title="分享到QQ空间" class="bshare-qzone" href="javascript:void(0);"></a>
        <a title="分享到新浪微博" class="bshare-sinaminiblog" href="javascript:void(0);"></a>
        <a title="分享到人人网" class="bshare-renren" href="javascript:void(0);"></a>
        <a title="分享到腾讯微博" class="bshare-qqmb" href="javascript:void(0);"></a>
        <a title="分享到豆瓣" class="bshare-douban" href="javascript:void(0);"></a>
        <a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a>
        <span class="BSHARE_COUNT bshare-share-count">0</span>
      </div>
      <script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/button.js#style=-1&amp;uuid=&amp;pophcol=1&amp;lang=zh"></script>
      <script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>
    </div>
    <div class="about">
      <img src="/images/aside-top.png">  
      
        <!-- 友途既不是传统的旅行社也不是以探险为主的户外俱乐部。友途旨在回归旅行本源，带你去探索四川真正的风土人情。去到雪山的脚下，拜访那些生活在山脚下的藏族人民，走访深入他们的生活，体验原汁原味的文化和风景。 -->
    </div>
   <!--  <h1>友途Services on the Road</h1> -->
    <p> <b>住宿</b>
      <img src="/images/aside01.jpg">
     <!--  No stars <br>
      但有热情好客的主人<br>
      简单干净的房间<br>
      ...... -->
    </p>
    <p>
      <b>玩转景点</b>
      <img src="/images/aside02.jpg">
      <!-- 精心制作的线路，<br>
      处处是景，<br>
      每个转角都让你“哇！” -->
    </p>
    <p>
      <b>餐，美食</b>
      <img src="/images/aside03.jpg">
      <!-- Never团餐<br>
      发掘local美食<br>
      烧烤之夜<br4>
      下午茶，冷餐party -->
    </p>
    <p>
      <b>优秀的领队</b>
      <img src="/images/aside04.jpg">
      <!-- 他们值得信任<br>
      他们拥有丰富的旅行经验<br>
      他们喜欢喝队员分享旅行中的快乐<br>
      他们能带领队员们深入探索旅程 -->
    </p>
  </div><?php }} ?>