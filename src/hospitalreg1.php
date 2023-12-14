<?php
	
	include "config.php";

	$h_id = $_POST['h_id'];
	$name = $_POST['name']; 
    $addr = $_POST['addr'];
	$phone = $_POST['phone']; 
	
	

	$q = mysqli_query($con,"insert into hospital values('$h_id','$name','$addr','$phone')")or die(mysqli_error($con));

	session_start();	
	$_SESSION['registration_success']='1';
	header("Location:hospitalreg.php");
	
?> 