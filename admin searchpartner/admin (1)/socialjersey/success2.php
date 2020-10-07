<?php
include('config.php');
session_start();
	$q1	=	$_SESSION['q1'];
	
	$q4	=	$_SESSION['q4'];
	$q7	=	$_SESSION['q7'];
	$q3	=	$_SESSION['q3']; 
	$q6	=	$_SESSION['q6'];
	$q5	=	$_SESSION['q5'];
	
		
	$email	=	$_SESSION['email'] ;
	$user	=	$_SESSION['user'];
	$formid	=	$_SESSION['formid'] ;
	$subject=	$_SESSION['subject'] ;
	
	$item_no            = $_REQUEST['item_number'];
$item_transaction   = $_REQUEST['tx']; // Paypal transaction ID
$item_price         = $_REQUEST['amt']; // Paypal received amount
$item_currency      = $_REQUEST['cc']; // Paypal received currency type
if( $_REQUEST['PHPSESSID']){
$payment = "1 USD";
$pdate = date('Y-m-d');

$query = "INSERT INTO `payment_info`(`name`,`email`,`keywords`, `category`, `payment`,  `payment_status`, `payment_date`,`press_release_summary`, `press_release_body`, `form_type`)
 VALUES ('$q5','$email','$q6','$q4','$payment','failed','$pdate','$q7','$q3','press_release')";


$sql = mysqli_query($con,$query);

}

?>

<body onload="submitForm1();" style="display:none;" >

<form action="http://www.socialjersey.com/p/thank-you.html?m=1" id="press" name="press" style="background-color: white; border: 0px solid #000000; margin: 0; padding: 0; width: 100%;">
<table cellpadding="0" cellspacing="0" style="width: 100%px;" summary="This table contains contact form fields.">
<tr style="margin: 0; padding: 0;">
  <td style="background-color: white; border-bottom: 0px solid #D8D8D8; clear: left; margin: 0; padding: 5px;">
  <label for="q1" style="color: black; float: left; font-family: Arial; font-size: 14px; padding-top: 4px; width: 30%;">Press Release Title: <span style="color: red;">*</span></label> <input id="q1" maxlength="60" name="q1" required="required" size="20" style="background-color: white; border: 1px solid #000000; color: black; font-family: Arial; font-size: 14px; padding: 2px;" type="text" value="<?php echo $q1; ?>" />
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: #efefef; border-bottom: 0px solid #D8D8D8; clear: left; margin: 0; padding: 5px;">
  <label for="q4" style="color: black; float: left; font-family: Arial; font-size: 14px; padding-top: 4px; width: 30%;">Category: </label> <select id="q4" name="q4" style="background-color: white; border: 1px solid #000000; color: black; font-family: Arial; font-size: 14px; padding: 2px;">
  <option <?php if($q4 == "Arts and Humanities"){echo "selected";} ?> value="Arts and Humanities">Arts and Humanities</option>
  <option <?php if($q4 == "Blogs"){echo "selected";} ?> value="Blogs">Blogs</option>
  <option <?php if($q4 == "Business and Economy"){echo "selected";} ?> value="Business and Economy">Business and Economy</option>
  <option <?php if($q4 == "Computers and Internet"){echo "selected";} ?> value="Computers and Internet">Computers and Internet</option>
  <option <?php if($q4 == "Education"){echo "selected";} ?> value="Education">Education</option>
  <option <?php if($q4 == "Entertainment"){echo "selected";} ?> value="Entertainment">Entertainment</option>
  <option <?php if($q4 == "Health"){echo "selected";} ?> value="Health">Health</option>
  <option <?php if($q4 == "News and Media"){echo "selected";} ?> value="News and Media">News and Media</option>
  <option <?php if($q4 == "Recreation and Sports"){echo "selected";} ?> value="Recreation and Sports">Recreation and Sports</option>
  <option <?php if($q4 == "Reference"){echo "selected";} ?> value="Reference">Reference</option>
  <option <?php if($q4 == "Science and Technology"){echo "selected";} ?> value="Science and Technology">Science and Technology</option>
  <option <?php if($q4 == "Shopping"){echo "selected";} ?> value="Shopping">Shopping</option>
  <option <?php if($q4 == "Society"){echo "selected";} ?> value="Society">Society</option>
