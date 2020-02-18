<?php
	require_once('lesson1-dbconnect.php');

	$sql = "UPDATE `students` SET `name` = 'Kyaw Gyi' WHERE `id` = 1";

	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	echo "Updated!!! <br/>";

	$sql1 = "UPDATE `students` SET `name` = 'Khin Maung Oo' , `gender` = 'male'  WHERE `id` = 3";

	$stmt = $pdo->prepare($sql1);
	$stmt->execute();
	echo "Updated!!! <br/>";
?>