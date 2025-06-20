<?php	
	if (!headers_sent() && session_id() == '') session_start();

	if(!isset($_SESSION['Muser']))
	{
		echo "<script>window.location='Managerlogin.php';</script>";
	}	
	
	
	
	echo'
		<div id="floattable" data-role="header" data-position="fixed">
			<h>&nbsp;&nbsp;&nbsp;<a href="index.php" data-role="none" data-ajax="false" style="text-decoration:none;  color: white;">Doge Shopping</a>&nbsp;&nbsp;&nbsp;
			</h>
			<h style="color: deepskyblue;">
		';
			
			if(isset($_SESSION['Muser']))
			{	
				echo ' Doge Shopping Manager : '.$_SESSION['Muser'];	
			}
			
	echo'
			</h>
		</div>
		<div data-role="collapsible">
			<h1>Doge Shopping<img id="logo" src="img/logo.png" style="width: 25px; height: 18px;"></h1>
		';
			
			

	echo'
			<p>
				<form id="productsearch" name="productsearch" method="get" action="Management.php" onsubmit="return Productsearch()" data-ajax="false">
					<div id="productsearch" style=" margin: 0 auto;">
						<input type="search" name="search" id="search" placeholder="Search by ID/name"/>
						<button id="membershipsubmit" type="submit" style="font-size: 15px">Submit</button>
					</div>
				</form>

			</p>

			<p>
				<div data-role="collapsible">
					<h1>Management</h1>
					<p>
						<ul data-role="listview" data-inset="true">    
					    	<li><a href="Management_add.php" class="ui-btn ui-icon-plus ui-btn-icon-left" data-ajax="false">Add Product </a></li>
					      	<li><a href="Management.php" class="ui-btn ui-icon-edit ui-btn-icon-left" data-ajax="false">Product Management</a></li>
					   		<li><a href="Log out.php" class="ui-btn ui-icon-power ui-btn-icon-left"  data-ajax="false">Log out</a></li>
					   	</ul>
					</p>
				</div>
			</p>
		</div>
		';

?>