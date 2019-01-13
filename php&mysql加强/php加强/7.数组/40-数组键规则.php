<?php 


$a = array('name'=>'lisi','age'=>24,'hobby'=>array('bas','foot','valloy'));
//新添数组单元
$a['gender'] = 'man';
$a['hobby'][] = 'swim';
//修改数组单元
$a['age'] = 16;
$a['hobby'][1] = 'football';
//查看数组单元
echo $a['name'];
echo $a['hobby'][0];
//销毁数组单元
unset($a['hobby'][2]);

print_r($a);

?>