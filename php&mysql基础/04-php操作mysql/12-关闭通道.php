<?php 

$link = mysqli_connect('localhost','root','','test');
mysqli_query($link,'set names utf8');


//var_dump($link);
/*$sql = "delete from user where uid=5";
$res = mysqli_query($link,$sql);
if(!$res){
	echo mysqli_error($link);
	exit();
}*/

mysqli_close($link);
var_dump($link);

?>