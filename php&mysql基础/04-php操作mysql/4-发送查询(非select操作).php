<?php 

//连接数据库
$link = mysqli_connect('localhost','root','1234','test');
//var_dump($link);
//设置字符集
mysqli_query($link,'set names utf8');

//执行操作(增删改)
/*$sql = 'insert into user (uid,name,age) values (13,"chenxing",20)';
$res = mysqli_query($link,$sql);//result(结果)
var_dump($res);*/
/*$sql = 'update user set name="gl",age=15 where uid=12';
$res = mysqli_query($link,$sql);
var_dump($res);*/
$name = 'cx';
$age = 21;
$sql = "update user set name='$name',age=$age where uid=13";//字符串,mysql语句
echo $sql;
//$sql = 'update user set name="$name",age=$age where uid=13';//字符串,mysql语句
/*$res = mysqli_query($link,$sql);
var_dump($res);*/

?>