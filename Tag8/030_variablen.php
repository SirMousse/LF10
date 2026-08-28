<?php

// Strings
$name = "Mousse";
echo $name;

/* Nicht erlaubte Variablennamen 
$1name = "Mousse";  -> darf nicht mit einer Zahl beginnen
$mein-name= "Vic";  -> Bindestriche sind verboten
$mein name= "Vic";  -> Leerzeichen sind verboten
- Reservierte Wörter bzw. Schlüsselwörter dürfen nicht benutzt werden (Bsp.: if, else, while, for etc.)
*/

echo "\n";

$vorname = "Alvi";
echo "Hallo " . $vorname . "\n";

// String Verkettung
$spiel = "Zelda";
$konsole = "Switch";
echo "Heute nach der Arbeit, spiel ich " . $spiel . " auf meiner " . $konsole . ".\n";

$name = "Mewton";   // String (Text)
$alter = 2;         // Integer (Ganzzahl)
$preis = 19.99;     // Float (Kommazahl)

echo $name . " ist ein Kitten, das " . $alter . " Monate alt ist und Katzenfutter im Wert von " . $preis . " mag!\n";


// Integer (Ganzzahlen)
$wochentage = 7;

echo "Von " . $wochentage . " Tagen, habt ihr 5 Tage fast geschafft!\n";

// Float (Kommazahlen)
$prozent = 0.25;

echo $prozent . " des heutigen Tages habt ihr schon geschafft!\n";

// Boolean ( Wahrheitswerte -> Wahr/ Falsch)
$istEingeloggt = true;      // wahr
$hatFeierabend = false;     // falsch

echo $istEingeloggt;
echo "\n";
echo $hatFeierabend;    
?>