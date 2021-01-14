<?php

$server_name = "localhost";
$user_name = "root";
$pasword = "";
$db_name = "Gym";
//$conn = mysqli_connect($server_name ,$user_name,$password , $db_name);
	try
	{
	 $conn = new PDO("mysql:host=$server_name; dbname=$db_name", $user_name, $pasword);
	  // set the PDO error mode to exception
	 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e)
	 {
	    echo   "Cannot connect to database" . $e->getMessage();
	 }
?>