<?php

session_start();
$parts = parse_url($_SERVER["REQUEST_URI"]);
parse_str($parts['query'], $query);
if(isset($query['id'])&&isset($_SESSION))
{
$prodid=$query['id'];
	
	
array_push($_SESSION['prodarr'],$prodid);
$arr= $_SESSION['prodarr'];
	print_r($arr);
header('Location: '.$_SERVER['HTTP_REFERER']);
}
else
{
	header('index.php');
}
?>