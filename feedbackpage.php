<?php
	
	require 'dbcon.php';
	if(isset($_POST['submit'])){

		//echo "hello";
		$Fullname = mysqli_real_escape_String($con, $_POST['fullname']);
		$Email = mysqli_real_escape_String($con, $_POST['email']);
		$Textarea = mysqli_real_escape_String($con, $_POST['textarea']);
		$emailquery = " select * from registration where Email='$Email'";
		$query=mysqli_query($con, $emailquery);
		$emailcount=mysqli_num_rows($query);
		session_start();
		if($emailcount>0){
			$insertquery= "UPDATE registration SET Feedback='$Textarea' WHERE Email='$Email'";
			//echo $insertquery;
			$iquery = mysqli_query($con, $insertquery);
			//echo $iquery;
			if($iquery){
				//$_SESSION['msg']="Inserted data successfully";
				echo '<script>alert("Feedback Submitted successfully")</script>';
			}else{
				$_SESSION['msg']="Not Inserted";
			}
		}else{
			$_SESSION['msg']="Not a registered user...So please register to conisder ur feedback";
		}
		echo $_SESSION['msg'];
	}




?>