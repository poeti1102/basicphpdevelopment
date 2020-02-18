<?php
	require_once('lesson1-dbconnect.php');

	$sql = "
		SELECT *
		FROM `students`";

	// $stmt = $pdo->prepare($sql);
	// $stmt->execute();

	// $data = $stmt->fetchAll();
	// //$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

	// echo "<pre>";
	// print_r($data);
	// echo "</pre>";

	$sql = "
		SELECT *
		FROM `students`
		WHERE `students`.`id` = 1";

	// $sql = "
	// 	SELECT *
	// 	FROM `students`
	// 	WHERE `students`.`id` > 1";

	// $sql = "
	// 	SELECT *
	// 	FROM `students`
	// 	WHERE `students`.`id` > 1
	// 	AND `students`.`id` < 4";

	// $sql = "
	// 	SELECT *
	// 	FROM `students`
	// 	WHERE `students`.`id` = 1
	// 	OR `students`.`id` = 4";

	// $sql = "
	// 	SELECT *
	// 	FROM `students`
	// 	WHERE `students`.`name` LIKE '%M%' ";

	$stmt = $pdo->prepare($sql);
	$stmt->execute();

	// $data = $stmt->fetchAll();
	$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

	echo "<pre>";
	print_r($data);
	echo "</pre>";

?>