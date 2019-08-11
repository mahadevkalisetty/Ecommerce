
<header class="accent header" style="height:70%" >
<br/>
		<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-4">
  <a class="header-brand" href="#" style="font-family: 'Prompt', sans-serif; color:beige;">
	  <p style="font-size: 30px;"> Delta Millet Foods</p><p style="font-size: 15px; color:lightgoldenrodyellow;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"an old concept adapt to new change"</p>
  </a>
			</div>
				
			
		<div class="col-12 col-md-4 " style="display: inline;">
		
			<form class="form-inline" action="/search" method="post" >
<div class="form-group">
 <input class="form-control input-lg" type="text" placeholder="Search" aria-label="Search" style="width: 100%;" aria-describedby="basic-addon1" >	
				
				<div class="form-group">
			<button type="button" class="btn light-accent form-control" style="height: 20%;">search</button></div>
			
			</div>
		  </form>
		</div>
		<div class="col-12 col-md-4"  >
	<?php if(isset($_SESSION['email']))	{ ?>
			<p>Hi <a href="profile.php" style="color:black;"> <?php echo $_SESSION['email'] ?> </a> ,</p>
				
			<p><a style="color:blue;" href="logout.php">Logout</a></p>
			<?php }else{ ?>
			<label>Hi stranger, <br />
Login buddy! <a style="color:blue;" onclick="login();">Login</a><br/>
			New here? <a style="color:blue;" href="register.php">Register</a></label> <br/>
			<?php } ?>
	
			
			<span class="fa-stack">
  <i class="fa fa-circle fa-stack-2x"></i>
  <strong class="fa-stack-1x " style="color:#EFB818;">
				<?php
		if(isset($_SESSION['prodarr']))
			echo sizeof($_SESSION['prodarr']);
		else
			echo "0";
		?>

		
				</strong>
</span>
			<i class="fas fa-cart-plus"></i>
			<label > <a href="mycart.php" style="color:blue;"> My Cart </a></label>
			
			<br /><br />
			</div>
			
		</div>
		<div class="row">
			
	   <div class="col-12 col-md-12 btn-group">
		
		<?php if(basename($_SERVER['PHP_SELF'])=="home.php"||basename($_SERVER['PHP_SELF'])=="index.php") { ?>
	   <a class="social-icon text-md-center" href="index.php" ><button  class="btn dark-accent" style="color:beige;">Home</button></a>
		   <?php }else{ ?>
		    <a class="social-icon text-md-center" href="index.php" ><button  class="btn dark-accent" style="color:beige;">Home</button></a>
		   <?php } ?>
  <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><a class="social-icon text-md-center" target="_blank" href="#" style="color:beige;">Categories</a>
		   <ul  class="dropdown-menu" role="menu">
        <li><a style="color:black; " href="#"
			 onmouseover="this.style.color='#EFB818'"
 onmouseout="this.style.color='black'"  
			     >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jowar</a></li>
        <li><a style="color:black; " href="#"
			 onmouseover="this.style.color='#EFB818'"
 onmouseout="this.style.color='black'"  
			     > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Foxtail</a></li>
	    <li><a style="color:black; " href="#"
			 onmouseover="this.style.color='#EFB818'"
 onmouseout="this.style.color='black'"  
			     > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ragi</a></li>
		<li><a style="color:black; " href="#"
			 onmouseover="this.style.color='#EFB818'"
 onmouseout="this.style.color='black'"  
			     >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bajra</a></li>
		<li><a style="color:black; " href="#"
			 onmouseover="this.style.color='#EFB818'"
 onmouseout="this.style.color='black'"  
			     >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Barnyard</a></li>
		<li><a style="color:black; " href="#"
			 onmouseover="this.style.color='#EFB818'"
 onmouseout="this.style.color='black'"  
			     >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kudo</a></li>
		<li><a style="color:black; " href="#"
			 onmouseover="this.style.color='#EFB818'"
 onmouseout="this.style.color='black'"  
			     > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Little</a></li>
		<li><a style="color:black; " href="#"
			 onmouseover="this.style.color='#EFB818'"
 onmouseout="this.style.color='black'"  
			     > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Proso</a></li>
      </ul>
		   
		   
		   </button>
<button class="btn btn-primary"><a class="social-icon text-md-center" target="_blank" href="#" style="color:beige;">Info</a></button>
	<button class="btn btn-primary"><a class="social-icon text-md-center" target="_blank" href="#" style="color:beige;">Recipies</a></button>
<button  class="btn btn-primary"><a class="social-icon text-md-center" target="_blank" href="#" style="color:beige;">Health benefits</a></button>
		</div>
					</div>
		
	
			
			
			
		
							
		   
		   </div>
		   </header>
