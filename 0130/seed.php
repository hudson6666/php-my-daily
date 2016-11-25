<?php
function seed()
{
	list($mc, $sc) = explode(' ', microtime());
	return (float) $sc + ((float) $mc * 10000);
}
?>
