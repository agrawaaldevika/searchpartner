<?php 




include("includes/connection.php");

?>
<div dir="ltr" style="text-align: left;" trbidi="on">
<div dir="ltr" style="text-align: left;" trbidi="on">
<br />
<head>
  
  
  
  
  <title>registeration</title>
  <link href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet"></link>
  <link href="/resources/demos/style.css" rel="stylesheet"></link>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#tabs" ).tabs();
  } );
  </script>
</head>

<div id="form2">
			<?php if(isset($_GET['fail'])){
						echo "<script>alert('Email already exist, please try another!')</script>";
					}
					?>


<br />
<div id="tabs">
<ul>
<li><a href="#tabs-1">Personal Details</a></li>
<li><a href="#tabs-2">Professional &amp; Educational</a></li>
<li><a href="#tabs-3">Family &amp; Lifestyle</a></li>
</ul>
<div id="tabs-1">
<!-- Begin myContactForm.com Form HTML -->

<br />
<form action="insert_user.php" id="contactForm" method="post" name="contactForm" style="background-color: white; border: 0px solid #000000; margin: 0; padding: 0; width: 100%;">
<table cellpadding="0" cellspacing="0" style="width: 100%px;" summary="This table contains contact form fields.">
 <tbody>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: white; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="email" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">E-mail Address: <span style="color: red;">*</span></label>
  <input id="email" maxlength="100" name="u_email" required="required" size="20" style="background-color: white; border: 1px solid #000000; color: black; font-family: &quot;arial&quot;; font-size: 14px; padding: 2px;" type="email" />
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: #efefef; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q2" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Password: <span style="color: red;">*</span></label> <input id="q2" maxlength="" name="u_pass" required="required" size="20" style="background-color: white; border: 1px solid #000000; color: black; font-family: &quot;arial&quot;; font-size: 14px; padding: 2px;" type="password" value="" />
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: white; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q3" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Create profile for: <span style="color: red;">*</span></label> <select id="q3" name="u_profilefor" required="required" style="background-color: white; border: 1px solid #000000; color: black; font-family: &quot;arial&quot;; font-size: 14px; padding: 2px;"><option value="Bride">Bride</option><option value="Groom">Groom</option></select>
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: #efefef; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q4" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Gender: <span style="color: red;">*</span></label> <select id="q4" name="u_gender" required="required" style="background-color: white; border: 1px solid #000000; color: black; font-family: &quot;arial&quot;; font-size: 14px; padding: 2px;"><option value="Male">Male</option><option value="Female">Female</option></select>
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: white; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q5" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Full Name: </label> <input id="q5" name="u_name" type="hidden" value="name437881" /> <input name="u_firstname" placeholder="First Name" size="8" style="background-color: white; border: 1px solid #000000; color: black; font-family: &quot;arial&quot;; font-size: 14px; padding: 2px;" type="text" />  <input name="u_lastname" placeholder="Last Name" size="8" style="background-color: white; border: 1px solid #000000; color: black; font-family: &quot;arial&quot;; font-size: 14px; padding: 2px;" type="text" />
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: #efefef; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q6" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Date of Birth: <span style="color: red;">*</span></label> <input id="q6" name="u_birthday" type="hidden" value="dob437881" /><input name="u_birthdayformat" type="hidden" value="2" /><select name="u_birthdayday" required="required" style="background-color: white; border: 1px solid #000000; color: black; font-family: &quot;arial&quot;; font-size: 14px; padding: 2px;"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select> / <select name="u_birthdaymonth" required="required" style="background-color: white; border: 1px solid #000000; color: black; font-family: &quot;arial&quot;; font-size: 14px; padding: 2px;"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select> / <select name="u_birthdayyear" required="required" style="background-color: white; border: 1px solid #000000; color: black; font-family: &quot;arial&quot;; font-size: 14px; padding: 2px;"><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option></select>
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: white; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q7" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Mobile: <span style="color: red;">*</span></label> <input id="q7" maxlength="" name="user_mobile" required="required" size="20" style="background-color: white; border: 1px solid #000000; color: black; font-family: &quot;arial&quot;; font-size: 14px; padding: 2px;" type="text" value="" />
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: white; clear: left; margin: 0; padding: 5px;"><input id="user" name="u_continue" type="hidden" value="searchpartneronline" />
   <input id="formid" name="formid" type="hidden" value="437881" />
   <input id="subject" name="subject" type="hidden" value="Search Partner Registeration" />
   <input name=" continue" style="border: solid; padding: 2px;" type="submit" value="continue " />
 </td>
 </tr>
