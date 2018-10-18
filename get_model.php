<?php
	include 'includes/config.php';
	include 'includes/db.php';
	include 'includes/functions.php';
	
	$id=$_GET['id'];
	$models=get_model_by_id($id);
	
	foreach($models as $row)
	{
?>
	<option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
<?php
	}
?>
