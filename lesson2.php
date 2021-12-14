<?php
// $a = 1;
// $b = -3;

// if ($a > 0 && $b > 0) {
//     echo $a - $b;
// } elseif ($a < 0 && $b < 0) {
//     echo $a * $b;
// } elseif (($a < 0 && $b >0) || ($a > 0 && $b < 0)) {
//     echo $a + $b;
// }



// $a = rand(0, 15);
// echo "$a" ."<br>";

// switch ($a) {
//     case 0:
//         echo "1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15";
//         break;
//     case 1:
//         echo "2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15";
//         break;
//     case 2:
//         echo "3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15";
//         break;
//     case 3:
//         echo "4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15";
//         break;
//     case 4:
//         echo "5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15";
//         break;
//     case 5:
//         echo "6, 7, 8, 9, 10, 11, 12, 13, 14, 15";
//         break;
//     case 6:
//         echo "7, 8, 9, 10, 11, 12, 13, 14, 15";
//         break;
//     case 7:
//         echo "8, 9, 10, 11, 12, 13, 14, 15";
//         break;
//     case 8:
//         echo "9, 10, 11, 12, 13, 14, 15";
//         break;
//     case 9:
//         echo "10, 11, 12, 13, 14, 15";
//         break;
//     case 10:
//         echo "11, 12, 13, 14, 15";
//         break;
//     case 11:
//         echo "12, 13, 14, 15";
//         break;
//     case 12:
//         echo "13, 14, 15";
//         break;
//     case 13:
//         echo "14, 15";
//         break;
//     case 14:
//         echo "15";
//         break;
//     case 15:
//         echo "Все числа выведены";
//         break;
// }



function minus ($a,$b) {
    return $a - $b;
}
function plus ($a,$b) {
    return $a + $b;
}
function multiplication ($a,$b) {
    return $a * $b;
}
function division ($a,$b) {
    return $a / $b;
}
function mathOperation ($arg1, $arg2, $operation) {
    switch ($operation) {
        case "minus":
            echo minus($arg1,$arg2);
            break;
        case "plus":
            echo plus($arg1,$arg2);
            break;
        case "multiplication":
            echo multiplication($arg1,$arg2);
            break;
        case "division":
            echo division($arg1,$arg2);
            break;
    }
}
mathOperation(2,4,"multiplication")

?>