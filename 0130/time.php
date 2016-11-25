<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<script language="javascript">
function puch()
{
	if(year.value&&month.value&&date.value&&h.value&&m.value&&s.value)
	{
		button.type="submit";
	}
		
	else
	{
		alert("We except something from you");
		button.type="button";
	}
}
</script>
</head>

<body>
<?php
$mydate = getdate();
print_r($mydate);
$mytime = gettimeofday();
print_r($mytime);
echo "<br><br>";
if(checkdate(@$_GET['month'],@$_GET['date'],@$_GET['year']))
{
	echo "Legal Date<br>";
	$poke = mktime($_GET['h'],$_GET['m'],$_GET['s'],$_GET['month'],$_GET['date'],$_GET['year']);
}
else $poke = time();
echo date('\T\h\i\s \i\s l, F jS.',$poke)."<br>";
echo date('Y-m-d. y-n-j. ',$poke)."<br>";
echo date('\I\t \i\s e O G:i:s \o\r g:i:sA(a).',$poke)."<br>";
echo date('这是星期N（星期天为7）或星期w（星期天为0）。',$poke)."<br>";
echo date('这是第z天，第W周，本月t天，闰年？L。',$poke)."<br>";
echo date('\t\i\m\e\s\t\a\m\p:U',$poke)."<br>";
?>
<form method="get" action="time.php">
<input size="4" style="IME-MODE: disabled" onKeyUp="value=value.replace(/[^\d]/g,'') " maxlength="4" name="year" id="year">年
<input size="2" style="IME-MODE: disabled" onKeyUp="value=value.replace(/[^\d]/g,'') " maxlength="2" name="month" id="month">月
<input size="2" style="IME-MODE: disabled" onKeyUp="value=value.replace(/[^\d]/g,'') " maxlength="2" name="date" id="date">日
<input size="2" style="IME-MODE: disabled" onKeyUp="value=value.replace(/[^\d]/g,'') " maxlength="2" name="h" id="h">时
<input size="2" style="IME-MODE: disabled" onKeyUp="value=value.replace(/[^\d]/g,'') " maxlength="2" name="m" id="m">分
<input size="2" style="IME-MODE: disabled" onKeyUp="value=value.replace(/[^\d]/g,'') " maxlength="2" name="s" id="s">秒
<input type="button" id="button" value="submit" onClick="puch()">
</form>
<?php
echo "<br>";
echo date('\T\o\d\a\y \i\s l, F jS.')."<br>";
echo date('Y-m-d. y-n-j. ')."<br>";
echo date('\N\o\w \i\s e O G:i:s \o\r g:i:sA(a).')."<br>";
echo date('今天是星期N（星期天为7）或星期w（星期天为0）。')."<br>";
echo date('今天是第z天，第W周，本月t天，闰年？L。')."<br>";
echo date('\t\i\m\e\s\t\a\m\p:U');
?>

</body>
</html>