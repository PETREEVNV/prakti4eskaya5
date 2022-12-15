<?
function chet($a, $b)
{
    if ($a >= $b)
    {
        return;
    }

    if ($a % 2 == 0)
    {
        echo $a . '<br/>';
    }
    if ($a % 2 != 0)
    {
        echo $a . '<br/>';
        echo "-".$variable;
    }

    chet($a + 1, $b);
}

chet(1, 21);
?>