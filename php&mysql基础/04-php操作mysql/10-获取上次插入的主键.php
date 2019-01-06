<?php 

$link = mysqli_connect('localhost','root','1234','test');
mysqli_query($link,'set names utf8');

$sql = "insert into user values(14,'meinv',20)";
$res = mysqli_query($link,$sql);
if(!$res){
	echo mysqli_error($link);
	exit();
}

echo mysqli_insert_id($link);

?>