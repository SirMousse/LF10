<?php

// ======================================================
// PHP Aufgaben - Arrays
// Tierheim Edition
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
// LEVEL 1 - Erste Arrays
// Schwierigkeit: sehr leicht
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 1:
// Erstelle ein Array mit dem Namen $tiere.
// Speichere darin:
// "Bello", "Luna", "Mimi"
// Gib das komplette Array mit print_r() aus.


// Aufgabe 2:
// Erstelle ein Array $tierarten mit diesen Werten:
// "Hund", "Katze", "Kaninchen", "Hamster"
// Gib das komplette Array aus.


// Aufgabe 3:
// Erstelle ein Array $bereiche mit:
// "Hundezimmer", "Katzenzimmer", "Freilauf"
// Gib das komplette Array aus.


// Aufgabe 4:
// Erstelle selbst ein Array $aufgaben mit 4 typischen Aufgaben,
// die in einem Tierheim vorkommen könnten.
// Gib das Array aus.


// ------------------------------------------------------
// LEVEL 2 - Werte gezielt auslesen
// Schwierigkeit: leicht
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 5:
// Erstelle ein Array $tiere mit:
// "Bello", "Luna", "Mimi", "Rocky"
// Gib nur den ersten Tiernamen aus.


// Aufgabe 6:
// Verwende dieses Array:
// $tierarten = ["Hund", "Katze", "Kaninchen", "Vogel"];
// Gib nur "Kaninchen" aus.


// Aufgabe 7:
// Erstelle ein Array $bereiche mit 5 Bereichen.
// Gib nur den zweiten und den vierten Bereich aus.


// Aufgabe 8:
// Erstelle ein Array $items mit:
// "Napf", "Decke", "Leine", "Ball", "Bürste"
// Gib den ersten und den letzten Wert aus.
// Tipp: Überlege dir zuerst, welchen Index der letzte Wert hat.


// ------------------------------------------------------
// LEVEL 3 - Arrays verändern und erweitern
// Schwierigkeit: leicht bis mittel
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 9:
// Erstelle ein Array $tiere mit:
// "Bello", "Luna", "Rocky"
// Ändere "Rocky" zu "Mimi".
// Gib danach das komplette Array aus.


// Aufgabe 10:
// Erstelle ein Array $aufgaben mit:
// "Füttern", "Putzen", "Spielen"
// Ändere "Putzen" zu "Pflegen".
// Gib danach das Array aus.


// Aufgabe 11:
// Erstelle ein Array $items mit:
// "Napf", "Decke"
// Füge danach "Leine" und "Ball" hinzu.
// Gib das fertige Array aus.


// Aufgabe 12:
// Erstelle ein Array $tiere mit 3 Tiernamen.
// Füge ein viertes Tier hinzu.
// Ändere danach den zweiten Tiernamen.
// Gib das fertige Array aus.


// ------------------------------------------------------
// LEVEL 4 - Zählen und mit foreach arbeiten
// Schwierigkeit: mittel
// Richtzeit: ca. 20 Minuten
// ------------------------------------------------------

// Aufgabe 13:
// Erstelle ein Array $tiere mit 5 Tiernamen.
// Gib mit count() aus, wie viele Tiere gespeichert sind.


// Aufgabe 14:
// Erstelle ein Array $aufgaben mit 4 Aufgaben.
// Gib jede Aufgabe mit foreach einzeln aus.


// Aufgabe 15:
// Erstelle ein Array $tiere mit:
// "Bello", "Luna", "Mimi", "Nala"
// Gib mit foreach zu jedem Tier diesen Satz aus:
// "<Name> wartet auf ein Zuhause!"


// Aufgabe 16:
// Erstelle ein Array $items mit mindestens 5 Gegenständen.
// Gib zuerst die Anzahl der Gegenstände aus.
// Gib danach alle Gegenstände mit foreach einzeln aus.


// Aufgabe 17:
// Erstelle ein Array $bereiche mit 4 Bereichen.
// Gib mit foreach für jeden Bereich aus:
// "Heute kontrolliere ich: <Bereich>"


// ------------------------------------------------------
// LEVEL 5 - Assoziative Arrays
// Schwierigkeit: mittel
// Richtzeit: ca. 20 Minuten
// ------------------------------------------------------

