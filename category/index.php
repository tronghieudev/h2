<?php
	include_once('../DB.php');
	include_once('../function.php');

	$sql = select('category',null, 'DESC');
	$result = $mysqli->query($sql);
	echo returnJsons($result);

?>