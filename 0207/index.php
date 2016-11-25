<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>用户登录</title>
<link href="jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.button.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<script src="jQueryAssets/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="jQueryAssets/jquery.ui-1.10.4.button.min.js" type="text/javascript"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

<div align="center" style="font-family:微软雅黑" >

<font style="font-size:24px;">用户登录</font>
<br><br>

<form method="post" id="login" action="admin.php">
用户ID <input name="username" id="textbox1"><br>
<br>
密码 <input type="password" name="pass" id="textbox2"><br>
<br>
<input type="submit" name="button" id="button1" value="登录">
</form>

</div>
<span class="label label-default">
<label id="label1">这个网页很难看，为什么这么难看呢？美工哪去啦！！！</label>
<br><br>
<label id="label2">你现在看到的将不复存在，一切都将用div+css+smarty+jQuery重写</label>
</span>
<script type="text/javascript">
$(function() {
	$( "#button1" ).button(); 
	$( "#textbox1").button(); 
	$( "#textbox2" ).button();
});

</script>

</body>
</html>
