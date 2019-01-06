<?php 

//$arr = array(1=>'a',2=>'b',3=>'c',4=>'d');//索引数组(键是有规律的数字)
/*for ($i=1; $i <=4 ; $i++) { 
	echo $arr[$i],'<br>';
}*/

/*echo $arr[1];
echo $arr[2];
....;*/

/*foreach ($arr as $a => $b) {
	echo $a,':',$b,'<br>';
}
foreach ($arr as $a) {
	echo $a,'<br>';
}*/

$arr = array('name'=>'zs','age'=>'23','gender'=>'man');//关联数组(键和值有关联)
print_r(array_keys($arr));//数组

?>