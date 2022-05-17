<?php


  require('admin/conn.php');

  //判断是否为管理员
  
	//取得文章ID
	$id=$_GET['id'];

	//取消“置顶”的SQL语句
	$sql = "UPDATE forum_topic SET sticky='0' WHERE id='$id'";

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
