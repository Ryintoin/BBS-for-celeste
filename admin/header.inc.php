<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>蔚蓝论坛</title>
<link rel="stylesheet" href="../public/css/bbs.css">
<link rel="stylesheet" href="../public/css/style.css">
<style>
    #header {
    margin: 10px auto;
    padding:10px 0 20px 1px;
    border-radius: 20px;
    box-shadow: 0 12px 8px -9px #555;
    background:  #cbdfe1;
    font-size: 14px;
    height: 20px;
    width: 080%;
}
#header h1{
    float: right;
    color: #20b2fd;
    font-size: 25px;
    font-weight: 600;
    margin: -10px 200px 20px 0;
}

body div#header{
    background-image: url("../public/images/a5.png");
    background-position:right;
    background-repeat: no-repeat;
    opacity: 0.7;
}
div#header nav li{
    margin-top: 0.5%;
}
div#header a{
    font-size: 15px;
    font-weight: 600;
    color:black;
}
</style>

</head>

<body style="background-color:#c7c9f2; ">

<!-- 头开始 -->
<div id="header">
<?php 
  //判断用户是否登录，从而显示不同的导航界面
  
  if(isset($_SESSION["username"])&&$_SESSION['username']) 
  { 
?>  
    <section class="title">
    <h1>蔚蓝论坛</h1>
    <img src="../public/images/24.png" alt="lala">
    </section>
	<!-- 用户登录后的导航条 -->
	<nav id="menu">
	    <ul>
	        <p><?php echo '&nbsp;'.'user: '.$_SESSION['username']; ?></p> 
            <li><a href="/">首页</a> | </li>
            <li><a href="/myuser">个人中心</a> |</li>
            <li><a href="/unlogin">退出登录</a></li>
            
        </ul>
    </nav>
<?php } else { ?> 
    <section class="title">
    <h1>蔚蓝论坛</h1>
    <img src="../public/images/24.png" alt="lala">
    </section>
	<!-- 用户未登录的导航条 -->
	<nav id="menu2">
	    <ul>
        <li><a href="/">首页</a> | </li>
        <li><a href="/reg">注册</a> | </li>
        <li><a href="/login">登录</a></li>
        </ul>
	</nav>
<?php  
  }//判断结束
?>
	<br>
</div>

<!-- 头结束 -->

<!-- 正文内容开始 -->
<div id="Content">
