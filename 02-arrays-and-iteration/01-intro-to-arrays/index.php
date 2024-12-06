<?php


$names = array(
    array('Byul', "Kii", "Ka Long"),
    "Lesley",
    "Kam Yu",
    "Caitlyn",
    "Jeffrey",
    "Dennis",
    "June"
);

$moreNames = array('Byul', "Kii", "Ka Long");

//echo $names[0] . " " . $names[2];

//echo $names[1], $names[3];


$age = 13;
$email = "something@a";

// if(strlen($email) < 6) {
//     echo "Hey hey hey! :)";
// } else {
//     echo "thank you.";
// }


// if($age < 13) {
//     echo "Child";
// } elseif ($age >= 13 && $age <= 19) {
//     echo "Teenager";
// } elseif ($age >= 20 && $age <= 59) {
//     echo "Adult";
// } else {
//     echo "Senior";
// }


// $something = "hello";

// switch($something) {
//     case "howdy":
//         echo "Howdy partner";
//         break;
//     case "hello":
//         echo "Hello there!";
//         break;
//     case "Ni hao":
//         echo "Hong Kong";
//         break;
// }

$num1 = 10;
$num2 = 9.1;
$operator = "/";

switch($operator) {
    case 5:
        echo "wow!";
        break;
    case "+":
        echo $num1 + $num2;
        break;
    case "-";
        echo $num1 - $num2;
        break;
    case "*":
        echo $num1 * $num2;
        break;
    case "/":
        if($num2 != 0) {
            echo $num1 / $num2;
        } else {
            echo "Sorry bro, you can't do that...";
        }
        break;
}






