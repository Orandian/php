<?php

//if statement

$a = "100";
$b = "20";

if($a > $b){
    echo "condition is true";
    echo "<hr/>";
    echo "I am OK";
}else{
    echo "condition is false";
    echo "<hr/>";
    echo "I'm not OK";
}

echo "<br/>";

$x = 30;
$y = 50;

//if statement (short hand)

if($x == $y)
    echo "it's equal value";
else
    echo "it's not equal value";

    echo "<hr/>";

$val = "red";
$bal = $val;
$favcolor = "red";

// if($bal == "red"){
//     echo "Yes you correct, my fav color is red";
// }else{
//     echo "No you were wrong";
// }

// if($bal == $favcolor){
//     echo "Yes you correct, my fav color is ${favcolor}";
// }else{
//     echo "No you were wrong, I don't like ${bal}";
// }

//elseif


if($bal == $favcolor){
    echo "Yes my fav color is ${favcolor}";
}elseif($val == "green"){
    echo "No you were wrong, but i like green a bit";
}elseif($val == "black"){
    echo "No you were wrong, this time is totally wrong, I hate black";
}else{
    echo "No you were wrong, I don't like ${val}";
}

echo "<hr/>";

//logical operator ( 3 types)
//AND = &&
//OR = ||
//NOT = !

$username = "maungmaung";
$password = "123456";

// if($username == "aungaung" && $password == "123456"){
//     echo "Successful login";
// }else{
//     echo "User name and password do not match, try again";
// }

if($username == "aungaung" || $password == "123456"){
    echo "Successful login";
}else{
    echo "User name and password do not match, try again";
}

echo "<hr/>";

$num1 = 40;
$num2 = 20;
$num3 = 0;

// if($num1 > $num2 && $num1 > $num3){
//     echo "it is true";
// }else{
//     echo "it is false";
// }

if($num1 < $num2 || $num1 > $num3){
    echo "it is true";
}else{
    echo "it is false";
}

echo "<hr/>";

if(!($num1 < $num2)){
    echo "it is true";
}else{
    echo "it is false";
}

?>