</tbody></table>
</form>
</div>
<div id="tabs-2">
<!-- Begin myContactForm.com Form HTML -->

<br />
<form action="insert_user.php" id="contactForm" method="post" name="contactForm" style="background-color: white; border: 0px solid #000000; margin: 0; padding: 0; width: 100%;">
<table cellpadding="0" cellspacing="0" style="width: 100%px;" summary="This table contains contact form fields.">
    <tbody>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: white; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q8" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Mother tongue: <span style="color: red;">*</span></label> <select id="q8" name="u_tong" required="required" style="background-color: white; border: 1px solid #000000; color: black; font-family: &quot;arial&quot;; font-size: 14px; padding: 2px;"><option value="Hindi-Delhi">Hindi-Delhi</option><option value="Marathi">Marathi</option><option value="Hindi-UP">Hindi-UP</option><option value="Punjabi">Punjabi</option><option value="Telugu">Telugu</option><option value="Bengali">Bengali</option><option value="Tamil">Tamil</option><option value="Gujarati">Gujarati</option><option value="Malayalam">Malayalam</option><option value="Kannada">Kannada</option><option value="Hindi-MP">Hindi-MP</option><option value="Bihari">Bihari</option><option value="Rajasthani">Rajasthani</option><option value="Oriya">Oriya</option><option value="Konkani">Konkani</option><option value="Himachali">Himachali</option><option value="Haryanvi">Haryanvi</option><option value="Assamese">Assamese</option><option value="Kashmiri">Kashmiri</option><option value="Sikkim/Nepali">Sikkim/Nepali</option><option value="Hindi">Hindi</option></select>
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: #efefef; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q9" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Religion: <span style="color: red;">*</span></label> <select id="q9" name="u_religion" required="required" style="background-color: white; border: 1px solid #000000; color: black; font-family: &quot;arial&quot;; font-size: 14px; padding: 2px;"><option value="Hindu">Hindu</option><option value="Muslim">Muslim</option><option value="Christian">Christian</option><option value="Sikh">Sikh</option><option value="Jain">Jain</option><option value="Buddhist">Buddhist</option><option value="Parsi">Parsi</option><option value="Jewish">Jewish</option></select>
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: white; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q10" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Caste: <span style="color: red;">*</span></label> <select id="q10" name="u_caste" required="required" style="background-color: white; border: 1px solid #000000; color: black; font-family: &quot;arial&quot;; font-size: 14px; padding: 2px;"><option value="Brahmin">Brahmin</option><option value="Sunni">Sunni</option><option value="Kayastha">Kayastha</option><option value="Rajput">Rajput</option><option value="Maratha">Maratha</option><option value="Khatri">Khatri</option><option value="Aggarwal">Aggarwal</option><option value="Arora">Arora</option><option value="Kshatriya">Kshatriya</option><option value="Shwetamber">Shwetamber</option><option value="Yadav">Yadav</option><option value="Sindhi">Sindhi</option><option value="Bania">Bania</option><option value="Scheduled Caste">Scheduled Caste</option><option value="Nair">Nair</option><option value="Lingayat">Lingayat</option><option value="Jat">Jat</option><option value="Catholic - Roman">Catholic - Roman</option><option value="Patel">Patel</option><option value="Digamber">Digamber</option><option value="Sikh-Jat">Sikh-Jat</option><option value="Gupta">Gupta</option><option value="Catholic">Catholic</option><option value="Teli">Teli</option><option value="Vishwakarma">Vishwakarma</option><option value="Brahmin Iyer">Brahmin Iyer</option><option value="Vaishnav">Vaishnav</option><option value="Jaiswal">Jaiswal</option><option value="Gujjar">Gujjar</option></select>
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: #efefef; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q11" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Subcaste/Surname: </label> <input id="q11" maxlength="" name="u_subcaste" size="20" style="background-color: white; border: 1px solid #000000; color: black; font-family: &quot;arial&quot;; font-size: 14px; padding: 2px;" type="text" value="" />
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: white; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q12" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Are you Manglik? </label> <select id="q12" name="u_manglik" style="background-color: white; border: 1px solid #000000; color: black; font-family: &quot;arial&quot;; font-size: 14px; padding: 2px;"><option value="Manglik">Manglik</option><option value="Non-Manglik">Non-Manglik</option><option value="Anshik Manglik">Anshik Manglik</option></select>
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: #efefef; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q13" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Horoscope match is necessary? </label> <select id="q13" name="u_match" style="background-color: white; border: 1px solid #000000; color: black; font-family: &quot;arial&quot;; font-size: 14px; padding: 2px;"><option value="Must">Must</option><option value="Not Necessary">Not Necessary</option></select>
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: white; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q14" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Marital Status: </label> <select id="q14" name="u_status" style="background-color: white; border: 1px solid #000000; color: black; font-family: &quot;arial&quot;; font-size: 14px; padding: 2px;"><option value="Never Married">Never Married</option><option value="Awaiting Divorce">Awaiting Divorce</option><option value="Divorced">Divorced</option><option value="Widowed">Widowed</option><option value="Annulled">Annulled</option></select>
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: #efefef; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q15" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Have Children? </label> <select id="q15" name="u_child" style="background-color: white; border: 1px solid #000000; color: black; font-family: &quot;arial&quot;; font-size: 14px; padding: 2px;"><option value="No">No</option><option value="Yes,living together">Yes,living together</option><option value="Yes, living Separately">Yes, living Separately</option></select>
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: white; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q16" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Country: <span style="color: red;">*</span></label> <select id="q16" name="u_country" required="required" style="background-color: white; border: 1px solid #000000; color: black; font-family: &quot;arial&quot;; font-size: 14px; padding: 2px;">
<option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antarctica">Antarctica</option>
<option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahama">Bahama</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Bouvet Island">Bouvet Island</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
<option value="British Virgin Islands">British Virgin Islands</option>
<option value="Brunei Darussalam">Brunei Darussalam</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Cook Iislands">Cook Iislands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cote D\'ivoire (Ivory Coast)">Cote D'ivoire (Ivory Coast)</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="East Timor">East Timor</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Territories">French Southern Territories</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guinea-Bissau">Guinea-Bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Heard &amp; McDonald Islands">Heard &amp; McDonald Islands</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Islamic Republic of Iran">Islamic Republic of Iran</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
<option value="Korea, Republic of">Korea, Republic of</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macau">Macau</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Micronesia">Micronesia</option>
<option value="Moldova, Republic of">Moldova, Republic of</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Monserrat">Monserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>
<option value="Netherlands Antilles">Netherlands Antilles</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Northern Mariana Islands">Northern Mariana Islands</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Pitcairn">Pitcairn</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russian Federation">Russian Federation</option>
<option value="Rwanda">Rwanda</option>
<option value="Saint Lucia">Saint Lucia</option>
<option value="Samoa">Samoa</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="St. Helena">St. Helena</option>
<option value="St. Kitts and Nevis">St. Kitts and Nevis</option>
<option value="St. Pierre &amp; Miquelon">St. Pierre &amp; Miquelon</option>
<option value="St. Vincent &amp; the Grenadines">St. Vincent &amp; the Grenadines</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Svalbard &amp; Jan Mayen Islands">Svalbard &amp; Jan Mayen Islands</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syrian Arab Republic">Syrian Arab Republic</option>
<option value="Taiwan, Province of China">Taiwan, Province of China</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
<option value="Thailand">Thailand</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks &amp; Caicos Islands">Turks &amp; Caicos Islands</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="United Kingdom (Great Britain)">United Kingdom (Great Britain)</option>
<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
<option value="United States of America">United States of America</option>
<option value="United States Virgin Islands">United States Virgin Islands</option>
<option value="Uruguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Vatican City State">Vatican City State</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Vietnam</option>
<option value="Wallis &amp; Futuna Islands">Wallis &amp; Futuna Islands</option>
<option value="Western Sahara">Western Sahara</option>
<option value="Yemen">Yemen</option>
<option value="Yugoslavia">Yugoslavia</option>
<option value="Zaire">Zaire</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select>
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: #efefef; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q17" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Height: <span style="color: red;">*</span></label> <select id="q17" name="u_height" required="required" style="background-color: white; border: 1px solid #000000; color: black; font-family: &quot;arial&quot;; font-size: 14px; padding: 2px;"><option value="4' 0&quot; (1.22 mts)">4' 0" (1.22 mts)</option><option value="4' 1&quot; (1.24 mts)">4' 1" (1.24 mts)</option><option value="4' 2&quot; (1.28 mts)">4' 2" (1.28 mts)</option><option value="4' 3&quot; (1.31 mts)">4' 3" (1.31 mts)</option><option value="4' 4&quot; (1.34 mts)">4' 4" (1.34 mts)</option><option value="4' 5&quot; (1.35 mts)">4' 5" (1.35 mts)</option><option value="4' 6&quot; (1.37 mts)">4' 6" (1.37 mts)</option><option value="4' 7&quot; (1.40 mts)">4' 7" (1.40 mts)</option><option value="4' 8&quot; (1.42 mts)">4' 8" (1.42 mts)</option><option value="4' 9&quot; (1.45 mts)">4' 9" (1.45 mts)</option><option value="4' 10&quot; (1.47 mts)">4' 10" (1.47 mts)</option><option value="4' 11&quot; (1.50 mts)">4' 11" (1.50 mts)</option><option value="5' 0&quot; (1.52 mts)">5' 0" (1.52 mts)</option><option value="5' 1&quot; (1.55 mts)">5' 1" (1.55 mts)</option><option value="5' 2&quot; (1.58 mts)">5' 2" (1.58 mts)</option><option value="5' 3&quot; (1.60 mts)">5' 3" (1.60 mts)</option><option value="5' 4&quot; (1.63 mts)">5' 4" (1.63 mts)</option><option value="5' 5&quot; (1.65 mts">5' 5" (1.65 mts</option><option value="5' 6&quot; (1.68 mts)">5' 6" (1.68 mts)</option><option value="5' 7&quot; (1.70 mts)">5' 7" (1.70 mts)</option><option value="5' 8&quot; (1.73 mts)">5' 8" (1.73 mts)</option><option value="5' 9&quot; (1.75 mts)">5' 9" (1.75 mts)</option><option value="5' 10&quot; (1.78 mts)">5' 10" (1.78 mts)</option><option value="5' 11&quot; (1.80 mts)">5' 11" (1.80 mts)</option><option value="6' 0&quot; (1.83 mts)">6' 0" (1.83 mts)</option><option value="6' 1&quot; (1.85 mts)">6' 1" (1.85 mts)</option><option value="6' 2&quot; (1.88 mts)">6' 2" (1.88 mts)</option><option value="6' 3&quot; (1.91 mts)">6' 3" (1.91 mts)</option><option value="6' 4&quot; (1.93 mts)">6' 4" (1.93 mts)</option><option value="6' 5&quot; (1.95 mts)">6' 5" (1.95 mts)</option><option value="6' 6&quot; (1.98 mts)">6' 6" (1.98 mts)</option><option value="6' 7&quot; (2.01mts)">6' 7" (2.01mts)</option><option value="6' 8&quot; (2.03 mts)">6' 8" (2.03 mts)</option><option value="6' 9&quot; (2.06 mts)">6' 9" (2.06 mts)</option><option value="6' 10&quot; (2.08 mts)">6' 10" (2.08 mts)</option><option value="6' 11&quot; (2.11 mts)">6' 11" (2.11 mts)</option><option value="7' (2.13 mts)plus">7' (2.13 mts)plus</option><option value="7' (2.13 mts)plus">7' (2.13 mts)plus</option><option value="7' (2.13 mts)plus">7' (2.13 mts)plus</option><option value="7' (2.13 mts)plus">7' (2.13 mts)plus</option><option value="7' (2.13 mts)plus">7' (2.13 mts)plus</option><option value="7' (2.13 mts)plus">7' (2.13 mts)plus</option><option value="7' (2.13 mts)plus">7' (2.13 mts)plus</option><option value="7' (2.13 mts)plus">7' (2.13 mts)plus</option><option value="7' (2.13 mts)plus">7' (2.13 mts)plus</option><option value="7' (2.13 mts)plus">7' (2.13 mts)plus</option><option value="7' (2.13 mts)plus">7' (2.13 mts)plus</option><option value="7' (2.13 mts)plus">7' (2.13 mts)plus</option><option value="7' (2.13 mts)plus">7' (2.13 mts)plus</option><option value="7' (2.13 mts)plus">7' (2.13 mts)plus</option><option value="7' (2.13 mts)plus">7' (2.13 mts)plus</option><option value="7' (2.13 mts)plus">7' (2.13 mts)plus</option><option value="7' (2.13 mts)plus">7' (2.13 mts)plus</option><option value="7' (2.13 mts)plus">7' (2.13 mts)plus</option></select>
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: white; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q18" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Highest Degree: <span style="color: red;">*</span></label> <select id="q18" name="u_degree" required="required" style="background-color: white; border: 1px solid #000000; color: black; font-family: &quot;arial&quot;; font-size: 14px; padding: 2px;"><option value="B.Tech">B.Tech</option><option value="MBA">MBA</option></select>
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: #efefef; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q19" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">UG College(Optional): </label> <input id="q19" maxlength="" name="u_college" size="20" style="background-color: white; border: 1px solid #000000; color: black; font-family: &quot;arial&quot;; font-size: 14px; padding: 2px;" type="text" value="" />
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: white; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q20" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Occupation: <span style="color: red;">*</span></label> <select id="q20" name="u_occupation" required="required" style="background-color: white; border: 1px solid #000000; color: black; font-family: &quot;arial&quot;; font-size: 14px; padding: 2px;"><option value="IT Software">IT Software</option><option value="Teacher">Teacher</option><option value="CA/Accountant">CA/Accountant</option><option value="Businessman">Businessman</option><option value="Doctors/Nurse">Doctors/Nurse</option><option value="Govt. Services">Govt. Services</option><option value="Lawyers">Lawyers</option><option value="Defence">Defence</option><option value="IAS">IAS</option><option value="IAS">IAS</option><option value="IAS">IAS</option></select>
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: #efefef; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q21" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Annual Income: <span style="color: red;">*</span></label> <select id="q21" name="u_income" required="required" style="background-color: white; border: 1px solid #000000; color: black; font-family: &quot;arial&quot;; font-size: 14px; padding: 2px;"><option value="Rs. 0">Rs. 0</option><option value="Rs.1 Lakh">Rs.1 Lakh</option><option value="Rs.2 Lakh">Rs.2 Lakh</option><option value="Rs.3 Lakh">Rs.3 Lakh</option><option value="Rs.4 Lakh">Rs.4 Lakh</option><option value="Rs.5 Lakh">Rs.5 Lakh</option><option value="Rs.7.5 Lakh">Rs.7.5 Lakh</option><option value="Rs.10 Lakh">Rs.10 Lakh</option><option value="Rs.15 Lakh">Rs.15 Lakh</option><option value="Rs.20 Lakh">Rs.20 Lakh</option><option value="Rs.25 Lakh">Rs.25 Lakh</option><option value="Rs.35 Lakh">Rs.35 Lakh</option><option value="Rs.50 Lakh">Rs.50 Lakh</option><option value="Rs.70 Lakh">Rs.70 Lakh</option><option value="Rs.1 Crore">Rs.1 Crore</option></select>
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: white; clear: left; margin: 0; padding: 5px;"><input id="user" name="user" type="hidden" value="searchpartneronline" />
   <input id="formid" name="formid" type="hidden" value="437881" />
   <input id="subject" name="subject" type="hidden" value="Search Partner Registeration" />
   <input name="continue " style="border: solid; padding: 2px;" type="submit" value=" continue" />
 </td>
 </tr>
