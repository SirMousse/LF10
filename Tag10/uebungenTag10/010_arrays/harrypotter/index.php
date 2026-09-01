<?php

// ======================================================
// PHP Aufgaben - Arrays
// Harry Potter Edition
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
// LEVEL 1 - Erste Hogwarts-Arrays
// Schwierigkeit: sehr leicht
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 1:
// Erstelle ein Array mit dem Namen $schueler.
// Speichere darin:
// "Harry", "Hermine", "Ron"
// Gib das komplette Array mit print_r() aus.


// Aufgabe 2:
// Erstelle ein Array $haeuser mit diesen Werten:
// "Gryffindor", "Slytherin", "Ravenclaw", "Hufflepuff"
// Gib das komplette Array aus.


// Aufgabe 3:
// Erstelle ein Array $orte mit:
// "Große Halle", "Bibliothek", "Verbotener Wald"
// Gib das komplette Array aus.


// Aufgabe 4:
// Erstelle selbst ein Array $gegenstaende mit 4 Dingen,
// die ein Hogwarts-Schüler gebrauchen könnte.
// Gib das Array aus.


// ------------------------------------------------------
// LEVEL 2 - Werte gezielt auslesen
// Schwierigkeit: leicht
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 5:
// Erstelle ein Array $schueler mit:
// "Harry", "Hermine", "Ron", "Neville"
// Gib nur den ersten Schüler aus.


// Aufgabe 6:
// Verwende dieses Array:
// $zaubersprueche = ["Lumos", "Alohomora", "Expelliarmus", "Accio"];
// Gib nur "Expelliarmus" aus.


// Aufgabe 7:
// Erstelle ein Array $unterricht mit 5 Schulfächern.
// Gib nur das zweite und das vierte Fach aus.


// Aufgabe 8:
// Erstelle ein Array $zutaten mit:
// "Alraune", "Mondstein", "Drachenschuppe", "Feder", "Kräuter"
// Gib den ersten und den letzten Wert aus.
// Tipp: Überlege dir zuerst, welchen Index der letzte Wert hat.


// ------------------------------------------------------
// LEVEL 3 - Arrays verändern und erweitern
// Schwierigkeit: leicht bis mittel
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 9:
// Erstelle ein Array $schueler mit:
// "Harry", "Hermine", "Draco"
// Ändere "Draco" zu "Ron".
// Gib danach das komplette Array aus.


// Aufgabe 10:
// Erstelle ein Array $aufgaben mit:
// "Zauberspruch üben", "Trank brauen", "Hausaufgaben machen"
// Ändere "Trank brauen" zu "Verwandlung üben".
// Gib danach das Array aus.


// Aufgabe 11:
// Erstelle ein Array $schulsachen mit:
// "Zauberstab", "Pergament"
// Füge danach "Feder" und "Buch" hinzu.
// Gib das fertige Array aus.


// Aufgabe 12:
// Erstelle ein Array $zaubersprueche mit 3 Sprüchen.
// Füge einen vierten Zauberspruch hinzu.
// Ändere danach den zweiten Spruch.
// Gib das fertige Array aus.


// ------------------------------------------------------
// LEVEL 4 - Zählen und mit foreach arbeiten
// Schwierigkeit: mittel
// Richtzeit: ca. 20 Minuten
// ------------------------------------------------------

// Aufgabe 13:
// Erstelle ein Array $schueler mit 5 Namen.
// Gib mit count() aus, wie viele Schüler gespeichert sind.


// Aufgabe 14:
// Erstelle ein Array $zaubersprueche mit 4 Sprüchen.
// Gib jeden Zauberspruch mit foreach einzeln aus.


// Aufgabe 15:
// Erstelle ein Array $schueler mit:
// "Harry", "Hermine", "Ron", "Neville"
// Gib mit foreach zu jedem Schüler diesen Satz aus:
// "<Name> geht zum Unterricht."


// Aufgabe 16:
// Erstelle ein Array $zutaten mit mindestens 5 Zutaten.
// Gib zuerst die Anzahl der Zutaten aus.
// Gib danach alle Zutaten mit foreach einzeln aus.


// Aufgabe 17:
// Erstelle ein Array $orte mit 4 Hogwarts-Orten.
// Gib mit foreach für jeden Ort aus:
// "Du betrittst: <Ort>"


