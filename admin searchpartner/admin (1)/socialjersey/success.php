<?php
include('config.php');
session_start();
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
	
	$item_no            = $_REQUEST['item_number'];
$item_transaction   = $_REQUEST['tx']; // Paypal transaction ID
$item_price         = $_REQUEST['amt']; // Paypal received amount
$item_currency      = $_REQUEST['cc']; // Paypal received currency type
if( $_REQUEST['PHPSESSID']){
$payment = "6.95 USD";
$pdate = date('Y-m-d');
$query = "INSERT INTO `payment_info`(`name`, `email`, `type`, `title`, `url`, `keywords`, `category`, `payment`, `description`, `payment_status`,`payment_date`,`form_type`)
 VALUES ('$q9','$email','$q2','$q4','$q5','$q7','$q8','$payment','$q6','success','$pdate','Directory')";
$sql = mysqli_query($con,$query);

}

?>

<body onload="submitForm1();" style="display:none;";>
<form action="http://www.socialjersey.com/p/thank-you.html?m=1" id="sdateForm"  name="sdateForm" style="background-color: white; border: 0px solid #000000; margin: 0; padding: 0; width: 100%;"> 

<table cellpadding="0" cellspacing="0" style="width: 100%px;" summary="This table contains contact form fields.">
 <tbody>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: white; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q2" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Choose <span style="color: red;">*</span></label> <br />
<div style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px;">
<input id="q2" name="q2" required="required" type="radio" value="Regular links with reciprocal free"
 <?php if($q2 == "Regular links with reciprocal free"){ echo "checked";} ?> 

 />Regular links with reciprocal free<br />
<input id="q2" name="q2" required="required" type="radio" value="Regular links free"
<?php if($q2 == "Regular links free"){ echo "checked";} ?>
 />Regular links free<br />
<input id="q2" name="q2" required="required" type="radio" value="Featured (Fee for our editors Urgent Manual review) $6.95 - 1 Year"
<?php if($q2 == "Featured (Fee for our editors Urgent Manual review) $6.95 - 1 Year"){ echo "checked";} ?>
 />Featured (Fee for our editors Urgent Manual review) $6.95 - 1 Year</div>
<div style="clear: both;">
</div>
</td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: #efefef; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q4" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Title: <span style="color: red;">*</span></label> <input id="q4" maxlength="60" name="q4" required="required" size="20" type="text" value="<?php echo $q4; ?>" />
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: white; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q5" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Url: <span style="color: red;">*</span></label> <input id="q5" maxlength="60" name="q5" required="required" size="20" type="text" value="<?php echo $q5; ?>" />
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: #efefef; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q6" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Description:</label> <textarea cols="30" id="q6" name="q6" rows="4"><?php echo $q6; ?></textarea>
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: white; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q7" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Keywords:<span style="color: red;">*</span> </label> <input id="q7" maxlength="100" name="q7" required="required" size="20" type="text" value="<?php echo $q7; ?>" />
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">a
  <td style="background-color: #efefef; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q8" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Category: <span style="color: red;">*</span></label> <select id="q8" name="q8" required="required">
    <option <?php if($q8 == "Arts and Humanities"){echo "selected";} ?> value="Arts and Humanities">Arts and Humanities</option>
    <option <?php if($q8 == "Blogs"){echo "selected";} ?> value="Blogs">Blogs</option>
    <option <?php if($q8 == "Business and Economy"){echo "selected";} ?> value="Business and Economy">Business and Economy</option>
    <option <?php if($q8 == "Computers and Internet"){echo "selected";} ?> value="Computers and Internet">Computers and Internet</option>
    <option <?php if($q8 == "Education"){echo "selected";} ?> value="Education">Education</option>
    <option <?php if($q8 == "Entertainment"){echo "selected";} ?> value="Entertainment">Entertainment</option>
    <option <?php if($q8 == "Health"){echo "selected";} ?> value="Health">Health</option>
    <option <?php if($q8 == "News and Media"){echo "selected";} ?> value="News and Media">News and Media</option>
    <option <?php if($q8 == "Recreation and Sports"){echo "selected";} ?> value="Recreation and Sports">Recreation and Sports</option>
    <option <?php if($q8 == "Reference"){echo "selected";} ?> value="Reference">Reference</option>
    <option <?php if($q8 == "Science and Technology"){echo "selected";} ?> value="Science and Technology">Science and Technology</option>
    <option <?php if($q8 == "Shopping"){echo "selected";} ?> value="Shopping">Shopping</option>
    <option <?php if($q8 == "Society"){echo "selected";} ?> value="Society">Society</option>
  </select>
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: white; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q10" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Reciprocal Link: </label> <input id="q10" maxlength="" name="q10" size="20" type="text" value="<?php echo $q10; ?>" />
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: #efefef; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q9" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Your Name: <span style="color: red;">*</span></label> <input id="q9" maxlength="" name="q9" required="required" size="20" type="text" value="<?php echo $q9; ?>" />
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: white; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="email" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">E-mail Address: <span style="color: red;">*</span></label>
  <input id="email" maxlength="100" name="email" required="required" value="<?php echo $email; ?>" size="20" type="email" />
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: white; clear: left; margin: 0; padding: 5px;"><hr style="background-color: #d8d8d8; color: #d8d8d8; height: 1px;" />
</td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: white; clear: left; margin: 0; padding: 5px;">
<input id="user" name="user" type="hidden" value="agrawaaldevika" />
   <input id="formid" name="formid" type="hidden" value="437282" />By Clicking on Submit you are ensuring to agree Terms and Conditions<br />
   <input id="subject" name="subject" type="hidden" value="Directory Submission Request" />
   <input name="smybtnSubmit" type="submit" value="Submit" />
 </td>
 </tr>
</tbody></table>
</form>
<script type="text/javascript">
 function submitForm1() {
    document.getElementById('sdateForm').submit(); // SUBMIT FORM
    }
</script>

</body>