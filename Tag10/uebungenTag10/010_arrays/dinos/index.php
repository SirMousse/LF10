<?php

// ======================================================
// PHP Aufgaben - Arrays
// Dino Edition
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
// LEVEL 1 - Erste Dino-Arrays
// Schwierigkeit: sehr leicht
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 1:
// Erstelle ein Array mit dem Namen $dinos.
// Speichere darin:
// "T-Rex", "Triceratops", "Stegosaurus"
// Gib das komplette Array mit print_r() aus.


// Aufgabe 2:
// Erstelle ein Array $arten mit diesen Werten:
// "Fleischfresser", "Pflanzenfresser", "Flugsaurier", "Meeresreptil"
// Gib das komplette Array aus.


// Aufgabe 3:
// Erstelle ein Array $orte mit:
// "Dschungel", "Vulkan", "Fossilienfeld"
// Gib das komplette Array aus.


// Aufgabe 4:
// Erstelle selbst ein Array $ausruestung mit 4 Dingen,
// die man für eine Dino-Expedition brauchen könnte.
// Gib das Array aus.


// ------------------------------------------------------
// LEVEL 2 - Werte gezielt auslesen
// Schwierigkeit: leicht
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 5:
// Erstelle ein Array $dinos mit:
// "T-Rex", "Velociraptor", "Brachiosaurus", "Ankylosaurus"
// Gib nur den ersten Dinosaurier aus.


// Aufgabe 6:
// Verwende dieses Array:
// $fossilien = ["Zahn", "Knochen", "Ei", "Fußabdruck"];
// Gib nur "Ei" aus.


// Aufgabe 7:
// Erstelle ein Array $gehege mit 5 Dino-Bereichen.
// Gib nur den zweiten und den vierten Bereich aus.


// Aufgabe 8:
// Erstelle ein Array $funde mit:
// "Zahn", "Kralle", "Ei", "Knochen", "Feder"
// Gib den ersten und den letzten Wert aus.
// Tipp: Überlege dir zuerst, welchen Index der letzte Wert hat.


// ------------------------------------------------------
// LEVEL 3 - Arrays verändern und erweitern
// Schwierigkeit: leicht bis mittel
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 9:
// Erstelle ein Array $dinos mit:
// "T-Rex", "Triceratops", "Stegosaurus"
// Ändere "Stegosaurus" zu "Brachiosaurus".
// Gib danach das komplette Array aus.


// Aufgabe 10:
// Erstelle ein Array $aufgaben mit:
// "Spuren suchen", "Fossilien prüfen", "Gehege kontrollieren"
// Ändere "Fossilien prüfen" zu "Dino-Eier untersuchen".
// Gib danach das Array aus.


// Aufgabe 11:
// Erstelle ein Array $ausruestung mit:
// "Lupe", "Pinsel"
// Füge danach "Seil" und "Karte" hinzu.
// Gib das fertige Array aus.


// Aufgabe 12:
// Erstelle ein Array $fossilien mit 3 Fossilien.
// Füge ein viertes Fossil hinzu.
// Ändere danach das zweite Fossil.
// Gib das fertige Array aus.


// ------------------------------------------------------
// LEVEL 4 - Zählen und mit foreach arbeiten
// Schwierigkeit: mittel
// Richtzeit: ca. 20 Minuten
// ------------------------------------------------------

// Aufgabe 13:
// Erstelle ein Array $dinos mit 5 Dinosauriern.
// Gib mit count() aus, wie viele Dinosaurier gespeichert sind.


// Aufgabe 14:
// Erstelle ein Array $fossilien mit 4 Fossilien.
// Gib jedes Fossil mit foreach einzeln aus.


// Aufgabe 15:
// Erstelle ein Array $dinos mit:
// "T-Rex", "Triceratops", "Brachiosaurus", "Velociraptor"
// Gib mit foreach zu jedem Dinosaurier diesen Satz aus:
// "<Name> wurde entdeckt!"


// Aufgabe 16:
// Erstelle ein Array $ausruestung mit mindestens 5 Gegenständen.
// Gib zuerst die Anzahl der Gegenstände aus.
// Gib danach alle Gegenstände mit foreach einzeln aus.


// Aufgabe 17:
// Erstelle ein Array $orte mit 4 Dino-Orten.
// Gib mit foreach für jeden Ort aus:
// "Die Expedition erreicht: <Ort>"


