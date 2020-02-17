<?php
	/*
	/	Login Form
	/	Username, password
	/	KoKo123, k123!@#
	/	Login Status : Logged In
	/	Login Status : Incorrect Username Or Password
	*/
	session_start();
	
	$username = "";
	$password = "";
	$status = "";

	if(isset($_POST['login']))
	{
		$username = $_POST['uname'];
		$password = $_POST['pass'];

		if($username == "KoKo123" && $password == "k123!@#")
		{
			$status = "<span class='green'> Logged In </span>";
			$_SESSION['status'] = "<span class='violet'> Logged In </span>";

		} else 
		{
			$status = "<span class='red'> Incorrect Username Or Password </span>";
			$_SESSION['status'] = "<span class='cyan'> Not Logged In </span>";
		}
	}

	if(!isset($_SESSION['status']))
	{
		$_SESSION['status'] = "<span class='cyan'> Not Logged In </span>";
	}


?>
<html>
<head>
	<title>Exercise 1</title>

	<style type="text/css">
		.green {
			color : green;
		}

		.red {
			color : red;
		}

		.cyan {
			color : cyan;
		}

		.violet {
			color : violet;
		}
	</style>
</head>
<body>
	<form action="" method="POST">
		Username : <input type="text" name="uname" required value="<?php echo $username; ?>" /> <br/><br/>
		Password : <input type="password" name="pass" required value="<?php echo $password; ?>" /> <br/><br/>

		<input type="submit" name="login" value="Login">
	</form>

		<h1>Login Status : <?php echo $status; ?></h1>
		<h1>Session Status : <?php echo$_SESSION['status']; ?></h1>
</body>
</html>