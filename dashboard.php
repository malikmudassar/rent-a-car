<?php
	include("includes/config.php");
	include("includes/db.php");
	include("includes/functions.php");
	
	$page_title='Dashboard';
	$owner_count=row_count('owners');
	$car_count=row_count('cars');
	$rented_cars=count_rented_cars();
	$avail_cars=intval($car_count-$rented_cars);
	
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
        <div id="content" class="col-lg-12" >
        	<div class="row">
                <div class="col-lg-12">
                <table class="table table-hover table-striped table-responsive">
                    <tr>
                        <td>Total Registered Owners</td>
                        <td><span style="color: #039; font-weight:bold;"><?php echo $owner_count?></span></td>
                    
                        <td>Total Registered Cars</td>
                        <td><span style="color: #039; font-weight:bold;"><?php echo $car_count?></span></td>
                    
                        <td>Cars Rented Out</td>
                        <td><span style="color:#F00; font-weight:bold;"><?php echo $rented_cars?></span></td>
                   
                        <td>Cars Available</td>
                        <td><span style="color: #090; font-weight:bold;"><?php echo $avail_cars?></span> </td>
                    </tr>
                </table>
               
                </div>
           </div> 
           <div class="col-lg-12"><h2>Gallary</h2></div>
        	<?php for($i=1; $i<=12; $i++){?>
            	<div class="col-lg-4" style="height:200px; padding-top:5px; border-radius:10px; background-color:#EEEEEE; border:outset;" align="center">
                <img id="cars" src="img/<?php echo $i?>.jpg" style="height:180px; border-radius:90px;" />
                </div>
         	<?php }?>
        </div>
    </div>

</body>
</html>