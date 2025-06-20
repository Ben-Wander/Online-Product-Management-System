<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Process add product</title>
</head>
<body>
	<?php   	
		session_start();
		if(
			isset($_POST["Productname"])&& isset($_POST["Productprice"])
			&&isset($_POST["Producttype"])
		)
		{
			$Productname = $_POST["Productname"];
			$Prouducttype = $_POST["Producttype"];
			$Productprice = $_POST["Productprice"];
		  	$Productimage = $_FILES["Productimage"];
		  	
		  	$Productname = str_replace("'","\'",$Productname);
			$Prouducttype = str_replace("'","\'",$Prouducttype);
			$Productprice = str_replace("'","\'",$Productprice);
			
			
		  	
		  	
		  	if(isset($_POST["Productinformation"]))
			{
				$Productinformation=$_POST["Productinformation"];
				$Productinformation = str_replace("'","\'",$Productinformation);
			}
		  	
		  	
		  	
			

			

		 	// upload images
			if($Productimage['size'] > 0 && $Productimage['size']<= 1024 * 8000)
			{
				$datetime=date('YmdHis');
				$rand = rand(100000,999999);
				$ProductID = $datetime.$rand;
				
			
				
				$dir = 'upfiles/';
				
				$suffix = pathinfo($Productimage['name'],PATHINFO_EXTENSION);
				$name = $ProductID.".".$suffix;
				$path = $dir.$name;

				
				if(!is_dir($dir))
				{
					mkdir($dir);
				}
				
				
				$success= move_uploaded_file($Productimage['tmp_name'],$path);
				
				
				if($success)
				{
					include("conn.php");
					
					if($valid)
					{
						$str = "insert into `product` (Name,Price,Picture,Introduction,Type,ProductID) values ('$Productname',$Productprice,'$path','$Productinformation','$Prouducttype','$ProductID')";
					    
						mysqli_query($conn,$str);

						
						if( mysqli_affected_rows($conn) >0)
						{
						  	echo "<script>alert('Add successfully！'); window.location='Management_add.php';</script>";
						}
						else
						{
						 	echo "<script>alert('SQL error！'); window.location='Management_add.php';</script>";
						}
					}
					else
					{
					   echo "<script>alert('Select database error！'); window.location='Management_add.php';</script>";
					}
			   	}
				else
				{
					echo "<script>alert('Image upload error!'); window.location='Management_add.php';</script>";
				}
			}
			else if($Productimage['size'] > 1024 * 8000)
			{
			  	echo"<script>alert('Image oversize!'); window.location='Management_add.php';</script>";  	
			}
			else if($Productimage['size'] == 0)
			{
				echo"<script>alert('Please upload image'); window.location='Management_add.php';</script>";  
			}
		}
		else
		{
		   echo "<script>alert('Fail to add product！'); window.location='Management_add.php';</script>";
		}
		?>
	
	</body>
</html>