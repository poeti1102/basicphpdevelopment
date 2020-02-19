<?php
	require_once('db.php');
	session_start();

	function create($pdo)
	{
		$name = $_POST['name'];
		$desc = $_POST['desc'];
		$items = $_POST['items'];

		$dir = "images/";
		$image = time(). '_' . $_FILES["image"]["name"];

		// print_r($_FILES["image"]);

		$sql = "INSERT INTO `recipes`(`name`,`description`,`items`,`image`) VALUES(:name , :desc , :items, :image)";
		$stmt = $pdo->prepare($sql);
		$stmt->execute([
			':name' => $name,
			':desc' => $desc,
			':items' => $items,
			':image' => $image,
		]);
		move_uploaded_file( $_FILES["image"]["tmp_name"] , $dir . $image);

		$_SESSION['create_success'] = 1;

		header("location: create.php");
	}

	function update()
	{

	}

	function delete()
	{

	}

	if(isset($_POST['add']))
	{
		create($pdo);
	}

	if(isset($_POST['edit']))
	{
		update();
	}

	if(isset($_POST['delete']))
	{
		delete();
	}
?>