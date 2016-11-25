<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>课程管理系统</title>
<script language="javascript">
function delCookie(name)
{
	document.cookie= name+ "=;expores="+(new Date(0)).toGMTString();
}
function quit()
{
	delCookie("username");
	delCookie("pass");
	delCookie("isadmin");
}
</script>
</head>

<body>
<?php
require("conn.php");
if(@!$_POST['username'])
{
$rs= mysql_query("select * from teacher where teacher= ".@$_COOKIE['username']);
if(!$rs)
{
	print("Access Denied");
	echo "<script language=\"JavaScript\">alert(\"登陆超时\");window.location.replace('index.php');</script>";
}
if(md5(sha1(sha1(@$_COOKIE['pass']))) != mysql_result($rs,0,'pwd'))
{
	print("Access Denied");
	echo "<script language=\"JavaScript\">alert(\"密码已过期\");window.location.replace('index.php');</script>";
}
if(mysql_result($rs,0,'subject')==0)
$admin= true;
else
$admin= false;

setcookie("username",$_COOKIE['username'],time()+60*5);
setcookie("pass",$_COOKIE['pass'],time()+60*5);
setcookie("isadmin",$admin,time()+60*5);

}
else
{
$rs= mysql_query("select * from teacher where teacher= ".@$_POST['username']);
if(!$rs)
{
	print("Access Denied");
	echo "<script language=\"JavaScript\">alert(\"用户名或密码错误\");window.location.replace('index.php');</script>";
}
if(md5(sha1(sha1($_POST['pass']))) != mysql_result($rs,0,'pwd'))
{
	print("Access Denied");
	echo "<script language=\"JavaScript\">alert(\"用户名或密码错误\");window.location.replace('index.php');</script>";
}
if(mysql_result($rs,0,'subject')==0)
$admin= true;
else
$admin= false;

setcookie("username",$_POST['username'],time()+60*5);
setcookie("pass",$_POST['pass'],time()+60*5);
setcookie("isadmin",$admin,time()+60*5);

}

?>

<div align="right">
<a href="index.php" onClick="quit()">退出</a>
</div>

<?="<div align='center' style='font-family:幼圆; font-size:24px'>Hello, ".mysql_result($rs,0,'teacher_name').", welcome!</div>"?>

<div>
<div align="center" style="float:left;width:200px; line-height:50px">
<?php
 if($admin)
 {
	 echo "
&lt;!--基本信息管理--&gt;<br>
<a href='admin.php?function=manageclass'>班级管理</a><br>
<a href='admin.php?function=managestudent'>学生管理</a><br>
<a href='admin.php?function=manageteacher'>教师管理</a><br>
<a href='admin.php?function=managesemester'>学期管理</a><br>";
 }
?>
&lt;!--学期信息管理--&gt;<br>
<a href='admin.php?function=semsbj'>学期学科管理</a><br>
<a href='admin.php?function=sbjtec'>科目教师管理</a><br>
<a href='admin.php?function=stugra'>学生成绩管理</a><br>

</div>
<div align="center" style="float:left; margin:0 50px; line-height:50px">
<?php
if(@$_GET['function']=="manageclass")
	require("manageclass.php");
?>
</div>
</div>
</body>
</html>