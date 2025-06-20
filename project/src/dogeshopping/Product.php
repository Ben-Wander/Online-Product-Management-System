<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Doge Shopping</title>
		<link rel="icon" href="img/logo.png" type="image/x-icon"/>
		
		<style>
			@import "css/CSS.css"
		</style>
		
		<script type="text/javascript" src="js/JS.js">
		</script>
		
		<!-- meta使用viewport以确保页面可自由缩放 -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

		
		<!-- 引入 jQuery Mobile 样式 -->
		<link rel="stylesheet" href="http://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.css">

		<!-- 引入 jQuery 库 -->
		<script src="http://apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>

		<!-- 引入 jQuery Mobile 库 -->
		<script src="http://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	</head>
	
	<body>			
		<?php
			
			include("conn.php");
			
			if($valid)
			{
			  	$str = "select * from `product`";
			    $arr=mysqli_query($conn,$str);
		?>
			<div data-role="main" class="ui-content">
			    <ul data-role="listview" data-inset="true">
			      	
			      	
			    
		<?php
				while($result=mysqli_fetch_assoc($arr))
				{
		?>
					<li data-icon="false">
			        	<a href="Productinformation.php?ProductID=<?php echo $result["ProductID"]?>" data-ajax="false">
				        	<img src="<?php echo $result["Picture"]?>" width="200px" height="200px">
				        	<h2><?php echo $result["Name"]; ?></h2>
				        	<p><?php echo $result["Introduction"]; ?></p>
				        	<p class="wrap"><b><?php echo '$'.$result["Price"]; ?></b></p>
			        	</a>
					</li>

			      	
		<?php	
				}
		?>
				</ul>
	
				<br />
				<br />
				<br />
			

			</div>	
			
			
		<?php	
			}	
		?>
		

			<?php
				include("back.php");
			?>

				
	</body>
</html>