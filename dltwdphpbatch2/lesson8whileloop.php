<?php

//while loop

//init

// while(condition){
//     increment / decrement;
//     echo result;
//     increment / decrement;
// }

$val = 0;

while($val < 10){
    echo "This number is ${val}", "<br/>";
    $val++;
}

echo "\$val last value is ". $val;

echo "<hr/>";

$i = 0;
while($i < 10){
    $i++;
    echo "This number is ${i}". "<br/>";
}

echo "\$i last value is ". $i;

echo "<hr/>";

$k = 20;

while($k > 0){
    
    echo "This number is ". $k . "<br/>";
    $k--;
}

echo "\$k last value is ". $k;

echo "<hr/>";

$j = 20;

while($j > 0){
    $j--;
    echo "This number is ". $j . "<br/>";
   
}

echo "\$j last value is ". $j;

echo "<hr/>";

?>