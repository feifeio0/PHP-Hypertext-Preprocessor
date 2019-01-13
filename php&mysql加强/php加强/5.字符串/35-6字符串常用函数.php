<?php 

//获取文件后缀

$a = 'abc.bcd.jpg';
echo substr($a,strpos($a, '.')+1);
echo ltrim(strrchr($a,'.'),'.');


?>