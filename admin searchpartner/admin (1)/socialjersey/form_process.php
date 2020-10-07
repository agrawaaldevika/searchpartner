<?php
session_start();
require_once('dbconnect.php');



$_SESSION['q2'] = $_POST['q2'];
$_SESSION['q4'] = $_POST['q4'];
$_SESSION['q5'] = $_POST['q5'];
$_SESSION['q6'] = $_POST['q6'];
$_SESSION['q7'] = $_POST['q7'];
$_SESSION['q8'] = $_POST['q8'];
$_SESSION['q10'] = $_POST['q10'];
$_SESSION['q9'] = $_POST['q9'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['user'] = $_POST['user'];
$_SESSION['formid'] = $_POST['formid'];
$_SESSION['subject'] = $_POST['subject'];
$_SESSION['SUBMIT'] = "TAB1";
extract($_POST);

if($_POST['q2']=="Featured (Fee for our editors Urgent Manual review) $6.95 - 1 Year"){
$paypalURL = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypalID = 'client@testbuyer.com'; //Business Email
//echo "<pre>";
//print_r($_POST); die;
   


$query = "SELECT BUTTON_ID,URL FROM PAYPAL_INFO WHERE IS_ACTIVE=1 AND TAB_ID=1";
$result = mysqli_query($conn,$query) or trigger_error("SQL", E_USER_ERROR);

while(($row = mysqli_fetch_array($result)) ) {
   $buttonId = $row["BUTTON_ID"];
   $url = $row["URL"];
}
?>

<html>
<head>
<body  >

<form name="postForm" action="<?php echo  $url; ?>" method="post" >

<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="<?php echo $buttonId; ?>">
</form>

    
<script>
    
    
     
      var postForm = document.forms.postForm;
      postForm.submit();
   
</script>
</body>
</head>
</html>

<?php
} 
else{

     $query = "SELECT email FROM payment_info WHERE  type like '%".$q2."%' AND email='$email'";
    $result = mysqli_query($conn,$query) or trigger_error("SQL", E_USER_ERROR);
    $numRows =  $rowcount=mysqli_num_rows($result);

/*$payment = "6.95 USD";
$pdate = date('Y-m-d');
$query = "INSERT INTO `payment_info`(`name`, `email`, `type`, `title`, `url`, `keywords`, `category`, `payment`, `description`, `payment_status`,`payment_date`,`form_type`)
 VALUES ('$q9','$email','$q2','$q4','$q5','$q7','$q8','$payment','$q6','success','$pdate','Directory')";
$sql = mysqli_query($con,$query);*/

if($numRows!=0){
   
      echo "You have exhausted your free limit"; 
}else{
      $payment = "Free";
      $pdate = date('Y-m-d');
      $query = "INSERT INTO `payment_info`(`name`, `email`, `type`, `title`, `url`, `keywords`, `category`, `payment`, `description`, `payment_status`,`payment_date`,`form_type`)
      VALUES ('$q9','$email','$q2','$q4','$q5','$q7','$q8','$payment','$q6','success','$pdate','Directory')";
      $sql = mysqli_query($conn,$query);
      header("Location:http://www.socialjersey.com/p/thank-you.html?m=1");
      die();
}

}
//print_r($_SESSION);
?>


