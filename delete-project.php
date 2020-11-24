<?php 
	$con = mysqli_connect('127.0.0.1', 'root', '', 'kickstarter');
	mysqli_query($con, "DELETE FROM projects WHERE id = {$_GET['id']}");
	header("Location: acc.php");
 ?>