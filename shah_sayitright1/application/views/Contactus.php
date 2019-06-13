<?php
//include "dbconnect.php";
//
//
// if ($_SERVER["REQUEST_METHOD"] == "POST") {   
//     $sql =  "INSERT INTO `contact_us`(`co_id`, `f_name`, `l_name`, `message`, `phone`) VALUES (?,?,?,?,?)";
//    $stmt = $conn->prepare($sql);
//     $stmt->execute(["0", $_POST["fname"], $_POST["lname"], $_POST["message"], $_POST["phone"]]);
// }
?><html>
<head>
	<title>Contact us</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="css/sayitright.css">
</head>
<body>
	<div id="wrapper">
		
			<div class="navigation" align="center">
				<img src="images/Sin título-1.png">
					
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
					<div style="font-size: 0.7em; ">Home &rarr; CONTACT US</div><BR>
					CONTACT US
				</div>
			</div>
			<div class="contact">
                <?php 
                    $this->load->library('form_validation');
                    echo validation_errors(); ?>
				<?php echo form_open('Ct_sendContact');?>
					<input type="text" name="fname" placeholder="Enter your name"> &nbsp;
					<input type="text" name="message" placeholder="Message" style="height: 119px;float: right;">
					
					<input type="text" name="lname" placeholder="Enter your last name">
					
					<input type="text" name="phone" placeholder="Telephone" ><br>
					<button type="submit" class="button" style="float:right;margin-left: 76%;">SEND MESSAGE</button>
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


