<?php
	
	include("includes/config.php");
	include("includes/db.php");
	include("includes/functions.php");
	
	$vendor_id=$_POST['vendor'];
	$model_name=$_POST['model'];
	
	$check=insert_model($vendor_id,$model_name);	
	if($check)
	{
		header('location:cars.php');
	}	
?>