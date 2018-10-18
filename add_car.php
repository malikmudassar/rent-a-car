<?php
	include("includes/config.php");
	include("includes/db.php");
	include("includes/functions.php");
	
	$page_title='Add Cars';
	$owner=get_rows('owners');
	$vendor=get_rows('vendor');
	$city=get_rows('city');
	
	
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
    $(document).ready(function() {
        $('#vendor').change(function() {
            var vendor=$('#vendor').val();
			var params={'id':vendor};
			$.get('get_model.php',params,function(data){
					$('#model').html(data);
					//alert(data);
			});
        });
    });
</script>
<?php if(0) {?><link rel="stylesheet" href="css/bootstrap.min.css" /> <?php }?>
</head>
<body>
	<div class="container">
    	<?php include 'includes/header.php';?>
        <div id="content" style="" class="col-lg-5">
        
        	<form action="addcar.php" method="post">
        	<table class="table table-bordered table-hover table-responsive">
            	<tr>
           			<td>
                    	<select name="owner" class="form-control">
                         <option value="">Select Owner</option>
                         <?php foreach($owner as $row){?>
                         	<option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
                         <?php }?>
                        </select>
                    </td>     
                </tr>
                <tr>
                	<td>
                    	<select id="vendor" name="vendor" class="form-control" >
                         <option value="">Select Vendor</option>
                         <?php foreach($vendor as $row){?>
                         	<option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
                         <?php }?>
                        </select>
                    </td>
                </tr>
                <tr>
                	<td>
                    	<select id="model" name="model" class="form-control">
                         <option value="">Select Model</option>
                        </select>
                    </td>
                </tr>
                <tr>
                	<td>
                    	<select id="model" name="model_year" class="form-control">
                         <option value="">Select Year of Model</option>
                         <?php for($i=1990;$i<=intval(date('Y'));$i++) {?>
                         	<option value="<?php echo $i?>"><?php echo $i?></option>
                         <?php }?>
                        </select>
                    </td>
                </tr>
                <tr>
                	<td>
                    <select name="city" class="form-control">
                         <option value="">Select Registration City</option>
                         <?php foreach($city as $row){?>
                         	<option value="<?php echo $row['id']?>"><?php echo $row['name']?></option>
                         <?php }?>
                    </select>
                    </td>
                </tr>
    			<tr>
                	<td><input type="text" name="reg_alias" class="form-control" 
                    	placeholder="Registration Alias (E.g LHR / SGL / RWP)" maxlength="3">
                    </td>
                </tr>
                <tr>
                	<td>
                    	<input type="number" name="reg_no" placeholder="Registration Number" class="form-control" />
                    </td>
                </tr>
                <tr>
                	<table class="table">
                    <tr>
                        <td>
                            <span >Car Image</span>
                        </td>
                        <td>
                            <input type="file" name="image" >
                        </td>
					</tr>
                    </table>
                </tr>
                <tr>
                	<td>
                    	<button type="submit" class="btn btn-danger btn-block">Submit</button> 
                    </td>
                </tr>
            </table>
            </form>
            <center>
         		<a href="add_vendor.php" class="btn btn-link">Add Vendor</a> | 
        		<a href="add_model.php" class="btn btn-link">Add Model</a>  |
                <a href="add_city.php" class="btn btn-link">Add City</a>
        	</center>
        </div>
        
    </div>

</body>
</html>