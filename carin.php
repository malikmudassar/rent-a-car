<?php
include("includes/config.php");
include("includes/db.php");
include("includes/functions.php");


$car_id		 =$_POST['car_id'];
$returntime	 =$_POST['returntime'];
$damage		 =$_POST['damage'];
$damage_claim   =$_POST['damage_claim'];
$totalamount    =$_POST['totalamount'];

$check=return_a_car($car_id,$returntime,$damage,$damage_claim);
if($check)
{
	header('location:rentacar.php');
}
?>