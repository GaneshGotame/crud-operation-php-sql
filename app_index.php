<html>
<head>
	<title>Ganesh Contact Application</title>
</head>
<body>
	<header>
		<h1>Gunn Contact App</h1>
	</header>

	<form action="app_adddata.php" method="post">
		<div class="main">
			<label for="name">Name:</label><br>
			<input type="text" name="name" id="name" required><br>

			<label for="contact">Contact:</label><br>
			<input type="number" name="contact" id="contact" required><br><br>

			<input type="submit" value="save">

		</div>
	</form>
	<hr><br><hr>
	<h2>List of Contacts</h2>
	<table border="1" cellspacing="0" width="25%">
		<tr>
		<th>Name</th>
		<th>Contact</th>
		<th>Actions</th>
		</tr>
		
	
	<?php 
		include 'app_database.php';
		$sql="select * from names";
		$result=mysqli_query($conn,$sql);
		$total=mysqli_num_rows($result);


		if($total!=0){
			while($row=mysqli_fetch_assoc($result)){
				$id=$row['id'];
					?>

   						<tr>
    					<td><?php echo $row['name'] ?></td>
   		 				<td><?php echo $row['contact'] ?></td>
   		 				<td>
   		 					<a href="app_update.php?id=<?php echo $id?>">Update</a>
   		 					<a href="app_delete.php?id=<?php echo $id?>">Delete</a>
   		 				</td>
    					</tr>

  					<?php
				}
		}
	?>
	</table>

</body>
</html>