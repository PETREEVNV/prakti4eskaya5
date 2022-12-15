<?php
function numbers(int $x) { // 2
     if ($x == 0) { // 2n 1n 0y
                echo $x; // 0
return true; // функция на этом завершается положительно
 }
$y = numbers($x - 1); // 1 0
   echo ', ' . $x; // , 2, 1 - наоборот
   return $y; // вернуться к вызову функции |
}
numbers(15);
?>