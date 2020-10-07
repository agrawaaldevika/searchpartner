<?php 
session_start();
if(isset($_SESSION['user_email'])){
	echo $_SESSION['user_email'];
	header("location: home.php");
}
else{
include("template/header.php");
include("template/content.php");
include("template/footer.php");
include("login.php");
}
?>