// ------------------------------------------------------
// LEVEL 5 - Assoziative Arrays
// Schwierigkeit: mittel
// Richtzeit: ca. 20 Minuten
// ------------------------------------------------------

// Aufgabe 18:
// Erstelle ein assoziatives Array $dino mit:
// "name" => "T-Rex"
// "art" => "Fleischfresser"
// "alter" => 25
// Gib das komplette Array aus.


// Aufgabe 19:
// Verwende ein assoziatives Array für einen Dinosaurier mit den Schlüsseln:
// name, art, groesse, gewicht
// Wähle die Werte selbst.
// Gib danach nur den Namen und die Art aus.


// Aufgabe 20:
// Erstelle ein assoziatives Array $fossil mit:
// name, fundort, alter, vollstaendig
// Wähle passende Werte selbst.
// "vollstaendig" soll true oder false sein.
// Gib nur den Fundort und das Alter aus.


// Aufgabe 21:
// Erstelle ein assoziatives Array $expedition mit:
// name, ort, ziel, status
// Gib alle Werte einzeln mit verständlichen Sätzen aus.
// Beispiel vom Aufbau her:
// "Expedition: ..."
// "Ziel: ..."


// ------------------------------------------------------
// LEVEL 6 - Mehrere Techniken kombinieren
// Schwierigkeit: mittel bis schwierig
// Richtzeit: ca. 20 Minuten
// ------------------------------------------------------

// Aufgabe 22:
// Erstelle ein Array mit 5 Dinosauriern.
// 1. Gib die Anzahl der Dinosaurier aus.
// 2. Gib alle Dinosaurier mit foreach aus.
// 3. Ändere den dritten Dinosaurier.
// 4. Füge einen sechsten Dinosaurier hinzu.
// 5. Gib das fertige Array aus.


// Aufgabe 23:
// Erstelle ein Array $fossilien mit mindestens 5 Fossilien.
// Gib zuerst nur das zweite Fossil aus.
// Ändere danach das vierte Fossil.
// Füge noch ein weiteres Fossil hinzu.
// Gib anschließend alle Fossilien mit foreach aus.


// Aufgabe 24:
// Erstelle ein assoziatives Array für einen Dinosaurier mit:
// name, art, groesse, lebensraum, gefaehrlich
// "gefaehrlich" soll true oder false sein.
// Gib danach einen kleinen Dino-Steckbrief aus.
// Jede Eigenschaft soll in einer eigenen Zeile erscheinen.


// Aufgabe 25:
// Erstelle ein Array $expeditionsschritte mit 5 Schritten.
// Ersetze den dritten Schritt durch "Dino-Spuren dokumentieren".
// Füge danach "Funde ins Labor bringen" hinzu.
// Gib die Anzahl aller Schritte aus.
// Gib anschließend alle Schritte mit foreach aus.


// ------------------------------------------------------
// BOSSFIGHT - Die große Dino-Expedition
// Schwierigkeit: schwierig für Anfänger
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 26:
// Du leitest deine erste große Dino-Expedition.
//
// Erstelle ein Array $expeditionsPlan mit mindestens 5 Schritten.
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
// Erstelle ein assoziatives Array $hauptfund.
// Verwende mindestens diese Eigenschaften:
// name, art, fundort, alter, status
//
// Gib daraus einen kleinen Fossilien-Steckbrief aus.
// Formuliere die Ausgabe selbst als verständliche Sätze.


// ------------------------------------------------------
// FINAL BOSS - Den Dino-Park verwalten
// Schwierigkeit: am schwierigsten
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 28:
// Erstelle zwei Arrays:
//
// 1. $dinos mit mindestens 5 Dinosauriern
// 2. $gehege mit mindestens 4 Bereichen
//
// Dein Programm soll danach:
//
// - ausgeben, wie viele Dinosaurier gespeichert sind
// - alle Dinosaurier mit foreach ausgeben
// - einen neuen Dinosaurier hinzufügen
// - einen vorhandenen Dinosaurier ändern
// - ausgeben, wie viele Gehege gespeichert sind
// - alle Gehege als Sätze ausgeben
//
// Zusatz:
// Erstelle zum Schluss noch ein assoziatives Array $dinoDesTages
// mit mindestens 4 Eigenschaften.
// Gib daraus einen kleinen Dino-Steckbrief aus.
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
