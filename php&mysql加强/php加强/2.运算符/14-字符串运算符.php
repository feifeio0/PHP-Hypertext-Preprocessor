<?php 

/*$a = 'hello';
$b = 3;*/
//echo $a.$b;
//echo $a. 3;

//$_POST[name],$_POST[email],$_POST[content],$table
$sql = 'insert into '.$table.'(name,email,content) 
values ('.$_POST['name'].','.$_POST['email'].','.$_POST['content'].')';

$sql = 'insert into '.$table.'(name,email,content) values 
('."'".$_POST['name']."','".$_POST['email']."','".$_POST['content']."')";


?>
insert into user(name,email,content) values ('1','zs','23')