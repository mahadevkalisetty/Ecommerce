<?php
if(isset($_POST['email'])&&isset($_POST['password']))	
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	if($email=="admin" && $password=="adminpranav")
	{
		$_SESSION['email']="admin";
		header('Location: admin.php');
	}
	else{
		
   
   
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $err = "Invalid email format"; 
    
  	}
		else{
	$sql="SELECT * FROM users WHERE email='$email'";
	$result = mysqli_query($conn,$sql);
	if (mysqli_num_rows($result) > 0) {
		while($row = $result->fetch_assoc()) {
	
	if(password_verify($password, $row['password']))
	{
	$_SESSION['email']=$row['email'];
	$_SESSION['uid']=$row['uid'];
	
    
	}
	else{
		
		echo '<script>alert("Email password doesn\'t match!");</script>';
		
	}
			
		}
	}
	else{
		
		 echo '<script>alert("Such Email password doesn\'t exists!");</script>';
		
	}
		
	}
	}
			
}

if(!isset($_SESSION['email'])){
	header('Location: index.php');
}	
?>