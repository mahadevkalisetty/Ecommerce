<!DOCTYPE html>
			<center>
			<div class="row">
			<?php if(isset($_SESSION['email'])){
		echo '	<div class=" col-12 col-md-4" >';
			}
			else{
				echo '<div class=" col-12 col-md-6" >';
			}
			?>

				<h4>Recent</h4>
				
				<div class="card" style="width: 18rem;">
  
	  
	  <?php 
				$rec="SELECT * FROM products where pid=(select max(pid) from products)";
				$res = mysqli_query($conn,$rec);
	if (mysqli_num_rows($res) >0) {
		while($r = $res->fetch_assoc()) {
			
			$cid=$r['cid'];
			echo '<img class="card-img-top" src='.$r['pic'].' height="200" width="200" alt="recent">';
			echo '<div class="card-body">';
			echo '<h5 class="card-title"><a style="color:black;" href="product.php?pid='.$r["pid"].'" >'.$r['pname'].'</a></h5>';
			$re="SELECT * FROM categories where cid='$cid'";
				$re = mysqli_query($conn,$re);
	if (mysqli_num_rows($re) >0) {
		while($ro = $re->fetch_assoc()) {
			echo '<h6 class="card-subtitle mb-2 text-muted">'.$ro['cname'].'</h6>';
				}
				}
	echo '		
    <p class="card-text">'.$r['descr'].'</p>
    <a href="addcart.php?id='.$r['pid'].'" class="card-link">add to Cart</a>
    <a href="buy.php?id='.$r['pid'].'" class="card-link">buy now</a>';
		
									}
									
	
										}
				?>
    
    
  </div>
</div>
				
					<a href="recent.php">see more..</a>	
				</div>
				<?php if(isset($_SESSION['email'])){
		
			?>
				<div class=" col-12 col-md-4" >
				<h4>Recommended for you</h4>
				<div class="card" style="width: 18rem;">
 
    <?php 
	  			
	  $uemail=$_SESSION['email'];
	
	  			$r1=mysqli_query($conn,"SELECT * FROM users WHERE email='$uemail'");
	  			while($rn = $r1->fetch_assoc()) {
					$uid=$rn['uid'];
				}
				
	  			$r2=mysqli_query($conn,"SELECT pid,count(pid) FROM transactions where uid='$uid' GROUP BY pid ORDER BY count(pid) DESC limit 1;");
	  			
	  
	  			while($rn1 = $r2->fetch_assoc()) {
					
					$pid=$rn1['pid'];
					
				}
	  			$rec="SELECT * FROM products where pid='$pid'";
				$res = mysqli_query($conn,$rec);
	if (mysqli_num_rows($res) >0) {
		while($r = $res->fetch_assoc()) {
			echo '<img class="card-img-top" src='.$r['pic'].' height="200" width="200" alt="recommended">';
			$cid=$r['cid'];
			echo ' <div class="card-body">';
			echo '<h5 class="card-title"><a style="color:black;" href="product.php?pid='.$r["pid"].'" >'.$r['pname'].'</a></h5>';
			$re="SELECT * FROM categories where cid='$cid'";
				$re = mysqli_query($conn,$re);
	if (mysqli_num_rows($re) >0) {
		while($ro = $re->fetch_assoc()) {
			echo '<h6 class="card-subtitle mb-2 text-muted">'.$ro['cname'].'</h6>';
				}
				}
	echo '		
    <p class="card-text">'.$r['descr'].'</p>
    <a href="addcart.php?id='.$r['pid'].'" class="card-link">add to Cart</a>
    <a href="buy.php?id='.$r['pid'].'" class="card-link">buy now</a>';
		
									}
								}
									
	
										
				?>
  </div>
</div>
		<a href="recommend.php">see more..</a>
				
				
				</div>
		
							<?php } ?>
							<?php if(isset($_SESSION['email'])){
		echo '	<div class=" col-12 col-md-4" >';
			}
			else{
				echo '<div class=" col-12 col-md-6" >';
			}
			?>
		
				<h4>Top</h4>
				<div class="card" style="width: 18rem;">
  <div class="card-body">
    <?php 
	  			
	  
	  			$r2=mysqli_query($conn,"SELECT pid,count(pid) FROM transactions GROUP BY pid ORDER BY count(pid) DESC limit 1;");
	  			
	  
	  			while($rn1 = $r2->fetch_assoc()) {
					
					$pid=$rn1['pid'];
					
				}
	  			$rec="SELECT * FROM products where pid='$pid'";
				$res = mysqli_query($conn,$rec);
	if (mysqli_num_rows($res) >0) {
		while($r = $res->fetch_assoc()) {
			
			$cid=$r['cid'];
			echo '<img class="card-img-top" src='.$r['pic'].' height="200" width="200" alt="top">';
			echo '<h5 class="card-title"><a style="color:black;" href="product.php?pid='.$r["pid"].'" >'.$r['pname'].'</a></h5>';
			$re="SELECT * FROM categories where cid='$cid'";
				$re = mysqli_query($conn,$re);
	if (mysqli_num_rows($re) >0) {
		while($ro = $re->fetch_assoc()) {
			echo '<h6 class="card-subtitle mb-2 text-muted">'.$ro['cname'].'</h6>';
				}
				}
	echo '		
    <p class="card-text">'.$r['descr'].'</p>
    <a href="addcart.php?id='.$r['pid'].'" class="card-link">add to Cart</a>
    <a href="buy.php?id='.$r['pid'].'" class="card-link">buy now</a>';
		
									}
									
	
										}
				?>
  </div>
</div>
					
					<a href="top.php">see more..</a>
		
				
				
				
				
				</div>
			</div>
									</div>

			
									</center>