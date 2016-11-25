<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<?php
require_once("seed.php");
?>
</head>

<body>
<?php
$start = gettimeofday();
srand(seed());
for($i=1;$i<=100;$i++)
	echo rand(1,100)." ";
$end = gettimeofday();
$sec=$end['sec']-$start['sec'];//程序经过的秒数
$usec=$end['usec']-$start['usec'];//程序经过的微秒数
$t= ($sec*1000000 + $usec)/100000;//换算成秒
echo "<br>程序运行了".$t."秒";
?>
</body>
</html>