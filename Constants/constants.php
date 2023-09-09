<? 
// //Variables
// $szam = 24;
// echo $szam . PHP_EOL;

// $szam = "nyolc"; //Változhat a benne eltárolt érték és az érték típusa is.
// echo $szam . PHP_EOL;

//Constants-ok állandóak
//Constants-nál a konvenció az, hogy negy betűvel írjuk és nem használunk $ jelet.
//Globális függvény
define("KERESZT_NEV", "John");
define("NEME", "férfi");
define("NEMZETISÉG", "Angol");

echo KERESZT_NEV . PHP_EOL;
echo NEME . PHP_EOL;
echo NEMZETISÉG;

//kulcsszó
const SZULETESI_ORSZAG = "HU";
const SZULETESI_VAROS = "Orosháza";
const MAGYAR_ALLAMPOLGAR = true;
const HAZI_ALLAT = 2;


//https://www.tutorialspoint.com/compare-define-vs-const-in-php
/*Az alapvető különbség a kettő között az, hogy a const a fordítási időben,
míg a define() futási időben határozza meg az állandókat.

A const használatakor a konstans neveknek a kódban rögzített értékkel kell rendelkezniük.
Nem lehet változókkal vagy más futási időben számított értékekkel inicializálni.

*/