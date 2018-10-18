<?php
	
	include("includes/config.php");
	include("includes/db.php");
	include("includes/functions.php");
	
	$city=$_POST['city'];
	
	
	$check=insert_city($city);	
	if($check)
	{
		header('location:cars.php');
	}	
?>