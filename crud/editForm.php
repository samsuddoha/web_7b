<?php
	include "dbconnect.php";
	$id=$_GET['edit_id'];
	$sql="SELECT * FROM student where id='$id'";
	$result=$conn->query($sql);
	
	$arr=$result->fetch_assoc();
	
	$nam=$arr['name'];
	$rol=$arr['roll'];
	$eml=$arr['email'];
?>


<!DOCTYPE html>
<html lang="en">
<body>	
	<center>
		<h1>Edit Form</h1>
		<form method="POST" action="edit.php?d_id=<?php echo $id?>">
			<label>Name</label>
			<input type="text" value="<?php echo $nam ?>" name="f_name"> <br> <br>
			<label>Roll</label>
			<input type="text" value="<?php echo $rol ?>" name="f_roll"> <br> <br>
			<label>Email</label>
			<input type="email"  value="<?php echo $eml ?>" name="f_email" > <br> <br>
			<input type="submit" value="update">
		</form>
	</center>	
	
</body>
