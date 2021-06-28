<?php

session_start();
require './vendor/autoload.php';
$fb=new Facebook\Facebook([
	'app_id' => '272497067553703',
	'app_secret' => '19d02e0dc03d0d456429b85a2dc5593f',
	'default_graph_version' => 'v2.7'


]);

$helper=$fb->getRedirectLOginHelper();
$login_url=$helper->getLoginUrl("http://localhost/fb-login/");
//print_r($login_url);
try{
	$accessToken=$helper->getAccessToken();
	if(isset($accessToken)){
		$_SESSION['access_token']=(String)$accessToken;
		header("Location:login.php");

	}catch(Exception $exc){
		echo $exc->getTraceAsString();
	}
}


?>