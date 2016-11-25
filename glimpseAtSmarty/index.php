<?php

ini_set("display_errors","On"); error_reporting(E_ALL &~ E_NOTICE);
// load Smarty library
require('/var/www/smarty/Smarty.class.php');

$smarty = new Smarty;

$smarty->template_dir = '/var/www/smarty/glimpse/templates/';
$smarty->compile_dir = '/var/www/smarty/glimpse/templates_c/';
$smarty->config_dir = '/var/www/smarty/glimpse/configs/';
$smarty->cache_dir = '/var/www/smarty/glimpse/cache/';

$smarty->compile_check = true;
$smarty->caching = false;

$smarty->assign('name','Harry');

$smarty->display('index.tpl');
?>