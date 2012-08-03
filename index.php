<?php
require('./configs/config.php');
$url = $_GET['url'];

if($url){
	$smarty->display($url);
}else{
	$smarty->display('sitemap.html');
}
// $smarty->display('index.html');
?>
