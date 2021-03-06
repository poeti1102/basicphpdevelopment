<?php session_start();
    require_once('db.php');

    $id = $_GET['id'];

    $sql = "SELECT * FROM `recipes` WHERE `id` = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(":id" => $id));
    $recipe = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cooking Recipes - Edit</title>

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery.min.js"></script>

	<style type="text/css">
		.back {
			margin: 15px;
		}
	</style>
</head>
<body>
	<div class="container">
		<a href="index.php" class="btn btn-primary back"> Recipe List </a>
		<h1 align=center>Edit New Recipe</h1>
		<?php if(isset($_SESSION['edit_success'])): ?>
			<div class="alert alert-success"> Item Updated Successfully !</div>
		<?php endif; session_unset('edit_success'); ?>
		<form action="functions.php" method="POST" enctype="multipart/form-data">
			<div class="form-group row">
			    <label class="col-sm-2 col-form-label">Recipe Name</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="name" value="<?php echo $recipe['name']; ?>">
			    </div>
			  </div>

			  <div class="form-group row">
			    <label class="col-sm-2 col-form-label">Description</label>
			    <div class="col-sm-10">
			      <textarea class="form-control" name="desc"><?php echo $recipe['description']; ?></textarea>
			    </div>
			  </div>

			  <div class="form-group row">
			    <label class="col-sm-2 col-form-label">Ingredients</label>
			    <div class="col-sm-10">
			      <textarea class="form-control" name="items"><?php echo $recipe['items']; ?></textarea>
			    </div>
			  </div>

			  <div class="form-group row">
			    <label class="col-sm-2 col-form-label">Image</label>
                <img class="rounded" src="images/<?php echo $recipe['image']; ?>" width=400 height=400>
			    <div class="col-sm-10">
			      <input type="file" class="form-control-file" name="image">
                  <input type="hidden" name="old_image" value="<?php echo $recipe['image']; ?>">
                  <input type="hidden" name="id" value="<?php echo $recipe['id']; ?>">
			    </div>
			  </div>
              

			  <button type="submit" class="btn btn-block btn-success mb-2" name="edit">Add New Recipe</button>
		</form>
	</div>
</body>
</html>