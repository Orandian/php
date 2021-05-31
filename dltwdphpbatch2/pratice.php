<?php

$phone = array(
    array("name" => "Mi", "list" => "one"),
    array("name" => "Samsung", "list" => "two"),
    array("name" => "Huawei", "list" => "three"),
    array("name" => "Oppo", "list" => "four")
);
var_dump($phone);
echo "<br/>";

$key = array_keys($phone);
var_dump($key);
echo "<hr/>";

for($i=0; $i < count($phone) ;$i++){
    $newkey = array_keys($phone[$key[$i]]);
    for($j=0; $j < count($newkey) ;$j++){
        echo "this is multi dimational array by forloop = index is ". $newkey[$j]. " value is ". $phone[$i][$newkey[$j]]. "<br/>";
    };
};
echo "<hr/>";

$x = 0;
$key = array_keys($phone);
while($x < count($phone)){
    $y = 0;
    $newkey = array_keys($phone[$key[$x]]);
    while($y < count($newkey)){
        echo "this is multi dimational array by whileloop = index is ". $newkey[$y] . " value is ". $phone[$x][$newkey[$y]]. "<br/>";
        $y++;
    };
    $x++;
};
echo "<hr/>";

$a = 0;
$key = array_keys($phone);
do{
    $b = 0;
    $newkey = array_keys($phone[$key[$a]]);
    do{
    echo "this is multi dimational array by dowhileloop = index is ". $newkey[$b]. " value is ".$phone[$a][$newkey[$b]]. "<br/>";
    $b++;
    }while($b < count($newkey));
    $a++;
}while($a < count($phone));











?>