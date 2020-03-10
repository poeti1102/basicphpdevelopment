<?php
	require_once('db.php');

	$sql = "SELECT * FROM `recipes`";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	$data = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Cooking Recpie - Home</title>

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<style type="text/css">
		.row div{
			border: 1px solid black;
		}

		.addnew {
			margin: 0 0 15px;
		}
	</style>
</head>
<body>
	<div class="container">
		
		<h1 align="center">Recipe List</h1>
		<div class="addnew">
			<a class="btn btn-success" href="create.php">Add New Recipe +</a><br>
		</div>
		<?php if(isset($_SESSION['delete_success'])): ?>
			<div class="alert alert-danger"> Item Deleted Successfully !</div>
		<?php endif; session_unset('delete_success'); ?>
		<table class="table">
			<thead>
				<tr>
					<th>Id.</th>
					<th>Image</th>
					<th>Recipe Name</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($data as $recipe): ?>
					<tr>
						<td><?php echo $recipe['id']; ?></td>
						<td><img class="rounded" src="images/<?php echo $recipe['image']; ?>" width=200 height=200></td>
						<td ><h2><?php echo $recipe['name']; ?></h2></td>
						<td>
							<a class="btn btn-primary" href="recipe.php?id=<?php echo $recipe['id']; ?>">Detail</a>
							<a class="btn btn-info" href="edit.php?id=<?php echo $recipe['id']; ?>">Edit</a>
							<form action="functions.php" method="POST" onsubmit="return confirm('Do you really want to delete the recipe?');">
								<input type="hidden" name="id" value="<?php echo $recipe['id']; ?>">
								<input type="submit" name="delete" class="btn btn-danger" value="Delete">
							</form>
						</td>
					</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div>
</body>
</html>