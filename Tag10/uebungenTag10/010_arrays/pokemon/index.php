<?php

// ======================================================
// PHP Aufgaben - Arrays
// Pokémon Edition
// Dauer: ca. 2 Stunden für Anfänger
// Schwierigkeit: leicht -> schwierig
// Themen: Arrays erstellen, auslesen, ändern, erweitern,
// zählen, foreach, assoziative Arrays, Kombinationen
//
// WICHTIG:
// Schreibe deinen PHP-Code direkt unter die jeweilige Aufgabe.
// Es sind absichtlich KEINE Lösungen enthalten.
// ======================================================


// ------------------------------------------------------
// LEVEL 1 - Erste Pokémon-Arrays
// Schwierigkeit: sehr leicht
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 1:
// Erstelle ein Array mit dem Namen $pokemon.
// Speichere darin:
// "Pikachu", "Bisasam", "Glumanda"
// Gib das komplette Array mit print_r() aus.


// Aufgabe 2:
// Erstelle ein Array $typen mit diesen Werten:
// "Elektro", "Pflanze", "Feuer", "Wasser"
// Gib das komplette Array aus.


// Aufgabe 3:
// Erstelle ein Array $orte mit:
// "Alabastia", "Vertania City", "Azuria City"
// Gib das komplette Array aus.


// Aufgabe 4:
// Erstelle selbst ein Array $items mit 4 Dingen,
// die ein Pokémon-Trainer brauchen könnte.
// Gib das Array aus.


// ------------------------------------------------------
// LEVEL 2 - Werte gezielt auslesen
// Schwierigkeit: leicht
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 5:
// Erstelle ein Array $pokemon mit:
// "Pikachu", "Evoli", "Schiggy", "Glumanda"
// Gib nur das erste Pokémon aus.


// Aufgabe 6:
// Verwende dieses Array:
// $attacken = ["Donnerschock", "Tackle", "Aquaknarre", "Glut"];
// Gib nur "Aquaknarre" aus.


// Aufgabe 7:
// Erstelle ein Array $arenen mit 5 Arenen.
// Gib nur die zweite und die vierte Arena aus.


// Aufgabe 8:
// Erstelle ein Array $items mit:
// "Pokéball", "Trank", "Beleber", "Superball", "Fluchtseil"
// Gib den ersten und den letzten Wert aus.
// Tipp: Überlege dir zuerst, welchen Index der letzte Wert hat.


// ------------------------------------------------------
// LEVEL 3 - Arrays verändern und erweitern
// Schwierigkeit: leicht bis mittel
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 9:
// Erstelle ein Array $pokemon mit:
// "Pikachu", "Bisasam", "Rattfratz"
// Ändere "Rattfratz" zu "Evoli".
// Gib danach das komplette Array aus.


// Aufgabe 10:
// Erstelle ein Array $aufgaben mit:
// "Pokémon fangen", "Pokémon heilen", "Arena besuchen"
// Ändere "Pokémon heilen" zu "Pokémon trainieren".
// Gib danach das Array aus.


// Aufgabe 11:
// Erstelle ein Array $items mit:
// "Pokéball", "Trank"
// Füge danach "Beleber" und "Superball" hinzu.
// Gib das fertige Array aus.


// Aufgabe 12:
// Erstelle ein Array $attacken mit 3 Attacken.
// Füge eine vierte Attacke hinzu.
// Ändere danach die zweite Attacke.
// Gib das fertige Array aus.


// ------------------------------------------------------
// LEVEL 4 - Zählen und mit foreach arbeiten
// Schwierigkeit: mittel
// Richtzeit: ca. 20 Minuten
// ------------------------------------------------------

// Aufgabe 13:
// Erstelle ein Array $pokemon mit 5 Pokémon.
// Gib mit count() aus, wie viele Pokémon gespeichert sind.


// Aufgabe 14:
// Erstelle ein Array $attacken mit 4 Attacken.
// Gib jede Attacke mit foreach einzeln aus.


// Aufgabe 15:
// Erstelle ein Array $pokemon mit:
// "Pikachu", "Bisasam", "Glumanda", "Schiggy"
// Gib mit foreach zu jedem Pokémon diesen Satz aus:
// "<Name> ist kampfbereit!"


// Aufgabe 16:
// Erstelle ein Array $items mit mindestens 5 Gegenständen.
// Gib zuerst die Anzahl der Items aus.
// Gib danach alle Items mit foreach einzeln aus.


// Aufgabe 17:
// Erstelle ein Array $orte mit 4 Pokémon-Orten.
// Gib mit foreach für jeden Ort aus:
// "Der Trainer erreicht: <Ort>"


// ------------------------------------------------------
// LEVEL 5 - Assoziative Arrays
// Schwierigkeit: mittel
// Richtzeit: ca. 20 Minuten
// ------------------------------------------------------

