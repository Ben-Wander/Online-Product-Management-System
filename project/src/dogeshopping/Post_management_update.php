<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Process update product</title>
</head>
<body>
	<?php
		session_start();
			
		
		if(	isset($_POST["ProductID"])&& isset($_POST["Productname"])
		 && isset($_POST["Productprice"])&& isset($_POST["Producttype"])
		)
		{
			$ProductID = $_POST["ProductID"];
			$Productname = $_POST["Productname"];
			$Producttype = $_POST["Producttype"];
			$Productprice = $_POST["Productprice"];
		  	
		  	
		  	$Productname = str_replace("'","\'",$Productname);
			$Producttype = str_replace("'","\'",$Producttype);
			$Productprice = str_replace("'","\'",$Productprice);
			


		  	
		  	if(isset($_POST["Productinformation"]))
			{
				$Productinformation=$_POST["Productinformation"];
				$Productinformation = str_replace("'","\'",$Productinformation);
			}
		  	
		  	$Imagecheck=true;
		  	
			if(isset($_FILES["Productimage"]))
			{
				$Productimage = $_FILES["Productimage"];
	
			 	// upload images
				if($Productimage['size'] > 0 && $Productimage['size']<= 1024 * 8000)
				{
					$datetime=date('YmdHis');
					$rand = rand(100000,999999);
					
					
					$dir = 'upfiles/';
					
					$suffix = pathinfo($Productimage['name'],PATHINFO_EXTENSION);
					$name = $datetime.$rand.".".$suffix;
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
							$str = "UPDATE `product` SET `Name`='$Productname',`Price`=$Productprice,`Picture`='$path',`Introduction`='$Productinformation',`Type`='$Producttype' WHERE `ProductID`='$ProductID'";
							

							mysqli_query($conn,$str);
							$check =mysqli_affected_rows($conn);
							
							if($check >0)
							{
							  	echo "<script>alert('Update successfully！'); window.location='Management.php';</script>";
							}
							else if($check ==0)
							{
								echo "<script>alert('Save succssfully!'); window.location='Management.php';</script>";
							}
							else
							{
							 	echo "<script>alert('SQL error！'); window.location='Management_update.php?update=".$ProductID."';</script>";
							}
						}
						else
						{
						   echo "<script>alert('Fail to connect database！'); window.location='Management_update.php?update=".$ProductID."';</script>";
						}
				   	}
					else
					{
						echo "<script>alert('Image upload error!'); window.location='Management_update.php?update=".$ProductID."';</script>";
					}
				}
				else if($Productimage['size'] > 1024 * 8000)
				{
				  	echo"<script>alert('Image oversize!'); window.location='Management_update.php?update=".$ProductID."';</script>";  	
				}
				else
				{
					$Imagecheck=false;
				}
			}
			else
			{
				$Imagecheck=false;
			}
			
			
			if($Imagecheck==false)
			{
				include("conn.php");
				
				if($valid)
				{
					$str = "UPDATE `product` SET `Name`='$Productname',`Price`=$Productprice,`Introduction`='$Productinformation',`Type`='$Producttype' WHERE `ProductID`='$ProductID'";
					
					mysqli_query($conn,$str);
					$check =mysqli_affected_rows($conn);
					
					if($check >0)
					{
					  	echo "<script>alert('Update successfully！'); window.location='Management.php';</script>";
					}
					else if($check ==0)
					{
						echo "<script>alert('Save succssfully'); window.location='Management.php';</script>";
					}
					else
					{
					 	echo "<script>alert('SQL error！'); window.location='Management_update.php?update=".$ProductID."';</script>";
					}
				}
				else
				{
				   echo "<script>alert('Fail to connect database！'); window.location='Management_update.php?update=".$ProductID."';</script>";
				}
			}
		}
		else
		{
		   echo "<script>alert('Fail to update'); window.location='Management_update.php?update=".$ProductID."';</script>";
		}
		?>
	
	</body>
</html>