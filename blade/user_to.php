<?php
ini_set("error_reporting","E_ALL & ~E_NOTICE"); 
header("Content-type: text/html; charset=utf-8"); 
  require('admin/conn.php');

  //用户名
  $id = $_SESSION['username'];

  //如果用户没有登录
  if (!$_SESSION['username']) {
	ExitMessage("请<b>登录</b>后执行该请求。", "/login");
  }
?>

<?php include('admin/header.inc.php'); ?>
<div class="editUser">

<h2>个人中心</h2>

<?php
  //查询用户资料
  $sql="SELECT * FROM forum_user WHERE username = '$id'";
  $result=mysqli_query($db,$sql);
  $rows=mysqli_fetch_array($result);
  $sql1 = "SELECT * FROM forum_topic where name='$id'";
  $result1=mysqli_query($db,$sql1);
  $i=0;
  while($rows1=mysqli_fetch_array($result1))
  {
     $i++;
   }
?>

<fieldset>
	<legend></legend>
    <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp欢迎你</p>
    <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><?php echo $rows['username']; ?></b></p>
    <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp您的发帖数为：</p>
    <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b><?php echo $i ?></b></p>
</fieldset>
<input type="button" onClick="location.href='/profile'" value="修改个人资料">
<input type="button" onClick="location.href='/center'" value="管理我的帖子">
</div>	
<?php include('admin/footer.inc.php'); ?>