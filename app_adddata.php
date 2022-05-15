<?php
	$name=$_POST['name'];
	$contact=$_POST['contact'];

	echo "Name is ".$name."<br>Phone No. is ".$contact;

	include'app_database.php';

	$sql="insert into names(name,contact)values('$name','$contact')";
	$result=mysqli_query($conn,$sql);

	if($result){
		header('Location:app_index.php');
	}

?>