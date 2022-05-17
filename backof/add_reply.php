<?php
ini_set("error_reporting","E_ALL & ~E_NOTICE"); 
header("Content-type: text/html; charset=utf-8"); 

  require('admin/conn.php');

  //判断用户是否登录
  if (!$_SESSION['username']) 
  {
    
	/*ExitMessage("请<b>登录</b>后执行该请求。", "logon_form.php");*/
  }
  $id=$_POST['id'];

  //回帖的ID
 

  //验证帖子已经存在，未被锁定
  $sql = "SELECT * from forum_topic WHERE id='$id'";
  $result = mysqli_query($db,$sql);
  $topic_info = mysqli_fetch_array($result);

  if (!$topic_info)
  {
	ExitMessage("帖子记录不存在！", "/");
  }


  //取得用户信息
  $username = $_SESSION['username'];
  $sql = "SELECT * from forum_user WHERE username='$username'";
  $result = mysqli_query($db,$sql);
  $user_info = mysqli_fetch_array($result);

  //取得提交过来的数据
  $reply_name=$_SESSION['username'];
  $reply_email=$user_info['email'];
  $reply_detail=$_POST['reply_detail']; 

  if (!$reply_detail)
  {
    include('admin/header.inc.php');
	ExitMessage("没有回贴记录！", "/");
  }

  //取得reply_id的最大值
  $sql = "SELECT Count(reply_id) AS MaxReplyId 
		FROM forum_reply WHERE topic_id='$id'";
  $result=mysqli_query($db,$sql);
  $rows=mysqli_fetch_row($result);

  //将reply_id最大值+1，如果没有该值，则设置为1。
  if ($rows)
  {
	$Max_id = $rows[0]+1;
  }
  else {
	$Max_id = 1;
  }

  //插入回复数据
  $sql="INSERT INTO forum_reply (topic_id, reply_id, reply_name, 
		reply_email, reply_detail, reply_datetime)
		VALUES('$id', '$Max_id', '$reply_name', 
		'$reply_email', '$reply_detail', NOW())";
  $result=mysqli_query($db,$sql);

  if($result)
  {
	//更新reply字段
	$sql="UPDATE forum_topic SET reply='$Max_id' WHERE id='$id'";
	$result=mysqli_query($db,$sql);

	//页面跳转
	header("Location:/topic?id=$id");
  }
  else {
	ExitMessage("记录不存在");
  }

?>
