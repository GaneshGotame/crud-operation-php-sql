<?php 
	include 'app_database.php';
	$id=$_GET['id'];

	$sql="delete from names where id=$id";
	$result=mysqli_query($conn,$sql);

	if($result){
		header('location:app_index.php');
	}
?>