// Aufgabe 18:
// Erstelle ein assoziatives Array $pokemonInfo mit:
// "name" => "Pikachu"
// "typ" => "Elektro"
// "level" => 12
// Gib das komplette Array aus.


// Aufgabe 19:
// Verwende ein assoziatives Array für ein Pokémon mit den Schlüsseln:
// name, typ, level, lieblingsattacke
// Wähle die Werte selbst.
// Gib danach nur den Namen und die Lieblingsattacke aus.


// Aufgabe 20:
// Erstelle ein assoziatives Array $item mit:
// name, wirkung, anzahl, selten
// Wähle passende Werte selbst.
// "selten" soll true oder false sein.
// Gib nur die Wirkung und die Anzahl aus.


// Aufgabe 21:
// Erstelle ein assoziatives Array $kampf mit:
// gegner, ort, belohnung, gewonnen
// Gib alle Werte einzeln mit verständlichen Sätzen aus.
// Beispiel vom Aufbau her:
// "Gegner: ..."
// "Belohnung: ..."


// ------------------------------------------------------
// LEVEL 6 - Mehrere Techniken kombinieren
// Schwierigkeit: mittel bis schwierig
// Richtzeit: ca. 20 Minuten
// ------------------------------------------------------

// Aufgabe 22:
// Erstelle ein Array mit 5 Pokémon.
// 1. Gib die Anzahl der Pokémon aus.
// 2. Gib alle Pokémon mit foreach aus.
// 3. Ändere das dritte Pokémon.
// 4. Füge ein sechstes Pokémon hinzu.
// 5. Gib das fertige Array aus.


// Aufgabe 23:
// Erstelle ein Array $items mit mindestens 5 Gegenständen.
// Gib zuerst nur das zweite Item aus.
// Ändere danach das vierte Item.
// Füge noch ein weiteres Item hinzu.
// Gib anschließend alle Items mit foreach aus.


// Aufgabe 24:
// Erstelle ein assoziatives Array für ein Pokémon mit:
// name, typ, level, attacke, kampfbereit
// "kampfbereit" soll true oder false sein.
// Gib danach einen kleinen Pokémon-Steckbrief aus.
// Jede Eigenschaft soll in einer eigenen Zeile erscheinen.


// Aufgabe 25:
// Erstelle ein Array $trainerPlan mit 5 Aufgaben.
// Ersetze die dritte Aufgabe durch "Arena herausfordern".
// Füge danach "Pokémon-Center besuchen" hinzu.
// Gib die Anzahl aller Aufgaben aus.
// Gib anschließend alle Aufgaben mit foreach aus.


// ------------------------------------------------------
// BOSSFIGHT - Die große Trainerreise
// Schwierigkeit: schwierig für Anfänger
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 26:
// Du planst eine große Reise als Pokémon-Trainer.
//
// Erstelle ein Array $reisePlan mit mindestens 5 Stationen oder Aufgaben.
// Danach soll dein Programm:
//
// - die Anzahl der Einträge ausgeben
// - alle Einträge einzeln mit foreach ausgeben
// - einen Eintrag im Array verändern
// - einen neuen Eintrag hinzufügen
// - am Ende das komplette Array ausgeben
//
// Versuche diese Aufgabe ohne Hilfe aus den vorherigen Aufgaben zu lösen.


// Aufgabe 27:
// Erstelle ein assoziatives Array $staerkstesPokemon.
// Verwende mindestens diese Eigenschaften:
// name, typ, level, attacke, status
//
// Gib daraus einen kleinen Pokémon-Steckbrief aus.
// Formuliere die Ausgabe selbst als verständliche Sätze.


// ------------------------------------------------------
// FINAL BOSS - Das Pokémon-Team verwalten
// Schwierigkeit: am schwierigsten
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 28:
// Erstelle zwei Arrays:
//
// 1. $pokemon mit mindestens 5 Pokémon
// 2. $attacken mit mindestens 4 Attacken
//
// Dein Programm soll danach:
//
// - ausgeben, wie viele Pokémon gespeichert sind
// - alle Pokémon mit foreach ausgeben
// - ein neues Pokémon hinzufügen
// - ein vorhandenes Pokémon ändern
// - ausgeben, wie viele Attacken gespeichert sind
// - alle Attacken als Sätze ausgeben
//
// Zusatz:
// Erstelle zum Schluss noch ein assoziatives Array $pokemonDesTages
// mit mindestens 4 Eigenschaften.
// Gib daraus einen kleinen Steckbrief aus.
//
// Hier bekommst du keine Hinweise mehr dazu,
// welchen konkreten PHP-Befehl du verwenden musst.


// ======================================================
// GESCHAFFT!
// Wenn du alle Aufgaben lösen konntest, hast du geübt:
// - normale Arrays
// - Indizes
// - Werte verändern
// - Werte hinzufügen
// - count()
// - foreach
// - assoziative Arrays
// - mehrere Array-Techniken kombinieren
// ======================================================

?>
