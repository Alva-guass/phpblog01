<?php
//1、接收表单中的数据

var_dump($_POST);

//2、生产文件
file_put_contents('./data/arts/'.$_POST['title'],$_POST['content']);

// 3、提示
message('添加成功！','artlist');