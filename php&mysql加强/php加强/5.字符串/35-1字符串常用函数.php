<?php 

$a = 'abcdefg';//一个英文字符或一个数字占一个字节,
$a = '中国人';//一个中文字符占3个字节
echo strlen($a);//字节数
echo mb_strlen($a);//字符数

?>