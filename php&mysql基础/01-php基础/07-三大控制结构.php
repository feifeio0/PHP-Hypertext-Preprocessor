<?php 

//顺序
/*echo 1;
echo 2;
...echo 10;*/
//选择
/*if (判断条件) {
	# code...
} else {
	# code...
}*/
//$ren = 17;
/*if($ren>=18){
	echo '通过';
}else {
	echo '回家写作业';
}*/
/*if($ren>=18){
	echo '通过';
}*/
/*$money = 10;
if($money==20){
	echo '购买成功';
}else if($money>=10){
	echo '购买成功';
}else{
	echo '滚吧';
}*/

//循环
//1.初始值2.判断条件(截止条件)3.循环体4.修改变量(步长)
$num=1;
while ($num<=10) {
	echo $num,'<br>';
	//echo '<br>';//在php程序当中所有的html标签都当做普通的字符串进行输出
	$num = $num+1;
}



?>