<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
echo "<table align=center width=700 border=0.1>";
for($i=1;$i<=9;$i++)
{
	echo "<tr>";
	for($j=1;$j<=$i;$j++)
	{
		echo "<td align=center>";
		if($i>=$j)
			echo $j."X".$i."=".$i*$j;
		echo "</td>";
	}
	echo "</tr>";
}
echo "</table>";
?>
</body>
</html>