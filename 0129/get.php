<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
	if(@$_GET['a'])
	{
		$score = (int)$_GET['a'];
		echo require("get_1.php");
	}
	else
		echo "please get me an score.";
?>
<form method="get" action="get.php">
<input name="a" id="a" >
<input type="submit" value="submit">
</form>
</body>
</html>