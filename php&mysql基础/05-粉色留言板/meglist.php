<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/
//引入;连接数据库文件
require './link.php';

//执行查询操作
$sql = 'select * from liuyan';
$res = mysqli_query($link,$sql);//成功返回对象,失败返回false
if(!$res){
	echo mysqli_error($link);
	exit();
}

//获取具体数据
$data = array();
while($row = mysqli_fetch_assoc($res)){
	$data[] = $row;
}
//print_r($data);//二维数组

//引入前台模板
require './meglist.html';
//循环输出数据

?>