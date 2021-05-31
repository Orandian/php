<?php

//Arithmetic operators

//+ - * / % ( ++ increment and -- decrement) 7 types

$num1 = "100";
$num2 = "20";

echo "$num1+$num2"; // result going to string 100+20
echo "<br/>";
var_dump("$num1+$num2");
echo "<br/>";
echo $num1-$num2;
echo "<br/>";
echo $num1*$num2;
echo "<br/>";
echo $num1/$num2;
echo "<br/>";
echo $num1%$num2;
echo "<br/>";

//increment and decrement operators ( ++ -- )

$i = 10;
echo $i . "<br/>";

// $i = $i + 1;
// echo $i;

$i += 50;
echo $i . "<br/>";

$i++;

echo $i . "<br/>";
echo $i++ . "<br/>";

$y = 10;
echo $y. "<br/>";

//$y = $y - 1;
//echo $y;

$y -= 5; //assignment operators
echo $y;

//$y--;
//echo $y--;


?>