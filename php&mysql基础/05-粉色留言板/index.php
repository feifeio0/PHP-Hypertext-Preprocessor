<?php 
/****
布尔教育 高端PHP培训
培  训: http://www.itbool.com
论  坛: http://www.zixue.it
****/


//检测是否有数据提交
//$_POST超全局数组,专门用来接收表单提交过来的数据
//empty();//检测变量的值是否为空
//print_r($_POST);exit();
if(empty($_POST)){
	//引入前台页面
	require './index.html';
}else{
	//连接数据库
	$link = mysqli_connect('localhost','root','1234','test');
	mysqli_query($link,'set names utf8');

	//执行添加操作
	$sql = "insert into liuyan (name,email,content) 
	values('$_POST[name]','$_POST[email]','$_POST[content]')";
	//数组的字符串健名在sql语句里是不能加引号的
	$res = mysqli_query($link,$sql);
	if(!$res){
		echo mysqli_error($link);
	}else{
		//echo '留言添加成功';
		header('location:meglist.php');
	}
}


?>