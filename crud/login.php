<?php
	session_start(); //this function is used to put value in $_SESSION supergolbal variable
	include "dbconnect.php";
	
	//following two variables ($msg and $x) are used to show the message if password or username wrong
	$msg=""; 
	$x=0;
	
	if(isset($_POST['login'])){  //isset is a function which is used to check whether a variable hold a value or not
	
		$rol=$_POST['f_roll'];
		$eml=$_POST['f_email'];
		$sql="SELECT * FROM student WHERE email='$eml'";
		
		$result=$conn->query($sql);
		$r=$result->fetch_assoc();
		//echo $result->num_rows;
		if($result->num_rows==1){
			$_SESSION['name']=$r['name'];
			$_SESSION['roll']=$r['roll'];
			$_SESSION['email']=$r['email'];
			
			header('location:index.php');
			//echo "successfully logged in";
		}
		else {
			$x=1;
			$msg="<span style='color:red; font-weight:bold;'> Roll or Email is wrong </span>";
		}
	}
		


?>

<!DOCTYPE html>
<html lang="en">
<body>	
	<center>
		<h1>Login</h1>
		<?php
			//if password or username wrong then this code will be executed
			if($x==1){ 
			 echo $msg;
			 }
		?>
		<form method="POST" action="login.php">
			<label>Roll</label>
			<input type="text" placeholder="Enter roll" name="f_roll"> <br> <br>
			<label>Email</label>
			<input type="email"  placeholder="Enter email" name="f_email" > <br> <br>
			<input type="submit" name ="login" value="Login">
		</form>
	</center>	
	
</body>
</html>