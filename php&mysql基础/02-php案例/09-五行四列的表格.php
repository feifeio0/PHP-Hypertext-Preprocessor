<?php
//输出一个五行四列的表格
echo '<table border=1>';
    for($i=1;$i<=5;$i++)
    {
        echo '<tr>';
        for($j=1;$j<=4;$j++)
        {
            echo '<td>哈哈</td>';
        }
        echo '</tr>';
    }
echo '<table>';

?>