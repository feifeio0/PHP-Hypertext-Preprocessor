<?php 

$arr = array('a','b','c','d','e');

//1.顺序输出
/*echo $arr[0];
echo $arr[1];
echo $arr[2];
echo $arr[3];
echo $arr[4];*/
//2.循环
/*for ($i=0; $i <=4 ; $i++) { 
	echo $arr[$i],'<br>';
}*/

//3.foreach(专门用来循环数组)
/*foreach ($arr as $k => $v) {
	echo $k,':',$v,'<br>';
}*/
/*foreach($arr as $a){
	echo $a,'<br>';
}*/
/*$arr = array('name'=>'lisi','age'=>'24','gender'=>'man');
print_r(array_keys($arr));*///1//array



$stu = array('lisi'=>3,'wang'=>5,'zhao'=>6);

foreach ($stu as $k => $v) {
	//$v*2
	//$v = $v*2;
	$stu[$k] = $v*2;
}

print_r($stu);
?>