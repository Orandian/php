<?php
//Variable Scope

$val = 20; //global variable

function varscope(){
    // $name = "aung aung"; //local variable
    // echo $name;

    global $val;

    $result = 100 + $val;
    echo $result;
}

varscope();






?>