<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
	<title>Log out</title>
	</head>
	<body>
		<?php
			session_start();
		    unset($_SESSION['Muser']);
		   	echo "<script>alert('Log out successfully！'); window.location='Managerlogin.php';</script>";
		?>
	</body>
</html>