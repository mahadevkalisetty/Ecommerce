<?php

include('db.php');
$err=0;
if(isset($_POST['email']))
{
	
	$email=$_POST['email'];$pwd=$_POST['pwd'];$addr=$_POST['addr'];$state=$_POST['state'];
	$pin=$_POST['pin'];$phone=$_POST['phone'];
	$email = test_input($email);
   
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $err = "Invalid email format"; 
    
  	}
	else{
	$ur=mysqli_query($conn,"SELECT * FROM users WHERE  email='$email';");
	if (mysqli_num_rows($ur) >0) {
		
		$err=1;
		
	}
	else{
	$hash = password_hash($pwd,PASSWORD_BCRYPT);
	
	$sql = "INSERT INTO users(email,password,phone,pin,state,address) VALUES ('$email', '$hash', '$phone','$pin','$state','$addr')";
	if ($conn->query($sql) === TRUE) {
		session_start();
		$_SESSION['email']=$email;
		$_SESSION['password']=$pwd;
		header('Location: home.php');
		
		} 
	else {
    echo "Error: " . $sql . "<br>" . $conn->error;
		header('Location: index.php');
		
		}
		
	}
	}
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>signup | DMF</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="assets/css/styles.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
	<link href='https://fonts.googleapis.com/css<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Dosis|Indie+Flower|Merriweather|Prompt|Quicksand|Raleway|Ubuntu" rel="stylesheet">' rel='stylesheet'>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
	<?php include('header.php'); ?>
	<br><br><br>
	<div class="container-fluid">
		<div class="row justify-content-center align-items-center">
		<div class="col-xs-12" >
		<form action="register.php" method="POST">
		<div class="form-group">
			<?php if($err==1){ echo '<p style="color:red;">Email alredy exists! </p>'; } ?>
			<label for="email">Email address:</label> <span style="color: red;"> * </span>
    <input type="email" class="form-control" id="email" placeholder="name@email.com" name="email" required> 
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label><span style="color: red;"> * </span>
    <input type="password" class="form-control" id="pwd" placeholder="******" name="pwd" required>
  </div>
<div class="form-group">
    <label for="phone">Phonenumber:</label><span style="color: red;"> * </span>
   <input type="number" maxlength="10" size="10" class="form-control" id="phone" name="phone"  placeholder="+91" required>
  </div>
<div class="form-group">
    <label for="addr">Address:</label><span style="color: red;"> * </span>
	<textarea name="addr" rows="3" class="form-control" class="full-width" placeholder="Your Address" required></textarea>
  </div>
<div class="form-group">
    <label for="state">State:</label><span style="color: red;"> * </span>
    <select name="state">
  		<option value="aph">Andhra Pradesh</option>
  		<option value="arp">Arunachal Pradesh</option>
  		<option value="asm">Assam</option>
  		<option value="bhr">Bihar</option>		
		<option value="cgh">Chattisgarh</option>
		<option value="goa">Goa</option>
		<option value="gjt">Gujarat</option>
		<option value="hya">Haryana</option>
		<option value="hph">Himachal Pradesh</option>
		<option value="jak">Jammu and Kashmir</option>
		<option value="jkd">Jharkhand</option>
		<option value="ktk">Karnataka</option>
		<option value="krl">Kerala</option>
		<option value="mph">Madhya Pradesh</option>
		<option value="mhr">Maharashtra</option>
		<option value="mnr">Manipur</option>
		<option value="mga">Meghalaya</option>
		<option value="mzm">Mizoram</option>
		<option value="ngl">Nagaland</option>
		<option value="ods">Odisha</option>
		<option value="pjb">Punjab</option>
		<option value="raj">Rajasthan</option>
		<option value="skm">Sikkim</option>
		<option value="tnd">Tamil Nadu</option>
		<option value="tga">Telangana</option>
		<option value="tri">Tripura</option>
		<option value="uph">Uttar Pradesh</option>
		<option value="ukd">Uttarakhand</option>
		<option value="wbl">West Bengal</option>
	
	</select>
  </div>
<div class="form-group">
    <label for="pin">PIN code:</label><span style="color: red;"> * </span>
    <input type="number" maxlength="6" size="6" class="form-control" placeholder="******" id="pin" name="pin" required>
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" required>  Accepting <a href="terms.php">Terms</a><span style="color: red;"> * </span>
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
		
		</form>
			</div>
		</div>
	</div>
	<br><br><br>
	<?php include('footer.html'); ?>
	
</body>
</html>