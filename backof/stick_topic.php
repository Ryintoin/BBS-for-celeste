<?php
 ini_set("error_reporting","E_ALL & ~E_NOTICE"); 

  require('admin/conn.php');

 
	//取得文章ID
	$id=$_GET['id'];

	//设置“置顶”的SQL语句
	$sql = "UPDATE forum_topic SET sticky='1' WHERE id='$id'";

	$result=mysqli_query($db,$sql);
    
	if($result)
	{
		//跳转页面
		header("Location:/center");
	}
	else {
		ExitMessage("数据库操作错误！");
	}

  
?>
