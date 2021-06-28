<!DOCTYPE html>
<html>
<head>

	<title>LoginPage</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<style type="text/css">
		body{
			margin:0;
			background-image: url("signupimage.jpg");
			background-repeat: no-repeat;
			background-size: cover;
		}
		.header{
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
	<?php
	$connect=mysqli_connect("localhost","root","","signuppage");
	if(!empty($_POST['login'])){
		$Email=$_POST['email'];
		$pass =md5($_POST['password']);
		$role=$_POST['usertype'];
		$query="select * from registration where Email='$Email' and Password='$pass'";
		$result=mysqli_query($connect, $query);
		$count=mysqli_num_rows($result);
		if($count>0)
		{
				if($role=="customer"){
					header("Location:customer_page.html");
				}else if($role=="delivery"){

					header("Location:Deliverypage.php");
				}
				
			
			
		}
		else
		{
			?>
				<script>
					alert("Invalid credentials");
				</script>	
			<?php
		}
	}
	?>
	
	<center style="margin-top: 20px;">
		<div class="login-form">
			<div class="image">
				<i class="fa fa-user icon"></i>
			</div>
			
			<h2>Login Now<locol/h2>
			<form  method="post" >
				<label for="email">Email: </label>
				<input type="email" placeholder="Enter ut email" class="input-box" name="email" required><br><br>
				<label for="Password">Password: </label>
				<input type="password" name="password" class="input-box" placeholder="Enter ur password" required>
				<label for="Role:" style="margin: 10px;">Role</label>
				<select name="usertype" required="true" style="margin: 15px;">
					<option value="customer" name="customer" selected="selected">Customer</option>
	    			<option value="manager" name="manager" >Manager</option>
	    			<option value="delivery" name="delivery">Delievary</option>
				</select>
				<input type="submit" name="login" value="Login" style="margin: 15px;">
				<p class="or">OR</p>
				<a href="<?php echo $login_url;?>">Login with facebook</a>
				<p>Don't  have an account ? <a href="SignUpPage.php">SignUp</a></p>
			</form>
			
		</div>



</body>
</html>
