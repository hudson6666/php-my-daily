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

$array[] = array("newsID"=>1, "newsTitle"=>"��1������"); 

$array[] = array("newsID"=>2, "newsTitle"=>"��2������"); 

$array[] = array("newsID"=>3, "newsTitle"=>"��3������"); 

$array[] = array("newsID"=>4, "newsTitle"=>"��4������"); 

$array[] = array("newsID"=>5, "newsTitle"=>"��5������"); 

$array[] = array("newsID"=>6, "newsTitle"=>"��6������"); 

//����һ����ά�������� 

$smarty->assign("news", $array); 

//���벢��ʾλ��./templates�µ�index.htmģ�� 

$smarty->display("array.htm"); 

?>