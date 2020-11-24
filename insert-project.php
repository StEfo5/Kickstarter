<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'kickstarter');
	mysqli_query($con, "INSERT INTO projects (id, title, description, goal, donated, img, user, place) VALUES ('','{$_GET['title']}','{$_GET['description']}','{$_GET['goal']}','0','{$_GET['img']}','{$_GET['user']}','{$_GET['place']}')");
	header("Location: acc.php")
 ?>