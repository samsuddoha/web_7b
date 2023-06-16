<?php
	include "dbconnect.php";
	$id=$_GET['del_id'];
	
	$sql="DELETE FROM student WHERE id='$id'";
	
	if($conn->query($sql))
	{
		header('location:index.php');
		//echo "Successfully deleted.";
	}
	else
	 "Failed delete!";


$conn->close();
?>