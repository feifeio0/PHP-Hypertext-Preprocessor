<?php 

/*$a = 10;
$b = 3;
var_dump($a<=$b);*/
//==值判断其值是否相等
//===值和类型是否都相等

/*$a = '3';
$b = 3;
if($a === $b){
	echo 'yes';
}else{
	echo 'no';
}*/
$a = 'abcdefg';
$pos = strpos($a, 'a');//0// h,false 
if($pos !== false){
	echo '找到了';
}else{
	echo '没找到';
}

?>