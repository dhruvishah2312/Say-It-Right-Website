<?php
    include "dbconnect.php";
     $sql = "SELECT `p_name`, `desc`, `img_url`, `price` FROM `products`";
    $query = $conn->query($sql);
    $query->setFetchMode(PDO::FETCH_ASSOC);
?>
<html>
<head>
	<title>Buy from us</title>
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
					<div style="font-size: 0.7em; ">Home &rarr; BUY FROM US</div><BR>
					BUY FROM US
				</div>
			</div>
			<div class="content">
			<center><font size=1>
				<br><br>

									<p style="font-size: 16;">BUY FROM US</p><br>

			</font>
		</center>
		<br><br>
		<div style="font-family: serif" >
<table>
<tr>
<td>			
  <div class="palatte">
  <img src="images/taza1.png" alt="Denim Jeans" style="width:50%">
  <p class="price">$19.99</p>  
  <p style="font-size: 22px; color: grey;">Shopping item</p>
  <p><button class="button">ADD TO CART</button></p>
</td>
<td>			
  <div class="palatte">
  <img src="images/taza2.png" alt="Denim Jeans" style="width:50%">
  <p class="price">$19.99</p>  
  <p style="font-size: 22px; color: grey;">Shopping item.</p>
  <p><button class="button">ADD TO CART</button></p>
</td>
<td>			
  <div class="palatte">
  <img src="images/taza3.png" alt="Denim Jeans" style="width:50%">
  <p class="price">$19.99</p>  
  <p style="font-size: 22px; color: grey;">Shopping item</p>
  <p><button class="button">ADD TO CART</button></p>
</td>
</tr>

<tr>
<td>			
  <div class="palatte">
  <img src="images/franela1.jpg" alt="Denim Jeans" style="width:50%">
  <p class="price">$19.99</p>  
  <p style="font-size: 22px; color: grey;">Shopping item</p>
  <p><button class="button">ADD TO CART</button></p>
</td>
<td>			
  <div class="palatte">
  <img src="images/franela2.jpg" alt="Denim Jeans" style="width:50%">
  <p class="price">$19.99</p>  
  <p style="font-size: 22px; color: grey;">Shopping item.</p>
  <p><button class="button">ADD TO CART</button></p>
</td>
<td>			
  <div class="palatte">
  <img src="images/franela3.jpg" alt="Denim Jeans" style="width:50%">
  <p class="price">$19.99</p>  
  <p style="font-size: 22px; color: grey;">Shopping item</p>
  <p><button class="button">ADD TO CART</button></p>
</td>
</tr>
</table>
</div>
		
  	</div>
	</center>
	</div>
	<br><br>
		<div class="subscribe">
		<table>
		<tr>
		<td>	
			<div  style="color: #2B2276; font-size: 150%;">
			View Shopping Cart
			<div style="color: grey; font-size: 40%; font-family: sans-serif;">You can see the product you add in the cart</div>
			</div>
		</td>
		<td>	
<div class="search-container">
    
      
      <button type="submit" class="button3" style="width:15%;">SUBSCRIBE</button>

  </div></td></tr>
  		</table>
		</div>	
	<div class="attr">
			<div class="footer">
				
					Copyright &copy; 2019 All rights reserved | This website is made with  by <a href="https://play.google.com/store/apps/developer?id=DiazApps"style="color:blue;"><u>DiazApps</u></a>
				
			</div>
		</div>
	</div>
</body>
</html>
