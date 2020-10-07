<?php
include('config.php');
session_start();
	$q1	=	$_SESSION['q1'];
	$q2	=	$_SESSION['q2'];
	$q3	=	$_SESSION['q3']; 
	$q4	=	$_SESSION['q4'];
	$q5	=	$_SESSION['q5'];
	$q6	=	$_SESSION['q6'];
	$q7	=	$_SESSION['q7'];
	$q8	=	$_SESSION['q8'];
	$q9	=	$_SESSION['q9'];
	$q10	=	$_SESSION['q10'];
		
		
	$email	=	$_SESSION['email'] ;
	$user	=	$_SESSION['user'];
	$formid	=	$_SESSION['formid'] ;
	$subject=	$_SESSION['subject'] ;
	
	$item_no            = $_REQUEST['item_number'];
$item_transaction   = $_REQUEST['tx']; // Paypal transaction ID
$item_price         = $_REQUEST['amt']; // Paypal received amount
$item_currency      = $_REQUEST['cc']; // Paypal received currency type
if( $_REQUEST['PHPSESSID']){
$payment = "10 USD";
$pdate = date('Y-m-d');
$query = "INSERT INTO `payment_info`(`name`, `email`, `payment`,  `payment_status`, `payment_date`, `form_type`, `occupation`, `sub_category`, `phone1`, `phone2`, `street_address1`, `street_address2`, `postal_code`, `country`, `website`) 
VALUES ('$q1','$email','$payment','success','$pdate','business','$q2','$q3','$q4','$q5','$q6','$q7','$q9','$q10','$q8')";
$sql = mysqli_query($con,$query);

}

?>

