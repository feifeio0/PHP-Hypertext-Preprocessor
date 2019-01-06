<?php 

$link = mysqli_connect('localhost','root','1234','test');
mysqli_query($link,'set names utf8');

$sql = 'select * from user';
$res = mysqli_query($link,$sql);//obj

$arr = mysqli_fetch_assoc($res);//关联数组,列名(key)=>数据(value)
print_r($arr);
$arr = mysqli_fetch_row($res);//索引数组
print_r($arr);
$arr = mysqli_fetch_array($res);
print_r($arr);
?>