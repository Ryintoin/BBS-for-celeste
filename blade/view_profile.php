<?php
ini_set("error_reporting","E_ALL & ~E_NOTICE"); 
header("Content-type: text/html; charset=utf-8"); 

  require('admin/conn.php');

  //取得用户ID

  //取得用户信息
  $sql="SELECT * FROM forum_user WHERE username='$id'";
  $result=mysqli_query($db,$sql);
  $rows=mysqli_fetch_array($result);

  if (!$rows){
	ExitMessage("用户记录不存在！", "/");
  }

  //正文内容
  $sql = "SELECT * FROM forum_topic WHERE name = '" . $id . "'";
  $count_q = mysqli_query($db,$sql);
  $num_count_q = mysqli_num_rows($count_q);

  //回复内容
  $sql = "SELECT * FROM forum_reply WHERE reply_name = '" . $id . "'";
  $count_a = mysqli_query($db,$sql);
  $num_count_a = mysqli_num_rows($count_a);

  //计算用户发表的帖子数量
  $num_count = $num_count_q + $num_count_a;
?>

<?php include('admin/header.inc.php'); ?>
<div class="user_info">
<h2>查看 <b><?php echo $rows['username']; ?></b> 个人资料:</h2>

<?php
	//改写电子邮件地址
	$mail=$rows['email'];
//	$mail=str_replace("@", " [at] ", $mail);
//	$mail=str_replace(".", " [dot] ", $mail);
?>

<fieldset>
	<legend>个人资料</legend>
<br>
<table width="300">
  <tr>
    <td width="100"><strong>真实姓名:</strong></td>
    <td width="200"><?php echo $rows['realname']; ?></td>
  </tr>
  <tr>
    <td><strong>电子邮件:</strong></td>
    <td><?php echo $mail; ?></td>
  </tr>
  <tr>
    <td><strong>发贴数量:</strong></td>
    <td><?php echo $num_count; ?></td>
  </tr>
</table>
<br>
<input type="button" value="返回首页" onclick="location.href='/'">
</fieldset>
</div>
<?php include('admin/footer.inc.php'); ?>
