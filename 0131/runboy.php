<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<form id="runner" method="post" action="runboy.php">
<input type="hidden" name="runboy" value="true">
</form>
<?php
	if(@$_POST['runboy'])
	{
		system('cout1234.exe');
	}
	else
	{
		echo "<script launguage='javascript'>if(confirm('这个程序会在服务器上产生很大的文件！程序并不会因您离开此网页而停止，请访问killmyboy.php来终止他！'))document.getElementById('runner').submit();</script>";
	}
?>
</body>
</html>