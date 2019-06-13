

<!DOCTYPE html>
<html>
<header>
</header>
<body>
<?php 
                    $this->load->library('form_validation');
                    echo validation_errors(); ?>
				<?php echo form_open('Ct_new/updateConf');?>
    
    <input type="int" name="ID" placeholder="Enter ID to update"/> 
    <input type="text" name="eName" placeholder="Enter conf name"/>           
    <input type="text" name="eDesc" placeholder="Enter conf description" /><br><br>
    <input type="submit" /><br/>
</form>
</body>
</html>