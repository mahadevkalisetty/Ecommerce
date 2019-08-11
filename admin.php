<?php
include 'db.php';
 session_start();

if(isset($_SESSION['email'])&&($_SESSION['email']=='admin'))
{
	
}
else
{
	
	header("location: index.php");
}
?>

<!doctype html>
<html>
<head>
	<title>Admin | DMF</title>
	<meta charset="utf-8">
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
	
	<div class="container-fluid">
	
		<form action="admin.php" >
			
		
			
		</form>	
	</div>
</body>
</html>