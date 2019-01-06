<?php 

$link = mysqli_connect('localhost','root','1234','test');
mysqli_query($link,'set names utf8');
//执行查询操作
$sql = 'select * from user';
$res = mysqli_query($link,$sql);
//var_dump($res);
//print_r(mysqli_fetch_assoc($res));
//1.初始值2.结束条件3.循环体4.步长
/*while (($row = mysqli_fetch_assoc($res)) != null) {
	//print_r(mysqli_fetch_assoc($res));
	print_r($row);
}*/

$data = array();
while ($row = mysqli_fetch_assoc($res)) {
	//print_r(mysqli_fetch_assoc($res));
	//print_r($row);
	$data[] = $row;//二维数组
}
//echo $data[4]['name'];
//echo $data[4]['age'];
echo '<pre>';
print_r($data);
//var_dump($row);//null

/*$a = null;
if($a){
	echo '1';
}else {
	echo '0';
}*/
/*$a =array('a','b','c','d');
$a['name'] = 'lisi';
$a[] = 28 ;
print_r($a);*/
/*<br>
<hr>*/

?>