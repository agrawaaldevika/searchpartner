<?php 

include("template/header.php");
include("includes/connection.php");
if(!isset($_SESSION['user_email'])){
	
	header("location: index.php");

}
else {
?><html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Accordion - No auto height</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion({
      heightStyle: "content"
    });
  } );
  </script>
</head>
<body>
 <center><h1> Desired Partner Profile</h1></center>
 
  <!-- Begin myContactForm.com Form HTML -->
<form name="contactForm" id="contactForm" method="post"  action="http://www.mycontactform.com/sendform/sendform.php" style="width: 100%; border: 0px solid #000000; margin: 0; padding: 0; background-color: #FFFFFF;">
 
 <div style="background-color: #EFEFEF; border-bottom: 0px solid #D8D8D8; padding: 5px; clear: left; margin: 0;">
  <label for="q1" style="float: left; width: 30%; padding-top: 4px; font-family: Arial; color: #000000; font-size: 14px;">Age </label> <select name="q1" id="q1" style="font-family: Arial; font-size: 14px; color: #000000; background-color: #FFFFFF; border: 1px solid #000000; padding: 2px;" ><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option><option value="51">51</option><option value="52">52</option><option value="53">53</option><option value="54">54</option><option value="55">55</option><option value="56">56</option><option value="57">57</option><option value="58">58</option><option value="59">59</option><option value="60">60</option><option value="61">61</option><option value="62">62</option><option value="63">63</option><option value="64">64</option><option value="65">65</option><option value="66">66</option><option value="67">67</option><option value="68">68</option><option value="69">69</option><option value="70">70</option><option value="70+">70+</option></select>
 </div>
 <div style="background-color: #FFFFFF; border-bottom: 0px solid #D8D8D8; padding: 5px; clear: left; margin: 0;">
  <label for="q2" style="float: left; width: 30%; padding-top: 4px; font-family: Arial; color: #000000; font-size: 14px;">Height </label> <select name="q2" id="q2" style="font-family: Arial; font-size: 14px; color: #000000; background-color: #FFFFFF; border: 1px solid #000000; padding: 2px;" ><option value="4' 0&quot; (1.22 mts)">4' 0&quot; (1.22 mts)</option><option value="4' 1&quot; (1.24 mts)">4' 1&quot; (1.24 mts)</option><option value="4' 2&quot; (1.28 mts)">4' 2&quot; (1.28 mts)</option><option value="4' 3&quot; (1.31 mts)">4' 3&quot; (1.31 mts)</option><option value="4' 4&quot; (1.34 mts)">4' 4&quot; (1.34 mts)</option><option value="4' 5&quot; (1.35 mts)">4' 5&quot; (1.35 mts)</option><option value="4' 6&quot; (1.37 mts)">4' 6&quot; (1.37 mts)</option><option value="4' 7&quot; (1.40 mts)">4' 7&quot; (1.40 mts)</option><option value="4' 8&quot; (1.42 mts)">4' 8&quot; (1.42 mts)</option><option value="4' 9&quot; (1.45 mts)">4' 9&quot; (1.45 mts)</option><option value="4' 10&quot; (1.47 mts)">4' 10&quot; (1.47 mts)</option><option value="4' 11&quot; (1.50 mts)">4' 11&quot; (1.50 mts)</option><option value="5' 0&quot; (1.52 mts)">5' 0&quot; (1.52 mts)</option><option value="5' 1&quot; (1.55 mts)">5' 1&quot; (1.55 mts)</option><option value="5' 2&quot; (1.58 mts)">5' 2&quot; (1.58 mts)</option><option value="5' 3&quot; (1.60 mts)">5' 3&quot; (1.60 mts)</option><option value="5' 4&quot; (1.63 mts)">5' 4&quot; (1.63 mts)</option><option value="5' 5&quot; (1.65 mts">5' 5&quot; (1.65 mts</option><option value="5' 6&quot; (1.68 mts)">5' 6&quot; (1.68 mts)</option><option value="5' 7&quot; (1.70 mts)">5' 7&quot; (1.70 mts)</option><option value="5' 8&quot; (1.73 mts)">5' 8&quot; (1.73 mts)</option><option value="5' 9&quot; (1.75 mts)">5' 9&quot; (1.75 mts)</option><option value="5' 10&quot; (1.78 mts)">5' 10&quot; (1.78 mts)</option><option value="5' 11&quot; (1.80 mts)">5' 11&quot; (1.80 mts)</option><option value="6' 0&quot; (1.83 mts)">6' 0&quot; (1.83 mts)</option><option value="6' 1&quot; (1.85 mts)">6' 1&quot; (1.85 mts)</option><option value="6' 2&quot; (1.88 mts)">6' 2&quot; (1.88 mts)</option><option value="6' 3&quot; (1.91 mts)">6' 3&quot; (1.91 mts)</option><option value="6' 4&quot; (1.93 mts)">6' 4&quot; (1.93 mts)</option><option value="6' 5&quot; (1.95 mts)">6' 5&quot; (1.95 mts)</option><option value="6' 6&quot; (1.98 mts)">6' 6&quot; (1.98 mts)</option><option value="6' 7&quot; (2.01mts)">6' 7&quot; (2.01mts)</option><option value="6' 8&quot; (2.03 mts)">6' 8&quot; (2.03 mts)</option><option value="6' 9&quot; (2.06 mts)">6' 9&quot; (2.06 mts)</option></select>
 </div>
 <div style="background-color: #EFEFEF; border-bottom: 0px solid #D8D8D8; padding: 5px; clear: left; margin: 0;">
  <label for="q3" style="float: left; width: 30%; padding-top: 4px; font-family: Arial; color: #000000; font-size: 14px;">Marital Status </label> <select name="q3" id="q3" style="font-family: Arial; font-size: 14px; color: #000000; background-color: #FFFFFF; border: 1px solid #000000; padding: 2px;" ><option value="Awaiting Divorce">Awaiting Divorce</option><option value="Never Married">Never Married</option><option value="Widowed">Widowed</option><option value="Annulled">Annulled</option><option value="Divorced">Divorced</option></select>
 </div>
 <div style="background-color: #FFFFFF; border-bottom: 0px solid #D8D8D8; padding: 5px; clear: left; margin: 0;">
  <label for="q4" style="float: left; width: 30%; padding-top: 4px; font-family: Arial; color: #000000; font-size: 14px;">Country </label> <select name="q4" id="q4" style="font-family: Arial; font-size: 14px; color: #000000; background-color: #FFFFFF; border: 1px solid #000000; padding: 2px;" ><option value="India">India</option><option value="US">US</option></select>
 </div>
 <div style="background-color: #EFEFEF; border-bottom: 0px solid #D8D8D8; padding: 5px; clear: left; margin: 0;">
  <label for="q5" style="float: left; width: 30%; padding-top: 4px; font-family: Arial; color: #000000; font-size: 14px;">Preferred Location </label> <select name="q5" id="q5" style="font-family: Arial; font-size: 14px; color: #000000; background-color: #FFFFFF; border: 1px solid #000000; padding: 2px;" ><option value="Nearby you">Nearby you</option><option value="Within City">Within City</option><option value="Within State">Within State</option><option value="Within Country">Within Country</option><option value="Anywhere">Anywhere</option></select>
 </div>
 <div style="background-color: #FFFFFF; border-bottom: 0px solid #D8D8D8; padding: 5px; clear: left; margin: 0;">
  <label for="q6" style="float: left; width: 30%; padding-top: 4px; font-family: Arial; color: #000000; font-size: 14px;">Religion </label> <select name="q6" id="q6" style="font-family: Arial; font-size: 14px; color: #000000; background-color: #FFFFFF; border: 1px solid #000000; padding: 2px;" ><option value="Hindu">Hindu</option><option value="Muslim">Muslim</option><option value="Christian">Christian</option><option value="Sikh">Sikh</option><option value="Jain">Jain</option><option value="Buddhist">Buddhist</option><option value="Parsi">Parsi</option><option value="Jewish">Jewish</option></select>
 </div>
 <div style="background-color: #EFEFEF; border-bottom: 0px solid #D8D8D8; padding: 5px; clear: left; margin: 0;">
  <label for="q7" style="float: left; width: 30%; padding-top: 4px; font-family: Arial; color: #000000; font-size: 14px;">Caste </label> <select name="q7" id="q7" style="font-family: Arial; font-size: 14px; color: #000000; background-color: #FFFFFF; border: 1px solid #000000; padding: 2px;" ><option value="Brahmin">Brahmin</option><option value="Sunni">Sunni</option><option value="Kayastha">Kayastha</option><option value="Rajput">Rajput</option><option value="Maratha">Maratha</option><option value="Khatri">Khatri</option><option value="Aggarwal">Aggarwal</option><option value="Arora">Arora</option><option value="Kshatriya">Kshatriya</option><option value="Shwetamber">Shwetamber</option><option value="Yadav">Yadav</option><option value="Sindhi">Sindhi</option><option value="Bania">Bania</option><option value="Scheduled Caste">Scheduled Caste</option><option value="Nair">Nair</option><option value="Lingayat">Lingayat</option><option value="Jat">Jat</option><option value="Catholic - Roman">Catholic - Roman</option><option value="Patel">Patel</option><option value="Digamber">Digamber</option><option value="Sikh-Jat">Sikh-Jat</option><option value="Gupta">Gupta</option><option value="Catholic">Catholic</option><option value="Teli">Teli</option><option value="Vishwakarma">Vishwakarma</option><option value="Brahmin Iyer">Brahmin Iyer</option><option value="Vaishnav">Vaishnav</option><option value="Jaiswal">Jaiswal</option><option value="Gujjar">Gujjar</option><option value="Syrian">Syrian</option></select>
 </div>
 <div style="background-color: #FFFFFF; border-bottom: 0px solid #D8D8D8; padding: 5px; clear: left; margin: 0;">
  <label for="q8" style="float: left; width: 30%; padding-top: 4px; font-family: Arial; color: #000000; font-size: 14px;">Mother Tongue </label> <select name="q8" id="q8" style="font-family: Arial; font-size: 14px; color: #000000; background-color: #FFFFFF; border: 1px solid #000000; padding: 2px;" ><option value="Hindi-Delhi">Hindi-Delhi</option><option value="Marathi">Marathi</option><option value="Hindi-UP">Hindi-UP</option><option value="Punjabi">Punjabi</option><option value="Telugu">Telugu</option><option value="Bengali">Bengali</option><option value="Tamil">Tamil</option><option value="Gujarati">Gujarati</option><option value="Malayalam">Malayalam</option><option value="Kannada">Kannada</option><option value="Hindi-MP">Hindi-MP</option><option value="Bihari">Bihari</option><option value="Rajasthani">Rajasthani</option><option value="Oriya">Oriya</option><option value="Konkani">Konkani</option><option value="Himachali">Himachali</option><option value="Haryanvi">Haryanvi</option><option value="Assamese">Assamese</option><option value="Kashmiri">Kashmiri</option><option value="Sikkim/Nepali">Sikkim/Nepali</option><option value="Hindi">Hindi</option></select>
 </div>
 <div style="background-color: #EFEFEF; border-bottom: 0px solid #D8D8D8; padding: 5px; clear: left; margin: 0;">
  <label for="q9" style="float: left; width: 30%; padding-top: 4px; font-family: Arial; color: #000000; font-size: 14px;">Manglik </label> <select name="q9" id="q9" style="font-family: Arial; font-size: 14px; color: #000000; background-color: #FFFFFF; border: 1px solid #000000; padding: 2px;" ><option value="Manglik">Manglik</option><option value="Non-Manglik">Non-Manglik</option><option value="Anshik Manglik">Anshik Manglik</option></select>
 </div>
 <div style="background-color: #FFFFFF; border-bottom: 0px solid #D8D8D8; padding: 5px; clear: left; margin: 0;">
  <label for="q10" style="float: left; width: 30%; padding-top: 4px; font-family: Arial; color: #000000; font-size: 14px;">Highest Education </label> <select name="q10" id="q10" style="font-family: Arial; font-size: 14px; color: #000000; background-color: #FFFFFF; border: 1px solid #000000; padding: 2px;" ><option value="Medical">Medical</option><option value="Non-Medical">Non-Medical</option></select>
 </div>
 <div style="background-color: #EFEFEF; border-bottom: 0px solid #D8D8D8; padding: 5px; clear: left; margin: 0;">
  <label for="q11" style="float: left; width: 30%; padding-top: 4px; font-family: Arial; color: #000000; font-size: 14px;">Occupation </label> <select name="q11" id="q11" style="font-family: Arial; font-size: 14px; color: #000000; background-color: #FFFFFF; border: 1px solid #000000; padding: 2px;" ><option value="IT Software">IT Software</option><option value="Teacher">Teacher</option><option value="CA/Accountant">CA/Accountant</option><option value="Businessman">Businessman</option><option value="Doctors/Nurse">Doctors/Nurse</option><option value="Govt. Services">Govt. Services</option><option value="Lawyers">Lawyers</option><option value="Defence">Defence</option><option value="IAS">IAS</option></select>
 </div>
 <div style="background-color: #FFFFFF; border-bottom: 0px solid #D8D8D8; padding: 5px; clear: left; margin: 0;">
  <label for="q12" style="float: left; width: 30%; padding-top: 4px; font-family: Arial; color: #000000; font-size: 14px;">Income </label> <select name="q12" id="q12" style="font-family: Arial; font-size: 14px; color: #000000; background-color: #FFFFFF; border: 1px solid #000000; padding: 2px;" ><option value="No Income">No Income</option><option value="Rs.1 Lakh">Rs.1 Lakh</option><option value="Rs.2 Lakh">Rs.2 Lakh</option><option value="Rs.3 Lakh">Rs.3 Lakh</option><option value="Rs.4 Lakh">Rs.4 Lakh</option><option value="Rs.5 Lakh">Rs.5 Lakh</option><option value="Rs.7.5 Lakh">Rs.7.5 Lakh</option><option value="Rs.10 Lakh">Rs.10 Lakh</option><option value="Rs.15 Lakh">Rs.15 Lakh</option><option value="Rs.20 Lakh">Rs.20 Lakh</option><option value="Rs.25 Lakh">Rs.25 Lakh</option><option value="Rs.35 Lakh">Rs.35 Lakh</option><option value="Rs.50 Lakh">Rs.50 Lakh</option><option value="Rs.70 Lakh">Rs.70 Lakh</option><option value="Rs.1 Crore">Rs.1 Crore</option></select>
 </div>
 
</div>
<div id="accordion">
  <h3>Education and Career</h3>
  <div>
    <p>Mauris mauris ante, blandit et, ultrices a, susceros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.</p>
  </div>
  <h3>LifeStyle</h3>
  <div>
    <p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In suscipit faucibus urna. </p>
  </div>
  <h3>More Options</h3>
  <div>
   <div style="background-color: #EFEFEF; border-bottom: 0px solid #D8D8D8; padding: 5px; clear: left; margin: 0;">
  <label for="q13" style="float: left; width: 30%; padding-top: 4px; font-family: Arial; color: #000000; font-size: 14px;">Work Preference </label> <select name="q13" id="q13" style="font-family: Arial; font-size: 14px; color: #000000; background-color: #FFFFFF; border: 1px solid #000000; padding: 2px;" ><option value="Always">Always</option><option value="Not Continue after Marriage">Not Continue after Marriage</option><option value="Undecided">Undecided</option></select>
 </div>
 <div style="background-color: #FFFFFF; border-bottom: 0px solid #D8D8D8; padding: 5px; clear: left; margin: 0;">
  <label for="q14" style="float: left; width: 30%; padding-top: 4px; font-family: Arial; color: #000000; font-size: 14px;">Dietary habits </label> <select name="q14" id="q14" style="font-family: Arial; font-size: 14px; color: #000000; background-color: #FFFFFF; border: 1px solid #000000; padding: 2px;" ><option value="Vegeterian">Vegeterian</option><option value="Non Veg">Non Veg</option><option value="Eggeterian">Eggeterian</option><option value="Jain">Jain</option></select>
 </div>
 <div style="background-color: #EFEFEF; border-bottom: 0px solid #D8D8D8; padding: 5px; clear: left; margin: 0;">
  <label for="q15" style="float: left; width: 30%; padding-top: 4px; font-family: Arial; color: #000000; font-size: 14px;">Drinking habits </label> <select name="q15" id="q15" style="font-family: Arial; font-size: 14px; color: #000000; background-color: #FFFFFF; border: 1px solid #000000; padding: 2px;" ><option value="Yes">Yes</option><option value="No">No</option><option value="Occasionally">Occasionally</option></select>
 </div>
 <div style="background-color: #FFFFFF; border-bottom: 0px solid #D8D8D8; padding: 5px; clear: left; margin: 0;">
  <label for="q16" style="float: left; width: 30%; padding-top: 4px; font-family: Arial; color: #000000; font-size: 14px;">Smoking habits </label> <select name="q16" id="q16" style="font-family: Arial; font-size: 14px; color: #000000; background-color: #FFFFFF; border: 1px solid #000000; padding: 2px;" ><option value="Yes">Yes</option><option value="No">No</option><option value="Occasionally">Occasionally</option></select>
 </div>
 <div style="background-color: #EFEFEF; border-bottom: 0px solid #D8D8D8; padding: 5px; clear: left; margin: 0;">
  <label for="q17" style="float: left; width: 30%; padding-top: 4px; font-family: Arial; color: #000000; font-size: 14px;">Complexion </label> <select name="q17" id="q17" style="font-family: Arial; font-size: 14px; color: #000000; background-color: #FFFFFF; border: 1px solid #000000; padding: 2px;" ><option value="Fair">Fair</option><option value="Very Fair">Very Fair</option><option value="Wheatish">Wheatish</option><option value="Wheatish Brown">Wheatish Brown</option><option value="Dark">Dark</option></select>
 </div>
 <div style="background-color: #FFFFFF; border-bottom: 0px solid #D8D8D8; padding: 5px; clear: left; margin: 0;">
  <label for="q18" style="float: left; width: 30%; padding-top: 4px; font-family: Arial; color: #000000; font-size: 14px;">Body type </label> <select name="q18" id="q18" style="font-family: Arial; font-size: 14px; color: #000000; background-color: #FFFFFF; border: 1px solid #000000; padding: 2px;" ><option value="Slim">Slim</option><option value="Average">Average</option><option value="Athletic">Athletic</option><option value="Heavy">Heavy</option></select>
 </div>
 <div style="background-color: #EFEFEF; border-bottom: 0px solid #D8D8D8; padding: 5px; clear: left; margin: 0;">
  <label for="q19" style="float: left; width: 30%; padding-top: 4px; font-family: Arial; color: #000000; font-size: 14px;">Challenged </label> <select name="q19" id="q19" style="font-family: Arial; font-size: 14px; color: #000000; background-color: #FFFFFF; border: 1px solid #000000; padding: 2px;" ><option value="None">None</option><option value="Physically- From Birth">Physically- From Birth</option><option value="Physically- Due to Accident">Physically- Due to Accident</option><option value="Mental- From Birth">Mental- From Birth</option><option value="Mental- Due to Accident">Mental- Due to Accident</option></select>
 </div>
 <div style="background-color: #FFFFFF; border-bottom: 0px solid #D8D8D8; padding: 5px; clear: left; margin: 0;">
  <label for="q20" style="float: left; width: 30%; padding-top: 4px; font-family: Arial; color: #000000; font-size: 14px;">About Desired Partner </label> <textarea name="q20" id="q20" cols="30" rows="3" style="font-family: Arial; font-size: 14px; color: #000000; background-color: #FFFFFF; border: 1px solid #000000; padding: 2px;" ></textarea>
 </form></div>

</div>

<form>

<hr style="color: #D8D8D8; background-color: #D8D8D8; height: 1px;" />
 <center><div style="background-color: #FFFFFF; padding: 5px; clear: left; margin: 0;">
   <input name="user" type="hidden" id="user" value="searchpartneronline" />
   <input name="formid" type="hidden" id="formid" value="437874" />
   <input name="subject" type="hidden" id="subject" value="Desired Partner Profile" />
   <input name="submit" type="submit" value="Search" style="font-family: ; font-size:45px ; color: ; background-color: ; border:  solid ; padding: 2px;" />
</div></center>
</form>
<!-- End myContactForm.com Form HTML -->

 
</body>
</html>




 <?php 

include("template/footer.php"); 
}
?>