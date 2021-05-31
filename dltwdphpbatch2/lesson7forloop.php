<?php

//looping (for loop)

// for(initialization;condition;increment/decrement){
//     echo result;
// }

for($i=0; $i <= 10 ; $i++){

    // if($i == 5){
    // break;
    // }

    if($i == 5){
        continue;
    }
    echo "This number is ". $i . "<br/>";
}

echo "\$i value is = ${i}";

echo "<hr/>";

$a = 1;
$b = 20;

for($a; $a <= $b; $a++){
    echo "This number is ". $a ;
    echo "<br/>";
}

echo "\$a value is = ${a}";

echo "<hr/>";

for($j=10 ; $j >= 0 ; $j--){
    echo "This number is ". $j . "<br/>";
}

echo "\$j value is = ${j}";

echo "<hr/>";


?>