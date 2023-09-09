<?php
$szam1 = 20;
$szam2 = 10.4;
$szoveg = "Proba szöveg";
$nevek = ["John", "Sirius","James"];
$korok =  [19,28,34, '200'];


//Összefüzéshez . karaktert használunk
//Sortöréshez: "\n"
//Globális PHP konstans ami tartalmazza a "\n"
// echo $szam1 . PHP_EOL;
// echo $szam2 . PHP_EOL; 
// echo $szoveg;

//Globális függvény
// var_dump($nevek);
// var_dump($korok);

//Globális függvény
//print_r($nevek);

//print $szam1;

$number = 1624;
$city ="New York";
//https://www.w3schools.com/php/func_string_printf.asp
//placeholder karakterek
printf(" %s -ot,  Amerika fővárosát %d -ben alapították ", $city,$number);