// Aufgabe 18:
// Erstelle ein assoziatives Array $tier mit:
// "name" => "Bello"
// "art" => "Hund"
// "alter" => 4
// Gib das komplette Array aus.


// Aufgabe 19:
// Verwende ein assoziatives Array für ein Tier mit den Schlüsseln:
// name, art, alter, bereich
// Wähle die Werte selbst.
// Gib danach nur den Namen und den Bereich aus.


// Aufgabe 20:
// Erstelle ein assoziatives Array $pflegefall mit:
// name, gesundheit, behandlung, status
// Wähle passende Werte selbst.
// Gib nur den Gesundheitswert und den Status aus.


// Aufgabe 21:
// Erstelle ein assoziatives Array $mitarbeiter mit:
// name, aufgabe, schicht, bereich
// Gib alle Werte einzeln mit verständlichen Sätzen aus.
// Beispiel vom Aufbau her:
// "Name: ..."
// "Aufgabe: ..."


// ------------------------------------------------------
// LEVEL 6 - Mehrere Techniken kombinieren
// Schwierigkeit: mittel bis schwierig
// Richtzeit: ca. 20 Minuten
// ------------------------------------------------------

// Aufgabe 22:
// Erstelle ein Array mit 5 Tiernamen.
// 1. Gib die Anzahl der Tiere aus.
// 2. Gib alle Tiere mit foreach aus.
// 3. Ändere das dritte Tier.
// 4. Füge ein sechstes Tier hinzu.
// 5. Gib das fertige Array aus.


// Aufgabe 23:
// Erstelle ein Array $futter mit mindestens 5 Futtersorten.
// Gib zuerst nur die zweite Futtersorte aus.
// Ändere danach die vierte Futtersorte.
// Füge noch eine weitere Futtersorte hinzu.
// Gib anschließend alle Futtersorten mit foreach aus.


// Aufgabe 24:
// Erstelle ein assoziatives Array für ein Tier mit:
// name, art, alter, lieblingsfutter, vermittelt
// "vermittelt" soll true oder false sein.
// Gib danach einen kleinen Steckbrief aus.
// Jede Eigenschaft soll in einer eigenen Zeile erscheinen.


// Aufgabe 25:
// Erstelle ein Array $aufgaben mit 5 Aufgaben.
// Ersetze die dritte Aufgabe durch "Tierarztbesuch".
// Füge danach "Dokumentation" hinzu.
// Gib die Anzahl aller Aufgaben aus.
// Gib anschließend alle Aufgaben mit foreach aus.


// ------------------------------------------------------
// BOSSFIGHT - Tierheim-Schicht
// Schwierigkeit: schwierig für Anfänger
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 26:
// Du planst deine erste Schicht im Tierheim.
//
// Erstelle ein Array $schichtAufgaben mit mindestens 5 Aufgaben.
// Danach soll dein Programm:
//
// - die Anzahl der Aufgaben ausgeben
// - alle Aufgaben einzeln mit foreach ausgeben
// - eine Aufgabe im Array verändern
// - eine neue Aufgabe hinzufügen
// - am Ende das komplette Array ausgeben
//
// Versuche diese Aufgabe ohne Hilfe aus den vorherigen Aufgaben zu lösen.


// Aufgabe 27:
// Erstelle ein assoziatives Array $schichtTier für ein Tier,
// das du während deiner Schicht betreust.
// Verwende mindestens diese Eigenschaften:
// name, art, alter, bereich, pflegebedarf
//
// Gib daraus einen kleinen Tier-Steckbrief aus.
// Formuliere die Ausgabe selbst als verständliche Sätze.


// ------------------------------------------------------
// FINAL BOSS - Kleine Tierheim-Verwaltung
// Schwierigkeit: am schwierigsten
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 28:
// Erstelle zwei Arrays:
//
// 1. $tiere mit mindestens 5 Tiernamen
// 2. $aufgaben mit mindestens 4 Tierheim-Aufgaben
//
// Dein Programm soll danach:
//
// - ausgeben, wie viele Tiere im Tierheim gespeichert sind
// - alle Tiernamen mit foreach ausgeben
// - ein neues Tier hinzufügen
// - einen vorhandenen Tiernamen ändern
// - ausgeben, wie viele Aufgaben gespeichert sind
// - alle Aufgaben als Sätze ausgeben
//
// Zusatz:
// Erstelle zum Schluss noch ein assoziatives Array $tierDesTages
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
