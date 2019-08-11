<?php
include 'db.php';
// Start the session
session_start();
if(empty($_SESSION)){
	header("Location:index.php");
}

if(isset($_GET['pid']))
{
	$pid=$_GET['pid'];
	$rec="SELECT * FROM products where pid='$pid'";
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
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>product | DMF</title>
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

<script type="text/javascript">
	
function dele(did)
{
	window.location.href='sessiondel.php?id='+did;
};

	<?php
	echo "
function buy(bid)
{
	
	if(".isset($_SESSION['email']).")
		window.location.href='upay.php';
	else
		$('#myModal').modal();
	
	
};";
	?>
</script>	

	
			
<body>

	
	<?php include('header.php') ?>
	
	<div class="container" id="center-content">
		<br><br>
		<img src=<?php echo $pic;?> height="300px" width="300px" />
		<h4 ><?php echo $pname;?></h4>
		<p>Description: <label class="text-muted"><?php echo $descr;?></label></p>
		
		<a href="addcart.php?id='.$r['pid'].'" >add to Cart</a><br>
    <a href="buy.php?id='.$r['pid'].'" >buy now</a>
	
	
	</div>
		

		
		
	
<br ><br >
	

		
		<?php include('footer-lst.php'); ?>
	<?php include('footer.html'); ?>
	
	
	
	
	
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
			<h4>Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
			
          <span class="glyphicon glyphicon-lock"></span> 
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action="home.php" method="POST">
            <div class="form-group">
              <label for="email"><span class="glyphicon glyphicon-user"></span> Email</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" name="submit" class="btn dark-accent btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
        
          <p style="">Not a member? <a href="register">Sign Up</a></p>
          
        </div>
      </div>
      
    </div>
  </div>
<!--modal-->	
	
	
	
	
	
	
</body>
</html>

