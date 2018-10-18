<?php
 include 'includes/db.php';
 include 'includes/functions.php';
 
 $name=$_POST['name'];
 $fname=$_POST['fname'];
 $address=$_POST['address'];
 $mobile=$_POST['mobile'];
 $nic=$_POST['nic'];
 $referrer_name=$_POST['referrer_name'];
 $referrer_mobile=$_POST['referrer_mobile'];
 
 $st=$PDO->prepare('insert into customers (name,fname,address,mobile,nic,referrer_name,referrer_mobile) 
 					values (?, ?, ?, ?, ?, ?, ?)');
 if($st->execute(array($name,$fname,$address,$mobile,$nic,$referrer_name,$referrer_mobile)))
 {
	 header('location:customers.php');
	 }
?>