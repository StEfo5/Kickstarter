<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'kickstarter');
	mysqli_query($con, "UPDATE projects SET title = '{$_GET['title']}' WHERE id = '{$_GET['id']}'");
	mysqli_query($con, "UPDATE projects SET description = '{$_GET['description']}' WHERE id = '{$_GET['id']}'");
	mysqli_query($con, "UPDATE projects SET goal = '{$_GET['goal']}' WHERE id = '{$_GET['id']}'");
	mysqli_query($con, "UPDATE projects SET img = '{$_GET['img']}' WHERE id = '{$_GET['id']}'");
	header("Location: acc.php");
 ?>