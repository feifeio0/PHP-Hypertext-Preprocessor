<?php

//1.转义 ‘’转义两种
$c = '123';
$a = 'abcd\nefg$c';//  \',\\
//2.对变量的解析 
//双引号可以解析变量的值,单引号不解析
$b = "abcd\nefg$c";
//3.速度
//单引号更快
//字符串和数组的健优先用单引号

?>