<?php
function doublemd5($str) 
{   //得到数据的密文
    $str=md5($str); 
    //再把密文字符串的字符顺序调转 
    $str=strrev($str); 
    //最后再进行一次MD5运算并返回 
    return md5($str); 
}

$invalidchars = array(
    "'",				//单引号
    ";",				//分号
    "=",				//等号
    "\\",				//反斜线
    "/"					//斜线
);



/*******************/
/*  公共函数设置   */
/*******************/

//功能：检查电子邮件地址格式是否正确
//输入：电子邮件地址
//输出：true或false
function CheckEmail($email)
{
    $check = "/^[0-9a-zA-Z_-]+@[0-9a-zA-Z_-]+(\.[0-9a-zA-Z_-]+){0,3}$/";
    
    if(preg_match ($check, $email)){
        return true;
    }
    else{
        return false;
    }
}

//功能：显示错误信息和返回的链接地址，并终止程序执行
//输入：错误信息, 链接地址
//输出：字符串
function ExitMessage($message, $url='')
{
    echo '<p class="message">';
    echo $message;
    echo '<br>';
    if($url){
        echo '<a  href="'.$url.'">返回</a>';
    }else{
        echo '<a  href="create_user.php" ">返回</a>';
    }
    echo '</p>';
    exit;
}
//功能：清除字符串中的特殊字符
//输入：字符串
//输出：字符串
function ClearSpecialChars($str)
{
    global $invalidchars;

    $str = trim($str);
    $str = str_replace($invalidchars,"",$str);
    return $str;
}



$DBhost = "localhost";      
$DBuser = "root";       
$DBpass = "123";           
$DBname = "bbs";   
$db=mysqli_connect($DBhost,$DBuser,$DBpass,$DBname) or die("数据库连接失败，请检查数据库设置");
?>