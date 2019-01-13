<?php 
//把一个变量的值作为一个函数的名
function good(){
	echo '哈哈哈';
}

function bad(){
	echo '呜呜呜';
}

$heart = 'bad';
echo $heart();//()
?>