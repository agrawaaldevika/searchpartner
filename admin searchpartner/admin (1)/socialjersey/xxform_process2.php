<?php
session_start();

$_SESSION['q1'] = $_POST['q1'];
$_SESSION['q4'] = $_POST['q4'];
$_SESSION['q7'] = $_POST['q7'];

$_SESSION['q3'] = $_POST['q3'];

$_SESSION['q6'] = $_POST['q6'];

$_SESSION['q5'] = $_POST['q5'];


$_SESSION['email'] = $_POST['email'];
$_SESSION['user'] = $_POST['user'];
$_SESSION['formid'] = $_POST['formid'];
$_SESSION['subject'] = $_POST['subject'];

$paypalURL = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypalID = 'ecdesign41@gmail.com'; //Business Email


?>


<body  >

<form name="postForm" action="<?php echo $paypalURL; ?>" method="post" >
        <!-- Identify your business so that you can collect the payments. -->
        <input type="hidden" name="business" value="<?php echo $paypalID; ?>">
        
        <!-- Specify a Buy Now button. -->
        <input type="hidden" name="cmd" value="_xclick">
        
        <!-- Specify details about the item that buyers will purchase. -->
        <input type="hidden" name="item_name" value="fee">
        <input type="hidden" name="item_number" value="<?php echo rand(1000,99999); ?>">
        <input type="hidden" name="amount" value="1">
        <input type="hidden" name="currency_code" value="USD">
        
        <!-- Specify URLs -->
        <input type='hidden' name='cancel_return' value='http://www.setfreelancer.com/socialjersey/fail2.php'>
        <input type='hidden' name='return' value='http://www.setfreelancer.com/socialjersey/success2.php'>
        
        <!-- Display the payment button. -->
        <input type="image" name="submit" border="0"
        src="" alt="">
       
    </form>
    
<script>
    
    
     
      var postForm = document.forms.postForm;
      postForm.submit();
   
</script>
</body>



