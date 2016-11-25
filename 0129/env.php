<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Some Useful Cuts</title>
</head>

<body>
<?php
	echo "<table border=\"1.0\">";
	echo "<tr><td width=\"1400\">系统变量<br><br></td></tr>";
	echo "<tr><td>站点所在的目录:</td><td>".$_SERVER['DOCUMENT_ROOT']."</td></tr>";
	echo "<tr><td>HTTP主要报文:</td><td>".$_SERVER['HTTP_ACCEPT']."</td></tr>";
	echo "<tr><td>HTTP编码方式：</td><td>".$_SERVER['HTTP_ACCEPT_ENCODING']."</td></tr>";
	echo "<tr><td>HTTP语言：</td><td>".$_SERVER['HTTP_ACCEPT_LANGUAGE']."</td></tr>";
	echo "<tr><td>HTTP连接方式：</td><td>".$_SERVER['HTTP_CONNECTION']."</td></tr>";
	echo "<tr><td>网站的主机名：</td><td>".$_SERVER['HTTP_HOST']."</td></tr>";
	echo "<tr><td>浏览器客户端类型：</td><td>".$_SERVER['HTTP_USER_AGENT']."</td></tr>";
	echo "<tr><td>服务器的系统路径：</td><td>".$_SERVER['PATH']."</td></tr>";
	echo "<tr><td>客户计算机地址：</td><td>".$_SERVER['REMOTE_ADDR']."</td></tr>";
	echo "<tr><td>客户计算机端口：</td><td>".$_SERVER['REMOTE_PORT']."</td></tr>";
	echo "<tr><td>PHP解释引擎程序：</td><td>".$_SERVER['SCRIPT_FILENAME']."</td></tr>";
	echo "<tr><td>Web服务器的版本：</td><td>".$_SERVER['SERVER_SOFTWARE']."</td></tr>";
	echo "<tr><td><br><br>系统常量<br><br></td></tr>";
	echo "<tr><td>当前PHP文件名：</td><td>".__FILE__."</td></tr>";
	echo "<tr><td>当前PHP文件中所在的行数：</td><td>".__LINE__."</td></tr>";
	echo "<tr><td>当前所执行的函数：</td><td>".__FUNCTION__."</td></tr>";
	echo "<tr><td>当前所执行的类：</td><td>".__CLASS__."</td></tr>";
	echo "<tr><td>PHP的版本：</td><td>".PHP_VERSION."</td></tr>";
	echo "<tr><td>当前服务器的操作系统：</td><td>".PHP_OS."</td></tr>";
	echo "<tr><td>true：</td><td>".TRUE."</td></tr>";
	echo "<tr><td>false：</td><td>".FALSE."</td></tr>";
	echo "<tr><td>到最近的错误处：</td><td>".E_ERROR."</td></tr>";
	echo "<tr><td>到最近的警告处：</td><td>".E_WARNING."</td></tr>";
	echo "<tr><td>语法错误处：</td><td>".E_PARSE."</td></tr>";
	echo "<tr><td>PHP语言有异常处：</td><td>".E_NOTICE."</td></tr>";
	echo "<tr><td>圆周率:：</td><td>".M_PI."</td></tr>";
	echo "<tr><td>e:：</td><td>".M_E."</td></tr>";
	echo "<tr><td>1/ln2:：</td><td>".M_LOG2E."</td></tr>";
	echo "<tr><td>1/ln10:：</td><td>".M_LOG10E."</td></tr>";
	echo "<tr><td>ln2:：</td><td>".M_LN2."</td></tr>";
	echo "<tr><td>ln10:：</td><td>".M_LN10."</td></tr>";
	echo "</table>";
?>
</body>
</html>