<?php
  
   //$conn=mysqli_connect('sql212.epizy.com', 'epiz_22324478', 'VTAcapcse', 'epiz_22324478_vtacap');//Connecting to database
   $conn=mysqli_connect('localhost', 'root', '', 'dmf');

   if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
   } 
 
?>