<?php
    $host      = 'localhost';
    $user      = 'root';
    $pass      = '';
    $dbname    = 'cars';
    try 
    {
        $PDO =  new PDO( "mysql:host=".$host.";"."dbname=".$dbname, $user, $pass);  
    }
    catch(PDOException $e) 
    {
        die($e->getMessage());  
    }
	session_start();
?>