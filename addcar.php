<?php
include("includes/config.php");
include("includes/db.php");
include("includes/functions.php");

$owner=		 $_POST['owner'];
$model=		 $_POST['model'];
$vendor=		$_POST['vendor'];
$model_year=	$_POST['model_year'];
$city=		  $_POST['city'];
$reg_alias=	 $_POST['reg_alias'];
$reg_no=		$_POST['reg_no'];

$check=insert_car($owner,$vendor,$model,$model_year,$reg_alias,$reg_no,$city);
if($check)
{
	header('location:cars.php');
}

?>