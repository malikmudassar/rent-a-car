<?php
	include("includes/config.php");
	include("includes/db.php");
	include("includes/functions.php");
	
	$page_title='Owners';
	
	$data=get_rows('owners');
	
?>
<!doctype html>
<html>
<head>
<?php include("includes/head-include.php"); ?>
<style>
#header
{
	height:200px;
	width:1000px;
	background:url(img/header.png);
}
</style>
<script>

</script>
<?php if(0) {?><link rel="stylesheet" href="css/bootstrap.min.css" /> <?php }?>
</head>
<body>
	<div class="container">
    	<?php include 'includes/header.php';?>
        <div id="content" style="" class="col-lg-10">
        <span style="color:#F00"><?php if(!$data){echo 'No Owners in Database';}?></span>
        	<table class="table table-bordered table-hover table-responsive">
            	<tr>
                	<th>Owner Name </th>
					<th>Owner Address</th>
                    <th>Owner Mobile </th>
                    <th>Action</th>
                </tr>
                <?php foreach ($data as $row) {?>
                <tr>
                	<td><?php echo $row['name']?></td>
                    <td><?php echo $row['address']?></td>
                    <td><?php echo $row['mobile']?></td>
                    <td>
                    	<a class="btn btn-xs btn-info" href="edit_owner.php?id=">Edit</a>
                        <a class="btn btn-xs btn-danger"href="del_owner.php?id=">Delete</a>
                    </td>
					
                </tr>
                <?php }?>
            </table>
            <a href="add_owner.php" class="btn btn-success" >ADD Owner</a>
        </div>
    </div>

</body>
</html>