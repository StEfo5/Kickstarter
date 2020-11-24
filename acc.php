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
	<form action="insert-project.php" method="GET">
		<input type="" name="title" class="form-control mt-2" placeholder="Заголовок">
		<textarea class="form-control mt-2" placeholder="Описание" name="description">
			
		</textarea>
		<input type="" name="goal" class="form-control mt-2" placeholder="Необходимая сумма">
		<input type="" name="img" class="form-control mt-2" placeholder="Обложка">
		<input type="" name="place" class="form-control mt-2" placeholder="Город">
		<input type="" name="user" class="form-control mt-2" placeholder="user">
		<button class="btn btn-success form-control mt-2">
			Добавить
		</button>
	</form>
</div>
<div class="col-10 mx-auto">
	<h4 class="">My projects <span class="text-success font-weight-bold"><!--Вывести количество проектов--></span></h4>
	<p></p>
	<div class="row mt-5">

		<!--Вывести сами проекты здесь-->
		<?php 
			$con = mysqli_connect('127.0.0.1', 'root', '', 'kickstarter');
			$q = mysqli_query($con, "SELECT * FROM projects WHERE user = 'Castle Bravo'");
			$num = mysqli_num_rows($q);
			for ($i=0; $i < $num; $i++) { 
				# code...
				$str = $q -> fetch_assoc();
		 ?>
		 <div class="col-4">
		 	<div style="height: 260px; background-size: cover; background-position: center; background-image: url(<?php echo $str['img']; ?>);">
		 		
		 	</div>
		 	<h5>
		 		<?php
		 			echo $str['title'];
		 		 ?>
		 	</h5>
		 	<p>
		 		<?php echo $str['description']; ?>
		 	</p>
		 	<p class="mt-5">
		 		by <?php echo $str['user'] ?>, <?php echo $str['place'] ?>
		 	</p>
		 	<p class="mt-4 mb-1">
		 		<?php echo $str['goal']?>$ goal
		 	</p>
		 	<p class="text-success">
		 		<?php echo $str['donated']?>$ pledged;
		 	</p>
		 	<form action="admin.php" method="GET">
		 		<input type="" name="id" class="d-none" value="<?php echo $str['id'] ?>">
		 		<input type="" name="title" class="d-none form-control mt-2" placeholder="Заголовок" value="<?php echo $str['title'] ?>">
				<textarea name='description' class="d-none form-control mt-2" placeholder="Описание">
					<?php echo $str['description'] ?>
				</textarea>
				<input type="" name="goal" class="d-none form-control mt-2" placeholder="Необходимая сумма"  value="<?php echo $str['goal'] ?>">
				<input type="" name="img" class="d-none form-control mt-2" placeholder="Обложка" value="<?php echo $str['img'] ?>" >
		 		<button class="btn btn-success">
			 		Редактировать
			 	</button>
		 	</form>
		 	<form action="delete-project.php" method="GET" class="mt-2">
		 		<input type="" name="id" class="d-none" value="<?php echo $str['id'] ?>">
		 		<button class="btn btn-danger">
			 		Удалить
			 	</button>
		 	</form>
		 </div>
		 <?php 
		 	}
		  ?>
	</div>
</div>
</body>
</html>