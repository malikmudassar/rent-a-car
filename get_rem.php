<?php
	include("includes/config.php");
	include("includes/db.php");
	include("includes/functions.php");

	$id=$_GET['id'];
	$amount=get_remaining_amount($id);
	echo $amount;

?>