<?php 
include('config.php');
session_start();
if( $_REQUEST['PHPSESSID']){
$payment = "0 USD";

$q2	=	$_SESSION['q2'];
	
	$q4	=	$_SESSION['q4'];
	$q5	=	$_SESSION['q5'];
	$q6	=	$_SESSION['q6']; 
	$q7	=	$_SESSION['q7'];
	$q8	=	$_SESSION['q8'];
	$q10	=	$_SESSION['q10'];
	$q9	=	$_SESSION['q9'];
		
		
	$email	=	$_SESSION['email'] ;
	$user	=	$_SESSION['user'];
	$formid	=	$_SESSION['formid'] ;
	$subject=	$_SESSION['subject'] ;
$pdatef = date('Y-m-d');
$query = "INSERT INTO `payment_info`(`name`, `email`, `type`, `title`, `url`, `keywords`, `category`, `payment`, `description`, `payment_status`,`payment_date`,`form_type`)
 VALUES ('$q9','$email','$q2','$q4','$q5','$q7','$q8','$payment','$q6','failed','$pdatef','Directory')";
$sql = mysqli_query($con,$query);

}
 ?>
<html>
<head>
  <title></title>
</head>
<body>

<center>
<h1>Payment Failed.Please Try Again!<br/>Your Information get stored with us successfully and get live as soon as payment will be done. <a href="https://www.sandbox.paypal.com/cgi-bin/webscr#/checkout/login">paypal</a></h1><br/> <h2><a style="text-decoration:none;" href="http://www.socialjersey.com"> Back to Home</a></h2></center>

</body>
</html>