<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>id18</title>
</head>

<body>

    <form id="form1" name="form1" method="post" action="id18.php">
<?php
if(isset($_POST["id"])) {
	$pid = $_POST["id"];
	$id = array();
	$sum = 0;
	for($i = 0; $i < 17; ++$i) {
		$id[$i] = intval($pid[$i]);
	}
	$sum = 7 * $id[0] + 9 * $id[1] + 10 * $id[2] + 5 * $id[3] + 8 * $id[4] + 4 * $id[5] + 2 * $id[6] + 1 * $id[7] + 6 * $id[8] + 3 * $id[9] + 7 * $id[10] + 9 * $id[11] + 10 * $id[12] + 5 * $id[13] + 8 * $id[14] + 4 * $id[15] + 2 * $id[16];
	$x = $sum % 11;
	$x = 12 - $x;
	if($x == 12)
		$x = 1;
	if($x == 11)
		$x = 0;
	if($x == 10)
		$x = 'X';
	echo "身份证号前17位<input type='text' name='id' value='$pid'/><br>";
    echo "第十八位是$x";
}
else {
	echo '身份证号前17位<input type="text" name="id"/><br>';
}
?>
	<input type="submit" value="提交" />
    </form>

</body>
</html>