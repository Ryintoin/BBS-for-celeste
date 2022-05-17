<?php
ini_set("error_reporting","E_ALL & ~E_NOTICE"); 
header("Content-type: text/html; charset=utf-8"); 


  require('admin/conn.php');

  //根据ID取得贴子记录
  $sql="SELECT * FROM forum_topic WHERE id='$id'";

  $result=mysqli_query($db,$sql);
  $rows=mysqli_fetch_array($result);

  //记录不存在
  if (!$rows) 
  {
	ExitMessage("该贴记录不存在！", "main_forum.php");
  }

  //置顶标记
  $sticky=$rows['sticky'];

?>
        
<?php include('admin/header.inc.php'); ?>
<img id="x" src="public/images/backspace.png" alt="backspace">
<div class="setTopic">
<h2 style="text-align:center;"><?php echo '主题：'.$rows['topic']; ?></h2>
<p class="info">
	由用户<a href="view_profile.php?id=<?php echo $rows['name']; ?>">
	<?php echo $rows['name']; ?></a> 于 <?php echo $rows['datetime']; ?>
	创建
</p>
</div>
<div class="detial">
<!--<img src="../images/ball4.png" alt="tuding">大头针不好看-->
<p class="article">
<?php
	//输出整理好的内容
	echo nl2br(htmlspecialchars($rows['detail']));
?>
</p>
<div class="user">
    <p>创建于<?php echo $rows['datetime']; ?></p>
</div>


</div>
<dl>
<div class=result><p><?php

  //获取回复内容
  $sql	="SELECT * FROM forum_reply WHERE topic_id='$id'";

  $result	= mysqli_query($db,$sql);
  $num_rows = mysqli_num_rows($result);

  if ($num_rows)
  {
	//循环取出记录内容
	while($rows=mysqli_fetch_array($result))
	{
?>
<section class="reply">
 <dt>
    <a href="/user?id=<?php echo $rows['reply_name']; ?>">
    	<?php echo '用户'.$rows['reply_name']; ?>
    </a>
     - <?php echo $rows['reply_datetime']; ?>
 </dt>
 <dd>
  <p><?php
    	//输出整理好的内容
    	echo nl2br(htmlspecialchars($rows['reply_detail'])); 
     ?></p>
 </dd>
</section>
 
 <?php
	}//结束循环
  }else{
	echo "暂无回复!";
  }
 
  //浏览量加1
  $sql = "UPDATE forum_topic set view=view+1 WHERE id='$id'";
  $result = mysqli_query($db,$sql);

    ?></p></div>
</dl>

<!--内容回复表单，开始-->


<div class="replyText"><?php 
//判断用户是否已经注册
if (!$_SESSION['username'])
{
	echo '<p class="noregist">请先<a href="/reg">注册</a>，
		  或者<a href="/login">登录</a>后进行评论。</p>';
} else {

	
?>
<form name="form1" method="post" action="@reply" id="reply">
 <input name="id" type="hidden" value="<?php echo $id; ?>">
 <table class="reply">
  <tr>
   <td valign="top">发表<br>回帖</td>
   <td>
    <textarea class="coolscrollbar" name="reply_detail" cols="80" rows="5"></textarea>
   </td>
  </tr>
  <tr>
   <td valign="top">&nbsp;</td>

  </tr>
 </table>
 <br />
 <section class="button">
 <input type="submit" name="Submit" value="回复该帖" class="button" />
 </section>
</form>
<?php } ?></div>
<br>
<!--内容回复表单，结束-->


<?php include('admin/footerBack.inc.php'); ?>
