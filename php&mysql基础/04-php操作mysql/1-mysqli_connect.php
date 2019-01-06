<?php 

//phpinfo();
//连接数据库
/*$link = mysqli_connect('localhost','root','1234','test');//object 通道标识 对象
//var_dump($link);
//设置字符集
mysqli_query($link,'set names utf8');*/

//连接数据库
/*$link = mysql_connect('localhost','root','1234');
//选库
mysql_query('use test');
//设置字符集
mysql_query('set names utf8');
var_dump($link);//resource 通道标识 资源*/

notice warning fatal error  deprecated(不推荐)

error_reporting(E_ALL ^ E_DEPRECATED);//异或

?>