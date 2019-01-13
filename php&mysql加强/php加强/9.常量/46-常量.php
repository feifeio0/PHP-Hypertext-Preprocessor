<?php 
//不会变化的量就是常量
//常量名一般全大写
//常量不能被修改(不能被重复定义)
//也不能被销毁

/*unset('PI');
define('PI', 3.15);
echo PI;*/
//var_dump(defined('PI'));
/*if(!defined('PI')){
	define('PI', 3.14);
}
defined('PI')||define('PI', 3.14);*/

//define('PI', 3.14);
//$num = 'PI';
//echo $num;//?
//echo constant($num);
function t1(){
	t2();
}

function t2(){
	t3();
}

function t3(){
	define('PI', 3.14);
}

t1();
echo PI;
//常量的作用域是:局部+全局

?>