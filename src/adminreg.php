<?php
	
	include "config.php";

	$A_id = $_POST['A_id'];
	$A_name = $_POST['A_name']; 
	$A_email = $_POST['A_email']; 
	$A_pass = $_POST['A_pass'];
	$A_mobile = $_POST['A_mobile'];
	

	$q = mysqli_query($con,"insert into admin values('$A_id','$A_name','$A_email','$A_pass','$A_mobile')")or die(mysqlu_error($con));

	echo "<center><h2>Regristration Success</h2></center>";
	header("Location:adminreg.html");

	
?> 
