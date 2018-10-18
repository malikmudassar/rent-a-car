<?php
	include("includes/config.php");
	include("includes/db.php");
	include("includes/functions.php");
	
	$page_title='Cars in Stock';
	$data=get_cars();
	
	
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
        <span style="color:#F00"><?php if(!$data){echo 'No Cars in Database';}?></span>
        
        	<table class="table table-bordered table-hover table-responsive">
            	<tr>
                	<th>Reg # </th>
					<th>Car Make</th>
                    <th>Owner </th>
                    <th>Action</th>
                </tr>
                <?php foreach ($data as $row) {?>
                <tr>
                	<td><?php echo $row['reg_alias'].'-'.$row['reg_no']?></td>
                    <td><?php echo $row['vendor'].'-'.$row['model'].'('.$row['model_year'].')'?></td>
                    <td><?php echo $row['owner']?></td>
                    <td>
                    	<a class="btn btn-xs btn-info" href="edit_car.php?id=<?php echo $row['id']?>">Edit</a>
                        <a class="btn btn-xs btn-danger"href="del_car.php?id=<?php echo $row['id']?>">Delete</a>
                    </td>
					
                </tr>
                <?php }?>
            </table>
            <a href="add_car.php" class="btn btn-link" >Add Cars</a> |
          
         		<a href="add_vendor.php" class="btn btn-link">Add Vendor</a> | 
        		<a href="add_model.php" class="btn btn-link">Add Model</a>  |
                <a href="add_city.php" class="btn btn-link">Add City</a>
        	
        </div>
    </div>

</body>
</html>