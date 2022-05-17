<?php
ini_set("error_reporting","E_ALL & ~E_NOTICE");
header("Content-type: text/html; charset=utf-8"); 
require('admin/conn.php');
  //取得当前页数
  
  //每页最多显示的记录数
  $each_page = 14;

  //计算页面开始位置
  if(!$page || $page == 1)
  {
	$start = 0;
  }else{
	$offset = $page - 1;
	$start = ($offset * $each_page);
  }

?>

<?php include('admin/header.inc.php'); ?>


<p>

<?php
   $id = $_SESSION['username'];
  $sql1 = "SELECT akey FROM forum_user where username='$id'";
  $admininfo = mysqli_query($db,$sql1); 
  $akey=mysqli_fetch_array($admininfo);
  //检索记录，按照置顶标记和时间排序
  if($akey['akey'] == "1"){
  $sql = "SELECT * FROM forum_topic 
	    ORDER BY sticky DESC, datetime DESC LIMIT $start, $each_page";
  $result = mysqli_query($db,$sql);
  }
  else{
    $sql = "SELECT * FROM forum_topic where name='$id'
          ORDER BY sticky DESC, datetime DESC LIMIT $start, $each_page";
    $result = mysqli_query($db,$sql);
  }
?>
<div class="list">
<h2>帖子管理</h2>
<table width="80%"  align="center" 
	cellpadding="3" cellspacing="0" >
<tr bgcolor="#cc9">
<td width="40%" align="center" style="border:0;">帖子</td>
<td width="8%" align="center" style="border:0;">访问</td>
<td width="8%" align="center" style="border:0;">回复</td>
<td width="24%" align="center" style="border:0;">发表日期</td>
<td width="24%" align="center" style="border:0;">操作</td>
</tr>

<?php
  //循环输出输出记录列表
  while($rows=mysqli_fetch_array($result))
  { 
?>
<tr bgcolor="#ffc">
  <td class="topic">

<?php
	//如果是“置顶”的记录
	if ($rows['sticky'] == "1")
	{
	  ?><img src="../public/images/lamp.png" alt="置顶">
      <?php 
	}
  
	
?>
      <a href="/topic?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a><section class="user"><?php echo 'By: '.$rows['name']?></section>
  </td>
  <td align="center">
	  <?php 
		echo $rows['view'];  //浏览量
	  ?>
  </td>
  <td align="center">
	  <?php 
		echo $rows['reply'];  //回复量
	  ?>
  </td>
  <td align="center">
	  <?php 
		echo $rows['datetime'];  //日期
	  ?>
  </td>
  <td align="center">
  <a href="/@deltopic?id=<?php echo $rows['id']; ?>">删除</a>
  <?php
  if ($akey['akey'] =="1"){
  if ($rows['sticky'] == "1")
	{
	  ?>
    <a href="/@unstick?id=<?php echo $rows['id']; ?>">取消置顶</a>
      <?php 
	}else{
  ?>
  <a href="/@addstick?id=<?php echo $rows['id']; ?>">置顶</a>
 <?php 
  }}
  ?>
  </td>
</tr>

<?php
  } //退出while循环
?>

</table>
</div>
<?php
  $prevpage = 0;
  //计算前一页
  if($page > 1)
  {
	$prevpage = $page - 1;
  }

  //当前记录
  $currentend = $start + $each_page;

  //取得所有的记录数
  $sql = "SELECT COUNT(*) FROM forum_topic";
  $result = mysqli_query($db,$sql);
  $row = mysqli_fetch_row($result);
  $total = $row[0];
  $nextpage = 0;
  //计算后一页
  if($total>$currentend)
  {
	if(!$page){
		$nextpage = 2;
	}else{
		$nextpage = $page + 1;
	}
  }
?>

</p>

<p class="prevpage">

<?php

  //判断分页并输出
  if ($prevpage || $nextpage) 
  {
	//上一页
	if($prevpage)
	{
		echo "<a href=\"?page={$prevpage}\"><< 上一页</a> ";
	}else{
		echo "&nbsp";
	}

	//后一页
	if($nextpage)
	{
		echo "<a href=\"?page={$nextpage}\">下一页 >></a> ";
	}else{
		echo "&nbsp";
	}
  }
?>
<input type="button" onClick="location.href='/profile'" value="修改个人资料">
<input type="button" onClick="location.href='/myuser'" value="返回中心">
</p>


<section class="message">
<h3>Prompt</h3>
<img src="public/images/lamp.png" alt="Sticky" border="0" align="absmiddle"> 置顶的帖子<br>
</section>

<?php include('admin/footer.inc.php'); ?>