</tbody>
</table>
</form>
</div>
<div id="tabs-3">
<!-- Begin myContactForm.com Form HTML -->

<br />
<form action="insert_user.php" id="contactForm" method="post" name="contactForm" style="background-color: white; border: 0px solid #000000; margin: 0; padding: 0; width: 100%;">
<table cellpadding="0" cellspacing="0" style="width: 100%px;" summary="This table contains contact form fields.">
   <tbody>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: white; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q22" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Family type: <span style="color: red;">*</span></label> <select id="q22" name="q22" required="required" style="background-color: white; border: 1px solid #000000; color: black; font-family: &quot;arial&quot;; font-size: 14px; padding: 2px;"><option value="Select">Select</option><option value="Joint">Joint</option><option value="Nuclear">Nuclear</option><option value="Others">Others</option></select>
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: #efefef; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q23" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Father's Occupation: </label> <select id="q23" name="q23" style="background-color: white; border: 1px solid #000000; color: black; font-family: &quot;arial&quot;; font-size: 14px; padding: 2px;"><option value="Select">Select</option><option value="Business/Entrepreneur">Business/Entrepreneur</option><option value="Service- Private">Service- Private</option><option value="Service- Govt./PSU">Service- Govt./PSU</option><option value="Army/Armed Forces ">Army/Armed Forces </option><option value="Civil Services">Civil Services</option><option value="Retired">Retired</option><option value="Not Employed">Not Employed</option><option value="Expired">Expired</option></select>
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: white; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q24" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Mother's Occupation: </label> <select id="q24" name="q24" style="background-color: white; border: 1px solid #000000; color: black; font-family: &quot;arial&quot;; font-size: 14px; padding: 2px;"><option value="Select">Select</option><option value="Business/Entrepreneur">Business/Entrepreneur</option><option value="Service- Private">Service- Private</option><option value="Service- Govt./PSU">Service- Govt./PSU</option><option value="Army/Armed Forces ">Army/Armed Forces </option><option value="Civil Services">Civil Services</option><option value="Teacher">Teacher</option><option value="Housewife">Housewife</option><option value="Retired">Retired</option><option value="Expired">Expired</option></select>
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: #efefef; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q25" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Brother: </label> <select id="q25" name="q25" style="background-color: white; border: 1px solid #000000; color: black; font-family: &quot;arial&quot;; font-size: 14px; padding: 2px;"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="3+">3+</option></select>
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: white; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q26" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">How many Brother Married? </label> <select id="q26" name="q26" style="background-color: white; border: 1px solid #000000; color: black; font-family: &quot;arial&quot;; font-size: 14px; padding: 2px;"><option value="None">None</option><option value="1">1</option><option value="2">2</option></select>
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: #efefef; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q27" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Sister: </label> <select id="q27" name="q27" style="background-color: white; border: 1px solid #000000; color: black; font-family: &quot;arial&quot;; font-size: 14px; padding: 2px;"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="3+">3+</option></select>
  </td>
 </tr>
 <tr style="margin: 0; padding: 0;">
  <td style="background-color: #efefef; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q27" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">How many sister married: </label> <select id="q27" name="u_sistermarried" style="background-color: white; border: 1px solid #000000; color: black; font-family: &quot;arial&quot;; font-size: 14px; padding: 2px;"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="3+">3+</option></select>
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: white; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q28" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Family living in: </label> <select id="q28" name="q28" style="background-color: white; border: 1px solid #000000; color: black; font-family: &quot;arial&quot;; font-size: 14px; padding: 2px;"><option value="Outside">Outside</option></select>
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: #efefef; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q29" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Native City: </label> <input id="q29" maxlength="" name="q29" size="20" style="background-color: white; border: 1px solid #000000; color: black; font-family: &quot;arial&quot;; font-size: 14px; padding: 2px;" type="text" value="" />
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: white; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q30" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Contact address: </label> <input id="q30" maxlength="" name="q30" size="20" style="background-color: white; border: 1px solid #000000; color: black; font-family: &quot;arial&quot;; font-size: 14px; padding: 2px;" type="text" value="" />
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: #efefef; border-bottom: 0px solid #d8d8d8; clear: left; margin: 0; padding: 5px;"><label for="q31" style="color: black; float: left; font-family: &quot;arial&quot;; font-size: 14px; padding-top: 4px; width: 30%;">Express Yourself! </label> <textarea cols="20" id="q31" name="q31" rows="3" style="background-color: white; border: 1px solid #000000; color: black; font-family: &quot;arial&quot;; font-size: 14px; padding: 2px;"></textarea>
  </td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: white; clear: left; margin: 0; padding: 5px;"><hr style="background-color: #d8d8d8; color: #d8d8d8; height: 1px;" />
</td>
 </tr>
<tr style="margin: 0; padding: 0;">
  <td style="background-color: white; clear: left; margin: 0; padding: 5px;"><input id="user" name="user" type="hidden" value="searchpartneronline" />
   <input id="formid" name="formid" type="hidden" value="437881" />
   <input id="subject" name="subject" type="hidden" value="Search Partner Registeration" />
   <input name="submit" style="border: solid; padding: 2px;" type="submit" value="Submit" />
 </td>
 </tr>
</tbody>
</table>
</form>
</div>
</div>
</div>


	<td style="text-align: center;">
								<a href="forgetpassword.php">Forgot Password</a>
							</td>
						</tr>
					</table>
				<?php //include("insert_user.php");
					if(isset($_GET['success'])){
						echo "<h3 style='width:400px; text-align:justify; color:green;'>Hi,'".$_GET['success']."'congratulations, registration is almost complete, please check your email for final verification.</h3>";
					}
					if(isset($_GET['fail'])){
						echo "Registration failed, try again!";
					}
				?>
			</div>