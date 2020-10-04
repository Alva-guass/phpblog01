<?php
$title=$_POST['deltitle'];

// var_dump($title);
//2、循环每个文章删除
foreach($title as $v){
    unlink('./data/arts/'.$v);
}
message('删除成功','index.php?a=artlist');