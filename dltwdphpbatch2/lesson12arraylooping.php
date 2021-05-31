<?php

//manual array 

$name = array("aung aung","maung maung","mya mya","su su");

var_dump($name);

echo "<br/>";

$key = array_keys($name);
//var_dump($key);

echo "<br/>";
//echo $name[2];

for($i=0 ; $i < count($name) ; $i++ ){
    //echo $i . "<br/>";
    echo "this is manual array by forloop = index is ". $key[$i]. " value is ".$name[$i]. "<br/>";
}

echo "<hr/>";

$x = 0;
$key = array_keys($name);

while($x < count($name)){
    echo "this is manual array by whileloop = index is ". $key[$x]. " value is ".$name[$x]. "<br/>";
    $x++;
}

echo "<hr/>";

$y = 0;
$key = array_keys($name);

do{
    echo "this is manual array by dowhileloop = index is ". $key[$y]. " value is ".$name[$y]. "<br/>";
    $y++;
}while($y < count($name));

echo "<hr/>";

$val1 = array("one"=>"this is post one",
             "two"=>"this is post two",
             "three"=>"this is post three",
             "four"=>"this is post four",
);

var_dump($val1);
echo "<br/>";

$key = array_keys($val1);
var_dump($key);
echo "<br/>";

for($i=0; $i < count($val1) ; $i++){
    echo "this is associated array by forloop = key is ".$key[$i]. " value is ".$val1[$key[$i]]. "<br/>";
};

echo "<hr/>";

$x = 0;
$key = array_keys($val1);

while($x < count($val1)){
    echo "this is associated array by whileloop = key is ".$key[$x]. " value is ".$val1[$key[$x]]. "<br/>";
    $x++;
};

echo "<hr/>";

$y = 0;
$key = array_keys($val1);

do{
    echo "this is associated array by dowhileloop = key is ".$key[$y]. " value is ".$val1[$key[$y]]. "<br/>";
    $y++;
}while($y < count($val1));

echo "<hr/>";

$val3 = array(
    array("name"=>"aungaung","age"=>"20"),
    array("name"=>"maungmaung","age"=>"21"),
    array("name"=>"zawzaw","age"=>"22"),
    array("name"=>"susu","age"=>"23"),
    array("name"=>"myamya","age"=>"24"),
);

var_dump($val3);

echo "<br/>";

$key = array_keys($val3);

// var_dump($key);

for($i=0 ; $i < count($val3) ; $i++){
    $newkey = array_keys($val3[$key[$i]]);

    for($j=0 ; $j < count($newkey); $j++){
    echo "this is multi dimational array by forloop = key is ". $newkey[$j]. "value is ". $val3[$i][$newkey[$j]]. "<br/>";
    };
};

echo "<hr/>";

$key = array_keys($val3);
$x = 0;

while($x < count($val3)){
    $newkey = array_keys($val3[$key[$x]]);
    $y = 0;
    while($y < count($newkey)){
        echo "this is multi dimational array by whileloop = key is ". $newkey[$y]. "value is ". $val3[$x][$newkey[$y]]. "<br/>";
        $y++;
    };
    $x++;
};

echo "<hr/>";

$key = array_keys($val3);
$z = 0;

do{
    $newkey = array_keys($val3[$key[$z]]);
    $g = 0;
    do{
        echo "this is multi dimational array by dowhileloop = key is ". $newkey[$g]. "value is ". $val3[$z][$newkey[$g]]. "<br/>";
        $g++;
    }while($g < count($newkey));
    $z++;
}while($z < count($val3));



?>