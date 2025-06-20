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
			include("front_management.php");
		?>
		
		
		
		<div id="logoname1" style="color: black; font-size: 25px;">Add Product </div>

		<div data-role="none">
		  	<div data-role="header">
		  		<h1>Product information</h1>
		  	</div>
			<div data-role="main" class="ui-content" style="width: 80%;margin: 0px auto;">
				<form id="management_add" name="management_add" method="post" action="Post_management_add.php" onsubmit="return checkAddproductForm()" enctype="multipart/form-data" data-ajax="false">
			  		<div class="ui-field-contain">
			   			<label for="Productname">Name<font color="red">*</font> :</label>
			    		<input style="behavior:url(#default#savehistory)"; type="text" name="Productname" id="Productname" value="" placeholder="">
			    	</div>
			    
			    	<div class="ui-field-contain">
					    <label for="Producttype">Type<font color="red">*</font> :</label>
					    <select id="Producttype" name="Producttype">
					    	<option value="">Select</option>
					    	<option value="toy">toy</option>
					    	<option value="computer">computer</option>
					    	<option value="mobilephone">mobilephone</option>
					    	<option value="alcohol">alcohol</option>
					    	<option value="book">book</option>
					    	<option value="watch">watch</option>
					    	<option value="other">other</option>
					    </select>
					</div>
			    
			    	<div class="ui-field-contain">
			   			<label for="Productprice">Price<font color="red">*</font> :</label>
			    		<input type="text" name="Productprice" id="Productprice" value="" placeholder="">
			    	</div>
			    	
			    	<div class="ui-field-contain">
			    		<label for="upload-button">Image<font color="red">*</font> :</label>
					    <button type="button" id="upload-button" style="width: 200px;">Upload</button>
					</div>
					
					<div style="display: none;">
						<input onchange="changepic(this)" type="file" name="Productimage" id="Productimage" accept="image/*">
					</div>
					
					<div class="ui-field-contain">
			   			<label for="Preview"></label>
			    		<img src="#" id="Preview" width="200" hidden="true">
			    	</div>
					
						<script>
							$(document).ready(function(){
    							$('#upload-button').click(function(){
        						$('#Productimage').click();
    							});
							});
						</script>


			    		<script>
						    function changepic(obj)
						    {
						        var newsrc=getObjectURL(obj.files[0]);
						        document.getElementById('Preview').src=newsrc;
						        document.getElementById("Preview").removeAttribute("hidden");
						    }
						    
						    
						    //建立一個可存取到該file的url
						    function getObjectURL(file) 
						    {
						        var url = null ;
						        // 下面函数执行的效果是一样的，只是需要针对不同的浏览器执行不同的 js 函数而已
						        if (window.createObjectURL!=undefined) 
						        { // basic
						            url = window.createObjectURL(file) ;
						        } 
						        else if (window.URL!=undefined) 
						        { // mozilla(firefox)
						            url = window.URL.createObjectURL(file) ;
						        } 
						        else if (window.webkitURL!=undefined) 
						        { // webkit or chrome
						            url = window.webkitURL.createObjectURL(file) ;
						        }
						        return url ;
						    }
						</script>

			    	
			    	
			    	
			    	
			    	
			    
			    	<div class="ui-field-contain">
			   			<label for="Productinformation">Introduction :</label>	
			    		<textarea name="Productinformation" id="Productinformation" placeholder=""></textarea>
			    	</div>	
			    		
				  	<div class="ui-field-contain">
				  		<input type="submit" value="Submit">
				  	</div>
				</form>
			</div>
		</div>
	

	<?php
			include("back.php");
	?>
	</body>
</html>
