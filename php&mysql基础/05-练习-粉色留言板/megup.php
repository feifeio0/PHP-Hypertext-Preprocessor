<?php

//连接数据库
require 'link.php';

//1.接收地址栏上的参数id
$id = $_GET['id'];
//2.检测表单是否有数据提交
if(empty($_POST))
{
    //取出该行数据并且作为默认值放在html上
    $sql = "select * from liuyan where id=$id";
    $res = mysqli_query($link,$sql);
    $row = mysqli_fetch_assoc($res);//关联数组，一维数组
    //print_r($row);
    //展示html页面
    require './megup.html';
}else{
    //执行修改操作
    $sql = "update liuyan set name='$_POST[name]',
    email='$_POST[email]',content='$_POST[content]' where id =$id";
    $res = mysqli_query($link,$sql);
    if(!$res){
        echo mysqli_error($link);
    }else{
        header('location:meglist.php');
    }
}

require './megup.html';

?>