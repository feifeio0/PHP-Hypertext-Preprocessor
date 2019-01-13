<?php 

$a = array('a','b','c','d','e');
/*echo count($a);//查数组的单元个数
echo count('hello');
echo count(null);*/

/*$res = array_key_exists('qinglong',$a);
var_dump($res);*/

$res = in_array('a', $a);
var_dump($res);
?>