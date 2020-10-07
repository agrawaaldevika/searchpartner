<?php
include("includes/connection.php");
	if(isset($_POST['submit_forgot'])){
		$email = $_POST['email'];
		$check_email = "select * from users where user_email='$email'";
		$run_email = mysqli_query($con,$check_email);
		$check = mysqli_num_rows($run_email); 
		$row = $run_email->fetch_assoc();
		$uid = $row['user_id'];
	if($check >=1){
		header('location:newpassword.php?uid='.$uid);
	}else{
		echo "<script>alert('Email Address is not Found!')</script>";
	echo "<script>window.open('forgetpassword.php','_self')</script>";
	}
}

if(isset($_POST['submit_newpass'])){
	$uid = $_POST['user_id'];
	$pass = $_POST['newpassword'];
	if(strlen($pass)<8){
	
	echo "<script>alert('Password should be minimum 8 characters!')</script>";
	echo "<script>window.open('forgetpassword.php','_self')</script>";
	
	//exit();
	}else{
	$update = "UPDATE `users` SET `user_pass`='".$pass."' WHERE user_id=$uid";
	$run = mysqli_query($con,$update);
		if($run == 1){
			echo "<script>window.open('index.php','_self')</script>";
		}else {
			echo "<script>alert('Somthing Went Wrong!')</script>";
			echo "<script>window.open('forgetpassword.php','_self')</script>";
		}
	}
	
	
}
else{
	echo "<script>window.open('forgetpassword.php','_self')</script>";
}

?>