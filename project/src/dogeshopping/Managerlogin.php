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
		<p></p>
		<div id="logoname1" style="color: black; font-size: 25px;">Personnel Only</div>
		
		<form name="loginform" onsubmit="" action="Post_managerlogin.php" method="post">
			<table>
				<tr>
					<td>
						<div id="login" style="width: 80%;">
							<table>
								<tr>
									<td style="padding: 10px 0px 10px 0px;">
										<input placeholder="Username" name="regiusername" style="font-size: 20px ;" type="text" onblur="checkregiusername()">&nbsp;
									</td>
								</tr>
								<tr>
									<td style="color: red; text-align: left;"><label id="error_username"></label></td>
								</tr>
								
								
								
								<tr>
									<td style="padding: 10px 0px 10px 0px;">
										<input placeholder="Password" style="font-size: 20px ;" type="password" name="regipassword" onblur="checkregipassword()">&nbsp;
									</td>
								</tr>
								<tr>
									<td style="color: red; text-align: left;"><label id="error_password"></label></td>
								</tr>
									
								
								<tr style="text-align: center;">
									<td><input id="submit" type="submit" value="Log in"></td>
								</tr>
							
							</table>
						</div>
					</td>
				</tr>
			</table>
		</form>
		
		
		

		
		<?php
			include("back.php");
		?>
	</body>
</html>

