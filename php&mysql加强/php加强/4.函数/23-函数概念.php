<?php 

//函数就是一段封装起来的代码,可以随时调用.
function sayHello(){
	echo '你好';
}
sayHello();

//函数在有参数的情况下就是一个加工机器
function add($a,$b){
	echo $a+$b;
}

add(3,4);

?>