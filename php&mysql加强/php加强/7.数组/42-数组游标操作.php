<?php 

$a = array('a','b','c','d','e');
//print_r(each($a));
/*next($a);
prev($a);
end($a);
reset($a);
echo current($a);*/
/*while($row = current($a)){
	echo $row,'<br>';
	next($a);
}*/
/*list($test1,$test2,$test3) = $a;
echo $test1;*/
while($row = each($a)){
	list($k,$v) = $row;
	echo $k,':',$v,'<br>';
}


?>