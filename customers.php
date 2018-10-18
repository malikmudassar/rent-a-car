<?php
	include("includes/config.php");
	include("includes/db.php");
	include("includes/functions.php");
	
	$page_title='Customers';
	
	$data=get_rows('customers');
	
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
        <div id="content" style="" class="col-lg-12">
        <span style="color:#F00"><?php if(!$data){echo 'No Customer in Database';}?></span>
        	<table class="table table-bordered table-hover table-responsive">
            	<tr>
                	<th>Customer Name </th>
					<th>Customer Address</th>
                    <th>Customer Mobile </th>
                    <th>Referred By </th>
                    <th>Referrer Mobile </th>
                    <th>Action</th>
                </tr>
                <?php foreach ($data as $row) {?>
                <tr>
                	<td><?php echo $row['name']?></td>
                    <td><?php echo $row['address']?></td>
                    <td><?php echo $row['mobile']?></td>
                    <td><?php echo $row['referrer_name']?></td>
                    <td><?php echo $row['referrer_mobile']?></td>
                    <td>
                    	<a class="btn btn-xs btn-info" href="edit_customer.php?id=">Edit</a>
                        <a class="btn btn-xs btn-danger"href="ban_customer.php?id=">Bann Customer</a>
                    </td>
					
                </tr>
                <?php }?>
            </table>
            <a href="add_customer.php" class="btn btn-link" >Add Customer</a>
        </div>
    </div>

</body>
</html>