<?php
//两个自然数相除，商3余10.
//被除数.除数商.余数的和是163.
//求被除数，除数.
//被除数/除数$c=商3..余数10
//$c*3+10 + $i + 3 + 10 = 163
for($c=1;$c<150;$c++)
{
    $bc = 3*$c + 10;
    if($bc + $c + 3 + 10 == 163)
    {
        echo '被除数:',$bc,'除数:',$c,'<br>';
    }
}

?>