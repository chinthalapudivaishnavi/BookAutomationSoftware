<?php
//echo "Hello";
//require('dbcon.php');
require 'dbcon.php';
if(isset($_POST['submit']))
{
	$Email = mysqli_real_escape_String($con, $_POST['email']);
	//$Password = mysqli_real_escape_String($con, $_POST['password']);
	$ConfirmPassword = mysqli_real_escape_String($con, $_POST['confirmpassword']);
	$pass =mysqli_real_escape_String($con, $_POST['password']);
	$usertype= mysqli_real_escape_String($con, $_POST['usertype']);
	$emailquery = " select * from registration where Email='$Email'";
	echo $usertype;
	$query=mysqli_query($con, $emailquery);
	$emailcount=mysqli_num_rows($query);
	session_start();
	if($emailcount!=0){
		$_SESSION['msg']="email Already exists";
	}
	else{
		if($pass === $ConfirmPassword){
			$pass=md5($pass);
			$insertquery="insert into registration(Email,Password,Role) values('$Email','$pass','$usertype')";
			$iquery = mysqli_query($con, $insertquery);
			if($iquery){
				$_SESSION['msg']="Inserted data successfully";
			}else{
				$_SESSION["msg"]=mysqli_error($con);
			}

		}else{
			$_SESSION['msg']="Pwd and cpass must be same";
		}
	}
	header("location:SignUpPage.php");
}
?>