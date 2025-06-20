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
		<style>
			tr 
			{
			    border-bottom: 1px solid lightgray;
			}
			
			th 
			{
			    border-bottom: 1px solid #d6d6d6;
			}
			
			tr:nth-child(even) 
			{
			    background: #e9e9e9;
			}
		</style>

		
		
		
		<?php 
			include("front_management.php");
		?>
		
		
		
		<div id="logoname1" style="color: black; font-size: 25px;">Product Management</div>


	
	
	
	
	
	<?php
		if(isset($_GET['search'])&&trim($_GET['search'])!="")
		{
			$Search= $_GET["search"];
			$Search= str_replace("'","\'",$Search);
			
			$str = "select * from `product` where Name like '%$Search%' or ProductID='$Search' or type='$Search' ";
		}
		else
		{
			$str = "select * from `product`";
		}
		
		
		
		
		include("conn.php");
		
		if($valid)
		{
		    $arr=mysqli_query($conn,$str);
		    
		    if($arr)
		    {
		    	$rowcount=mysqli_num_rows($arr);
		    		
		echo'			
					<p style="font-size:20px">&nbsp;&nbsp;&nbsp; <b>'.$rowcount.'</b> results</p>
		    			<div id="pageone" data-role="main">
						  	<div data-role="header">
						   		<h1>Product Management</h1>
						  	</div>
						  	<div class="ui-content">
							    <table data-role="table" data-mode="columntoggle" class="ui-responsive" id="myTable">
							      	<thead>
							        	<tr>
								          	<th data-priority="5">ProductID</th>
								          	<th>ProductName</th>
								          	<th data-priority="2">Price</th>
								          	<th data-priority="1">Image</th>
								          	<th data-priority="3">Information</th>
								          	<th data-priority="4">Type</th>
								          	<th>Edit</th>
								          	<th>Delete</th>
								        </tr>
							      	</thead>
							      	<tbody>
							      	
			';




		    	while($result=mysqli_fetch_array($arr))
				{		
			echo'
										<tr>
											<td>'.$result["ProductID"].'</td>
											<td>'.$result["Name"].'</td>
											<td>'.$result["Price"].'</td>
											<td>
												<a href="'.$result["Picture"].'" target="_black"  alt="'.$result["Name"].'">
													<img src="'.$result["Picture"].'" width="40px" height="40px">
												</a>
											</td>
											<td>'.$result["Introduction"].'</td>
											<td>'.$result["Type"].'</td>
											
										<form method="get" action="Management_update.php" data-ajax="false">
											<input id="update" name="update" type="hidden" value="'.$result["ProductID"].'">
											<td><button type="submit" class="ui-btn ui-corner-all ui-icon-edit ui-btn-icon-notext"></button></td>
										</form>	


										<form method="post" action="Post_management_delete.php" onsubmit="return confirm(\'Are you sure to delete '.$result["Name"].' ?\')" data-ajax="false">		
											<input id="delete" name="delete" type="hidden" value="'.$result["ProductID"].'">
											<td><button type="submit" class="ui-btn ui-corner-all ui-icon-delete ui-btn-icon-notext"></button></td>
										</form>	
										</tr>
				';
				}
				
				
			echo'
									</tbody>
						    	</table>
						  	</div>
						
							<div data-role="footer">
								<h1>Above are all products</h1>
							</div>
						</div> 
				';
		    }
		    else
		    {
		    	echo "<script>alert('Fail to search!');</script>";
		    }
		}
		else
		{
			echo "<script>alert('Fail to connect database!');</script>";
		}
	?>

	<?php
			include("back.php");
	?>
	</body>
</html>
