<?php
	include("includes/config.php");
	include("includes/db.php");
	include("includes/functions.php");
	
	$page_title='Add Car Model';
	$vendor=get_rows('vendor');
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
        <div id="content" style="" class="col-lg-4">
			<form action="addcity.php" method="post">        
        	<table class="table table-bordered table-hover table-responsive">
            	
                <tr>
                	<td>
                    	<input type="text" name="city" class="form-control" placeholder="City Name">
                    </td>
                </tr>
                <tr>
                	<td>
                    	<button type="submit" class="btn btn-block btn-danger">Submit</button>
                    </td>
                </tr>
            </table>
            </form>
            	<a href="add_car.php" class="btn btn-link" >Add Cars</a> |
        		<a href="add_model.php" class="btn btn-link">Add Model</a>  |
                <a href="add_city.php" class="btn btn-link">Add City</a>
        	
        </div>
    </div>

</body>
</html>
