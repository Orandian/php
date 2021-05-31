<?php

//do while loop

// initialization
// do{
//     increment / decrement
//     echo "result";
//     increment / decrement
// }while(condition);

$val = 0;

do{
    echo "this number is ${val}". "<br/>";
    $val++;
}while($val < 20);

echo "\$val last value is ${val}";

echo "<hr/>";

$i = 1;

do{
    $i++;
    echo "this number is ${i}". "<br/>";
}while($i <= 10);

echo "\$i last value is ${i}";

echo "<hr/>";

$k = 10;

do{
    $k--;
    echo "this number is ${k}". "<br/>";
}while($k > 0);

echo "\$k last value is ${k}";

echo "<hr/>";

?>