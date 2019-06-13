<?php
//session_start();
?>
<?php
//include "dbconnect.php";
//if(isset($_SESSION['email'])){
//      
//    $email = $_SESSION['email'];
//    $sql = "SELECT r_id FROM users WHERE email=? ";
//    $query = $conn->prepare($sql);
//    $query->execute(array($_SESSION['email']));
//    $result = $query->fetchAll(\PDO::FETCH_ASSOC);
//    foreach ($result as $key => $item) {
//    $rid = $item['r_id'];
//    
//    $sql = "SELECT `e_id`, `r_id`, `email`, `eName`, `eDesc` FROM `event`";
//    $query = $conn->query($sql);
//    $query->setFetchMode(PDO::FETCH_ASSOC);
//    } 
//}
?>
<html>
<head>
	<title>Events</title>
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
				<b style="font-family: Rajdhani;font-size: 32; color: #2B2276;"> List of Events </b><BR><BR>
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
                    <?php foreach($events as $row){
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
                    <button <?php if (!($RID == '2')){ ?> disabled <?php   } ?> onclick="location.href='<?php echo base_url();?>Ct_new'">New</button>
                    <button <?php if (!($RID == '2')){ ?> disabled <?php   } ?> onclick="location.href='<?php echo base_url();?>Ct_delete'">Delete</button>
                    <button <?php if (!($RID == '2')){ ?> disabled <?php   } ?> onclick="location.href='<?php echo base_url();?>Ct_update'">Edit</button>
            
<!--
            <input type="button" value="New" onclick="location = 'new.php'" />
<input type="button" value="Update" <?php if (!($rid == '2')){ ?> disabled <?php   } ?> onclick="location = 'update.php'" />
                    <input type="button" value="Delete" <?php if (!($rid == '2')){ ?> disabled <?php   } ?> onclick="location = 'delete.php'" />
-->
		</div>


		
		

		<div class="attr">	
			<div class="footer">
				
					Copyright &copy; 2019 All rights reserved | This website is made with  by <a href="https://play.google.com/store/apps/developer?id=DiazApps"style="color:blue;"><u>DiazApps</u></a>
			</div>
		</div>	
		</div>
</body>
</html>

