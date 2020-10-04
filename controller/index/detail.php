<?php
$title=$_GET['title'];
//根据标题读取文件中的内容
$content=file_get_contents('./data/arts/'.$title);

//显示详情页
template('detail');