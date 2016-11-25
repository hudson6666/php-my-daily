<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>第一个网页</title>
<script language="javascript">
function welcome() {
	alert("Hello world!");
}
function refresh(dirc){
	history.go(dirc);
}
</script>
</head>

<body onLoad="welcome()">
这是一段伟大的历史<br>
来自世界的瞩目和掌声<br>
<?php
	echo "<p align=right>现在时间是：".date("Y-m-d H:i:s",time())."</p>";
?>
<center>
<input type="button" value="后退" onClick="refresh(-1)">
<input type="button" value="刷新" onClick="refresh(0)">
<input type="button" value="前进" onClick="refresh(1)">
</body>
</html>