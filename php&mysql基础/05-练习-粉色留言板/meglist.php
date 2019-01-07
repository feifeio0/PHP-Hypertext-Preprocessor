<?php

//链接数据库
require 'link.php';

//执行查询操作
$sql = 'select * from liuyan';
$res = mysqli_query($link,$sql);//成功返回对象，失败返回false
if(!$res)
{
    echo mysqli_error($link);
    exit();
}

//获取具体数据
while($row = mysqli_fetch_assoc($res)){
    $data[] = $row;
}

//print_r($data);

//最后引入前台模板
require './meglist.html';
//嵌套循环输出数据

?>