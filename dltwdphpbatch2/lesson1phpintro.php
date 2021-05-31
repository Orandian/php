<?php

// print out

echo "Hello Myanmar ","I Love Myanmar ","I live in Myanmar <br/>";

echo 'Hello Thailand <br/>';

echo ("Hello Srilanka <br/>");

echo ('Hello Indonesia <br/>');

echo 250;

echo "<hr/>";


print " Mandalay <br/>";

print 'Yangon <br/>';

print ("Bago <br/>");

print ('Mawlamyine <br/>');

print 355;

echo "<hr/>";

var_dump("Hello"); //default function

var_dump(250);

var_dump(true);

var_dump(20.5);

var_dump(null);

echo "<hr/>";

//Escept

echo "He is aung aung. he's my younger brother. <br/>";

echo 'He is maung maung. He\'s my younger brother. I\'ve one elder sister too.<br/>';

print "He's my brother. <br/>";

print 'she\'s my elder sister.';

echo "<hr/>";

//variable

//variable name assignment operator value (Expression) = complete statement

$sayar = "Tin Htut Aung";
$aung = "Aung Ko Ko";

echo $sayar;
echo "<br/>";

echo $aung;
echo "<br/>";

echo "His name is $aung, he is my brother.";
echo "<br/>";
echo "His name is ${aung}, he is my brother.";
echo "<br/>";
echo "His name is {$aung}, he is my brother.";
echo "<br/>";

echo 'His name is $aung, he is my brother.';
echo "<br/>";
echo 'His name is ${aung}, he is my brother.';
echo "<br/>";
echo 'His name is {$aung}, he is my brother.';
echo "<br/>";

echo "<hr/>";
echo "His name is \$aung, he is my brother.";
echo "<br/>";
echo "His name is \${aung}, he is my brother.";
echo "<br/>";
echo "His name is {\$aung}, he is my brother.";
echo "<hr/>";

// $x = print("I am maung maung");
// echo $x;

// $x = echo "I am Hla Hla";

// comments
// this is single comment
# this is single comment

// multi comment
/*
this is multi comment 1
this is multi comment 2
this is multi comment 3
*/

// echo "this is maung maung";

// concatenate operator

$firstname = "Tin Htut";
$lastname = "Aung";
echo $firstname ." ". $lastname . "." ."He is my brother.";
echo "He is my teacher" . "His name is ${firstname} ${lastname}"; 


?>