<?php
//输出100内（不含100）能被3整除的所有整数
/*for($a=1;$a<100;$a++)
{
    if($a%3==0)
    {
        echo $a,'<br>';
    }
}*/

for($a=3;$a<100;$a=$a+3)
{
    echo $a,'<br>';
}

?>