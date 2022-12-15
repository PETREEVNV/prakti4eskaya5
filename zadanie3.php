<?php
$arr = array();
 
echo "<table cellpadding=\"5\" border=\"1\">";
 
for($i = 1; $i < 4; $i++)
{
    echo "<tr>";
 
    for($j = 1; $j < 4; $j++)
    {
        $val = rand(1, 100);
 
        $arr[$i][$j] = $val;
 
        echo "<td>".$val."</td>";
    }
 
    echo "</tr>";
}
 
echo "</table>";
 
$maxvalue = 0;
$indexI = 0;
$indexJ = 0;
 
for($i = 1; $i < count($arr); $i++)
{
    for($j = 1; $j < count($arr[$i]); $j++)
    {
        if($arr[$i][$j] > $maxvalue)
        {
            $maxvalue = $arr[$i][$j];
            $indexI = $i;
            $indexJ = $j;
        }
    }
}
 
echo "Максимальное значение: ".$maxvalue." в ячейке с индексами [".$indexI."][".$indexJ."]";
?>