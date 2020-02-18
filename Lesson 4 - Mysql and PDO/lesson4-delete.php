<?php
	require_once('lesson1-dbconnect.php');

	$sql = "DELETE FROM `students` WHERE `name` = 'Tun Tun'";
	$stmt = $pdo->prepare();
	$stmt->execute();
	print("Deleted!");

	
?>