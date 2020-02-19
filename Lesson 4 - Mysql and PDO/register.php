<?php
	echo "Registering .... <br/>";
	if(isset($_GET['register']))
	{
		$username = $_GET['username'];
		$password = $_GET['pass'];
		$email = $_GET['email'];
		$gender = $_GET['gender'];
		$age = $_GET['age'];
		$address = $_GET['address'];
		$phone = $_GET['phone'];

		require_once('lesson1-dbconnect.php');

		$sql = "INSERT INTO `students`(`name`,`email`,`gender`,`phone`) VALUES(:name , :email , :gender , :phone)";

		$stmt = $pdo->prepare($sql);
		$stmt->execute([
			":name" => $username,
			":email" => $email,
			":gender" => $gender,
			":phone" => $phone,
		]);
	}
	echo "User Successfully Registered";
	echo "<a href=\"lesson6-form.php\">Back</a>"
?>