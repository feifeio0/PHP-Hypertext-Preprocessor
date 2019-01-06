<?php 

$link = mysqli_connect('localhost','root','1234','test');
mysqli_query($link,'set names utf8');

$sql = "delete from user where uid>6";
$res = mysqli_query($link,$sql);
if(!$res){
	echo mysqli_error($link);
	exit();
}
echo mysqli_affected_rows($link);

?>