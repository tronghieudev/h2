<?php
	include_once('../DB.php');
	include_once('../function.php');

	$sql = select('category',1);
	$result = $mysqli->query($sql);
	echo returnJson($result);

?>