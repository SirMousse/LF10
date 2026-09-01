<?php

declare(strict_types=1);
/*
Was ist eine Funktion?

Eine Funktion ist ein wiederverwendbarer Codeblock.
Wir können einen Stück Code einen Namen geben und können diesen Code danach immer wieder aufrufen

Grundaufbau:

function funktionsName() {
    CODE
}

function    -> sagt PHP: "Hier wird eine Funktion erstellt!"

funktionsName -> Name der Funktion (vergeben wir selber)

()          -> Hier kommen Parameter rein

{}          -> Hier steht der Code der Funktion

Parameter = ein einfacher Wert, den wir an etwas übergeben, damit es damit arbeiten kann
*/

// 1. Funktion ohne Parameter
// -> kann also einfach eine bestimmte Aktion ausführen

function begruessung(){
    echo "Willkommen im Kundenportal!\n";
}

begruessung();      // -> starten wir die Funktion

// 2. Funktion mit Parametern (Input)
// -> Ein Parameter ist ein Platzhalter udn PHP weiß: "Ich bekomme später einen Wert, mit dem ich arbeiten soll!"

function begruessungHeld($name){
    echo "Willkommen $name, im Königreich der Anwendungsentwickler!\n";
}

begruessungHeld("Gandalf");
begruessungHeld("Günther");
begruessungHeld("Gudrun");

/* Parameter im Vergleich zu Argument

function begruessungHeld($name)
                            ↑
                        Parameter

begruessungHeld("Gandalf");
                    ↑
                Argument

Parameter = Platzhalter

Argument = der tatsächliche Wert
*/

// Mehrer Parameter nutzen

function zeigeBoesewicht($name, $klasse, $level){
    echo "Bösewicht: $name | Klasse: $klasse | Level: $level \n";
}

zeigeBoesewicht("Karl", "FISI der Dunkelheit", 27);
zeigeBoesewicht("Karin", "HR Manager", 2);


// 3. Funktionen mit Rückgabewert -> return

function berechneSchaden($staerke, $waffenBonus){
    return $staerke + $waffenBonus;
}

$schaden = berechneSchaden(15, 10);

echo "Schaden: $schaden\n";

// echo     = zeigt etwas an

// return   = gibt ein Ergebnis zurück


// 4. Boolean Funktion
// -> kann true oder false zurückgeben und ist wichtig für Prüfungen

function darfDungeonBetreten(int $level):bool {
    return $level >= 10;
}

if (darfDungeonBetreten(9.9)){
    echo "Du darfst das Dungeon betreten!\n";
} else {
    echo "Dein Level ist zu niedrig!\n";
}
?>