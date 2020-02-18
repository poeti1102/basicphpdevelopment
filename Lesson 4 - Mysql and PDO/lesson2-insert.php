<?php
		require_once('lesson1-dbconnect.php');

		$sql = "INSERT INTO `students`(`name`,`email`,`gender`,`phone`) VALUES('Kyaw Kyaw','kyaw123@gmail.com','male','098574142')";

		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		echo "Database inserted! <br/>";

		$sql1 = "INSERT INTO `students` (`name`,`email`,`gender`,`phone`) VALUES ('Mg Mg','mgmg123@gmail.com','male','098874142')";
		$sql2 = "INSERT INTO `students` (`name`,`email`,`gender`,`phone`) VALUES ('Khin Khin','khn22@gmail.com','female','09857412042')";
		$sql3 = "INSERT INTO `students` (`name`,`email`,`gender`,`phone`) VALUES ('Su Mon','smonlay68@gmail.com','female','09846546')";
		$sql4 = "INSERT INTO `students` (`name`,`email`,`gender`,`phone`) VALUES ('Tun Tun','singertuntun123@gmail.com','male','09458022411')";

		$stmt = $pdo->prepare($sql1);
		$stmt->execute();


		$stmt = $pdo->prepare($sql2);
		$stmt->execute();


		$stmt = $pdo->prepare($sql3);
		$stmt->execute();


		$stmt = $pdo->prepare($sql4);
		$stmt->execute();

		echo "Database inserted! <br/>";
?>