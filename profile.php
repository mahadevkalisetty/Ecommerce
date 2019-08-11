<?php
include 'db.php';
session_start();

if(empty($_SESSION['email']))
	header('index.php');


	$rec="SELECT * FROM users where uid='$uid'";
				$res = mysqli_query($conn,$rec);
	if (mysqli_num_rows($res) >0) {
		while($r = $res->fetch_assoc()) {
			$pname=$r['pname'];
			$price=$r['price'];
			$descr=$r['descr'];
			$count=$r['count'];
			$pic=$r['pic'];
		}
	}


?>
<!DOCTYPE html>
<html>
<head>
	<title>home | DMF</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="assets/css/styles.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
	<link href='https://fonts.googleapis.com/css<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Dosis|Indie+Flower|Merriweather|Prompt|Quicksand|Raleway|Ubuntu" rel="stylesheet">' rel='stylesheet'>
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	
	
</head>

	<script>
function login()
		{
    $("#myModal").modal();
  }
</script>
	
	
			
<body>

	
	<?php include('header.php') ?>
	<div class="container-fluid">
 
		
		<div class="container-fluid" style="margin-right: 25px;">
			
    <div class="container">
  
		
			<p><?</p>

		</div>
			
		<?php include('footer-lst.php'); ?>
<?php include('footer.html'); ?>





</body>
</html>