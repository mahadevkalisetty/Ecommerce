<?php
include 'db.php';
// Start the session
session_start();
if(empty($_SESSION)){
	header("Location:index.php");
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

<script type="text/javascript">
	
function dele(did)
{
	window.location.href='sessiondel.php?id='+did;
};

	<?php
	if(isset($_SESSION['email'])){
		$sess=TRUE;
	}
	else{
		$sess=FALSE;
	}
	echo "
function buy(bid)
{
	var bik=bid;
	if(".['false', 'true'][(bool) $sess].")
		window.location.href='upay.php?bid='+bik;
	else
		$('#myModal').modal();
	
	
};

function buyall()
{
	
	if(".['false', 'true'][(bool) $sess].")
	{
		window.location.href='upay.php?bid=111';
	}
	else
		$('#myModal').modal();
	
	
};

";
	?>
</script>	

	
			
<body>

	
	<?php include('header.php') ?>
	
	<div class="container-fluid">
	<center>
		<br><br>
		<table class="table-bordered table-hover">
			<tr >
			<th align="center">&nbsp&nbsp id &nbsp&nbsp </th>
			<th align="center">&nbsp&nbsp product name &nbsp&nbsp</th>
			<th align="center">&nbsp&nbsp price &nbsp&nbsp</th>
			<th align="center">&nbsp&nbsp delete &nbsp&nbsp</th>
			<th align="center">&nbsp&nbsp buy &nbsp&nbsp</th>
			</tr>
  <?php
		
			$id=0;
		foreach ($_SESSION['prodarr'] as &$val) {
    		$sql="SELECT * FROM products WHERE pid='$val'";
			$id=$id+1; 
	$result = mysqli_query($conn,$sql);
	if (mysqli_num_rows($result) > 0) {
		while($row = $result->fetch_assoc()) {
			echo "<tr>";
			$i=$id-1;
			echo "<td>&nbsp".$id."&nbsp</td><td>&nbsp".$row['pname']."&nbsp</td><td>&nbsp₹".$row['price']."&nbsp</td><td><button class='btn btn-primary' onclick='dele(".$i.");'>&nbspdelete&nbsp</button></td><td><button class='btn btn-primary' onclick='buy(".$i.");'>&nbspbuy&nbsp</button></td>";
			echo "</tr>";
			
		}
	}
			}
		
		?>
		</table>
			<br><br>
			<button class='btn btn-primary' onclick="buyall();">&nbsp buy all&nbsp</button>
			</center>
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

