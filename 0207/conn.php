<?php
require_once("config.php");
$conn = @mysql_connect($server,$user,$pass);
if(!$conn)
{
	die("数据库连接失败");
}
mysql_query("set character set 'utf8'");
mysql_query("set names 'utf8'");
$c=mysql_select_db($dbname,$conn);
if(!$c)
{
	die("没有这个数据库");
}
?>