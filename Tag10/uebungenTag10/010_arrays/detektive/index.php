<?php

// ======================================================
// PHP Aufgaben - Arrays
// Detektiv Edition
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
// LEVEL 1 - Erste Detektiv-Arrays
// Schwierigkeit: sehr leicht
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 1:
// Erstelle ein Array mit dem Namen $detektive.
// Speichere darin:
// "Mia", "Ben", "Leo"
// Gib das komplette Array mit print_r() aus.


// Aufgabe 2:
// Erstelle ein Array $spuren mit diesen Werten:
// "Fußabdruck", "Fingerabdruck", "Notizzettel", "Schlüssel"
// Gib das komplette Array aus.


// Aufgabe 3:
// Erstelle ein Array $orte mit:
// "Bahnhof", "Museum", "Park"
// Gib das komplette Array aus.


// Aufgabe 4:
// Erstelle selbst ein Array $ausruestung mit 4 Dingen,
// die ein Detektiv bei einer Ermittlung brauchen könnte.
// Gib das Array aus.


// ------------------------------------------------------
// LEVEL 2 - Werte gezielt auslesen
// Schwierigkeit: leicht
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 5:
// Erstelle ein Array $verdaechtige mit:
// "Herr Braun", "Frau Klein", "Herr Wolf", "Frau Sommer"
// Gib nur die erste Person aus.


// Aufgabe 6:
// Verwende dieses Array:
// $beweise = ["Foto", "Brief", "Handschuh", "Schlüssel"];
// Gib nur "Handschuh" aus.


// Aufgabe 7:
// Erstelle ein Array $tatorte mit 5 Orten.
// Gib nur den zweiten und den vierten Tatort aus.


// Aufgabe 8:
// Erstelle ein Array $hinweise mit:
// "Kaputte Scheibe", "Schlammspur", "Rote Faser", "Ticket", "Notiz"
// Gib den ersten und den letzten Wert aus.
// Tipp: Überlege dir zuerst, welchen Index der letzte Wert hat.


// ------------------------------------------------------
// LEVEL 3 - Arrays verändern und erweitern
// Schwierigkeit: leicht bis mittel
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 9:
// Erstelle ein Array $verdaechtige mit:
// "Herr Braun", "Frau Klein", "Herr Wolf"
// Ändere "Herr Wolf" zu "Herr König".
// Gib danach das komplette Array aus.


// Aufgabe 10:
// Erstelle ein Array $aufgaben mit:
// "Tatort prüfen", "Zeugen befragen", "Spuren sichern"
// Ändere "Zeugen befragen" zu "Nachbarn befragen".
// Gib danach das Array aus.


// Aufgabe 11:
// Erstelle ein Array $beweise mit:
// "Foto", "Brief"
// Füge danach "Handschuh" und "Schlüssel" hinzu.
// Gib das fertige Array aus.


// Aufgabe 12:
// Erstelle ein Array $spuren mit 3 Spuren.
// Füge eine vierte Spur hinzu.
// Ändere danach die zweite Spur.
// Gib das fertige Array aus.


// ------------------------------------------------------
// LEVEL 4 - Zählen und mit foreach arbeiten
// Schwierigkeit: mittel
// Richtzeit: ca. 20 Minuten
// ------------------------------------------------------

// Aufgabe 13:
// Erstelle ein Array $verdaechtige mit 5 Namen.
// Gib mit count() aus, wie viele Verdächtige gespeichert sind.


// Aufgabe 14:
// Erstelle ein Array $spuren mit 4 Spuren.
// Gib jede Spur mit foreach einzeln aus.


// Aufgabe 15:
// Erstelle ein Array $verdaechtige mit:
// "Herr Braun", "Frau Klein", "Herr König", "Frau Sommer"
// Gib mit foreach zu jeder Person diesen Satz aus:
// "<Name> wird überprüft."


// Aufgabe 16:
// Erstelle ein Array $beweise mit mindestens 5 Beweisstücken.
// Gib zuerst die Anzahl der Beweisstücke aus.
// Gib danach alle Beweise mit foreach einzeln aus.


// Aufgabe 17:
// Erstelle ein Array $orte mit 4 Ermittlungsorten.
// Gib mit foreach für jeden Ort aus:
// "Der Detektiv untersucht: <Ort>"


