<?php
session_start();
require_once('dbconnect.php');
$_SESSION['q1'] = $_POST['q1'];
$_SESSION['q2'] = $_POST['q2'];
$_SESSION['q3'] = $_POST['q3'];
$_SESSION['q4'] = $_POST['q4'];
$_SESSION['q5'] = $_POST['q5'];
$_SESSION['q6'] = $_POST['q6'];
$_SESSION['q7'] = $_POST['q7'];
$_SESSION['q8'] = $_POST['q8'];
$_SESSION['q9'] = $_POST['q9'];
$_SESSION['q10'] = $_POST['q10'];
$_SESSION['q3'] = $_POST['q3'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['user'] = $_POST['user'];
$_SESSION['formid'] = $_POST['formid'];
$_SESSION['subject'] = $_POST['subject'];
$_SESSION['SUBMIT'] = "TAB4";

$query = "SELECT BUTTON_ID,URL FROM PAYPAL_INFO WHERE IS_ACTIVE=1 AND TAB_ID=4";
$result = mysqli_query($conn,$query) or trigger_error("SQL", E_USER_ERROR);

while(($row = mysqli_fetch_array($result)) ) {
   $buttonId = $row["BUTTON_ID"];
   $url = $row["URL"];
}


?>


<body  >

    <form name="postForm" action="<?php echo $url; ?>" method="post" >
       <input type="hidden" name="cmd" value="_s-xclick">
       <input type="hidden" name="hosted_button_id" value="<?php echo $buttonId; ?>">
       
    </form>
    
<script>
    
    
     
      var postForm = document.forms.postForm;
      postForm.submit();
   
</script>
</body>



