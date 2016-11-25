<?php
	if($score>=85)
		$str = "A<br>";
	else if($score>=70)
		$str = "B<br>";
	else if($score>=60)
		$str = "C<br>";
	else if($score>0)
		$str = "D<br>";
	else $str = "E<br>";
	
	return($str);
?>