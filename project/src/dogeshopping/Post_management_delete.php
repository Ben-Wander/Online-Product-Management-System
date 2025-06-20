<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Process delete product</title>
	
	
</head>
<body>
	<?php  
		session_start();
		
		if(isset($_POST["delete"]))
		{
			$deleteID = $_POST["delete"];
			
			include("conn.php");
			
			if($valid)
			{
				$str = "delete from `product` where ProductID='$deleteID'";
				$result=mysqli_query($conn,$str);		
				
				if($result)
				{
					echo "<script>alert('Delete successfully!');window.location='Management.php';</script>";
				}
				else
				{
					echo "<script>alert('Fail to delete!');window.location='Management.php';</script>";
				}
			}
			else
			{
				echo "<script>alert('Fail to connect to Database!');window.location='Management.php';</script>";
			}
		}
		else
		{
			echo "<script>alert('Post error!');window.location='Management.php';</script>";
		}

	?>	
	</body>
</html>
