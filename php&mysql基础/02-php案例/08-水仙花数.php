<?php
//水仙花数
//三位数，各位数字的立方和等于该数本身

for($i=1;$i<9;$i++)
{
    //十位
    for($j=0;$j<=9;$j++)
    {
        //个位
        for($k=0;$k<=9;$k++)
        {
            $sum = $i*$i*$i + $j*$j*$j + $k*$k*$k;
            $num = $i*100+$j*10+$k;
            if($sum == $num)
            {
                echo $num,'<br>';
            }
        }
    }
}

?>