<?php
	$conn=mysqli_connect("mysql","php","php");  //链接MySQL服务器
	if($conn)
	{
		$select =mysqli_select_db($conn,"dogeshopping");   //选择数据库
		if($select)
		{
			mysqli_query($conn,"set names utf8");
			$valid=true;
		}
		else
		{
			$valid=false;
			echo "<script>alert('数据库连接失败，请联系系统管理员！');</script>";
		}
	}
	else
	{
		$valid=false;
		echo "<script>alert('服务器连接失败，请联系系统管理员！');</script>";
	}
?>