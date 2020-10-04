<?php
// include('./functions.php');
    //提示消息的函数
function message($mess,$url)
{
    //在地址前加上入口文件
    $url=IN.'?a='.$url;
    echo <<<JS
<script>
alert('{$mess}');
location.href='{$url}'
</script>
JS;
exit;
};

function check_login()
{
    if( !isset($_SESSION['name']))
{
    message('必须先登录!','login');
    exit;
}

}

function view($name){
    include('view/admin/'.$name.'.html');
}