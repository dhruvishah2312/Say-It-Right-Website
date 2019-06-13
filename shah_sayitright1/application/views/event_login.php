<?php
//include "dbconnect.php";
//
//$fnameErr = $lnameErr= $workErr = $schoolErr = $emailErr = $passErr = $userErr = "";
//$fname = $lname = $work = $school = $email = $password = "";
//
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//  if (empty($_POST["fname"])) {
//    $fnameErr = "First Name is required";
//      echo $fnameErr;
//  } else {
//    $name = test_input($_POST["fname"]);
//    // check if name only contains letters and whitespace
//    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
//      $fnameErr = "Only letters and white space allowed"; 
//        echo $fnameErr;
//    }
//
//  }
//  
//    
//    if (empty($_POST["lname"])) {
//    $lnameErr = "Last Name is required";
//      echo $lnameErr;
//  } else {
//    $name = test_input($_POST["lname"]);
//    // check if name only contains letters and whitespace
//    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
//      $lnameErr = "Only letters and white space allowed"; 
//        echo $lnameErr;
//    }
//
//  }
//  
//
//  
//  
//  if (empty($_POST["email"])) {
//    $emailErr = "Email is required";
//      echo $emailErr;
//  } else {
//    $email = test_input($_POST["email"]);
//    // check if e-mail address is well-formed
//    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//      $emailErr = "Invalid email format";
//        echo $emailErr;
//    }
//  }
//      
//    if (empty($_POST["password"])) {
//    $passErr = "Password is required";
//      echo $passErr;
//  } else {
//    $pw = test_input($_POST["password"]);
//    // check if e-mail address is well-formed
//    if (strlen(utf8_decode($pw)) < 8) {
//      $passErr = "Enter at least 8 characters";
//        echo $passErr;
//    }
//  }
//    $sql = "SELECT `email` from `users` where `email` = ?";
//    $stmt = $conn->prepare($sql);
//    $stmt->execute([$_POST["email"]]);
//    
//    if($stmt->rowCount()>0){
//        $userErr = "Email already exists";
//        echo $userErr;
//    }
//  
//   if($fnameErr == "" && $lnameErr=="" && $emailErr=="" && $passErr=="" && $userErr=="" ){
//     $sql =  "INSERT INTO `users`(`u_id`, `f_name`, `l_name`, `email`, `school_name`, `place_work`, `r_id`) VALUES (?,?,?,?,?,?,?)";
//    $stmt = $conn->prepare($sql);
//     $stmt->execute(["0", $_POST["fname"], $_POST["lname"], $_POST["email"], "", "", '2']);
//    
//      $sql =  "INSERT INTO `sign_up`(`u_id`, `email`, `password`) VALUES (?,?,?)";
//    $stmt = $conn->prepare($sql);
//     $stmt->execute(["0", $_POST["email"], $_POST["password"]]);
// }  
//
//
//}
//
//function test_input($data) {
//  $data = trim($data);
//  $data = stripslashes($data);
//  $data = htmlspecialchars($data);
//  return $data;
//}

?>
<html>
<head>
  <title>Sign up</title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/sayitright.css">
    
    
</head>
<body>
  <div id="wrapper">
    
      <div class="navigation" align="center" style="padding-bottom: 10px; ">
        <img src="images/Sin título-1.png" height="50" width="100" style="padding-top: 5px">
          
            <a href="<?php echo base_url(); ?>"><strong>HOME</strong></a> &nbsp; 
					   	<a href="<?php echo base_url(); ?>Ct_about"><strong>ABOUT US</strong></a> &nbsp;
					   	<a href="https://dhruvi.uta.cloud"><strong>BLOG</strong></a> &nbsp;
					   	<a href="<?php echo base_url(); ?>Ct_buyfromus"><strong>BUY FROM US</strong></a> &nbsp;
					   	<a href="<?php echo base_url(); ?>Ct_contactus"><strong>CONTACT US</strong></a> &nbsp;
					   	<a href="<?php echo base_url(); ?>Ct_signup"><strong>SIGN UP</strong></a> &nbsp;
					   	<a href="<?php echo base_url(); ?>Ct_login"><strong>LOGIN</strong></a> &nbsp;
          
      </div>

      <div class="container">
          <img src="images/home-banner.jpg" height="40%" width="100%">
          <div class="centered">
          <div style="font-size: 0.7em; ">Home &rarr; SIGN UP</div><BR>
          SIGN UP
        </div>
      </div>
      <div class="box"><br><br>
        <center><b>Select the type of user</b></center><br>
      <div style="padding-bottom: 30px;padding-left: 15px;"> 
      <button type="button" class="button" style="width: 30%"><a href="<?php echo base_url(); ?>Ct_individiuallogin" style="color: black;"> INDIVIDUAL </a></button>&nbsp;&nbsp;
			<button type="button" class="button" style="width: 30%"><a href="<?php echo base_url(); ?>Ct_eventlogin" style="color: black;"> EVENT </button>&nbsp;&nbsp;
                <button type="button" class="button"style="width: 30%"><a href="<?php echo base_url(); ?>Ct_business_login" style="color: black;"> BUSINESS</a> </button>
      </div>
      <hr width="90%" style="color: grey;">
      <br>
      <center style="font-family: sans-serif;">Welcome to the event sign up</center>
          <!--
      <form style="padding-left: 5px;" method ="post" 
            onsubmit="return ValidationEvent()"
            action="#"
            > 
-->

            <?php 
                    $this->load->library('form_validation');
                    echo validation_errors(); ?>
				<?php echo form_open('Ct_addUserEve');?>

            <input type="text" name="fname" placeholder="Enter your name" size="50" style="margin-bottom: 10px;">
<!--           required        -->
            <br>
            
            <input type="text" name="lname" placeholder="Enter your last name" size="50" style="margin-bottom: 10px;"><!--           required        -->
            <br>
            
            <input type="text" name="email" placeholder="Enter Email" size="50" style="margin-bottom: 10px;"><!--           required        -->
            <br>
            
            <input type="password" name="password" placeholder="Enter password" size="50" style="margin-bottom: 10px;"><!--           required        -->
            <br>
            <input type="submit" class="button"  value ="SEND"style="margin-left: 87%;">      
      </form>  

    </div>

    <div class="attr">  
      <div class="footer">
        
          Copyright &copy; 2019 All rights reserved | This website is made with  by <a href="https://play.google.com/store/apps/developer?id=DiazApps"style="color:blue;">DiazApps</a>
      </div>
    </div>
    </div>
</body>
</html>


