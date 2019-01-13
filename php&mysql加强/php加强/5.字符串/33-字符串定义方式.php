<?php 

$c = '123';
$a = 'abcd\nefg$c';//2,\',\\
$b = "abcd\nefg$c";
echo $a;
echo '<hr>';
echo $b;

?>