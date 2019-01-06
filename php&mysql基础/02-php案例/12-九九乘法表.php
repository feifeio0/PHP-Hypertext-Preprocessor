<?php

for($i=1;$i<=9;$i++)
{
    //echo $i,'<br>';
    for($j=1;$j<=$i;$j++)
    {
        echo $i,'*',$j,'=',$i*$j,'&nbsp;';
    }
    //&nbsp空格！
    echo '<br>';
}

?>