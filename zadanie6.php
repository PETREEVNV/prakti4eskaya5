<?php
echo '<table border=1 cellspacing=0>';
echo '<tr><td>x</td><td>y</td></tr>';
for ($i = -pi(); $i <= pi(); $i += pi() / 4)
{
echo('<tr><td>' . sin(2*$i) . '</td>');
echo('<td>' . cos(2*$i) . '</td></tr>');
}
echo '</table>';
?>