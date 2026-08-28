<?php
// Rechenoperatoren
$a = 10;
$b = 5;

// Addieren (+)
$sum = $a + $b;     // 10 + 5
echo $sum."\n";     // = 15

// Subtraktion (-)
$dif = $a - $b;     // 10 - 5
echo $dif."\n";     // 5

// Multiplikation (*)
$pro = $a * $b;     // 10 * 5
echo $pro."\n";     // 50

// Division (/)
$quo = $a / $b;     // 10 / 5
echo $quo."\n";     // 2

// Rest/ Modulo (%)
$rest = $a % $b;    // 10 / 5
echo $rest."\n";    // 0 

// Exponent (**)
$expo = $a ** $b;   // 10 hoch 5 (10 * 10 * 10 * 10 * 10)
echo $expo."\n";    // 100000

###########################################################################################

// Zuweisungsoperatoren

/*
$name = "Mousse";
$name   -> Variable
=       -> Zuweisungsoperator
"Mousse"-> zugewiesene Wert
*/

/*
Kombinierte Zuweisungsopertoren
= damit kann man eine Operation durchführen und das Ergebnis direkt wieder derselben Variable zuweisen.
*/

// Additionszuweisung (+=)
$start = 10;
$start += 5;
echo $start."\n";

//Subtraktionszuweisung (-=)
$leben = 100;
$leben -= 30;   // Schaden genommen von zu trockener Theorie
echo $leben."\n";

// Selbe für Multiplikationszuweisung (*=) und Divisionszuweisung (/=)

// Modulozuweisung
$buchseiten = 250;
$buchseiten %= 27;
echo $buchseiten."\n";

// Potenzzuweisung (**=)
$zahl = 2;
$zahl **= 3;
echo $zahl."\n";

// Verkettungszuweisungsoperator (.=)
$text = "Willkommen in der schönen Welt von PHP!";
echo $text."\n";
$text .= " Hier ein Taschentuch!";
echo $text."\n";

####################################################################################

// Vergleichsoperatoren
$x = 6;
$y = "6";
$z = 7;

// var_dump() = Debugging Funktion 

// Gleichheitsoperator (==) / loser Vergleich (prüft nur ob die Werte gleich sind)
$gleich = ($x == $y);
var_dump($gleich);      // true
$gleich = ($z == $y);
var_dump($gleich);      // false

// Identitätsoperator (===) / strenger Vergleich ( prüft Wert UND Datentyp)
$identisch = ($x === $y);
var_dump($identisch);       // false
$identisch = ($z === $y);
var_dump($identisch);       // false

// Ungleichsoperator (!=) / nicht wahr oder nicht richtig
$ungleich = ($x != $y);
var_dump($ungleich);        // false
$ungleich = ($z != $y);
var_dump($ungleich);        // true

// Nichtidentitätsoperator (!==) / strenge Ungleichheit
$ungleich = ($x !== $y);
var_dump($ungleich);        // true

// < -> kleiner als
$kleiner = $y < $z;
var_dump($kleiner);

// > -> größer als 
$groesser = $y > $z;
var_dump($groesser);

// <= -> kleiner oder gleich
$small = $y <= $z;
var_dump($small);

// >= -> größer oder gleich
$big = $y >= $z;
var_dump($big);

#######################################################################

// Logische Operatoren
$eingeloggt = true;
$istAdmin = false;

// Logische UND (&&)
$darfSehen = ($eingeloggt && $istAdmin);
var_dump($darfSehen);                       // true && false = false -> ALLE Aussagen müssen gleich sein!

// Logische ODER (||)
$irgendwoRein = ($eingeloggt || $istAdmin);
var_dump($irgendwoRein);                    // true || false = true -> Eine Aussage muss stimmen

// Logische NICHT (!)
$nichtEingeloggt = !$eingeloggt;
var_dump($nichtEingeloggt);                 // false

$nichtEingeloggt = (!$eingeloggt || !$istAdmin);
var_dump($nichtEingeloggt);                 // true
?>