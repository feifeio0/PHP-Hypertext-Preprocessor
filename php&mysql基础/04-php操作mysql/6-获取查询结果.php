<?php 

$link = mysqli_connect('localhost','root','1234','test');
mysqli_query($link,'set names utf8');

$sql = 'select * from user';
$res = mysqli_query($link,$sql);
//var_dump($res);
$arr = mysqli_fetch_assoc($res);
print_r($arr);//关联数组,列名(key)=>数据(value)
$arr = mysqli_fetch_assoc($res);
print_r($arr);
$arr = mysqli_fetch_assoc($res);
print_r($arr);
$arr = mysqli_fetch_assoc($res);
print_r($arr);
$arr = mysqli_fetch_assoc($res);
print_r($arr);
$arr = mysqli_fetch_assoc($res);
print_r($arr);
$arr = mysqli_fetch_assoc($res);
print_r($arr);
$arr = mysqli_fetch_assoc($res);
print_r($arr);
$arr = mysqli_fetch_assoc($res);
var_dump($arr);
?>