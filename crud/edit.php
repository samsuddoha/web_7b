<?php
	include "dbconnect.php";
	
	$id=$_GET['d_id'];
	
	$nam=$_POST['f_name'];
	$rol=$_POST['f_roll'];
	$eml=$_POST['f_email'];
	
	$sql="UPDATE student SET name='$nam', roll='$rol' ,
	email='$eml' where id='$id'";
	
	if($conn->query($sql)){
		
		header('location:index.php');

		//echo "updated succesfully";
		}
	else 
	echo "update failed";

	$conn->close();
?>