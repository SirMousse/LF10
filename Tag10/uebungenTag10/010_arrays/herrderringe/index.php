<?php

// ======================================================
// PHP Aufgaben - Arrays
// Herr der Ringe Edition
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
// LEVEL 1 - Erste Mittelerde-Arrays
// Schwierigkeit: sehr leicht
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 1:
// Erstelle ein Array mit dem Namen $gefaehrten.
// Speichere darin:
// "Frodo", "Sam", "Aragorn"
// Gib das komplette Array mit print_r() aus.


// Aufgabe 2:
// Erstelle ein Array $voelker mit diesen Werten:
// "Hobbit", "Mensch", "Elf", "Zwerg"
// Gib das komplette Array aus.


// Aufgabe 3:
// Erstelle ein Array $orte mit:
// "Auenland", "Bruchtal", "Moria"
// Gib das komplette Array aus.


// Aufgabe 4:
// Erstelle selbst ein Array $ausruestung mit 4 Dingen,
// die man auf einer Reise durch Mittelerde brauchen könnte.
// Gib das Array aus.


// ------------------------------------------------------
// LEVEL 2 - Werte gezielt auslesen
// Schwierigkeit: leicht
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 5:
// Erstelle ein Array $gefaehrten mit:
// "Frodo", "Sam", "Legolas", "Gimli"
// Gib nur den ersten Gefährten aus.


// Aufgabe 6:
// Verwende dieses Array:
// $waffen = ["Stich", "Bogen", "Axt", "Schwert"];
// Gib nur "Axt" aus.


// Aufgabe 7:
// Erstelle ein Array $orte mit 5 Orten aus Mittelerde.
// Gib nur den zweiten und den vierten Ort aus.


// Aufgabe 8:
// Erstelle ein Array $gegenstaende mit:
// "Ring", "Lembas", "Seil", "Karte", "Flasche"
// Gib den ersten und den letzten Wert aus.
// Tipp: Überlege dir zuerst, welchen Index der letzte Wert hat.


// ------------------------------------------------------
// LEVEL 3 - Arrays verändern und erweitern
// Schwierigkeit: leicht bis mittel
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 9:
// Erstelle ein Array $gefaehrten mit:
// "Frodo", "Sam", "Boromir"
// Ändere "Boromir" zu "Aragorn".
// Gib danach das komplette Array aus.


// Aufgabe 10:
// Erstelle ein Array $aufgaben mit:
// "Bruchtal erreichen", "Moria durchqueren", "Mordor erreichen"
// Ändere "Moria durchqueren" zu "Den Pass von Caradhras prüfen".
// Gib danach das Array aus.


// Aufgabe 11:
// Erstelle ein Array $vorrat mit:
// "Lembas", "Wasser"
// Füge danach "Seil" und "Karte" hinzu.
// Gib das fertige Array aus.


// Aufgabe 12:
// Erstelle ein Array $gegner mit 3 Gegnern.
// Füge einen vierten Gegner hinzu.
// Ändere danach den zweiten Gegner.
// Gib das fertige Array aus.


// ------------------------------------------------------
// LEVEL 4 - Zählen und mit foreach arbeiten
// Schwierigkeit: mittel
// Richtzeit: ca. 20 Minuten
// ------------------------------------------------------

// Aufgabe 13:
// Erstelle ein Array $gefaehrten mit 5 Namen.
// Gib mit count() aus, wie viele Gefährten gespeichert sind.


// Aufgabe 14:
// Erstelle ein Array $orte mit 4 Orten.
// Gib jeden Ort mit foreach einzeln aus.


// Aufgabe 15:
// Erstelle ein Array $gefaehrten mit:
// "Frodo", "Sam", "Legolas", "Gimli"
// Gib mit foreach zu jedem Gefährten diesen Satz aus:
// "<Name> zieht weiter nach Mordor."


// Aufgabe 16:
// Erstelle ein Array $vorrat mit mindestens 5 Gegenständen.
// Gib zuerst die Anzahl der Gegenstände aus.
// Gib danach alle Gegenstände mit foreach einzeln aus.


// Aufgabe 17:
// Erstelle ein Array $orte mit 4 Orten aus Mittelerde.
// Gib mit foreach für jeden Ort aus:
// "Die Gefährten erreichen: <Ort>"


