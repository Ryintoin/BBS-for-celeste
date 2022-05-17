<?php
    //简易路由
    session_start();
    $uri = $_SERVER['REQUEST_URI'];
    if(stripos($uri,"page")!==false){
    $page=$_GET["page"];
    }else{
        $page=0;
    }
    if(stripos($uri,"id")!==false){
        $id=$_GET['id'];
    }
    $url=preg_replace("/".preg_quote("?","/").".*/si","",$uri);

    switch($url){
        case "/":  
             include "index.php"; 
               break;
        case "/login":  
             include "blade/login_in.php"; 
        break;
        case "/unlogin":  
             include "blade/login_down.php"; 
        break;
        case "/reg":  
            include "blade/regsin.php"; 
        break;
        case "/profile":  
            include "blade/user_self.php"; 
        break;
        case "/center":  
            include "blade/user_center.php"; 
        break;
        case "/user":  
            include "blade/view_profile.php"; 
        break;
        case "/createtopic":  
            include "blade/create_topic.php"; 
        break;
        case "/topic":  
            include "blade/view_topic.php"; 
        break;
        case "/myuser":  
            include "blade/user_to.php"; 
        break;
        case "/@reg":  
            include "backof/add_user.php"; 
        break;
        case "/@addtopic":  
            include "backof/add_topic.php"; 
        break;
        case "/@reply":  
            include "backof/add_reply.php"; 
        break;
        case "/@addstick":  
            include "backof/stick_topic.php"; 
        break;
        case "/@unstick":  
            include "backof/unstick_topic.php"; 
        break;
        case "/@deltopic":  
            include "backof/del_topic.php"; 
        break;
        case "/@uupdate":  
            include "backof/update_profile.php"; 
        break;
        default:
        include "conn/__404__.php";
        break;
    }
    

?>