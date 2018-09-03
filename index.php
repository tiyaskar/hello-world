<?php

	session_start();

	//create connection
	$conn = mysqli_connect("localhost" , "root" , "" , "loginsystem");

	if(!$conn)
		die("Connection problem");

	$error = array();
	$fullname_error = array();
	$email_error = array();
	$username_error = array();
	$password_error = array();
	$phoneno_error = array();
	$checkbox_error = array();
	$conpassword_error = array();
	$x = 0;
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
			if(empty($username)){
			array_push($username_error, "* Username empty");
				$x++;
			}
		$password = $_POST['password'];
				if(empty($password)){
				array_push($password_error, "* Password empty");
				$x++;
			}
		$phoneno = $_POST['phoneno'];
				if(empty($phoneno)){
				array_push($phoneno_error, "* Phone no empty");
				$x++;
			}
		$agree = @$_POST['agree'];
				if(empty($agree)){
				array_push($checkbox_error, "* You must agree the terms and conditions");
				$x++;
		}
		$email = $_POST['email'];
				if(empty($email)){
				array_push($email_error, "* Email empty");
				$x++;
			}
		$fullname = $_POST['fullname'];
				if(empty($fullname)){
				array_push($fullname_error, "* Fullname empty");
				$x++;
			}

			$user_check_query_username = "SELECT * FROM users WHERE u_name = '$username'";
			$user_check_query_email = "SELECT * FROM users WHERE email = '$email'";

			$result_username = mysqli_query($conn,$user_check_query_username);
			$result_email = mysqli_query($conn,$user_check_query_email);
			
				if (mysqli_num_rows($result_username)>0 || mysqli_num_rows($result_email)>0) {
					
					array_push($error, "Username and Email already taken");
					$x++;
				}	
				if ($x==0) {
					
				
					//$pwd = md5($password); //hashed password for security purpose
					$sql = "INSERT INTO users(fullname , email , u_name , passwrd , phone_no) VALUES('$fullname' , '$email' , '$username' , '$password' , '$phoneno')";
					mysqli_query($conn , $sql);
					header("location: login.php"); //redirect user when everythings ok
				
		}
	}
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>SIGNUP</title>
  		<link rel="stylesheet" href="css/style.css">
  		<script>
  			function checkform(){
  				var f = document.forms["myform"]["fullname"].value;
  				var u = document.forms["myform"]["username"].value;
  				var p = document.forms["myform"]["password"].value;
  				var ph = document.forms["myform"]["phoneno"].value;
  				var cp = document.forms["myform"]["conpassword"].value;
  				if (f=='Full Name Empty'||u=='Username Empty'||p=='Password Empty'||ph=='Phone Number Empty') {
  						document.getElementById("e").innerHTML="Default values not Accepted";
  						return false;
  				}
  				if (cp!=p) {
  					document.getElementById("conpassword_error").innerHTML="Passwords doesn't match";
  					return false;
  				}
  			}
  		</script>
  

</head>

<body>

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet' type='text/css'>
<div class='login'>
  <h2>Register</h2>
  <form method="post" action="index.php" name="myform" onsubmit="return checkform()">
  <div style="color: red;" id="e"><center><?php echo implode($error) ?></center></div>
  <input name='fullname' placeholder='Full Name' type='text' id="fullname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Full Name Empty';}" required="required"><div id="fullname_error" style="color: red;"><?php echo implode($fullname_error); ?></div>
  <input type="email" name="email" placeholder="Email" id="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Empty';}" required="required"><div id="email_error" style="color: red;"><?php echo implode($email_error); ?></div>
  <input name='username' placeholder='Username' type='text' id= "username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username Empty';}" required="required"><div id="username_error" style="color: red;"><?php echo implode($username_error); ?></div>
  <input name='password' placeholder='Password' type='password' onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password Empty';}" required="required"><div id="password_error" style="color: red;"><?php echo implode($password_error); ?></div>
  <input name='conpassword' placeholder='Confirm Password' type='password' onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm Password Empty';}" required="required"><div id="conpassword_error" style="color: red;"><?php echo implode($conpassword_error); ?></div>
  <input name='phoneno' placeholder='Phone Number' type='text' id="phoneno" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone Number Empty';}" required="required"><div id="phoneno_error" style="color: red;"><?php echo implode($phoneno_error); ?></div>
  <div class='agree'>
    <input id='agree' name='agree' type='checkbox'>
    <label for='agree'></label>Accept rules and conditions<br>
    <div id="checkbox_error" style="color: red; font-size: 16px;"><?php echo implode($checkbox_error); ?></div>
  </div>
  <input class='animated' type='submit' value='Register' name='submit'>
  <a class='forgot' href='login.php'>Already have an account?</a>

</div>

</body>

</html>