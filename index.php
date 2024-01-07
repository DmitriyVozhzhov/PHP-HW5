<?php

declare(strict_types=1);

//1. площа кола
//function areaOfACircle(int $r)
//{
//    $p = pi();
//    $S = $p * ($r ** 2);
//    echo "$S" . PHP_EOL;
//}
//areaOfACircle(5);

// площа кола, варіант 2 => стрілочка ф-ція
//$p = pi();
//$areaOfACircle3 = fn ($r, $p) =>  $p * ($r ** 2);
// echo $areaOfACircle3(5, $p) . PHP_EOL;
//


// 2.піднесення до степеня
//function multiplication(int|float $a, int|float $b):int|float
//{
//    return $result = $a ** $b;
//}
//
//echo multiplication(5.2,3);

// 2.піднесення до степеня => стрілочка ф-ція
//$multiplication2= fn (int|float $a, int|float $b):int|float => $result = $a ** $b;
//
//echo $multiplication2(5,3) . PHP_EOL;



//3.функція змінює передане число

//$number = 12;
//function division( int|float &$number, int $div):void
//{
//     $number = $number / $div;
//}
//
//division($number, 2);
//echo  $number . PHP_EOL;


//3.функція повертає нове число
//$number = 10;
//function division2( int|float $number, int $div ):int|float
//{
//    return $newNumber = $number / $div;
//}
//
//echo division2($number, 5) . PHP_EOL;
