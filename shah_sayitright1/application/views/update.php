

<!DOCTYPE html>
<html>
<header>
</header>
<body>
<?php 
                    $this->load->library('form_validation');
                    echo validation_errors(); ?>
				<?php echo form_open('Ct_new/updateEvent');?>
    
    <input type="int" name="ID" placeholder="Enter ID to update"/> 
    <input type="text" name="eName" placeholder="Enter event name"/>           
    <input type="text" name="eDesc" placeholder="Enter event description" /><br><br>
    <input type="submit" /><br/>
</form>
</body>
</html>