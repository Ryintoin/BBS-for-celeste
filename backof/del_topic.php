<?php
ini_set("error_reporting","E_ALL & ~E_NOTICE");
header("Content-type: text/html; charset=utf-8"); 

  require('admin/conn.php');

  //判断是否为管理员
 
	// get data that sent from form 
	$id=$_GET['id'];

	//删除文章
	$sql = "DELETE FROM forum_topic WHERE id=$id";
	$result=mysqli_query($db,$sql);

	//删除回复内容
	$sql2 = "DELETE FROM forum_reply WHERE topic_id=$id";
	$result2=mysqli_query($db,$sql2); 

	if($result AND $result2)
	{
		//页面跳转
		header("Location: /");
	}
	else {
		ExitMessage("数据库操作错误！");
	}
  
?>

