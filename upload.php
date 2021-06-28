<?php
	
	require 'dbcon.php';
	if(isset($_POST['submit'])){

		//echo "hello";
		$Email = mysqli_real_escape_String($con, $_POST['email']);
		$BookName = mysqli_real_escape_String($con, $_POST['Name']);
		$Author = mysqli_real_escape_String($con, $_POST['Author']);
		$emailquery = " select * from registration where Email='$Email'";
		$query=mysqli_query($con, $emailquery);
		$emailcount=mysqli_num_rows($query);
		session_start();
		if($emailcount>0){
			$insertquery= "UPDATE registration SET WantedBooks='$BookName.by.$Author' WHERE Email='$Email'";
			//echo $insertquery;
			$iquery = mysqli_query($con, $insertquery);
			//echo $iquery;
			if($iquery){
				//$_SESSION['msg']="Inserted data successfully";
				echo '<script>alert("Requested Book is successfully Submitted....We will get back to youvery soon")</script>';
			}else{
				$_SESSION['msg']="Not Inserted";
			}
		}else{
			$_SESSION['msg']="Not a registered user...So please register to conisder ur feedback";
		}
		//echo $_SESSION['msg'];
	}




?>