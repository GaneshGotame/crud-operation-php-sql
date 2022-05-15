<html>
<head>
	<title>Ganesh Contact Application</title>
</head>
<body>
	<header>
		<h1>Gunn Contact App</h1>
	</header>
	<h2>Update</h2>
	<?php
		include 'app_database.php';
		$id=$_GET['id'];

		$sql="select *from names where id=$id";
		$result=mysqli_query($conn,$sql);

		if($result){
			$row=mysqli_fetch_assoc($result);

			$contactname=$row['name'];
			$contact=$row['contact'];
		}

	?>

	<form action="app_updateaction.php" method="post">
		<div class="main">
			<label for="name">Name:</label><br>
			<input type="text" name="name" id="name" value="<?php global $contactname; echo $contactname?>" required><br>

			<label for="contact">Contact:</label><br>
			<input type="number" name="contact" id="contact" value="<?php global $contact; echo $contact?>" required><br><br>

			<input type="hidden" name="id" id="id" value="<?php global $id; echo $id?>" required>

			<input type="submit" value="Update">

		</div>
	</form>

</body>
</html>