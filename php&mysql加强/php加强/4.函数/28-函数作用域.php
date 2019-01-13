<?php 

/*//1.局部变量(函数内部声明的变量就是局部变量)
function a(){
	$a = 10;
	return  $a;
}
//2.全局变量(在文件内,函数外声明的变量就是全局变量)
$a = 10;
//3.超全局变量
$_POST,$_GET*/

/*function test(){
	$b = 10;
	return $a;
}

$a = 8;
test();
echo $b;*/

//1.函数参数引用传值
//2.global 声明该变量去全局找
//3.$GLOBALS 搜集全局变量

/*function test(){
	$b = 10;
	global $a;
	return $a;
}
$a = 8;
echo test();*/


/*$GLOBALS['meinv']='迪丽热巴';

echo $meinv;*/

/*function test(){
	$GLOBALS['shuaige'] = '李易峰';
}
test();
echo $shuaige;*/


$a = 10;
$b = '5';
$c = 'dsjkflsd';
print_r($GLOBALS);



?>