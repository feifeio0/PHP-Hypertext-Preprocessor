<?php 

$link = mysqli_connect('localhost','root','1234','test');
mysqli_query($link,'set names utf8');

$sql = 'select * from user';
$res = mysqli_query($link,$sql);
if(!$res){
	echo mysqli_error($link);//sql语句的错误信息
	exit();
}
$data = array();
while($row = mysqli_fetch_assoc($res)){
	$data[] = $row;
}

echo '<pre>';
print_r($data);

?>