// ------------------------------------------------------
// LEVEL 5 - Assoziative Arrays
// Schwierigkeit: mittel
// Richtzeit: ca. 20 Minuten
// ------------------------------------------------------

// Aufgabe 18:
// Erstelle ein assoziatives Array $figur mit:
// "name" => "Frodo"
// "volk" => "Hobbit"
// "alter" => 50
// Gib das komplette Array aus.


// Aufgabe 19:
// Verwende ein assoziatives Array für eine Figur mit den Schlüsseln:
// name, volk, heimat, aufgabe
// Wähle die Werte selbst.
// Gib danach nur den Namen und die Aufgabe aus.


// Aufgabe 20:
// Erstelle ein assoziatives Array $gegenstand mit:
// name, besitzer, herkunft, wichtig
// Wähle passende Werte selbst.
// "wichtig" soll true oder false sein.
// Gib nur den Besitzer und die Herkunft aus.


// Aufgabe 21:
// Erstelle ein assoziatives Array $quest mit:
// name, ziel, ort, status
// Gib alle Werte einzeln mit verständlichen Sätzen aus.
// Beispiel vom Aufbau her:
// "Quest: ..."
// "Ziel: ..."


// ------------------------------------------------------
// LEVEL 6 - Mehrere Techniken kombinieren
// Schwierigkeit: mittel bis schwierig
// Richtzeit: ca. 20 Minuten
// ------------------------------------------------------

// Aufgabe 22:
// Erstelle ein Array mit 5 Gefährten.
// 1. Gib die Anzahl der Gefährten aus.
// 2. Gib alle Gefährten mit foreach aus.
// 3. Ändere den dritten Gefährten.
// 4. Füge einen sechsten Gefährten hinzu.
// 5. Gib das fertige Array aus.


// Aufgabe 23:
// Erstelle ein Array $gegenstaende mit mindestens 5 Dingen.
// Gib zuerst nur den zweiten Gegenstand aus.
// Ändere danach den vierten Gegenstand.
// Füge noch einen weiteren Gegenstand hinzu.
// Gib anschließend alle Gegenstände mit foreach aus.


// Aufgabe 24:
// Erstelle ein assoziatives Array für eine Figur mit:
// name, volk, heimat, waffe, bereit
// "bereit" soll true oder false sein.
// Gib danach einen kleinen Figuren-Steckbrief aus.
// Jede Eigenschaft soll in einer eigenen Zeile erscheinen.


// Aufgabe 25:
// Erstelle ein Array $reiseSchritte mit 5 Schritten.
// Ersetze den dritten Schritt durch "Helms Klamm verteidigen".
// Füge danach "Nach Gondor weiterziehen" hinzu.
// Gib die Anzahl aller Schritte aus.
// Gib anschließend alle Schritte mit foreach aus.


// ------------------------------------------------------
// BOSSFIGHT - Die Reise durch Mittelerde
// Schwierigkeit: schwierig für Anfänger
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 26:
// Du planst eine große Reise durch Mittelerde.
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
// Erstelle ein assoziatives Array $heldDerReise.
// Verwende mindestens diese Eigenschaften:
// name, volk, heimat, aufgabe, status
//
// Gib daraus einen kleinen Mittelerde-Steckbrief aus.
// Formuliere die Ausgabe selbst als verständliche Sätze.


// ------------------------------------------------------
// FINAL BOSS - Die Gefährten verwalten
// Schwierigkeit: am schwierigsten
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 28:
// Erstelle zwei Arrays:
//
// 1. $gefaehrten mit mindestens 5 Namen
// 2. $missionen mit mindestens 4 Aufgaben
//
// Dein Programm soll danach:
//
// - ausgeben, wie viele Gefährten gespeichert sind
// - alle Gefährten mit foreach ausgeben
// - einen neuen Gefährten hinzufügen
// - einen vorhandenen Gefährten ändern
// - ausgeben, wie viele Missionen gespeichert sind
// - alle Missionen als Sätze ausgeben
//
// Zusatz:
// Erstelle zum Schluss noch ein assoziatives Array $figurDesTages
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
