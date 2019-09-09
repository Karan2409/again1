<?php
session_start();
include('db_connect.php');
if($_POST){
	$email=$_POST['email'];
	$password=$_POST['password'];
	 $sel=" select * from register where email='$email' and password='$password'";
	$qry=mysqli_query($con,$sel);
	$nums=mysqli_num_rows($qry);
	if($nums>0){
		$_SESSION['email']=$email;
		header('location:home.php');
	}
	else{
		$invalid= "invalid username or password";
	}
	 
}
?>
<html>
	<head>
		<title>login page</title>
	<link href="css/style.css" rel="stylesheet" type="text/css">	
	</head>
	<body>
		<h2>LOGIN PAGE</h2>
		<form method="post" action="">
		EMAIL ID:
		<div id="email">
		<input type="text" name="email" placeholder="enter user ID">
		<br><br>
		</div>
		password:
		<div id="password">
		<input type="password" name="password" placeholder="enter password">
		<br><br>
		submit:
		<div id="submit">
		<input type="submit" name="submit" placeholder="please login">
		</div>
		</form>
		</div>
	</body>
</html>