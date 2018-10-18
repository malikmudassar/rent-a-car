<?php
	include("includes/config.php");
	include("includes/db.php");
	include("includes/functions.php");
	
	$page_title='Car Return';
	$outcars=get_cars_out();
	$car_id="";
	if(isset($_GET['id']))
	{
		$car_id=$_GET['id'];
	}
	
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
	$(document).ready(function(e) {
        $('#car_id').change(function(e) {
            var params={'id':$(this).val()};
			$.get('get_rem.php',params,function(data){
				$('#rem').val(data);
			});
			$.get('',params,function(data){
				$('#rent_id').val(data);
			});
        });
		
		$('#damageclaim').blur(function(){
			var dmgamount=$(this).val();
			var rem=eval($('#rem').val());
			var total=rem+eval(dmgamount);
			$('#rem').val(total);
				
		});
    });
</script>
<?php if(0) {?><link rel="stylesheet" href="css/bootstrap.min.css" /> <?php }?>
</head>
<body>
	<div class="container">
    	<?php include 'includes/header.php';?>
        <div class="col-lg-12">
        	<div class="col-lg-5">
            <h4>Returning Details</h4>
            <form action="carin.php" method="post">
                <table class="table table-striped table-hover">
                <tr>
                <td>
                    <select id="car_id" class="form-control" name="car_id">
                    <option value="">Select Car</option>
                    <?php foreach($outcars as $row){0?>
                    <?php if($row['car_id']==$car_id){?>
                    <option value="<?php echo $row['car_id']?>" selected>
					<?php echo $row['reg_alias'].'-'.$row['reg_no']?>
                    </option>
                    <?php }else{?>
                    <option value="<?php echo $row['car_id']?>" >
					<?php echo $row['reg_alias'].'-'.$row['reg_no']?>
                    </option>
                    <?php }}?>
                    </select>
                </td>
                </tr>
                <input id="rent_id" type="hidden" name="rent_id" value="<?php ?>" />
                <tr>
                	<td>
                    <input type="date" class="form-control" name="returntime">
                    </td>
                </tr>
                <tr>
                	<td>
                    <input type="text" name="damage" class="form-control" placeholder="Damage Details (If Any)">
                    </td>
                </tr>
                <tr>
                	<td>
                	<input type="number" name="damage_claim" class="form-control" id="damageclaim"
                    placeholder="Damage Amount Claim">
                    </td>
                </tr>
                <tr>
                	<td>
                    <input class="form-control" id="rem" type="number" name="totalamount" 
                    placeholder="Remaining Amount to Pay"/>
                    </td>
                </tr>
                <tr>
                	<td>
                    <button class="btn btn-danger btn-block">Return Car</button>
                    </td>
                </tr>
                </table>
            </form>
            </div>
        </div>
    </div>

</body>
</html>