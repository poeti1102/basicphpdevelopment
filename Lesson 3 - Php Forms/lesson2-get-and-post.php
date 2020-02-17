<?php
	$name = "";
	$email = "";

	if(isset($_GET['reg']))
	{
		$name = $_GET['name'];
		$email = $_GET['email'];
	}

	// if(isset($_POST['reg']))
	// {
	// 	$name = $_POST['name'];
	// 	$email = $_POST['email'];
	// }
?>
<html>
<head>
	<title>
		Get And Post
	</title>
</head>
<body>
	<form action="" method="GET">
		Name : <input type="text" name="name" value="<?php echo $name; ?>" /> <br/><br/>
		Email : <input type="email" name="email"  value="<?php echo $email; ?>" /> <br/><br/>

		<input type="submit" value="Register" name="reg">
	</form>

	<p>
		<h3>Name is : <?php echo $name; ?></h3>
		<h3>Email is : <?php echo $email; ?></h3>
	</p>
</body>
</html>

