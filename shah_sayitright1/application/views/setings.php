
<html>
<head>
	<title>PROFILE</title>
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
					   	<a href="<?php echo base_url(); ?>Ct_conferences"><strong>CONFERENCES</strong></a> &nbsp;
					   	<a href="<?php echo base_url(); ?>Ct_events"><strong>EVENTS</strong></a> &nbsp;
					   	<a href="<?php echo base_url(); ?>Ct_myconf"><strong>MY CONFERENCES</strong></a> &nbsp;
					   	<a href="<?php echo base_url(); ?>Ct_myevents"><strong>MY EVENTS</strong></a> &nbsp;
					   	<a href="<?php echo base_url(); ?>Ct_setting"><strong>SETINGS</strong></a> &nbsp;
					
				</div>

			<div class="box" 
                 style="padding-bottom: 5px;
                        padding-left: 15px;
                        height: 600px;
                        width: 900px;
                        margin-left: 20%;
                        margin-right: 50%;"><br><br>
				<center><b>Welcome to your profile</b></center><br>
				<hr width="90%" style="color: grey;">
			<style type="text/css">

</style>


<div class="divLeft">
	<img src="images/user.jpg" style="width:150px;height:300px;">
	<button type="submit" class="button" style="width: 200px; ">CHANGE IMAGE</button>

</div>
<div class="divRight">
	<table>
                <thead>
                    <tr >
                    <td width="05%">ID</td>
					<td width="10%"><b>First Name</b></td>
					<td width="10%"><b>Last Name</b></td>
                    <td width="20%"><b>School</b></td>
                    <td width="20%"><b>Place of work</b></td>
                    <td width="35%"><b>Email</b></td>
					
				</tr>
                </thead>
                <tbody>
                    <?php foreach($user as $row){
        echo "<tr>";
        echo "<td>".$row->u_id."</td>";
        echo "<td>".$row->f_name."</td>";
        echo "<td>".$row->l_name."</td>";
        echo "<td>".$row->school_name."</td>";
        echo "<td>".$row->place_work."</td>";
        echo "<td>".$row->email."</td>";
        echo "</tr>";
  
  }
                    ?>
                </tbody>
				
				
			</table>
	 
	

</div>

			<BR><BR><BR><BR>
	<button type="submit" class="button" style="width: 200px; float: right;margin-right: 10%;margin-top: 20%;">SAVE CHANGES</button>




		</div>


	
			</div>


		
	</div>

<div class="attr">



			<div class="footer">
				
					Copyright &copy; 2019 All rights reserved | This website is made with  by <a href="https://play.google.com/store/apps/developer?id=DiazApps"style="color:blue;"><u>DiazApps</u></a>
				
			</div>
		</div>
</body>
</html>






