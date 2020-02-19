<?php session_start()
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cooking Recipes - Create</title>

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
		<h1 align=center>Add New Recipe</h1>
		<?php if(isset($_SESSION['create_success'])): ?>
			<div class="alert alert-success"> Item Created Successfully !</div>
		<?php endif; session_unset('create_success'); ?>
		<form action="functions.php" method="POST" enctype="multipart/form-data">
			<div class="form-group row">
			    <label class="col-sm-2 col-form-label">Recipe Name</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="name">
			    </div>
			  </div>

			  <div class="form-group row">
			    <label class="col-sm-2 col-form-label">Description</label>
			    <div class="col-sm-10">
			      <textarea class="form-control" name="desc"></textarea>
			    </div>
			  </div>

			  <div class="form-group row">
			    <label class="col-sm-2 col-form-label">Ingredients</label>
			    <div class="col-sm-10">
			      <textarea class="form-control" name="items"></textarea>
			    </div>
			  </div>

			  <div class="form-group row">
			    <label class="col-sm-2 col-form-label">Image</label>
			    <div class="col-sm-10">
			      <input type="file" class="form-control-file" name="image">
			    </div>
			  </div>

			  <button type="submit" class="btn btn-block btn-success mb-2" name="add">Add New Recipe</button>
		</form>
	</div>
</body>
</html>