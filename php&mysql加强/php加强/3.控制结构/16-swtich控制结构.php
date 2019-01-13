<?php 
/*$ren = 1;
if($ren==1){
	echo '冠军';
}else if($ren==2){
	echo '亚军';
}else if($ren==3){
	echo '季军';
}else{
	echo '谢谢参与';
}*/

$ren=2;
switch ($ren) {
	case 1:
		echo '冠军';
		break;
	case 2:
	case 3:
		echo '亚军';
		break;
	case 4:
	case 5:
	case 6:
		echo '季军';
		break;
	default:
		echo '谢谢参与';
		break;
}


?>