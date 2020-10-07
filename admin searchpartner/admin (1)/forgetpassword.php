<?php 

include("template/header.php");




include("includes/connection.php");

?><html><body><center>
<!-- Begin myContactForm.com Form HTML -->
<form action="forgot_submit.php" id="contactForm" method="post" name="contactForm" style="background-color: white; border: 0px solid #000000; margin: 0; padding: 0; width: 100%;">

<table cellpadding="0" cellspacing="0" style="width: 100%px;" summary="This table contains contact form fields.">

 <tbody>
 <tr style="margin: 0; padding: 0;">
  <td style="background-color: white; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="email" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">E-mail Address: <span style="color: red;">*</span></label>
  <input id="email" maxlength="100" name="email" required="required" size="40" type="email" /><br />
<tr style="margin: 0; padding: 0;">
  <td style="background-color: white; clear: left; margin: 0; padding: 5px;"><input id="user" name="user" type="hidden" value="socialjersey" />
   <input id="formid" name="formid" type="hidden" value="438516" />
   <input id="subject" name="subject" type="hidden" value="Submit Complaint" />
   <input name="submit_forgot" type="submit" value="Submit" />
 </td>
 </tr>
  </td>
 </tr></tbody></table></form></center></body></html>
 
 
 <?php 

include("template/footer.php");  ?>