<body onload="submitForm1();" style="display:none;";>
<form action="http://www.socialjersey.com/p/thank-you.html?m=1" id="sdateForm3"  name="sdateForm3" style="background-color: white; border: 0px solid #000000; margin: 0; padding: 0; width: 100%;">
<table cellpadding="0" cellspacing="0" style="width: 100%px;" summary="This table contains contact form fields.">
 <tbody>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: white; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q1" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Name: <span style="color: red;">*</span></label> <input id="q1" maxlength="" name="q1" required="required" size="20" type="text" value="<?php echo $q1; ?>" />
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: #efefef; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="email" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 34%;">E-mail Address: <span style="color: red;">*</span></label>
  <input id="email" maxlength="100" name="email" required="required" size="20" type="email" value="<?php echo $email; ?>" />
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: white; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q2" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Occupation: <span style="color: red;">*</span></label> 
    <select id="q2" name="q2" required="required">
      <option <?php if($q2 == "Service"){ echo "selected";} ?> value="Service">Service</option>
      <option <?php if($q2 == "Business Man"){ echo "selected";} ?> value="Business Man">Business Man</option>
    </select>
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: #efefef; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q3" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Sub Category: <span style="color: red;">*</span></label> <input id="q3" maxlength="" name="q3" required="required" size="20" type="text" value="<?php echo $q3; ?>" />
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: white; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q4" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Work Phone1: <span style="color: red;">*</span></label> <input id="q4" maxlength="" name="q4" required="required" size="20" type="text" value="<?php echo $q4; ?>" />
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: #efefef; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q5" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Work Phone2: </label> <input id="q5" maxlength="" name="q5" size="20" type="text" value="<?php echo $q5; ?>" />
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: white; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q6" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Street Address1: <span style="color: red;">*</span></label> <input id="q6" maxlength="" name="q6" required="required" size="20" type="text" value="<?php echo $q6; ?>" />
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: #efefef; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q7" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Street Address2: </label> <input id="q7" maxlength="" name="q7" size="20" type="text" value="<?php echo $q7; ?>" />
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: white; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q9" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Postal code: <span style="color: red;">*</span></label> <input id="q9" maxlength="" name="q9" required="required" size="20" type="text" value="<?php echo $q9; ?>" />
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: #efefef; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q10" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 100%;">Country: <span style="color: red;">*</span></label> <select id="q10" name="q10" required="required">
<option <?php if($q10 == "Afghanistan"){echo "selected";} ?> value="Afghanistan">Afghanistan</option>
<option <?php if($q10 == "Albania"){echo "selected";} ?> value="Albania">Albania</option>
<option <?php if($q10 == "Algeria"){echo "selected";} ?> value="Algeria">Algeria</option>
<option <?php if($q10 == "American Samoa"){echo "selected";} ?> value="American Samoa">American Samoa</option>
<option <?php if($q10 == "Andorra"){echo "selected";} ?> value="Andorra">Andorra</option>
<option <?php if($q10 == "Angola"){echo "selected";} ?> value="Angola">Angola</option>
<option <?php if($q10 == "Anguilla"){echo "selected";} ?> value="Anguilla">Anguilla</option>
<option <?php if($q10 == "Antarctica"){echo "selected";} ?> value="Antarctica">Antarctica</option>
<option <?php if($q10 == "Antigua &amp; Barbuda"){echo "selected";} ?> value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
<option <?php if($q10 == "Argentina"){echo "selected";} ?> value="Argentina">Argentina</option>
<option <?php if($q10 == "Armenia"){echo "selected";} ?> value="Armenia">Armenia</option>
<option <?php if($q10 == "Aruba"){echo "selected";} ?> value="Aruba">Aruba</option>
<option <?php if($q10 == "Australia"){echo "selected";} ?> value="Australia">Australia</option>
<option <?php if($q10 == "Austria"){echo "selected";} ?> value="Austria">Austria</option>
<option <?php if($q10 == "Azerbaijan"){echo "selected";} ?> value="Azerbaijan">Azerbaijan</option>
<option <?php if($q10 == "Bahama"){echo "selected";} ?> value="Bahama">Bahama</option>
<option <?php if($q10 == "Bahrain"){echo "selected";} ?> value="Bahrain">Bahrain</option>
<option <?php if($q10 == "Bangladesh"){echo "selected";} ?> value="Bangladesh">Bangladesh</option>
<option <?php if($q10 == "Barbados"){echo "selected";} ?> value="Barbados">Barbados</option>
<option <?php if($q10 == "Belarus"){echo "selected";} ?> value="Belarus">Belarus</option>
<option <?php if($q10 == "Belgium"){echo "selected";} ?> value="Belgium">Belgium</option>
<option <?php if($q10 == "Belize"){echo "selected";} ?> value="Belize">Belize</option>
<option <?php if($q10 == "Benin"){echo "selected";} ?> value="Benin">Benin</option>
<option <?php if($q10 == "Bermuda"){echo "selected";} ?> value="Bermuda">Bermuda</option>
<option <?php if($q10 == "Bhutan"){echo "selected";} ?> value="Bhutan">Bhutan</option>
<option <?php if($q10 == "Bolivia"){echo "selected";} ?> value="Bolivia">Bolivia</option>
<option <?php if($q10 == "Bosnia and Herzegovina"){echo "selected";} ?> value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
<option <?php if($q10 == "Botswana"){echo "selected";} ?> value="Botswana">Botswana</option>
<option <?php if($q10 == "Bouvet Island"){echo "selected";} ?> value="Bouvet Island">Bouvet Island</option>
<option <?php if($q10 == "Brazil"){echo "selected";} ?> value="Brazil">Brazil</option>
<option <?php if($q10 == "British Indian Ocean Territory"){echo "selected";} ?> value="British Indian Ocean Territory">British Indian Ocean Territory</option>
<option <?php if($q10 == "British Virgin Islands"){echo "selected";} ?> value="British Virgin Islands">British Virgin Islands</option>
<option <?php if($q10 == "Brunei Darussalam"){echo "selected";} ?> value="Brunei Darussalam">Brunei Darussalam</option>
<option <?php if($q10 == "Bulgaria"){echo "selected";} ?> value="Bulgaria">Bulgaria</option>
<option <?php if($q10 == "Burkina Faso"){echo "selected";} ?> value="Burkina Faso">Burkina Faso</option>
<option <?php if($q10 == "Burundi"){echo "selected";} ?> value="Burundi">Burundi</option>
<option <?php if($q10 == "Cambodia"){echo "selected";} ?> value="Cambodia">Cambodia</option>
<option <?php if($q10 == "Cameroon"){echo "selected";} ?> value="Cameroon">Cameroon</option>
<option <?php if($q10 == "Canada"){echo "selected";} ?> value="Canada">Canada</option>
<option <?php if($q10 == "Cape Verde"){echo "selected";} ?> value="Cape Verde">Cape Verde</option>
<option <?php if($q10 == "Cayman Islands"){echo "selected";} ?> value="Cayman Islands">Cayman Islands</option>
<option <?php if($q10 == "Central African Republic"){echo "selected";} ?> value="Central African Republic">Central African Republic</option>
<option <?php if($q10 == "Chad"){echo "selected";} ?> value="Chad">Chad</option>
<option <?php if($q10 == "Chile"){echo "selected";} ?> value="Chile">Chile</option>
<option <?php if($q10 == "China"){echo "selected";} ?> value="China">China</option>
<option <?php if($q10 == "Christmas Island"){echo "selected";} ?> value="Christmas Island">Christmas Island</option>
<option <?php if($q10 == "Cocos (Keeling) Islands"){echo "selected";} ?> value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
<option <?php if($q10 == "Colombia"){echo "selected";} ?> value="Colombia">Colombia</option>
<option <?php if($q10 == "Comoros"){echo "selected";} ?> value="Comoros">Comoros</option>
<option <?php if($q10 == "Congo"){echo "selected";} ?> value="Congo">Congo</option>
<option <?php if($q10 == "Cook Iislands"){echo "selected";} ?> value="Cook Iislands">Cook Iislands</option>
<option <?php if($q10 == "Costa Rica"){echo "selected";} ?> value="Costa Rica">Costa Rica</option>
<option <?php if($q10 == "Cote D\'ivoire (Ivory Coast)"){echo "selected";} ?> value="Cote D\'ivoire (Ivory Coast)">Cote D'ivoire (Ivory Coast)</option>
<option <?php if($q10 == "Croatia"){echo "selected";} ?> value="Croatia">Croatia</option>
<option <?php if($q10 == "Cuba"){echo "selected";} ?> value="Cuba">Cuba</option>
<option <?php if($q10 == "Cyprus"){echo "selected";} ?> value="Cyprus">Cyprus</option>
<option <?php if($q10 == "Czech Republic"){echo "selected";} ?> value="Czech Republic">Czech Republic</option>
<option <?php if($q10 == "Denmark"){echo "selected";} ?> value="Denmark">Denmark</option>
<option <?php if($q10 == "Djibouti"){echo "selected";} ?> value="Djibouti">Djibouti</option>
<option <?php if($q10 == "Dominica"){echo "selected";} ?> value="Dominica">Dominica</option>
<option <?php if($q10 == "Dominican Republic"){echo "selected";} ?> value="Dominican Republic">Dominican Republic</option>
<option <?php if($q10 == "East Timor"){echo "selected";} ?> value="East Timor">East Timor</option>
<option <?php if($q10 == "Ecuador"){echo "selected";} ?> value="Ecuador">Ecuador</option>
<option <?php if($q10 == "Egypt"){echo "selected";} ?> value="Egypt">Egypt</option>
<option <?php if($q10 == "El Salvador"){echo "selected";} ?> value="El Salvador">El Salvador</option>
<option <?php if($q10 == "Equatorial Guinea"){echo "selected";} ?> value="Equatorial Guinea">Equatorial Guinea</option>
<option <?php if($q10 == "Eritrea"){echo "selected";} ?> value="Eritrea">Eritrea</option>
<option <?php if($q10 == "Estonia"){echo "selected";} ?> value="Estonia">Estonia</option>
<option <?php if($q10 == "Ethiopia"){echo "selected";} ?> value="Ethiopia">Ethiopia</option>
<option <?php if($q10 == "Falkland Islands (Malvinas)"){echo "selected";} ?> value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
<option <?php if($q10 == "Faroe Islands"){echo "selected";} ?> value="Faroe Islands">Faroe Islands</option>
<option <?php if($q10 == "Fiji"){echo "selected";} ?> value="Fiji">Fiji</option>
<option <?php if($q10 == "Finland"){echo "selected";} ?> value="Finland">Finland</option>
<option <?php if($q10 == "France"){echo "selected";} ?> value="France">France</option>
<option <?php if($q10 == "French Guiana"){echo "selected";} ?> value="French Guiana">French Guiana</option>
<option <?php if($q10 == "French Polynesia"){echo "selected";} ?> value="French Polynesia">French Polynesia</option>
<option <?php if($q10 == "French Southern Territories"){echo "selected";} ?> value="French Southern Territories">French Southern Territories</option>
<option <?php if($q10 == "Gabon"){echo "selected";} ?> value="Gabon">Gabon</option>
<option <?php if($q10 == "Gambia"){echo "selected";} ?> value="Gambia">Gambia</option>
<option <?php if($q10 == "Georgia"){echo "selected";} ?> value="Georgia">Georgia</option>
<option <?php if($q10 == "Germany"){echo "selected";} ?> value="Germany">Germany</option>
<option <?php if($q10 == "Ghana"){echo "selected";} ?> value="Ghana">Ghana</option>
<option <?php if($q10 == "Gibraltar"){echo "selected";} ?> value="Gibraltar">Gibraltar</option>
<option <?php if($q10 == "Greece"){echo "selected";} ?> value="Greece">Greece</option>
<option <?php if($q10 == "Greenland"){echo "selected";} ?> value="Greenland">Greenland</option>
<option <?php if($q10 == "Grenada"){echo "selected";} ?> value="Grenada">Grenada</option>
<option <?php if($q10 == "Guadeloupe"){echo "selected";} ?> value="Guadeloupe">Guadeloupe</option>
<option <?php if($q10 == "Guam"){echo "selected";} ?> value="Guam">Guam</option>
<option <?php if($q10 == "Guatemala"){echo "selected";} ?> value="Guatemala">Guatemala</option>
<option <?php if($q10 == "Guinea"){echo "selected";} ?> value="Guinea">Guinea</option>
<option <?php if($q10 == "Guinea-Bissau"){echo "selected";} ?> value="Guinea-Bissau">Guinea-Bissau</option>
<option <?php if($q10 == "Guyana"){echo "selected";} ?> value="Guyana">Guyana</option>
<option <?php if($q10 == "Haiti"){echo "selected";} ?> value="Haiti">Haiti</option>
<option <?php if($q10 == "Heard &amp; McDonald Islands"){echo "selected";} ?> value="Heard &amp; McDonald Islands">Heard &amp; McDonald Islands</option>
<option <?php if($q10 == "Honduras"){echo "selected";} ?> value="Honduras">Honduras</option>
<option <?php if($q10 == "Hong Kong"){echo "selected";} ?> value="Hong Kong">Hong Kong</option>
<option <?php if($q10 == "Hungary"){echo "selected";} ?> value="Hungary">Hungary</option>
<option <?php if($q10 == "Iceland"){echo "selected";} ?> value="Iceland">Iceland</option>
<option <?php if($q10 == "India"){echo "selected";} ?> value="India">India</option>
<option <?php if($q10 == "Indonesia"){echo "selected";} ?> value="Indonesia">Indonesia</option>
<option <?php if($q10 == "Iraq"){echo "selected";} ?> value="Iraq">Iraq</option>
<option <?php if($q10 == "Ireland"){echo "selected";} ?> value="Ireland">Ireland</option>
<option <?php if($q10 == "Islamic Republic of Iran"){echo "selected";} ?> value="Islamic Republic of Iran">Islamic Republic of Iran</option>
<option <?php if($q10 == "Israel"){echo "selected";} ?> value="Israel">Israel</option>
<option <?php if($q10 == "Italy"){echo "selected";} ?> value="Italy">Italy</option>
<option <?php if($q10 == "Jamaica"){echo "selected";} ?> value="Jamaica">Jamaica</option>
<option <?php if($q10 == "Japan"){echo "selected";} ?> value="Japan">Japan</option>
<option <?php if($q10 == "Jordan"){echo "selected";} ?> value="Jordan">Jordan</option>
<option <?php if($q10 == "Kazakhstan"){echo "selected";} ?> value="Kazakhstan">Kazakhstan</option>
<option <?php if($q10 == "Kenya"){echo "selected";} ?> value="Kenya">Kenya</option>
<option <?php if($q10 == "Kiribati"){echo "selected";} ?> value="Kiribati">Kiribati</option>
<option <?php if($q10 == "Korea, Democratic People's Republic of"){echo "selected";} ?> value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
<option <?php if($q10 == "Korea, Republic of"){echo "selected";} ?> value="Korea, Republic of">Korea, Republic of</option>
<option <?php if($q10 == "Kuwait"){echo "selected";} ?> value="Kuwait">Kuwait</option>
<option <?php if($q10 == "Kyrgyzstan"){echo "selected";} ?> value="Kyrgyzstan">Kyrgyzstan</option>
<option <?php if($q10 == "Lao People's Democratic Republic"){echo "selected";} ?> value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
<option <?php if($q10 == "Latvia"){echo "selected";} ?> value="Latvia">Latvia</option>
<option <?php if($q10 == "Lebanon"){echo "selected";} ?> value="Lebanon">Lebanon</option>
<option <?php if($q10 == "Lesotho"){echo "selected";} ?> value="Lesotho">Lesotho</option>
<option <?php if($q10 == "Liberia"){echo "selected";} ?> value="Liberia">Liberia</option>
<option <?php if($q10 == "Libyan Arab Jamahiriya"){echo "selected";} ?> value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
<option <?php if($q10 == "Liechtenstein"){echo "selected";} ?> value="Liechtenstein">Liechtenstein</option>
<option <?php if($q10 == "Lithuania"){echo "selected";} ?> value="Lithuania">Lithuania</option>
<option <?php if($q10 == "Luxembourg"){echo "selected";} ?> value="Luxembourg">Luxembourg</option>
<option <?php if($q10 == "Macau"){echo "selected";} ?> value="Macau">Macau</option>
<option <?php if($q10 == "Madagascar"){echo "selected";} ?> value="Madagascar">Madagascar</option>
<option <?php if($q10 == "Malawi"){echo "selected";} ?> value="Malawi">Malawi</option>
<option <?php if($q10 == "Malaysia"){echo "selected";} ?> value="Malaysia">Malaysia</option>
<option <?php if($q10 == "Maldives"){echo "selected";} ?> value="Maldives">Maldives</option>
<option <?php if($q10 == "Mali"){echo "selected";} ?> value="Mali">Mali</option>
<option <?php if($q10 == "Malta"){echo "selected";} ?> value="Malta">Malta</option>
<option <?php if($q10 == "Marshall Islands"){echo "selected";} ?> value="Marshall Islands">Marshall Islands</option>
<option <?php if($q10 == "Martinique"){echo "selected";} ?> value="Martinique">Martinique</option>
<option <?php if($q10 == "Mauritania"){echo "selected";} ?> value="Mauritania">Mauritania</option>
<option <?php if($q10 == "Mauritius"){echo "selected";} ?> value="Mauritius">Mauritius</option>
<option <?php if($q10 == "Mayotte"){echo "selected";} ?> value="Mayotte">Mayotte</option>
<option <?php if($q10 == "Mexico"){echo "selected";} ?> value="Mexico">Mexico</option>
<option <?php if($q10 == "Micronesia"){echo "selected";} ?> value="Micronesia">Micronesia</option>
<option <?php if($q10 == "Moldova, Republic of"){echo "selected";} ?> value="Moldova, Republic of">Moldova, Republic of</option>
<option <?php if($q10 == "Monaco"){echo "selected";} ?> value="Monaco">Monaco</option>
<option <?php if($q10 == "Mongolia"){echo "selected";} ?> value="Mongolia">Mongolia</option>
<option <?php if($q10 == "Monserrat"){echo "selected";} ?> value="Monserrat">Monserrat</option>
<option <?php if($q10 == "Morocco"){echo "selected";} ?> value="Morocco">Morocco</option>
<option <?php if($q10 == "Mozambique"){echo "selected";} ?> value="Mozambique">Mozambique</option>
<option <?php if($q10 == "Myanmar"){echo "selected";} ?> value="Myanmar">Myanmar</option>
<option <?php if($q10 == "Namibia"){echo "selected";} ?> value="Namibia">Namibia</option>
<option <?php if($q10 == "Nauru"){echo "selected";} ?> value="Nauru">Nauru</option>
<option <?php if($q10 == "Nepal"){echo "selected";} ?> value="Nepal">Nepal</option>
<option <?php if($q10 == "Netherlands"){echo "selected";} ?> value="Netherlands">Netherlands</option>
<option <?php if($q10 == "Netherlands Antilles"){echo "selected";} ?> value="Netherlands Antilles">Netherlands Antilles</option>
<option <?php if($q10 == "New Caledonia"){echo "selected";} ?> value="New Caledonia">New Caledonia</option>
<option <?php if($q10 == "New Zealand"){echo "selected";} ?> value="New Zealand">New Zealand</option>
<option <?php if($q10 == "Nicaragua"){echo "selected";} ?> value="Nicaragua">Nicaragua</option>
<option <?php if($q10 == "Niger"){echo "selected";} ?> value="Niger">Niger</option>
<option <?php if($q10 == "Nigeria"){echo "selected";} ?> value="Nigeria">Nigeria</option>
<option <?php if($q10 == "Niue"){echo "selected";} ?> value="Niue">Niue</option>
<option <?php if($q10 == "Norfolk Island"){echo "selected";} ?> value="Norfolk Island">Norfolk Island</option>
<option <?php if($q10 == "Northern Mariana Islands"){echo "selected";} ?> value="Northern Mariana Islands">Northern Mariana Islands</option>
<option <?php if($q10 == "Norway"){echo "selected";} ?> value="Norway">Norway</option>
<option <?php if($q10 == "Oman"){echo "selected";} ?> value="Oman">Oman</option>
<option <?php if($q10 == "Pakistan"){echo "selected";} ?> value="Pakistan">Pakistan</option>
<option <?php if($q10 == "Palau"){echo "selected";} ?> value="Palau">Palau</option>
<option <?php if($q10 == "Panama"){echo "selected";} ?> value="Panama">Panama</option>
<option <?php if($q10 == "Papua New Guinea"){echo "selected";} ?> value="Papua New Guinea">Papua New Guinea</option>
<option <?php if($q10 == "Paraguay"){echo "selected";} ?> value="Paraguay">Paraguay</option>
<option <?php if($q10 == "Peru"){echo "selected";} ?> value="Peru">Peru</option>
<option <?php if($q10 == "Philippines"){echo "selected";} ?> value="Philippines">Philippines</option>
<option <?php if($q10 == "Pitcairn"){echo "selected";} ?> value="Pitcairn">Pitcairn</option>
<option <?php if($q10 == "Poland"){echo "selected";} ?> value="Poland">Poland</option>
<option <?php if($q10 == "Portugal"){echo "selected";} ?> value="Portugal">Portugal</option>
<option <?php if($q10 == "Puerto Rico"){echo "selected";} ?> value="Puerto Rico">Puerto Rico</option>
<option <?php if($q10 == "Qatar"){echo "selected";} ?> value="Qatar">Qatar</option>
<option <?php if($q10 == "Reunion"){echo "selected";} ?> value="Reunion">Reunion</option>
<option <?php if($q10 == "Romania"){echo "selected";} ?> value="Romania">Romania</option>
<option <?php if($q10 == "Russian Federation"){echo "selected";} ?> value="Russian Federation">Russian Federation</option>
<option <?php if($q10 == "Rwanda"){echo "selected";} ?> value="Rwanda">Rwanda</option>
<option <?php if($q10 == "Saint Lucia"){echo "selected";} ?> value="Saint Lucia">Saint Lucia</option>
<option <?php if($q10 == "Samoa"){echo "selected";} ?> value="Samoa">Samoa</option>
<option <?php if($q10 == "San Marino"){echo "selected";} ?> value="San Marino">San Marino</option>
<option <?php if($q10 == "Sao Tome &amp; Principe"){echo "selected";} ?> value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
<option <?php if($q10 == "Saudi Arabia"){echo "selected";} ?> value="Saudi Arabia">Saudi Arabia</option>
<option <?php if($q10 == "Senegal"){echo "selected";} ?> value="Senegal">Senegal</option>
<option <?php if($q10 == "Seychelles"){echo "selected";} ?> value="Seychelles">Seychelles</option>
<option <?php if($q10 == "Sierra Leone"){echo "selected";} ?> value="Sierra Leone">Sierra Leone</option>
<option <?php if($q10 == "Singapore"){echo "selected";} ?> value="Singapore">Singapore</option>
<option <?php if($q10 == "Slovakia"){echo "selected";} ?> value="Slovakia">Slovakia</option>
<option <?php if($q10 == "Slovenia"){echo "selected";} ?> value="Slovenia">Slovenia</option>
<option <?php if($q10 == "Solomon Islands"){echo "selected";} ?> value="Solomon Islands">Solomon Islands</option>
<option <?php if($q10 == "Somalia"){echo "selected";} ?> value="Somalia">Somalia</option>
<option <?php if($q10 == "South Africa"){echo "selected";} ?> value="South Africa">South Africa</option>
<option <?php if($q10 == "South Georgia and the South Sandwich Islands"){echo "selected";} ?> value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
<option <?php if($q10 == "Spain"){echo "selected";} ?> value="Spain">Spain</option>
<option <?php if($q10 == "Sri Lanka"){echo "selected";} ?> value="Sri Lanka">Sri Lanka</option>
<option <?php if($q10 == "St. Helena"){echo "selected";} ?> value="St. Helena">St. Helena</option>
<option <?php if($q10 == "St. Kitts and Nevis"){echo "selected";} ?> value="St. Kitts and Nevis">St. Kitts and Nevis</option>
<option <?php if($q10 == "St. Pierre &amp; Miquelon"){echo "selected";} ?> value="St. Pierre &amp; Miquelon">St. Pierre &amp; Miquelon</option>
<option <?php if($q10 == "St. Vincent &amp; the Grenadines"){echo "selected";} ?> value="St. Vincent &amp; the Grenadines">St. Vincent &amp; the Grenadines</option>
<option <?php if($q10 == "Sudan"){echo "selected";} ?> value="Sudan">Sudan</option>
<option <?php if($q10 == "Suriname"){echo "selected";} ?> value="Suriname">Suriname</option>
<option <?php if($q10 == "Svalbard &amp; Jan Mayen Islands"){echo "selected";} ?> value="Svalbard &amp; Jan Mayen Islands">Svalbard &amp; Jan Mayen Islands</option>
<option <?php if($q10 == "Swaziland"){echo "selected";} ?> value="Swaziland">Swaziland</option>
<option <?php if($q10 == "Sweden"){echo "selected";} ?> value="Sweden">Sweden</option>
<option <?php if($q10 == "Switzerland"){echo "selected";} ?> value="Switzerland">Switzerland</option>
<option <?php if($q10 == "Syrian Arab Republic"){echo "selected";} ?> value="Syrian Arab Republic">Syrian Arab Republic</option>
<option <?php if($q10 == "Taiwan, Province of China"){echo "selected";} ?> value="Taiwan, Province of China">Taiwan, Province of China</option>
<option <?php if($q10 == "Tajikistan"){echo "selected";} ?> value="Tajikistan">Tajikistan</option>
<option <?php if($q10 == "Tanzania, United Republic of"){echo "selected";} ?> value="Tanzania, United Republic of">Tanzania, United Republic of</option>
<option <?php if($q10 == "Thailand"){echo "selected";} ?> value="Thailand">Thailand</option>
<option <?php if($q10 == "Togo"){echo "selected";} ?> value="Togo">Togo</option>
<option <?php if($q10 == "Tokelau"){echo "selected";} ?> value="Tokelau">Tokelau</option>
<option <?php if($q10 == "Tonga"){echo "selected";} ?> value="Tonga">Tonga</option>
<option <?php if($q10 == "Trinidad &amp; Tobago"){echo "selected";} ?> value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
<option <?php if($q10 == "Tunisia"){echo "selected";} ?> value="Tunisia">Tunisia</option>
<option <?php if($q10 == "Turkey"){echo "selected";} ?> value="Turkey">Turkey</option>
<option <?php if($q10 == "Turkmenistan"){echo "selected";} ?> value="Turkmenistan">Turkmenistan</option>
<option <?php if($q10 == "Turks &amp; Caicos Islands"){echo "selected";} ?> value="Turks &amp; Caicos Islands">Turks &amp; Caicos Islands</option>
<option <?php if($q10 == "Tuvalu"){echo "selected";} ?> value="Tuvalu">Tuvalu</option>
<option <?php if($q10 == "Uganda"){echo "selected";} ?> value="Uganda">Uganda</option>
<option <?php if($q10 == "Ukraine"){echo "selected";} ?> value="Ukraine">Ukraine</option>
<option <?php if($q10 == "United Arab Emirates"){echo "selected";} ?> value="United Arab Emirates">United Arab Emirates</option>
<option <?php if($q10 == "United Kingdom (Great Britain)"){echo "selected";} ?> value="United Kingdom (Great Britain)">United Kingdom (Great Britain)</option>
<option <?php if($q10 == "United States Minor Outlying Islands"){echo "selected";} ?> value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
<option <?php if($q10 == "United States of America"){echo "selected";} ?> value="United States of America">United States of America</option>
<option <?php if($q10 == "United States Virgin Islands"){echo "selected";} ?> value="United States Virgin Islands">United States Virgin Islands</option>
<option <?php if($q10 == "Uruguay"){echo "selected";} ?> value="Uruguay">Uruguay</option>
<option <?php if($q10 == "Uzbekistan"){echo "selected";} ?> value="Uzbekistan">Uzbekistan</option>
<option <?php if($q10 == "Vanuatu"){echo "selected";} ?> value="Vanuatu">Vanuatu</option>
<option <?php if($q10 == "Vatican City State"){echo "selected";} ?> value="Vatican City State">Vatican City State</option>
<option <?php if($q10 == "Venezuela"){echo "selected";} ?> value="Venezuela">Venezuela</option>
<option <?php if($q10 == "Vietnam"){echo "selected";} ?> value="Vietnam">Vietnam</option>
<option <?php if($q10 == "Wallis &amp; Futuna Islands"){echo "selected";} ?> value="Wallis &amp; Futuna Islands">Wallis &amp; Futuna Islands</option>
<option <?php if($q10 == "Western Sahara"){echo "selected";} ?> value="Western Sahara">Western Sahara</option>
<option <?php if($q10 == "Yemen"){echo "selected";} ?> value="Yemen">Yemen</option>
<option <?php if($q10 == "Yugoslavia"){echo "selected";} ?> value="Yugoslavia">Yugoslavia</option>
<option <?php if($q10 == "Zaire"){echo "selected";} ?> value="Zaire">Zaire</option>
<option <?php if($q10 == "Zambia"){echo "selected";} ?> value="Zambia">Zambia</option>
<option <?php if($q10 == "Zimbabwe"){echo "selected";} ?> value="Zimbabwe">Zimbabwe</option>
</select>
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: white; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q8" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Website: </label> <input id="q8" maxlength="" name="q8" size="20" type="text" value="<?php echo $q8; ?>" />
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: white; clear: left; margin: 0; padding: 5px;"><hr style="background-color: #d8d8d8; color: #d8d8d8; height: 1px;" />
</td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: white; clear: left; margin: 0; padding: 5px;"><input id="user" name="user" type="hidden" value="socialjersey" />
   <input id="formid" name="formid" type="hidden" value="439196" />
   <input id="subject" name="subject" type="hidden" value="List Your Business" />
   <input name="form3btnsubmit" type="submit" value="Submit" />
   <input name="reset" type="reset" value="Reset" />
 </td>
 </tr>
</tbody></table>
</form>
<script type="text/javascript">
 function submitForm1() {
    document.getElementById('sdateForm3').submit(); // SUBMIT FORM
    }
</script>

</body>