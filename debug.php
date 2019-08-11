<div class="container" id="center-content">
		<br><br>
		<h4>Top: </h4>
		<br>
		
		<?php 
		
		$r2=mysqli_query($conn,"SELECT pid,count(pid) FROM transactions GROUP BY pid ORDER BY count(pid) DESC;");
	  			
	  
	  			while($rn1 = $r2->fetch_assoc()) {
					
					$pid=$rn1['pid'];
					
				
	  			$rec="SELECT * FROM products where pid='$pid'";
		
		
				$res = mysqli_query($conn,$rec);
	if (mysqli_num_rows($res) >0) {
		while($r = $res->fetch_assoc()) {
			echo '<div class="card" style="width: 18rem;">
  <div class="card-body">';
			
			$cid=$r['cid'];
			$re="SELECT * FROM categories where cid='$cid'";
				$re = mysqli_query($conn,$re);
	if (mysqli_num_rows($re) >0) {
		while($ro = $re->fetch_assoc()) {
			echo '<h6 class="card-subtitle mb-2 text-muted">'.$ro['cname'].'</h6>';
				}
				}
			echo '<p class="card-text">'.$r['descr'].'</p>
    <a href="addcart.php?id='.$r['pid'].'" class="card-link">add to Cart</a>
    <a href="buy.php?id='.$r['pid'].'" class="card-link">buy now</a>';
			echo '</div></div>';
			
	}
	}
				}
			
		
		
		
		
		
		?>

		
		
	
<br ><br >
	</div>