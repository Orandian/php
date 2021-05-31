<?php

//statement function (default function)

$val1 = "Aung Aung";

// var_dump($val1);

if(is_string($val1)){
    echo "your variable is string". "<br/>";
}else{
    echo "your variable is not string" . "<br/>";
}

$val2 = 150;

//var_dump($val2);

if(is_numeric($val2)){
    echo "your variable is numeric". "<br/>";
}else{
    echo "your variable is not numeric". "<br/>";
}

$val3 = 20.5;

// var_dump($val2);

if(is_float($val3)){
    echo "your variable is float". "<br/>";
}else{
    echo "your variable is not float". "<br/>";
};

$val4 = false;

// var_dump($val4);

if(is_bool($val4)){
    echo "your variable is bool". "<br/>";
}else{
    echo "your variable is not bool". "<br/>";
};

$val5 = ["aung aung","maung maung"];

// var_dump($val5);

if(is_array($val5)){
    echo "your variable is array". "<br/>";
}else{
    echo "your variable is not array". "<br/>";
};

$val6 = [];

// var_dump($val6);

if(empty($val6)){
    echo "your variable is empty". "<br/>";
}else{
    echo "your variable is not empty". "<br/>";
};

$val7 = 250;

// var_dump($val7);

if(is_int($val7)){
    echo "your variable is integer". "<br/>";
}else{
    echo "your variable is not integer". "<br/>";
};

$val8 = NULL;

// var_dump($val8);

if(is_null($val8)){
    echo "your variable is null". "<br/>";
}else{
    echo "your variable is not null". "<br/>";
};


?>