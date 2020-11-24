<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="utf-8">
</head>
<body>
	
<div class="col-12">
	<div class="row">
		<div class="col-2 pt-3">
			<a href="" class="text-dark ml-3">Explore</a>
			<a href="" class="text-dark ml-3">Start a project</a>
		</div>
		<div class="col-8 text-center">
			<img src="logo.png" class="w-25">
			<p>#BlackLivesMatter</p>
		</div>
		<div class="col-2 text-left pt-3">
			<a href="" > <i class="fa fa-search"></i> Search</a>
			<a href=""><img src="lk.png" class="rounded-circle" ></a>

		</div>
	</div>
</div>
<div class="col-3 mx-auto">
	<h4 class="">Change ptoject</h4>
	<form action="update-project.php" method="GET">
		<input type="" name="id" class="d-none" value="<?php echo $_GET['id'] ?>">
		<input type="" name="title" class="form-control mt-2" value="<?php echo $_GET['title'] ?>">
		<textarea class="form-control mt-2" name="description"><?php echo $_GET['description'] ?>
		</textarea>
		<input type="" name="goal" class="form-control mt-2" value="<?php echo $_GET['goal'] ?>">
		<input type="" name="img" class="form-control mt-2" value="<?php echo $_GET['img'] ?>">
		<button class="btn btn-success form-control mt-2">
			Изменить
		</button>
	</form>
</div>
</body>
</html>