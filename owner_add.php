<?php
 include 'includes/db.php';
 include 'includes/functions.php';
 
 $name=$_POST['name'];
 $fname=$_POST['fname'];
 $address=$_POST['address'];
 $mobile=$_POST['mobile'];
 $nic=$_POST['nic'];
 
 $st=$PDO->prepare('insert into owners (name,fname,address,mobile,nic) values (?, ?, ?, ?, ?)');
 if($st->execute(array($name,$fname,$address,$mobile,$nic)))
 {
	 header('location:owners.php');
	 }
?>