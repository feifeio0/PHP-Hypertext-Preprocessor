<?php 
/*$a = array('a','b','c');
array_push($a, 'man');
array_pop($a);
array_unshift($a, 'woman');
array_shift($a);
print_r($a);
array_sum(array);*/

$arr = array('1','0','0','0','0');
for ($i=1; $i <=20 ; $i++) { 
	array_pop($arr);
	array_unshift($arr, '0');
	$arr[0] = $arr[2]+$arr[4];
}
echo array_sum($arr);

?>