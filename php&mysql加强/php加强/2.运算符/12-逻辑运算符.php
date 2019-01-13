<?php 

//&&  两个表达式都返回true才为真
//||
/*for ($i=100; $i <200 ; $i++) { 
	if(($i%3==1) && ($i%4==2) && ($i%5==3)){
		echo $i,'<br>';
	}
}*/

$car = true;
$house = false;
if($car || $house){
	echo 'ok';
}else{
	echo 'no ok';
}


?>