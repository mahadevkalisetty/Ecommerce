<?php
session_start();
$parts = parse_url($_SERVER["REQUEST_URI"]);
parse_str($parts['query'], $query);
if(isset($query['id']))
{
	$i=$query['id'];
	
	unset($_SESSION['prodarr'][$i]);

}

header('Location: mycart.php');

?>