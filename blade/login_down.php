<?php


  require('admin/conn.php');
  //清空SESSION
  $_SESSION = array();
  session_unset();

  //清空SESSION
  session_destroy();

  //跳转页面
  header("Location:/");
?>
