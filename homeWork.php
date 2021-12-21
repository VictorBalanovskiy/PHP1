<?php

// $i = 0;
// while($i <= 100):
//     if ($i % 3 == 0) {
//         echo $i ."<br>";
//     };
//     $i++;
// endwhile;




// $i = 0;
// do {
//     if ($i === 0) {
//         echo $i ." - ноль <br>";
//     } else {
//         if ($i % 2 == 0) {
//         echo $i ." - четное число <br>";
//         } else {
//         echo $i ." - нечетное число <br>";
//         }
//     }
//     $i++;
// } while ($i <= 10);




// $regions = [
//         "Московская область" => ["Подольск", "Коломна", "Серпухов", "Королев"], 
//         "Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Крондштадт"], 
//         "Кемеровская область" => ["Кемерово", "Белово", "Ленинск-Кузнецкий", "Полысаево", "Кисилевск"]
//     ];

// foreach ($regions as $region => $prop) {
//     $cities = implode(", ", $prop);
//     echo "$region: $cities.<br>";
// }




// function trans($prop) {
//     $letters = ['а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'e', 'ж' => 'zh', 'з' => 'z', 'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch', 'ь' => '', 'ы' => 'y', 'ъ' => '', 'э' => 'e', 'ю' => 'yu', 'я' => 'ya'];

//     $prop = strtr(mb_strtolower($prop), $letters);
//     return $prop;
// }

// echo trans("Мама, папа, я!");



// function replace($prop) {
//     $prop = str_replace(" ", "_", $prop);
//     return $prop;
// }

// echo replace("Как дела?");



// function transReplace($prop) {
//     return trans(replace($prop));
// }

// echo transReplace("Как дела, народ?");
// ?>