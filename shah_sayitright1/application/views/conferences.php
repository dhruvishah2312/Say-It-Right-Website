
<html>
<head>
	<title>Conferences</title>
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
			
			<div class="ec-table">
				<center><br><br><br>
				<b style="font-family: Rajdhani;font-size: 32; color: #2B2276;"> List of Conferences </b><BR><BR>
			</center>
			<table>
                <thead>
                    <tr align="center">
                    <td width="20%">ID</td>
					<td width="30%"><b>Events</b></td>
					<td width="50%"><b>Description</b></td>
					
				</tr>
                </thead>
                <tbody>
                    <?php foreach($conf as $row){
        echo "<tr>";
        echo "<td>".$row->e_id."</td>";
        echo "<td>".$row->eName."</td>";
        echo "<td>".$row->eDesc."</td>";
        
        echo "</tr>";
  
  }
                    ?>
                    <?php foreach($rid as $row){
                        $RID = $row->r_id;} ?>
                </tbody>
				
				
			</table>
            <button <?php if (!($RID == '3')){ ?> disabled <?php   } ?> onclick="location.href='<?php echo base_url();?>Ct_newBus'">New</button>
                    <button <?php if (!($RID == '3')){ ?> disabled <?php   } ?> onclick="location.href='<?php echo base_url();?>Ct_deleteBus'">Delete</button>
                    <button <?php if (!($RID == '3')){ ?> disabled <?php   } ?> onclick="location.href='<?php echo base_url();?>Ct_updateBus'">Edit</button>
		

		</div>


		
		

		<div class="attr">	
			<div class="footer">
				
					Copyright &copy; 2019 All rights reserved | This website is made with  by <a href="https://play.google.com/store/apps/developer?id=DiazApps"style="color:blue;"><u>DiazApps</u></a>
			</div>
		</div>	
		</div>
</body>
</html>