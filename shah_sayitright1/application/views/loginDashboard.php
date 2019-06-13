<html>
<head>
	<title>Login Dashboard</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="css/sayitright.css">
</head>
<body>
	<div id="wrapper" style="width: auto">
		
			<div class="navigation" align="center">
				<img src="images/Sin título-1.png" height="50" width="50">
					
						<a href="<?php echo base_url(); ?>"><strong>HOME</strong></a> &nbsp; 
					   	<a href="<?php echo base_url(); ?>Ct_conferences"><strong>CONFERENCES</strong></a> &nbsp;
					   	<a href="<?php echo base_url(); ?>Ct_events"><strong>EVENTS</strong></a> &nbsp;
					   	<a href="<?php echo base_url(); ?>Ct_myconf"><strong>MY CONFERENCES</strong></a> &nbsp;
					   	<a href="<?php echo base_url(); ?>Ct_myevents"><strong>MY EVENTS</strong></a> &nbsp;
					   	<a href="<?php echo base_url(); ?>Ct_setting"><strong>SETINGS</strong></a> &nbsp;
					   	
					
			</div>
<style>
{
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  color: black;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

    .logout{
        color: black;
        padding: 5 px;
    }

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  
}
</style>
</head>
<body>


<div class="row" style="padding: 30px">
  <div class="column">
    <div class="card" style="background-color: #153b77">
      <h3 style="text-align: left">Events</h3>
      
    
      <p><a href="events.php">Click to view</a></p>
      
    </div>
  </div>

  <div class="column">
    <div class="card" style="background-color: #3ca529">
      <h3 style="text-align: left">My Events</h3>
      <p><a href="events.php">Click to view</a></p>
      
    </div>
  </div>
  
  <div class="column">
    <div class="card" style="background-color: #becc28">
      <h3 style="text-align: left">Conferences</h3>
      <p><a href="conferences.php">Click to view</a></p>
      
    </div>
  </div>
  
  <div class="column">
    <div class="card" style="background-color: #838479">
      <h3 style="text-align: left">My Conferences</h3>
      <p><a href="conferences.php">Click to view</a></p>
      
    </div>
  </div>
</div>

		
  	</div>
	</center>
	</div>
	<br><br>
<div class="column" name="logout" style="background-color:grey"><a href="<?php echo base_url(); ?>Ct_logout">LOGOUT</a></div>
		
	<div class="attr">
        
			<div class="footer" style="position:absolute;
   bottom:0;
   width:100%;
   height:100px;   /* Height of the footer */
   background-color: #2B2276;">
				
					Copyright &copy; 2019 All rights reserved | This website is made with  by <a href="https://play.google.com/store/apps/developer?id=DiazApps"style="color:blue;"><u>DiazApps</u></a>
				
			</div>
		</div>
	</div>
</body>
</html>
