<?php

//delete from liuyan where id=?
//地址栏传参
//print_r($_GET);

//获取地址栏上的id
$id = $_GET['id'];

//连接数据库
require './link.php';

//执行删除操作
$sql = "delete from liuyan where id=$id";
$res = mysqli_query($link,$sql);
if(!$res){
    echo mysqli_error($link);
}else{
    //require './meglist.php';不跳转
    header("location:meglist.php");//实现跳转
}
?>