<?php

// switch statement

// switch(condition){
//     case 1:
//         statement;
//         break;
//     case 2:
//         statement;
//         break;
//     case 3:
//         statement;
//         break;
//     default:
//         statement;
// }

$val = "red";
$favcolor = "blue";

// switch($val){
//     case $favcolor:
//         echo "Yes, my fav color is ${val}";
//         break;
//     default:
//         echo "You were wrong, I don't like ${val}";    
// }

switch($val){
    case $favcolor:
        echo "Yes, my fav color is ${favcolor}";
        break;
        case "green":
            echo "no you were wrong, but i like ${val} a bit";
        break;
        case "black":
            echo "You totally wrong, I hate black";
    default:
        echo "You were wrong, I don't like ${val}";    
}

echo "<hr/>";

$val = "th";

switch($val){
    case "mm":
        echo "Your location is Myanmar";
    break;
    case "th":
        echo "Your location is Thailand";
    break;
    case "indo":
        echo "Your location is Indonesia";
    break;
    case "slk":
        echo "Your location is Srilanka";
    break;
    default:
    echo "Sorry we don't have service in here";
}







?>