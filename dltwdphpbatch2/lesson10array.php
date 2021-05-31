<?php

//array

//manual array
//associative array
//multi dimational array

//manual array

$name = array("aung aung","maung maung","mya mya","su su");
$color = ["orange","red","blue",150,"black"];

var_dump($name);

echo "<hr/>";

echo count($color);

echo "<hr/>";

echo "<pre>".print_r($name,true)."</pre>";

echo "<hr/>";

$students = array();
$students[0] = "aung aung";
$students[1] = "maung maung";
$students[2] = "su su";

// var_dump($students);

echo $students[1];

echo "<hr/>";

//index key (start 0)

//associative array

$val1 = array("one"=>"this is post one",
             "two"=>"this is post two",
             "three"=>"this is post three",
             "four"=>"this is post four",
);

$val2 = ["name"=>"aung aung",
         "age"=>"26",
         "phone"=>"09123456",
         "address"=>"Mandalay",      
];

        // var_dump($val2);

        echo $val1["three"];

        echo "<br/>";

        echo $val2["name"];

echo "<hr/>";

//multidimational array (index,value) (index,key,value)

$val3 = array(
    array("name"=>"aungaung","age"=>"20"),
    array("name"=>"maungmaung","age"=>"21"),
    array("name"=>"zawzaw","age"=>"22"),
    array("name"=>"susu","age"=>"23"),
    array("name"=>"myamya","age"=>"24"),
);

$val4 = [
    ["name"=>"aungaung","age"=>"20"],
    ["name"=>"maungmaung","age"=>"21"],
    ["name"=>"zawzaw","age"=>"22"],
    ["name"=>"susu","age"=>"23"],
    ["name"=>"myamya","age"=>"24"],
];

var_dump($val3);

echo "<br/>";

echo $val4[2]["name"];

echo "<br/>";

$val5 = array(
    array("red","green","blue","white","black"),
    array("maung maung","aung aung","zaw zaw","kyaw kyaw","mya mya"),
    array("apple","orange","mango","peach","grave"),
);

echo $val5[2][4];

echo "<hr/>";

//foreach looping

// foreach(a,b,c as $b){
//     echo result;
// }

//manual array

$name = array("aung aung","maung maung","mya mya","su su");

foreach($name as $a){
    echo "my name is ${a}". "<br/>";
}

echo "<hr/>";

//associative array

$val2 = ["name"=>"aung aung",
         "age"=>"26",
         "phone"=>"09123456",
         "address"=>"Mandalay",      
];

foreach($val2 as $key=>$b){
    echo "key is ${key} value is ${b}". "<br/>";
}

echo "<hr/>";

//multi dimational array

$val3 = array(
    array("name"=>"aungaung","age"=>"20"),
    array("name"=>"maungmaung","age"=>"21"),
    array("name"=>"zawzaw","age"=>"22"),
    array("name"=>"susu","age"=>"23"),
    array("name"=>"myamya","age"=>"24"),
);

foreach($val3 as $j){
    //var_dump($j);

    echo "name is = ". $j["name"]. " age is = ".$j["age"]."<br/>";
    // foreach($j as $key => $k){
    //     echo "key is ${key} value is ${k}". "<br/>";
    // }
};

?>