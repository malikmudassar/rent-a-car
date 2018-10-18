<?php
	include("includes/config.php");
	include("includes/db.php");
	include("includes/functions.php");
	
	$page_title='Rent Car';
	$cars=get_rem_cars();
	$customers=get_rows('customers');
	$outcars=get_cars_out();
	
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
<body style="background:#EEEEEE;">
	<div class="container" style="background:#FFF;">
    	<?php include 'includes/header.php';?>
        <div id="rentcar" class="col-lg-5" >
        <h4>Renting Details</h4>
        <span style="color:#F00"><?php if(!$cars){echo 'Sorry! All Cars are already rented out. ';}?></span>
        <form action="carout.php" method="post">
        	<table class="table table-bordered table-responsive table-striped" >
            <tr>
            	<td>
                	<input type="date" name="dateout" class="form-control">
                </td>
            </tr>
            <tr>
            	<td>
                	<select name="customer" class="form-control">
                    	<option value="">Select Customer</option>
                        <?php foreach($customers as $row){?>
                        <option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
                        <?php }?>
                    </select>
                </td>
            </tr>
            <tr>
            	<td>
                	<select name="car" class="form-control">
                    	<option value="">Select Car</option>
                        <?php foreach($cars as $row){?>
                        <option value="<?php echo $row['id']?>"><?php echo $row['reg_alias'].'-'.$row['reg_no']?></option>
                        <?php }?>
                    </select>
                </td>
            </tr>
            <tr>
            	<td>
                	<input type="number" name="rent" class="form-control" placeholder="Rent" />
                </td>
            </tr>
            <tr>
            	<td>
                	<input type="number" name="payup" class="form-control" placeholder="Advance Payment" />
                </td>
            </tr>
            <tr>
            	<td>
                	<button type="submit" class="btn btn-block btn-warning">Car Out</button>
                </td>
            </tr>
            </table>
        </form>
        </div>
        <div class="col-lg-7" style="padding:5px;">
        <h4>Cars Out today </h4>
        <span style="color:#F00"><?php if(!$outcars){echo 'No Cars Out today';}?></span>
        	<table class="table table-striped table-bordered table-hover">
            <tr>
            	<th>Car # </th>
                <th>Out Date</th>
                <th>Customer</th>
                <th>Action</th>
            </tr>
            <?php foreach($outcars as $row){?>
            <tr>
            	<td><?php echo $row['reg_alias'].'-'.$row['reg_no']?></td>
                <td><?php echo $row['outtime']?></td>
                <td><?php echo $row['name']?></td>
                <td><a href="returncar.php?id=<?php echo $row['car_id']?>" class="btn btn-link">Return Car</a></td>
            </tr>
            <?php }?>
            </table>
        </div>
    </div>

</body>
</html>