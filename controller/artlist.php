<?php
//读取arts目录中所以的文件
$data=scandir('./data/arts');
//从数组中删除前两个文件名
unset($data[0]);
unset($data[1]);

// var_dump($data);
//加载页面
view('posts');