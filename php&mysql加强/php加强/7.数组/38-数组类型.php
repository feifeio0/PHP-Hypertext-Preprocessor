<?php 

//键和值
//1.关联数组(键和值是有关联的)
$a = array('name'=>'zs','age'=>23);
//2.索引数组,(枚举数组,数字数组)  (键是有规律的数字)
$b = array(1=>'a',2=>'b',3=>'c');
//3.二维数组  (一个数组作为另外一个数组的值),(数组里面套数组)
$c = array('季节'=>array('春','夏','秋','冬'),'meinv'=>array('杨贵妃','貂蝉','西施','王昭君'));
//print_r($c);
//4.多维数组 
//$d = array('兽'=>array('多宝兽','金睛兽'=>array('狮子','麒麟')));
$d = array('爷爷'=>array('老爸'=>array('你'=>array('大儿子','二女儿'),'弟弟','妹妹'),'二叔','三叔'),'二爷','三爷');
print_r($d);
?>