// ------------------------------------------------------
// LEVEL 5 - Assoziative Arrays
// Schwierigkeit: mittel
// Richtzeit: ca. 20 Minuten
// ------------------------------------------------------

// Aufgabe 18:
// Erstelle ein assoziatives Array $detektiv mit:
// "name" => "Mia"
// "rang" => "Junior-Detektivin"
// "faelle" => 3
// Gib das komplette Array aus.


// Aufgabe 19:
// Verwende ein assoziatives Array für einen Verdächtigen mit den Schlüsseln:
// name, alter, beruf, status
// Wähle die Werte selbst.
// Gib danach nur den Namen und den Status aus.


// Aufgabe 20:
// Erstelle ein assoziatives Array $beweis mit:
// name, fundort, wichtigkeit, gesichert
// Wähle passende Werte selbst.
// "gesichert" soll true oder false sein.
// Gib nur den Fundort und die Wichtigkeit aus.


// Aufgabe 21:
// Erstelle ein assoziatives Array $fall mit:
// titel, tatort, hauptverdacht, status
// Gib alle Werte einzeln mit verständlichen Sätzen aus.
// Beispiel vom Aufbau her:
// "Fall: ..."
// "Tatort: ..."


// ------------------------------------------------------
// LEVEL 6 - Mehrere Techniken kombinieren
// Schwierigkeit: mittel bis schwierig
// Richtzeit: ca. 20 Minuten
// ------------------------------------------------------

// Aufgabe 22:
// Erstelle ein Array mit 5 Verdächtigen.
// 1. Gib die Anzahl der Verdächtigen aus.
// 2. Gib alle Verdächtigen mit foreach aus.
// 3. Ändere die dritte Person.
// 4. Füge eine sechste Person hinzu.
// 5. Gib das fertige Array aus.


// Aufgabe 23:
// Erstelle ein Array $beweise mit mindestens 5 Beweisstücken.
// Gib zuerst nur das zweite Beweisstück aus.
// Ändere danach das vierte Beweisstück.
// Füge noch einen weiteren Beweis hinzu.
// Gib anschließend alle Beweise mit foreach aus.


// Aufgabe 24:
// Erstelle ein assoziatives Array für einen Verdächtigen mit:
// name, alter, beruf, alibi, verdaechtig
// "verdaechtig" soll true oder false sein.
// Gib danach einen kleinen Verdächtigen-Steckbrief aus.
// Jede Eigenschaft soll in einer eigenen Zeile erscheinen.


// Aufgabe 25:
// Erstelle ein Array $ermittlungsschritte mit 5 Schritten.
// Ersetze den dritten Schritt durch "Überwachungskamera prüfen".
// Füge danach "Fallbericht schreiben" hinzu.
// Gib die Anzahl aller Schritte aus.
// Gib anschließend alle Schritte mit foreach aus.


// ------------------------------------------------------
// BOSSFIGHT - Der große Fall
// Schwierigkeit: schwierig für Anfänger
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 26:
// Du leitest deine erste große Ermittlung.
//
// Erstelle ein Array $ermittlungsPlan mit mindestens 5 Schritten.
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
// Erstelle ein assoziatives Array $hauptverdaechtiger.
// Verwende mindestens diese Eigenschaften:
// name, alter, beruf, alibi, status
//
// Gib daraus einen kleinen Ermittlungs-Steckbrief aus.
// Formuliere die Ausgabe selbst als verständliche Sätze.


// ------------------------------------------------------
// FINAL BOSS - Den Fall verwalten
// Schwierigkeit: am schwierigsten
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 28:
// Erstelle zwei Arrays:
//
// 1. $verdaechtige mit mindestens 5 Namen
// 2. $beweise mit mindestens 4 Beweisstücken
//
// Dein Programm soll danach:
//
// - ausgeben, wie viele Verdächtige gespeichert sind
// - alle Verdächtigen mit foreach ausgeben
// - einen neuen Verdächtigen hinzufügen
// - einen vorhandenen Namen ändern
// - ausgeben, wie viele Beweisstücke gespeichert sind
// - alle Beweisstücke als Sätze ausgeben
//
// Zusatz:
// Erstelle zum Schluss noch ein assoziatives Array $fallDesTages
// mit mindestens 4 Eigenschaften.
// Gib daraus einen kleinen Fall-Steckbrief aus.
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
