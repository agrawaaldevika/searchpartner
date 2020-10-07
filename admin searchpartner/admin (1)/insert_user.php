<?php 
include("includes/connection.php");

	
	if(isset($_POST['submit'])){
	
		$error = '';
	$fname = mysqli_real_escape_string($con,$_POST['u_firstname']);
	$lname = mysqli_real_escape_string($con,$_POST['u_lastname']);
	$name = $fname.' '.$lname;
	$pass = mysqli_real_escape_string($con,$_POST['u_pass']);
	$email = $_POST['u_email'];
	if($email == ''){
	
		$error .= '<br>* Please Enter Email Id';
	}else{
		$pattern = '/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';

if (!preg_match($pattern, $email) === 1) {
   $error .= '<br>* Please Enter Valid Email Id';
}
	
	}
	
	$pass = $_POST['u_pass'];
	if($pass == ''){
		$error .= '<br>* Please Enter Password';
	}else{
		if(strlen($pass)<8){
			$error .= '<br>* Password should be minimum 8 characters!';
		}
	
	}
		
	$profilefor = mysqli_real_escape_string($con,$_POST['u_profilefor']);
	$country = mysqli_real_escape_string($con,$_POST['u_country']);
	$mobile = mysqli_real_escape_string($con,$_POST['user_mobile']);
	if($mobile == ''){
		$error .= '<br>* Please Enter Mobile Number';
	}

	$gender = mysqli_real_escape_string($con,$_POST['u_gender']);
	$day = mysqli_real_escape_string($con,$_POST['u_birthdayday']);
	$month = mysqli_real_escape_string($con,$_POST['u_birthdaymonth']);
	$year = mysqli_real_escape_string($con,$_POST['u_birthdayyear']);
	$birthday = $year.'-'.$month.'-'.$day;
	$mothertongue = mysqli_real_escape_string($con,$_POST['u_tong']);
	$religion = mysqli_real_escape_string($con,$_POST['u_religion']);
	$caste = mysqli_real_escape_string($con,$_POST['u_caste']);
	$subcaste = mysqli_real_escape_string($con,$_POST['u_subcaste']);
	$manglik = mysqli_real_escape_string($con,$_POST['u_manglik']);
	$horoscope = mysqli_real_escape_string($con,$_POST['u_match']);
	$maritalstatus = mysqli_real_escape_string($con,$_POST['u_status']);
	$children = mysqli_real_escape_string($con,$_POST['u_child']);
	$height = mysqli_real_escape_string($con,$_POST['u_height']);
	$highestdegree = mysqli_real_escape_string($con,$_POST['u_degree']);
	$ugcollege = mysqli_real_escape_string($con,$_POST['u_college']);
	$occupation = mysqli_real_escape_string($con,$_POST['u_occupation']);
	$annualincome = mysqli_real_escape_string($con,$_POST['u_income']);
	$familytype = mysqli_real_escape_string($con,$_POST['q22']);
	$fatheroccupation = mysqli_real_escape_string($con,$_POST['q23']);
	$motheroccupation = mysqli_real_escape_string($con,$_POST['q24']);
	$brother = mysqli_real_escape_string($con,$_POST['q25']);
	$howmanybrothermarried = mysqli_real_escape_string($con,$_POST['q26']);
	$sister = mysqli_real_escape_string($con,$_POST['q27']);
	$howmanysistermarried = mysqli_real_escape_string($con,$_POST['u_sistermarried']);
	$familylivingin = mysqli_real_escape_string($con,$_POST['q28']);
	$nativecity = mysqli_real_escape_string($con,$_POST['q29']);
	$contactaddress = mysqli_real_escape_string($con,$_POST['q30']);
	$expressyourself = mysqli_real_escape_string($con,$_POST['q31']);
	$status = "unverified";
	$posts = "no";
	$ver_code = mt_rand();
	

	
	if($error == ''){
	
			$check_email = "select * from users where user_email='".$email."'";
						$run_email = mysqli_query($con,$check_email);
			
			$check = mysqli_num_rows($run_email); 
			//print_r($check);
			//die;
			if($check >= 1){
				$error .= '<br>* Email already exist, please try another Id';
				header('location:registeration.php?fail=yes&error='.$error);
			}else{
			
				echo  $insert = "insert into users (user_name,user_pass,user_email,user_profilefor,user_country,user_mobile,user_gender,user_birthday,mothertongue,religion,caste,subcaste,manglik,horoscope,maritalstatus,children,height,highestdegree,ugcollege,occupation,annualincome,familytype,fatheroccupation,motheroccupation,brother,howmanybrothermarried,sister,howmanysistermarried,familylivingin,nativecity,contactaddress,expressyourself,user_image,user_reg_date,status,ver_code,posts) values ('".$name."','".$pass."','".$email."','".$profilefor."','".$country."','".$mobile."','".$gender."','".$birthday."','".$mothertongue."','".$religion."','".$caste."','".$subcaste."','".$manglik."','".$horoscope."','".$maritalstatus."','".$children."','".$height."','".$highestdegree."','".$ugcollege."','".$occupation."','".$annualincome."','".$familytype."','".$fatheroccupation."','".$motheroccupation."','".$brother."','".$howmanybrothermarried."','".$sister."','".$howmanysistermarried."','".$familylivingin."','".$nativecity."','".$contactaddress."','".$expressyourself."','default.jpg',NOW(),'".$status."','".$ver_code."','".$posts."')";
					//die;
				$query = mysqli_query($con,$insert);
			
				// print_r($query);
				if($query){
				
					
					header('location:registeration.php?success='.$name.'&em='.$email);
					//echo "<h3 style='width:400px; text-align:justify; color:green;'>Hi, $name congratulations, registration is almost complete, please check your email for final verification.</h3>";
					
					$to = $email;
					$subject = "Verify your email address."; 
						
					$message = "
					<html> 
					Hello <strong>$name</strong> You have just created an account on http://setfreelancer.com, please verify your email address by clicking below link:
						<a href='http://setfreelancer.com/verify.php?code=$ver_code'>Click to Verify Your Email</a><br/> 
						<strong>Thank you for creating an account!</strong>
						</html> 
						";
						
						// Always set content-type when sending HTML email
						$headers = "MIME-Version: 1.0" . "\r\n";
						$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
						$headers .= 'From: <admin@onlinetuting.com>' . "\r\n";

						mail($to,$subject,$message,$headers);
					
					
				}
					else { 
						$error .= '<br>* Registration failed, try again!';
						header('location:registeration.php?fail=yes&error='.$error);
					}
			}
	}
	else{
	header('location:registeration.php?fail=yes&error='.$error);
	}
	}
?>