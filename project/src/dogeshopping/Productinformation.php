<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Doge Shopping</title>
		<link rel="icon" href="img/logo.png" type="image/x-icon"/>
		<script type="text/javascript" src="js/JS.js">
		</script>
		<style>
			@import "css/CSS.css"
		</style>
		
		
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
		<div id="logoname1" style="color: black; font-size: 25px;">Product information</div>
	
		<?php
			if(isset($_GET["ProductID"]))
			{
				$ProductID=$_GET["ProductID"];
	
	
				include("conn.php");
				
				if($valid)
				{
				 	$str = "select * from `product` where ProductID='$ProductID'";
				    $arr=mysqli_query($conn,$str); //查询语句
					$result = mysqli_fetch_array($arr);
					
					if(!$result)
					{
						echo "<script>alert('Page not found!'); window.location='Product.php';</script>";
					}
		    	}
			    else
			    {
			    	echo "<script>alert('Fail to connect to database!');</script>";
			    }
			}
			else
			{
				echo "<script>alert('Page not found!'); window.location='Product.php';</script>";
			}
		?>		
					
			<div style="color: black; font-size: 25px; text-align: center;"><?php echo $result["Name"]; ?></div>	
			</br>
			<div style="color: black; font-size: 20px; text-align: center;"><b><?php echo '$'.$result["Price"]; ?></b></div>
			</br>
			<div style="text-align: center; width: 80%; margin:auto;">
				<?php echo $result["Introduction"]?>
			</div>
			</br>
			<div align="center">
				<img src="<?php echo $result["Picture"]?>" width="400px">		
			</div>
			
		

	<?php
			include("back.php");
	?>
	</body>
</html>