</select>
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: white; border-bottom: 0px solid #D8D8D8; clear: left; margin: 0; padding: 5px;">
  <label for="q7" style="color: black; float: left; font-family: Arial; font-size: 14px; padding-top: 4px; width: 30%;">Press Release Summary: <span style="color: red;">*</span></label> <textarea cols="30" id="q7" name="q7" required="required" rows="3" style="background-color: white; border: 1px solid #000000; color: black; font-family: Arial; font-size: 14px; padding: 2px;"><?php echo $q7; ?></textarea>
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: #efefef; border-bottom: 0px solid #D8D8D8; clear: left; margin: 0; padding: 5px;">
  <label for="q3" style="color: black; float: left; font-family: Arial; font-size: 14px; padding-top: 4px; width: 30%;">Press Release Body: <span style="color: red;">*</span></label> <textarea cols="20" id="q3" name="q3" required="required" rows="13" style="background-color: white; border: 1px solid #000000; color: black; font-family: Arial; font-size: 14px; padding: 2px;"><?php echo $q3; ?></textarea>
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: white; border-bottom: 0px solid #D8D8D8; clear: left; margin: 0; padding: 5px;">
  <label for="q6" style="color: black; float: left; font-family: Arial; font-size: 14px; padding-top: 4px; width: 30%;">Keywords:<span style="color: red;">*</span> </label> <input id="q6" maxlength="100" name="q6" required="required" size="20" style="background-color: white; border: 1px solid #000000; color: black; font-family: Arial; font-size: 14px; padding: 2px;" type="text" value="<?php echo $q6; ?>" />
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: #efefef; border-bottom: 0px solid #D8D8D8; clear: left; margin: 0; padding: 5px;">
  <label for="q5" style="color: black; float: left; font-family: Arial; font-size: 14px; padding-top: 4px; width: 30%;">Your Name: </label> <input id="q5" maxlength="20" name="q5" size="20" style="background-color: white; border: 1px solid #000000; color: black; font-family: Arial; font-size: 14px; padding: 2px;" type="text" value="<?php echo $q5; ?>" />
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: white; border-bottom: 0px solid #D8D8D8; clear: left; margin: 0; padding: 5px;">
  <label for="email" style="color: black; float: left; font-family: Arial; font-size: 14px; padding-top: 4px; width: 30%;">E-mail Address: <span style="color: red;">*</span></label>
  <input id="email" maxlength="100" name="email" required="required" size="20" style="background-color: white; border: 1px solid #000000; color: black; font-family: Arial; font-size: 14px; padding: 2px;" type="email" value="<?php echo $email; ?>" />
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: white; clear: left; margin: 0; padding: 5px;">
<hr style="background-color: #d8d8d8; color: #d8d8d8; height: 1px;" />
 </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: white; clear: left; margin: 0; padding: 5px;">
   <input id="user" name="user" type="hidden" value="agrawaaldevika" />
   <input id="formid" name="formid" type="hidden" value="437298" />
   <input id="subject" name="subject" type="hidden" value="Submission Article" />By Clicking on Submit you are ensuring to agree Terms and Conditions<br />
   <input name="presssubmit" style="border: solid; padding: 2px;" type="submit" value="Submit" />
   <input name="reset" style="border: solid; padding: 2px;" type="reset" value="Reset" />
 </td>
 </tr>
</table>
</form>


<script type="text/javascript">
 function submitForm1() {
    document.getElementById('press').submit(); // SUBMIT FORM
    }
</script>

</body>