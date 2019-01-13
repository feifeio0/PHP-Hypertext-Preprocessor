<?php 

/*$a = 10;
$b = $a;
$a = $a+1;
$b = $b+2;
echo $a,$b;*/

$a = 10;
$b = &$a;
$a = $a+1;
$b = $b+1;
echo $a,$b;


?>