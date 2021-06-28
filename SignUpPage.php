<!DOCTYPE html>
<html>
<head>
	<title>SignUpPage</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<style>
		body{
			margin:0;
			background-image: url("signupimage.jpg");
			background-repeat: no-repeat;
			background-size: cover;
		}
		.header{
			margin:0;
			top: 0;
			background-color: #1e90ff;
			position: fixed;
			overflow: hidden;
			width: 100%;
		}
		.navbar{
			background-color: #6495ED;
			height: 90px;
		}
	</style>
</head>
<body>
	<div id="header"></div>
	<script>
		$("#header").load("nav.html");
	</script>
	<center>
		<div class="sign-up-form">
			<div class="image">
				<i class="fa fa-user icon"></i>
			</div>
			
			<h2>Sign Up Now</h2>
			<h3 id='status'>
			<?php
				session_start();
				if($_SESSION['msg']){
					echo $_SESSION['msg'];
					$_SESSION['msg']='';
				}
			?>
			<script type="text/javascript">
				setTimeout(()=>{
					document.getElementById('status').style.display="none"
				},5000)
			</script>
		</h3>
			<form action="connect.php" method="post">
				<label for="email">Email: </label>
				<input type="email" placeholder="Enter ut email" class="input-box" name="email" required><br><br>
				<label for="Password">Password: </label>
				<input type="password" name="password" class="input-box" placeholder="Enter ur password" required><br><br>
				<label for="Password">Confirm Password: </label>
				<input type="password" name="confirmpassword" class="input-box" placeholder="Enter ur password" required>
				<label for="Role" style="margin: 10px;">Role</label>
				<select name="usertype" required="true">
					<option value="customer" name="customer" selected="selected">Customer</option>
	    			<option value="manager" name="manager" >Manager</option>
	    			<option value="delivery" name="delivery">Delievary</option>
				</select>
				<p><span><input type="checkbox" name="checkbox" required></span>I agree to the terms and conditions</p>
				<button type="submit" class="signup" name="submit" value="SignUp">SignUp</button> 
				<p class="or">OR</p>
				
				<p>Do you have an account ?<a href="login.php">Login</a></p>
			</form>
		</div>
	</center>
		
	
	


</body>
</html>