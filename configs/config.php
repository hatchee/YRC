<?php

require('./smarty/Smarty.class.php');
$smarty = new Smarty();

$smarty->caching = false;

$smarty->setTemplateDir('./templates');
$smarty->setCompileDir('./templates_c');
$smarty->setCacheDir('./cache');
$smarty->setConfigDir('./configs');

$smarty->left_delimiter = "{";
$smarty->right_delimiter = "}";
?>