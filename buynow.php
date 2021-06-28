
<!DOCTYPE html>
<html>
<head>
	<title>Buy Your Product</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	
`	<style>


		body{
			margin:0;
			background-image: url("signupimage.jpg");
			background-repeat: no-repeat;
			background-size: cover;
		}
		.signupform{
			  width: 500px;
			  box-shadow: 0 0 3px 0 rgba(0,0,0,0.3);
			  background: #fff;
			  padding: 20px;
			/*margin: 8% auto 0;*/
			  text-align: center;
			  margin-top: 20px;
		}
		
	</style>
</head>
<body>
	<button type="button" style="margin-top: 10px;"><a href="project.html">Back</a></button>
	<center>
		
		<div class="signupform">
			<h3 style="margin-top: 0px;">Fill The Details Below To Buy Your Product</h3>
			<form  action="delivery.php" method="post">
				<label for="country">Country/Religion:</label>
	  			<select name="subject" id="subject" name="country" required="true">
	    			<option value="" selected="selected">India</option>
	    			<option value="" selected="selected">Afganistan</option>
	    			<option value="" selected="selected">China</option>
	    			<option value="" selected="selected">Turmania</option>
	    			<option value="" selected="selected">Pakistan</option>
	    			<option value="" selected="selected">Bangladesh</option>
	    			<option value="" selected="selected">Australia</option>
	    			<option value="" selected="selected">America</option>
	 			 </select><br><br>
				<label for="fname">First name:</label>
	  			<input type="text" id="fname" name="fname" placeholder="Enter your firstname" required="true"><br><br>
	  			<label for="lname">Last name:</label>
	  			<input type="text" id="lname" name="lname" placeholder="Enter your lastname" required="true"><br><br>
	  			<label for="number">MobileNumber:</label>
	  			<input type="Number" id="number" name="number"  placeholder="MobileNumber" required="true"><br><br>
	  			<label for="email">Email: </label>
				<input type="email" placeholder="Enter ut email" class="input-box" name="email" required><br><br>
	  			<label for="pincode">Pincode:</label>
	  			<input type="text" id="pincode" name="pincode" placeholder="Pincode"  required="true"><br><br>
	  			<label for="Adress">Add Your Complete Adress Here:</label>
	  			<textarea id="Adress" rows="10" cols="50" required="true" name="adress"></textarea><br>
	  			<input type="submit" name="submit" value="placeorder">
	  		</form>

		</div>
		
	</center>
	
</body>
</html>