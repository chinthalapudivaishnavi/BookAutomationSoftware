<!DOCTYPE html>
<html>
<head>
	<title>Placing Order</title>
	<style>
		body{
			background-image: url("order.jpeg");
			background-repeat: no-repeat;
			background-size: cover;
		}



	</style>
</head>
<body>
	<?php
		$server = "localhost";
		$user="root";
		$password="";
		$db="signuppage";
		$con=mysqli_connect($server,$user,$password,$db);
		if(!$con){
				echo "Somthing went wrong...";
		}
		else{
			echo "PLACED ORDERS"."<br>"."<br>";
			$query = "select * from Delevary";
			$iquery=mysqli_query($con, $query);
			//echo $iquery;
					while($row = mysqli_fetch_array($iquery)) {
							$email = $row['Email'];
							//echo $email;
							$fname = $row['FirstName'];
							$lname=$row['LastName'];
							$number=$row['MobileNumber'];
							$address=$row['Adress'];
							$pincode=$row['Pincode'];

							echo $email."<br>".$fname."<br>".$lname."<br>".$number."<br>".$address."<br>".$pincode."<br>"."<br>";
					}
		}


	?>


</body>
</html>