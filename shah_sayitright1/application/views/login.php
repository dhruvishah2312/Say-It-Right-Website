<?php
//    include "dbconnect.php";
//    session_start();
//    if(isset($_POST['login'])){
//$email = $_POST['email'];
//$pass = $_POST['password'];
//$message = "";
//
//if(empty($email) || empty($pass)) {
//    $message = "Username/Password con't be empty";
//    echo $message;
//} else {
//    $sql = "SELECT email, password FROM sign_up WHERE email=? AND 
//  password=? ";
//    $query = $conn->prepare($sql);
//    $query->execute(array($email,$pass));
//
//    if($query->rowCount() >= 1) {
//        $_SESSION['email'] = $email;
//        $_SESSION['time_start_login'] = time();
//        header("location: loginDashboard.php");
//    } else {
//        $message = "Username/Password is wrong";
//        echo  $message; 
//    }
//}
//}
?>
<html>
<head>
	<title>Login</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="css/sayitright.css">
</head>
<body>
	<div id="wrapper">
		
			<div class="navigation" align="center">
				<img src="images/Sin título-1.png" height="50" width="50">
					
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
					<div style="font-size: 0.7em; ">Home &rarr; LOGIN</div><BR>
					LOGIN
				</div>
			</div>


			<div class=box>
			<?php 
                    $this->load->library('form_validation');
                    echo validation_errors(); ?>
				<?php echo form_open('Ct_verifyLogin');?>
				 			 		
   			 		<input type="text" name="email" placeholder="Email" size="50">
   			 		<br>
   			 		
					<input type="password" name="password" placeholder="Password" size="50">
   			 		<br>

   			 		<button type="submit" name="login" class="button" style="margin-left: 75%;">SEND</button>
   			 	
   			 
   			 	</form>
   			 </div>

   		<div class="attr">
			<div class="footer">
				
					Copyright &copy; 2019 All rights reserved | This website is made with  by <a href="https://play.google.com/store/apps/developer?id=DiazApps"style="color:blue;"><u>DiazApps</u></a>
			</div>
		</div>
		</div>
</body>
</html>

