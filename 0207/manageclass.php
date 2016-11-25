<form id="del" method="post" action="manageclass.php">
<input type="hidden" name="delclassid" id="delclass">
</form>
<script language="javascript">
function delClass(classid)
{
	document.getElementById("delclass").value=classid;
	document.getElementById("del").submit();
}
</script>
<?php
if(@$_POST['classid'])
{
	require("conn.php");
	$rs= mysql_query("insert into class(class,class_name,headteacher) values('".$_POST['classid']."','".$_POST['classname']."','".$_POST['headteacher']."')");
	echo "<script language=\"JavaScript\">window.location.replace('admin.php?function=manageclass');</script>";
}
else if(@$_POST['delclassid'])
{
	require("conn.php");
	$rs= mysql_query("delete from class where class= ".$_POST['delclassid']);
	echo "<script language=\"JavaScript\">window.location.replace('admin.php?function=manageclass');</script>";	
}
print <<<EOT
<form method="post" action="manageclass.php">
班级ID<input name="classid" id="addclassid" size="4" maxlength="6" style="IME-MODE: disabled" onKeyUp="value=value.replace(/[^\d]/g,'') ">
班级名称<input name="classname" id="addclassname" size="10" maxlength="20">
班主任ID<input name="headteacher" id="addheadteacher" size="8" maxlength="11" style="IME-MODE: disabled" onKeyUp="value=value.replace(/[^\d]/g,'') ">
<input type="submit" value="添加班级">
</form>
EOT;
$rs= mysql_query("select * from class, teacher where class.headteacher = teacher.teacher")
or print("没有班级请添加班级！");
$s= mysql_numrows($rs);
if($s== 0)
	die("没有班级请添加班级！");
echo "<table width='300' border='1' align='center'>";
echo "<tr><td align='center'>班级ID</td><td align='center'>班级名称</td><td align='center'>班主任</td></tr>";
for($i=0;$i<$s;$i++)
{
	$classid= mysql_result($rs,$i,'class');
	$classname= mysql_result($rs,$i,'class_name');
	$headteacher= mysql_result($rs,$i,'teacher_name');
	echo "<tr>";
	echo "<td align='center'>".$classid."</td>";
	echo "<td align='center'>".$classname."</td>";
	echo "<td align='center'>".$headteacher."</td>";
	echo "<td align='center'><button onclick=\"delClass('".$classid."')\">删除</button></td>";
	echo "</tr>";
}
echo "</table>";
?>
