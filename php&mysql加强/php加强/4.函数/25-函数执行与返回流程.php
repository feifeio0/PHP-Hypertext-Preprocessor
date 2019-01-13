<?php 


/*function test(){
	echo '逗你玩儿';
}
//当函数在调用之后才执行
test();*/

function add($a,$b){
	//return $a+$b;
	echo '121111';
	echo '~~~~~~~~~~';
}

echo add(2,3);//php执行引擎
add(2,3);

//1.当遇到return的时候,直接返回
//2.没有return的时候,会把函数体全部执行一遍

?>