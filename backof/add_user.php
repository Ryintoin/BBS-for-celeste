<?php
ini_set("error_reporting","E_ALL & ~E_NOTICE"); 
header("Content-type: text/html; charset=utf-8"); 

  require('admin/conn.php');

  //取得提交的数据，并做清理
  include ('admin/header.inc.php');
  //用户名
  $username	= ClearSpecialChars($_POST['username']);
  //密码
  $password	= $_POST['password'];
  //电子邮件地址
  $email		= ClearSpecialChars($_POST['email']);
  //真实姓名

  //检验数据的合法性
  if (!$username) { 
	ExitMessage('请输入用户名！'); 
  }
  if (!$password) { 
 	ExitMessage('请输入密码！'); 
  }
  if (!$email) { 
	ExitMessage('请输入电子邮件地址！'); 
  }
  elseif(!checkEmail($email)){
	ExitMessage('电子邮件地址格式错误！'); 
  }

  //对密码进行MD5加密
  $password=$_POST['password'];

  //判断用户是否已经存在
  $sql = "SELECT * FROM forum_user WHERE username='$username'";
  $result = mysqli_query($db,$sql);
  $num_rows = mysqli_num_rows($result);

  if ($num_rows > 0) {
	ExitMessage('<p class="error">该用户已经存在！点击返回重新注册</p>');
  }

  //创建用户
  $sql = "INSERT INTO forum_user (username, password, email, akey)
		VALUES('$username', '$password', '$email',0)";
  $result = mysqli_query($db,$sql);
  
  if($result)
  {
	?>
	<div class="addUser">
	<h2>创建用户</h2>

	<p>您的用户账号已经建立，请点击<a href="/login">这里</a>登录。</p>
    </div>
	<?php
  }
  else {
	ExitMessage("数据库错误！");
  }
?>
