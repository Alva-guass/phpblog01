<?php
// include('./functions.php');
//1、接受表单中的数据
$username =$_POST['username'];
$password =$_POST['password'];
//2、判断账号是否正确
$account =file_get_contents('./data/account');//读取账号
//根据行转成数组
$account =explode("\n",$account);
//循环每个账号
foreach($account as $v){
    //拼出账号的格式
    $tmp=$username.' '.md5($password);
    
    if($tmp == $v){
        ////开启SESSION
        session_start();
        $_SESSION['name']=$username;
//         echo <<<JS
// <script>
// alert('登录成功!');
// location.href='index.php'
// </script>
// JS;
// exit;
        message('登录成功！','index.php');
    }
}
// echo <<<JS
// <script>
// alert('账号密码有误!');
// location.href='index.php'
// </script>
// JS;
// exit;
message('登录或密码错误!','index.php?a=login');