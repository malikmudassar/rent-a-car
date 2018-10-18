<?php
	include("includes/config.php");
	include("includes/db.php");
	include("includes/functions.php");
	
	$page_title='Dashboard';
	
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
			var mnths=[
			{'id':'1', 'name':'January'},
			{'id':'2', 'name':'February'},
			{'id':'3', 'name':'March'},
			{'id':'4', 'name':'April'},
			{'id':'5', 'name':'May'},
			{'id':'6', 'name':'June'},
			{'id':'7', 'name':'July'},
			{'id':'8', 'name':'August'},
			{'id':'9', 'name':'September'},
			{'id':'10', 'name':'October'},
			{'id':'11', 'name':'November'},
			{'id':'12', 'name':'December'},
			];
	
</script>
<?php if(0) {?><link rel="stylesheet" href="css/bootstrap.min.css" /> <?php }?>
</head>
<body>
	<div class="container">
    	<?php include 'includes/header.php';?>
        <div>
			<script>
			
			</script>        
        </div>
	</div>
</body>
</html>