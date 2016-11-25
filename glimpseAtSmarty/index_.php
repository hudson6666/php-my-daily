<?php

ini_set("display_errors","On"); error_reporting(E_ALL &~ E_NOTICE);
// load Smarty library
require('D:/WWW/smarty/Smarty.class.php');

$smarty = new Smarty;

$smarty->template_dir = 'D:/WWW/smarty/glimpse/templates/';
$smarty->compile_dir = 'D:/WWW/smarty/glimpse/templates_c/';
$smarty->config_dir = 'D:/WWW/smarty/glimpse/configs/';
$smarty->cache_dir = 'D:/WWW/smarty/glimpse/cache/';

$smarty->assign('name','Harry');

$smarty->display('index.tpl');
?>