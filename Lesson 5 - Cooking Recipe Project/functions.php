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
		$name = $_POST['name'];
		$desc = $_POST['desc'];
		$items = $_POST['items'];
		$id = $_POST['id'];

		$dir = "images/";
		

		// print_r($_FILES["image"]);
		if(empty($_FILES["image"]))
		{
			$image =$_POST['old_image'];
		} else {
			$image = time(). '_' . $_FILES["image"]["name"];
		}
		die();

		// Check Image exist or not

		$sql = "UPDATE `recipes` SET `name` = :name , `description` = :desc , `items` = :items , `image` = :image WHERE `id` = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute([
			':name' => $name,
			':desc' => $desc,
			':items' => $items,
			':image' => $image,
			':id' => $id,
		]);

		if(empty($_FILES["image"]))
		{
			// Do nothing
		} else {
			// Move new file
			move_uploaded_file( $_FILES["image"]["tmp_name"] , $dir . $image);
			// Delete old file

		}
		

		$_SESSION['edit_success'] = 1;

		header("location: edit.php");
	}

	function delete()
	{
		$id = $_POST['id'];
		$sql = "DELETE FROM `recipes` WHERE `id` = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute([":id" => $id]);

		$_SESSION['delete_success'] = 1;

		header("location: index.php");
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