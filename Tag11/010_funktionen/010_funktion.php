<?php

// Funktionsaufbau

function funktionsName() {
    // Code, der ausgeführt werden soll
}

// function = sagt PHP:" Hier möchte ich eine Funktion erstellen!"
// funktionsName = Name wie wir unsere Funktion benennen und ist frei wählbar 
// {} = Hier steht unser Code
// Parameter = ein einfacher Wert, den wir an etwas übergeben, damit es damit arbeiten kann


// 1. Funktion ohne Parameter

function sagHallo() {
    echo "Hallo Dominik!\n";
}

sagHallo(); // -> starten wir unsere Funktion

// Die Funktion macht etwas wenn sie aufgerufen wird


// 2. Funktion mit Parameter(Input)

function begruessung($name) {
    echo "Hallo " . $name . "!\n";
}

begruessung("Lisa");
begruessung("Florian");
begruessung("Andreas");
begruessung("Jens");

// $name = ist ein Platzhalter
// bei Aufruf wird "Lisa" eingesetzt


// 3. Funtkionen mit Rückgabewerten (Output)

function addiere($zahl1, $zahl2) {
    return $zahl1 + $zahl2;             // return -> gibt ein Ergebnis zurück
}

$ergebnis = addiere(5, 15);
echo $ergebnis;

// Warum brauchen wir Funktion:

//1. Wiederverwendbarkeit = schreiben unseren Code einmal und benutzen ihn immer wieder
//      -> Beispiele: Logik prüfen, Preise berechnen, Nachrichten anzeigen 

//2. Sauberen Code = Ohne Funktionen wird unser Code schnell chaotisch

// Code Ohne Funktion
$a = 5;
$b = 6;
$c = $a + $b;
echo $c;

// Code mit Funktion
function add($a, $b) {
    return $a + $b;
}

//3. Einfache ändern
//      -> wenn ich etwas ändern/ verbessern will -> muss ich nur nach meiner Funktion suchen und NICHT den ganzen Code durchsuchen

//4. Besser denken wie ein Entwickler
//      -> Funktion zwingen uns dazu: "Wleche Aufgabe hat unser Code?"
//      -> Extrem wichtig, für größere Projekte und Zeiteinteilung


// PHP macht Type Juggeling (automatische Typumwandlung)
//      -> trotz "Falschen" Datentyp wandelt es die Variable so um, das sie weiter benutzt werden kann
//      Bsp.:   NULL wird zu 0
//              "5" wird von String zu Integer 5 etc.

function testReturnA(): ?string
{
    return NULL;
}
echo testReturnA();         // gibt leeren String aus

var_dump(testReturnA());    // gibt NULL aus


// sagt welceh Version von PHP wir nutzen
echo phpversion();
?>