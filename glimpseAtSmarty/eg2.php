<?php

ini_set("display_errors","On"); error_reporting(E_ALL &~ E_NOTICE);
// load Smarty library
require('D:/WWW/smarty/Smarty.class.php');

$smarty = new Smarty;

$smarty->template_dir = 'D:/WWW/smarty/glimpse/templates/';
$smarty->compile_dir = 'D:/WWW/smarty/glimpse/templates_c/';
$smarty->config_dir = 'D:/WWW/smarty/glimpse/configs/';
$smarty->cache_dir = 'D:/WWW/smarty/glimpse/cache/';


$smarty->compile_check = true;
$smarty->caching = false;

$array[] = array("newsID"=>1, "newsTitle"=>"第1条新闻"); 

$array[] = array("newsID"=>2, "newsTitle"=>"第2条新闻"); 

$array[] = array("newsID"=>3, "newsTitle"=>"第3条新闻"); 

$array[] = array("newsID"=>4, "newsTitle"=>"第4条新闻"); 

$array[] = array("newsID"=>5, "newsTitle"=>"第5条新闻"); 

$array[] = array("newsID"=>6, "newsTitle"=>"第6条新闻"); 

//这是一个二维关联数组 

$smarty->assign("news", $array); 

//编译并显示位于./templates下的index.htm模板 

$smarty->display("array.htm"); 

?>