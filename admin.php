<?php

define('IN','admin.php');
session_start();
include('functions.php');
// check_login();


/*
1、项目初始化
    SESSION
    加载函数库
2、加载相应的功能模块
*/

$action=!empty($_GET['a'])?$_GET['a']:'main';
//3、登录权限验证
$noNeedLogin=['login','dologin'];
if(!in_array($action,$noNeedLogin)){
    check_login();
}

// if($action=='main'){
//     include('main.php');
// }else if($action=='logout'){
//     include('logout.php');
// }else if($action=='login'){
//     include 'login.php';
// }

include('./controller/'.$action.'.php');