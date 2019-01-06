<?php 

$link = mysqli_connect('localhost','root','1234','test');//对象,通道
mysqli_query($link,'set names utf8');

/*$sql = 'select * from user';
$res = mysqli_query($link,$sql);//结果标识,执行成功返回对象,执行失败false
var_dump($res);*/
$sql = 'show tables';
$res = mysqli_query($link,$sql);
var_dump($res);//结果标识,对象   结果标识/false

?>