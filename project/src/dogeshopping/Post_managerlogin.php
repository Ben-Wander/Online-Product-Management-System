<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
	<title>Process manager log in</title>
	</head>
	<body>
		<?php
			if( $_POST["regiusername"]!="" && $_POST["regipassword"]!="")
			{
				$name= $_POST["regiusername"];
				$pwd=$_POST["regipassword"];
				$name= str_replace("'","\'",$name);
				$pwd= str_replace("'","\'",$pwd);
				
				
				include("conn.php");
				
				
				if($valid)
				{
				    $str = "select * from `managerlogin` where Name='$name' and Password='$pwd'";
			    	$result=mysqli_query($conn,$str);
			    	if(mysqli_num_rows($result)>0)
			    	{
			      		if (!headers_sent() && session_id() == '') session_start();
				  		$_SESSION['Muser'] = $_POST['regiusername'];
			      		echo "<script>alert('Log in successfully!');window.location='Management.php'</script>";  
			    	}
				    else
				    {
				    	echo "<script>alert('Username or password wrong!'); window.location='Managerlogin.php';</script>";
				    }
				}
			}
			else
			{
				echo "<script>alert('Username and password cannot be empty！'); window.location='Managerlogin.php';</script>";
			}
		?>
	</body>
</html>