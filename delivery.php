<?php

	//echo "hey";
	require 'dbcon.php';
	session_start();
	if(isset($_POST['submit']))
	{
		$Country=mysqli_real_escape_String($con, $_POST['country']);
		$FirstName=mysqli_real_escape_String($con, $_POST['fname']);
		$LastName=mysqli_real_escape_String($con, $_POST['lname']);
		$MobileNumber=mysqli_real_escape_String($con, $_POST['number']);
		$Email=mysqli_real_escape_String($con, $_POST['email']);
		$Pincode=mysqli_real_escape_String($con, $_POST['pincode']);
		$Adress=mysqli_real_escape_String($con, $_POST['adress']);

		$insertquery="insert into Delevary(Email,FirstName,LastName,MobileNumber,
		Pincode,Adress) values('$Email','$FirstName','$LastName','$MobileNumber','$Pincode','$Adress')";

		$iquery=mysqli_query($con, $insertquery);
		if($iquery){
			$_SESSION['msg']="Order placed Successfully";
		}
		else{
			$_SESSION['msg']="Something went wrong";
		}
		echo $_SESSION['msg'];
	}
?>