<?php
	$connect=mysqli_connect("localhost","root","","signuppage");
	if(!empty($_POST['login'])){
	$Email=$_POST['email'];
	$Password=$_POST['password'];
	$query="select * from registration where Email='$Email' and Password='$Password'";
	$result=mysqli_query($connect, $query);
	$count=mysqli_num_rows($result);
	if($count>0)
	{
		echo "sucess";
	}
	else
	{
		echo "sorry";
	}

	}
?>