<?php 

/*$a = 'a';
$b = 3;
$c = $a+$b;
$c = $a.$b;
var_dump($c);*/

//把一些变量类型统一当做布尔值来运算
//数字/字符串/数组
$a ='abc';
$a = 3;
$a = array();
$a = 0;
$a = '';
if(empty($a)){
	echo 'yes';
}else{
	echo 'no';
}
//'',array(),0,'0',0.0,false,null
//empty(var);  true

?>