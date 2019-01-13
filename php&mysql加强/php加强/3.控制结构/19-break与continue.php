<?php 

/*for ($i=1; $i <=10 ; $i++) { 
	if($i==3){
		//continue;
		break;
	}
	echo $i,'<br>';
}*/

for ($i=1; $i <=10; $i++) { 
	if($i==3){
			//continue;
			break;
		}
	for ($j=1; $j <=10 ; $j++) { 
		
		echo $i,':',$j,'<br>';
	}
}

?>