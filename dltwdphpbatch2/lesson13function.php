<?php

//function

// function functionname(){
// };

//simple function

function myfun(){
    echo "hello my name is myfun". "<br/>";
};

myfun();

function hellocal(){
    $num1 = 100;
    $num2 = 20;
    $result = $num1 + $num2;
    echo $result;
}

//recall

hellocal();

echo "<hr/>";

//parameter function
//-single parameter function 
//-multi parameter function

$name = "kyaw kyaw";

function singlefun($name){
    echo "My name is " .$name;
}
// singlefun("aung aung");
singlefun($name);

echo "<hr/>";


function multifun($name,$age,$address){
    echo "My name is ${name}. my age is ${age} years old. I live in ${address}";
}

multifun("maung maung",30,"yangon");

echo "<hr/>";

function multical($num1,$num2,$num3){
    $result = ($num1+$num2)*$num3;
    echo $result;
}
multical(20,20,10);

echo "<hr/>";

//Default Parameter Function

function deffun($name="Mya Mya"){
    echo "my name is ${name}";
}

deffun();

echo "<hr/>";

function defcal($num1=10,$num2=20,$num3=2){
    $result = ($num1+$num2)/$num3;
    echo $result;
}

defcal(20,30);

echo "<hr/>";

//Return Function

function singlereturn($name){
    $abc = "mya mya";
    return $name; //classic value
}

echo singlereturn("aung aung");

echo "<hr/>";

function multireturn($num1,$num2,$num3){
    $result = $num1 + $num2 + $num3;
    echo $result;
}
multireturn(10,20,30);

echo "<hr/>";

//Dynamic Function Call

function goodnight(){
    echo "Hello good night, have a sweet dream". "<br/>";
}
goodnight();

$greeting = "goodnight";

echo $greeting;

echo "<br/>";

$greeting();

echo "<hr/>";

$val = "baby";

function baby(){
    echo "hay my baby";
}

//$val();

if(function_exists($val)){
    echo "yes, your variable value had used in function";
}else{
    echo "no, your variable value does had in function";
}

?>