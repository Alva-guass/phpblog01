<?php
//1、读取data/arts目录中所以文件的列表
$data=scandir('./data/arts');
//2、删除。和。。
unset($data[0]);
unset($data[1]);
//3、循环每个文件，取出文章的前100个字符
foreach($data as &$v){
    //4、读取一个文件的内容
    $fp=fopen('data/arts/'.$v,'r');
    
    $v=[
        'title'=>$v,
        'content'=>fread($fp,100),
    ];
    fclose($fp);
}
// var_dump($data);
// exit;
template('index');