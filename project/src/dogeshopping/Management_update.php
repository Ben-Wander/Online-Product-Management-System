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
		<?php 
			include("front_management.php");
		?>
		
		<div id="logoname1" style="color: black; font-size: 25px;">Product Update</div>
	
		<?php
			if(isset($_GET["update"]))
			{
				$ProductID=$_GET["update"];
	
	
				include("conn.php");
				
				if($valid)
				{
				 	$str = "select * from `product` where ProductID='$ProductID'";
				    $arr=mysqli_query($conn,$str);
					$result = mysqli_fetch_array($arr);
		    	}
			    else
			    {
			    	echo "<script>alert('Fail to connect to database!');</script>";
			    }
			}
			else
			{
				echo "<script>alert('Cannot find the page！'); window.location='Management.php';</script>";
			}
		?>		
					
					
					
		<div data-role="none">
	      	<div data-role="header">
	        	<h1>Product update</h1>
	      	</div>

			<div data-role="main" class="ui-content">
				<div class="ui-content" style="width: 80%;margin: 0px auto;">
					<form id="management_update" name="management_update" method="post" action="Post_management_update.php" onsubmit="return checkUpdateproductForm()" enctype="multipart/form-data" data-ajax="false">
				  		
				  		<div class="ui-field-contain">
				   			<label for="Productname">Product ID :<font color="red">*</font> :</label>
				    		<p><?php echo $ProductID; ?></p>
				    		<input type="hidden" name="ProductID" id="ProductID" value="<?php echo $ProductID?>">
				    	</div>
				  		
				  		<div class="ui-field-contain">
				   			<label for="Productname">Name<font color="red">*</font> :</label>
				    		<input type="text" name="Productname" id="Productname" value="<?php echo $result["Name"]?>" placeholder="">
				    	</div>
				    
				    	<div class="ui-field-contain">
						    <label for="Producttype">Type<font color="red">*</font> :</label>
						    <select id="Producttype" name="Producttype">
						    	<option value="">Select</option>
						    	<option value="toy" <?php if($result["Type"]=="toy") echo 'selected';?> >toy</option>
						    	<option value="computer" <?php if($result["Type"]=='computer') echo 'selected'; ?> >computer</option>
						    	<option value="mobilephone" <?php if($result["Type"]=='mobilephone') echo 'selected'; ?> >mobilephone</option>
						    	<option value="alcohol" <?php if($result["Type"]=='alcohol') echo 'selected'; ?> >alcohol</option>
						    	<option value="book" <?php if($result["Type"]=='book') echo 'selected'; ?> >book</option>
						    	<option value="watch" <?php if($result["Type"]=='watch') echo 'selected'; ?> >watch</option>
						    	<option value="other" <?php if($result["Type"]=='other') echo 'selected'; ?> >other</option>
						    </select>
						</div>
				
				    	<div class="ui-field-contain">
				   			<label for="Productprice">Price<font color="red">*</font> :</label>
				    		<input type="text" name="Productprice" id="Productprice" value="<?php echo $result["Price"]?>" placeholder="">
				    	</div>
	
						
						
						<div class="ui-field-contain">
				    		<label for="upload-button">Image<font color="red">*</font> :</label>
						    <button onclick="redirect(Productimage)" type="button" id="upload-button" style="width: 200px;">Upload</button>
						</div>
						
						<div style="display: none;">
							<input onchange="changepic(this,'Preview')" type="file" name="Productimage" id="Productimage" accept="image/*">
						</div>
						
						<div class="ui-field-contain">
				   			<label for="PreviewPreview'.$result["ProductID"].'"></label>
				    		<img src="<?php echo $result["Picture"];?>" id="Preview" width="200">
				    	</div>
						
						
						
						
						
						
						<script>
							function redirect(obj)
							{
        						$(obj).click();
    						}

						    function changepic(obj,previewid)
						    {
						        var newsrc=getObjectURL(obj.files[0]);
						        document.getElementById(previewid).src=newsrc;
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
				    		<textarea name="Productinformation" id="Productinformation" placeholder=""><?php echo $result["Introduction"];?></textarea>
				    	</div>
				    		
					  	<div class="ui-field-contain">
					  		<button type="submit">Save</button>
					  	</div>
					</form>
				</div>
	      	</div>
	   	</div>
		

	<?php
			include("back.php");
	?>
	</body>
</html>
