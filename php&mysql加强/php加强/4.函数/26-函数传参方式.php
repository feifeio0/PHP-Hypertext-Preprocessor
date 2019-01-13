<?php 
//传值赋值
//引用传值
function test(&$a){
	//$a = 3;
	//$a = $b;
	$a = $a+1;
	return $a;
}

//echo test(3);
$b = 10;
echo test($b);
echo $b;

?>