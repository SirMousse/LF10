<?php
// Rechenoperatoren

$a = 10;
$b = 5;

// Addieren
$sum = $a + $b;
echo $sum."\n";

// Subtrahieren
$dif = $a - $b;
echo $dif."\n";

// Mulitplikation
$pro = $a * $b;
echo $pro."\n";

// Division
$quo = $a / $b;
echo $quo."\n";

// Rest
$rest = $a % $b;
echo $rest."\n";

// Exponent
$expo = $a ** $b;
echo $expo."\n";

// Zuweisungsoperatoren
$start = 10;
$start += 7;    // +7 zu den schon vorhandenen 10 dazu gezählt
echo $start."\n";

// Vergleichsoperatoren
$x = 6;
$y = "6";
$z = 7;

// == -> gleich -> Prüft ob die Werte gleich sind = loser Vergleich
$gleich = ($x == $y);
var_dump($gleich);          // true
$gleich = ($z == $y);
var_dump($gleich);          // false

// === -> wirklich gleich -> Prüft den Wert und den Typ = strenge Vergleich
$identisch = ($x === $y);
var_dump($identisch);       // false
$identisch = ($z === $y);
var_dump($identisch);       // false

// != -> nicht wahr/ nicht richtig
$ungleich = ($z != $y);
var_dump($ungleich);        // true
$ungleich = ($x != $y);
var_dump($ungleich);        // false 

// > = Größer als
$groesser = $z > $y;
var_dump($groesser);        // true

// < = Kleiner als
$kleiner = $x < $z;
var_dump($kleiner);         // true

// >= Größer oder gleich
$gro = $z >= $y;
var_dump($gro);             // true

// <= Kleiner oder gleich
$klei = $z <= $y;
var_dump($klei);            // false

//Logischen Operatoren
$einloggen = true;
$istAdmin = false;

// && = UND
$darfSehen = ($einloggen && $istAdmin);         // true && false = false
var_dump($darfSehen);

// || = ODER
$irgendwoRein = ($einloggen || $istAdmin);      // true || false = true
var_dump($irgendwoRein);

// ! = NICHT
$nichtEingeloggt = !$einloggen;
var_dump($nichtEingeloggt);                     // false


?>