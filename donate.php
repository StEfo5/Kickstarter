<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'kickstarter');
	$q = mysqli_query($con, "SELECT * FROM projects WHERE id = '{$_GET['id']}'");
	$str = $q -> fetch_assoc();
	$d = $str['donated'] + 10;
	mysqli_query($con, "UPDATE projects SET donated = '{$d}' WHERE id = '{$_GET['id']}'");
	header("Location: index.php")
 ?>