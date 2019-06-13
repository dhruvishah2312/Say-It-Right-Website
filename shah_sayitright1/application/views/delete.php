

<!DOCTYPE html>
<html>
<header>
</header>
<body>
<?php 
                    $this->load->library('form_validation');
                    echo validation_errors(); ?>
				<?php echo form_open('Ct_new/deleteEvent');?>
    <input type="int" name="ID" placeholder="Enter ID to delete"/> 
    <br><br>
    <input type="submit" /><br/>
</form>
</body>
</html>