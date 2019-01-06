<?php 

// $a = 10;
// $b = 3;
// $c = $a>$b;//凡运算必有运算结果,比较远算符的运算结果为布尔值
//var_dump($c);//1.字符串型2.整型3.布尔型(真true(1)/假/false(0))
//echo $c;

//赋值号=
//==等于 ,只[判断其值是否相等]
//===全等于,判断其值是否相等,判断其变量类型是否也相等
/*$a = '3';//string
$b = 3;//int
var_dump($a===$b);*/

/*$a = 'abcdefgh';
//var_dump(strpos($a, 'a'));//var_dump针对于所有的变量类型都可以打印//0 int
$pos = strpos($a, 'a');//bool 0
if($pos === false){
	echo '不存在';
}else{
	echo '存在';
}*/

$a = 3;
$b = '3';
var_dump($a!==$b);


?>