
<?php
include "dbconnect.php";

$name=$_POST['f_name'];
$roll=$_POST['f_roll'];
$email=$_POST['f_email'];

$sql = "INSERT INTO student (id, name,roll,email) 
		VALUES (NULL, '$name', '$roll', '$email')";

		
		if($conn->query($sql))
		{
			header('location:index.php');
			//echo "data inserted successfully";
			
		}
		else
		{
			echo "insertion failed";
		}
		
		
		$conn->close();
?>

