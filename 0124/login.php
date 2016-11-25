<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>用户验证</title>
</head>

<body>
<script language="javascript">
function on_submit()
{
	if(username.value == "")
	{
		alert("请输入用户名！");
	}
	else if(pass.value == "")
	{
		alert("暂不支持缺省密码！");
	}
	else
		btn_submit.type = "submit";
}
</script>
  <div align="center">登录
    <form id="form1" name="form1" method="post" action="login_target.php">
      用户名：<input type="text" name="username" id="username" /><br>
      密码：<input type="password" name="pass" id="pass" /><br>
      <input type="button" value="刷新" onClick="history.go(0)" />
      <input type="button" name="button" id="btn_submit" value="提交" onClick="on_submit()"/>
    </form>
  </div>

<div align="left" style="margin-top:100px;margin-left:400px; ">
	///请尝试：<br>
	///&lt;有效的用户名&gt;admin&lt;/有效的用户名&gt;<br>
    ///&lt;有效的口令&gt;cool&lt;/有效的口令&gt;<br>
    ///空用户名<br>
    ///空口令
</div>
</body>
</html>