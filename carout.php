<?php
include("includes/config.php");
include("includes/db.php");
include("includes/functions.php");


$dateout	 =$_POST['dateout'];
$customer	=$_POST['customer'];
$car		 =$_POST['car'];
$rent		=$_POST['rent'];
$payup	   =$_POST['payup'];

$check=rent_a_car($dateout,$customer,$car,$rent,$payup);
if($check)
{
	header('location:rentacar.php');
	}
?>