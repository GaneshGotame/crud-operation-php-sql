<?php 
include 'app_database.php';
$id=$_POST['id'];
$name=$_POST['name'];
$contact=$_POST['contact'];

$sql="update names set name='$name',contact='$contact' where id=$id";
$result=mysqli_query($conn,$sql);
if($result){
	header('location:app_index.php');
}

?>