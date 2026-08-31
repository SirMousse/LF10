<?php
// 1. for-Schleife
// -> benutzt man dann, wenn man weiß wie oft etwas passieren soll

// for(Start; Bedingung; Veränderung){
//      CODE
// }

for ($i = 1; $i <= 5; $i++){
    echo "Feuerball Nummer $i wurde geworfen!\n";
}

// for-Schleife mit einem Gegner

$leben = 100;

for ($angriff = 1; $angriff <= 4; $angriff++) {
    echo "Angriff Nummer $angriff!\n";

    $leben -= 20;

    echo "Der Drache hat noch $leben Lebenspunkte.\n";
}

#####################################################################

// 2. while-Schleife
// -> man weiß nicht, wie oft etwas passieren soll, JEDOCH soll die Bedingung erfüllt sein
// GEFAHR: Endlosschleife

// while (Bedingung) {
//      CODE
// }

$mana = 30;

while ($mana > 0){
    echo "Der Magier wirkt einen Zauber!\n";

    // Verhinderung der Endlosschleife
    $mana -= 10;
}

####################################################################################################

// 3. do-while Schleife
// -> wird mindestens einmal ausgeführt, egal ob die Bedingung stimmt oder nicht

// do {
//      CODE der läuft zuerst
// } while (Bedingung)

$truheGeschlossen = false;

do {

    echo "Der Barbar tritt gegen die Schatzkiste!\n";

} while ($truheGeschlossen);

###################################################################################################

// 4. foreach-Schleife
// -> WICHTIGSTE Schleife in PHP
// -> wird benutzt, wenn man mehrere Werte (Arrays) nacheinander durchgehene möchte

// foreach ($array as $wert) {
//      CODE
// }

// Vorgegebenes Array
$inventar = ["Schwert", "Heiltrank", "Mana-Trank", "Verfluchter Ring", "Käsebrot"];

foreach ($inventar as $gegenstand) {

    echo "Im Inventar befindet sich: $gegenstand\n";

}

// foreach = Schleife
// $inventar = die Liste/Array auf das wir zugreifen
// as = als
// $gegenstand = aktuelle Wert aus der Liste der kurz Zwischengespeichert wird (Name frei wählbar)

foreach (array_reverse($inventar) as $gegenstand){

    echo "Im Inventar befindet sich: $gegenstand\n";

}

// array_reverse -> dreht die Array Liste um (letzter Wert wird erster Wert etc.)

########################################################################################################

// 5. Schleifen mit if kombinieren
// -> wir können innerhalb einer Schleife Bedingungen benutzen

$gegner = ["Goblin", "Drache", "Skelett", "Ork", "Schleim"];

foreach ($gegner as $monster){

    // Vergleich
    if ($monster === "Drache"){
        echo "DRACHE GEFUNDEN\n";
    } elseif ($monster === "Goblin"){
        echo "Nur ein Goblin. Vorsicht er klaut gerade dein Gold!!!\n";
    } else {
        echo "Ein $monster gefunden im Dungeon!\n";
    }
}

########################################################################################################

// 6. Verschachtelten Schleifen
// -> man benutzt verschachtelte Schleifen, wenn man Kombinationen braucht

// Äußere Schliefe
for ($held = 1; $held <= 3; $held++){   // zählt nur die Helden

    // Innere Schleife
    for ($waffe = 1; $waffe <= 4; $waffe++){    // zählt Waffen

        echo "Held $held testet Waffe $waffe!\n";
    }

}


$helden = ["Magier", "Krieger", "Waldläufer"];

$monster = ["Goblin", "Ork", "Basilisk"];

// Äußere Schleife
foreach($helden as $held){
    //Innere Schleife
    foreach($monster as $gegner){
        echo "$held kämpft gegen $gegner!\n";
    }
}
?>