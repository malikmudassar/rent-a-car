<?php
	include("includes/config.php");
	include("includes/db.php");
	include("includes/functions.php");
	
	$page_title='Add Customer';
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
        <div id="content" style="" class="col-lg-5">
       		<form action="customer_add.php" method="post">
            	<table class="table">
                	<tr>
                    	<td><input type="text" name="name" placeholder="Customer's Name" class="form-control"></td>
                    </tr>
                    <tr>
                    	<td><input type="text" name="fname" placeholder="Customer's Father Name" class="form-control"></td>
                    </tr>
                    <tr>
                    	<td><input type="text" name="address" placeholder="Customer's Address" class="form-control"></td>
                    </tr>
                    <tr>
                    	<td><input type="text" name="mobile" placeholder="Customer's Mobile Number" class="form-control"></td>
                    </tr>
                    <tr>
                    	<td><input type="text" name="nic" placeholder="Customer's NIC" class="form-control"></td>
                    </tr>
                    <tr>
                    	<td><input type="text" name="referrer_name" placeholder="Referred By" class="form-control"></td>
                    </tr>
                    <tr>
                    	<td><input type="text" name="referrer_mobile" placeholder="Referrer Mobile" class="form-control"></td>
                    </tr>
                    <tr>
                    	<td><button type="submit" class="btn btn-block btn-danger">Submit</button></td>
                    </tr>
                </table>
            </form> 
        </div>
    </div>
</body>
</html>