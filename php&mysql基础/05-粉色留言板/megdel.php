<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/


//delete from liuyan where id=?
//地址栏传参
//print_r($_GET);//地址栏上传过来的参数


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
	//require './meglist.php';
	header("location:meglist.php");
}

?>