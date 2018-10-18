<?php
	
	include("includes/config.php");
	include("includes/db.php");
	include("includes/functions.php");
	
	$vendor=$_POST['vendor'];
	
	
	$check=insert_vendor($vendor);	
	if($check)
	{
		header('location:cars.php');
	}	
?>