// ------------------------------------------------------
// LEVEL 5 - Assoziative Arrays
// Schwierigkeit: mittel
// Richtzeit: ca. 20 Minuten
// ------------------------------------------------------

// Aufgabe 18:
// Erstelle ein assoziatives Array $schuelerInfo mit:
// "name" => "Harry"
// "haus" => "Gryffindor"
// "jahrgang" => 1
// Gib das komplette Array aus.


// Aufgabe 19:
// Verwende ein assoziatives Array für einen Schüler mit den Schlüsseln:
// name, haus, jahrgang, lieblingsfach
// Wähle die Werte selbst.
// Gib danach nur den Namen und das Lieblingsfach aus.


// Aufgabe 20:
// Erstelle ein assoziatives Array $zauberstab mit:
// holz, kern, laenge, aktiv
// Wähle passende Werte selbst.
// "aktiv" soll true oder false sein.
// Gib nur das Holz und den Kern aus.


// Aufgabe 21:
// Erstelle ein assoziatives Array $pruefung mit:
// name, fach, punktzahl, bestanden
// Gib alle Werte einzeln mit verständlichen Sätzen aus.
// Beispiel vom Aufbau her:
// "Prüfung: ..."
// "Punktzahl: ..."


// ------------------------------------------------------
// LEVEL 6 - Mehrere Techniken kombinieren
// Schwierigkeit: mittel bis schwierig
// Richtzeit: ca. 20 Minuten
// ------------------------------------------------------

// Aufgabe 22:
// Erstelle ein Array mit 5 Schülernamen.
// 1. Gib die Anzahl der Schüler aus.
// 2. Gib alle Schüler mit foreach aus.
// 3. Ändere den dritten Schüler.
// 4. Füge einen sechsten Schüler hinzu.
// 5. Gib das fertige Array aus.


// Aufgabe 23:
// Erstelle ein Array $zaubersprueche mit mindestens 5 Sprüchen.
// Gib zuerst nur den zweiten Spruch aus.
// Ändere danach den vierten Spruch.
// Füge noch einen weiteren Spruch hinzu.
// Gib anschließend alle Zaubersprüche mit foreach aus.


// Aufgabe 24:
// Erstelle ein assoziatives Array für einen Schüler mit:
// name, haus, jahrgang, zauberstab, bereit
// "bereit" soll true oder false sein.
// Gib danach einen kleinen Schüler-Steckbrief aus.
// Jede Eigenschaft soll in einer eigenen Zeile erscheinen.


// Aufgabe 25:
// Erstelle ein Array $schultag mit 5 Aufgaben.
// Ersetze die dritte Aufgabe durch "Quidditch-Training".
// Füge danach "Abendessen in der Großen Halle" hinzu.
// Gib die Anzahl aller Aufgaben aus.
// Gib anschließend alle Aufgaben mit foreach aus.


// ------------------------------------------------------
// BOSSFIGHT - Der große Hogwarts-Tag
// Schwierigkeit: schwierig für Anfänger
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 26:
// Du planst einen kompletten Tag in Hogwarts.
//
// Erstelle ein Array $tagesPlan mit mindestens 5 Stationen oder Aufgaben.
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
// Erstelle ein assoziatives Array $schuelerDesTages.
// Verwende mindestens diese Eigenschaften:
// name, haus, jahrgang, staerke, status
//
// Gib daraus einen kleinen Hogwarts-Steckbrief aus.
// Formuliere die Ausgabe selbst als verständliche Sätze.


// ------------------------------------------------------
// FINAL BOSS - Hogwarts verwalten
// Schwierigkeit: am schwierigsten
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 28:
// Erstelle zwei Arrays:
//
// 1. $schueler mit mindestens 5 Namen
// 2. $zaubersprueche mit mindestens 4 Sprüchen
//
// Dein Programm soll danach:
//
// - ausgeben, wie viele Schüler gespeichert sind
// - alle Schüler mit foreach ausgeben
// - einen neuen Schüler hinzufügen
// - einen vorhandenen Schülernamen ändern
// - ausgeben, wie viele Zaubersprüche gespeichert sind
// - alle Zaubersprüche als Sätze ausgeben
//
// Zusatz:
// Erstelle zum Schluss noch ein assoziatives Array $hogwartsProfil
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
