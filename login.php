<?php

  session_start();

  //create connection
  $conn = mysqli_connect("localhost" , "root" , "" , "loginsystem");
  if (!$conn) {
    die("connection problem");
  }
  $error = "";
  $email_error = "";
  $username_error = "";
  $password_error = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //email , username , password sent from form
    $email = ($_POST['email']);
    if (empty($email)) {
      $email_error = "* Email Empty";
    }
    $username = ($_POST['username']);
    if (empty($username)) {
      $username_error = "* Username Empty";
    }
    $password = ($_POST['password']);
    if (empty($password)) {
      $password_error = "* password empty";
    }
    if (!empty($email) && !empty($username) && !empty($password)) {
      //header("location: login.php?SIGN_IN=fields_empty");
  
      $sql = "SELECT email , u_name, passwrd FROM users WHERE u_name = '$username'";
      $result = mysqli_query($conn , $sql);
      $row = mysqli_fetch_array($result , MYSQLI_ASSOC);
      
      if ($row['u_name']==$username && $row['passwrd']==$password && $row['email'] == $email ) {
       header("location: welcome.php");

       $_SESSION['email'] = $email;
       $_SESSION['username'] = $username;
        
      }else {
        $error = "Sorry, your credentials are not valid";
    }
  }
}





?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>LOGIN</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">
     
  
</head>

<body>

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet' type='text/css'>
<div class='login'>
  <h2>Login</h2>
  <form method="post" action="login.php">
  <?php if ($error!="") { ?>
      <div class="error" style="color: red"><center><?php echo $error; ?></center></div>
  <?php } ?>
  <input type="email" name="email" placeholder="Email" required onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Empty';}"><span style="color: red;"><?php echo $email_error; ?></span>
  <input name='username' placeholder='Username' type='text' required onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username Empty';}"><span style="color: red;"><?php echo $username_error ?></span>
  <input id='pw' name='password' placeholder='Password' type='password' onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password Empty';}"><span style="color: red;"><?php echo $password_error ?></span>
  <input class='animated' type='submit' value='Login' name='submit'>
</form>
  <a class='forgot' href='index.php'>If you aren't a user please SIGN-UP</a>
</div>
  
</body>

</html>
