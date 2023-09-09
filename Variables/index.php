<?php
//egysoros komment
/*
több
soros
komment*/

//Változó: azonosító egy memória címhez, amelyben valamilyen értéket tárolunk
//= érték adó operátór

//Változók definiálása
//számmal nem kezdődhet a változó, aláhúzást, magyar karaktert, kis-nagy betűt tartalmazhat
//deklaráltuk a változót, később adunk hozzá értéket, autómatikusan felveszi a null értéket
 $eletkor;

 //definiáltuk a változót, hozzárendelünk egy értéket
 $eletkor = 19;

//PHP típusok
//Integer - Egész számok
$intSzam1 = 55;
$intSzam2  = -123;

//Float (double) - Lebegő pontos számok
$floatSzam1 = 3.14;
$floatSzam2 = 45.6328;

//String - Karakterláncok.
$szoveg1 = "PHP alapok tanulása"; 
$szoveg2 = "2023-as tanévben";

//Boolean - true|false
$diak = true;
$felnot = false;

//Array - Tömb amely több értéket képes tárolni.
$nevek = ["John", "Sirius","James"];
//Lehetséges a típus keverés
$korok = array(19, 28, 34, '700', true, null); //arry függvényt használunk

//NULL - Az érték hiányát jelzi.
$nincsErtek1;
$nincsErtek2 = NULL; //vagy null kisbetüvel

//Object - Objektum példány egy felhasználó által definiált osztályból.
//Resource - Az erőforrás egy speciális változó, amely egy külső erőforrásra hivatkozik (megnyitott fájlok, adatbáiz-kapcsolat)
//string interpoláció