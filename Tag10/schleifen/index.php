<?php
// for-schleifen -> man weiß, wie oft etwas passieren soll

// for (Start; Bedingung; Veränderung){
//      CODE
// }

for ($i = 1; $i <= 5; $i++){
    echo "Der Hund hat $i mal gebellt.\n";
}

// while-Schleifen -> weiß man nicht, wie oft es passieren soll
// GEFAHR: Endlosschleife

// while (Bedingung){
//      CODE
// }

$futter = 3;

while ($futter > 0) {
    echo "Die katze bekommt Futter!\n";
    $futter--;
}


// do-while -> wird mindestens einmal ausgeführt

// do {
//     CODE
// } while (Bedingung);

$affe = 0;

do {
    echo "Der Affe springt!\n";
    $affe++;
} while ($affe < 3);

// foreach -> wichtigste Schleife in PHP
// ... wird benutzt, wenn man mehrere Werte nacheinander durchgehen möchte

// Wir haben ein Array vorgegebn
$tiere = ["Hund", "Katze", "Hamster", "Kuh", "Löwe"];

// foreach ($array as $wert) {
//      CODE
// }

foreach ($tiere as $steak){
    echo "Das ist ein/e $steak!\n";
}

// foreach = Schleife
// $tiere = array -> die Liste/ Array auf das wir zugreifen
// as = als
// $steak = aktueller Wert aus der Liste (name frei wählbar)


// Verschachtelte Schleifen

for ($hund = 1; $hund <= 3; $hund++){
    for ($spielzeug = 1; $spielzeug <= 2; $spielzeug++){
        echo "Hund $hund spielt mit dem Spielzeug $spielzeug.\n";
    }
}

// Die inner e Schleife läuft komplett durch -> danach springt es in die äußere Schleife zurück
// Die äußere Schleife bestimmt wie oft, die innere Schöleife sagt was genau passiert


// Schleifen und if Anweisungen kombinieren
$tiere = ["Hund", "Katze", "Hamster", "Kuh", "Löwe"];

foreach ($tiere as $tier){
    if ($tier === "Kuh"){
        echo "Gefunden: Kuh!\n";
    } else {
        echo "Das ist nicht die Kuh Elsa, sondern ein/e $tier!\n";
    }
}

// Assoziatives Array -> ist eine Liste, bei der jeder Wert einen Namen und einen Schlüssel hat

$tiere = [
    "Hund" => "bellt",
    "Katze" => "miaut",
    "Kuh" => "muht"
];

foreach ($tiere as $tier => $geraeusch) {
    echo "$tier $geraeusch\n";
}

?>