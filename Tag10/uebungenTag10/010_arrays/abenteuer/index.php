<?php

// ======================================================
// PHP Aufgaben - Arrays
// Abenteuer Edition
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
// LEVEL 1 - Erste Abenteuer-Arrays
// Schwierigkeit: sehr leicht
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 1:
// Erstelle ein Array mit dem Namen $helden.
// Speichere darin:
// "Arin", "Luna", "Borin"
// Gib das komplette Array mit print_r() aus.


// Aufgabe 2:
// Erstelle ein Array $waffen mit diesen Werten:
// "Schwert", "Bogen", "Dolch", "Zauberstab"
// Gib das komplette Array aus.


// Aufgabe 3:
// Erstelle ein Array $orte mit:
// "Dorf", "Dunkler Wald", "Alte Burg"
// Gib das komplette Array aus.


// Aufgabe 4:
// Erstelle selbst ein Array $gegenstaende mit 4 Dingen,
// die ein Abenteurer auf einer Reise brauchen könnte.
// Gib das Array aus.


// ------------------------------------------------------
// LEVEL 2 - Werte gezielt auslesen
// Schwierigkeit: leicht
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 5:
// Erstelle ein Array $helden mit:
// "Arin", "Luna", "Borin", "Mira"
// Gib nur den ersten Heldennamen aus.


// Aufgabe 6:
// Verwende dieses Array:
// $monster = ["Goblin", "Wolf", "Ork", "Drache"];
// Gib nur "Ork" aus.


// Aufgabe 7:
// Erstelle ein Array $orte mit 5 Abenteuer-Orten.
// Gib nur den zweiten und den vierten Ort aus.


// Aufgabe 8:
// Erstelle ein Array $inventar mit:
// "Heiltrank", "Seil", "Fackel", "Schlüssel", "Karte"
// Gib den ersten und den letzten Wert aus.
// Tipp: Überlege dir zuerst, welchen Index der letzte Wert hat.


// ------------------------------------------------------
// LEVEL 3 - Arrays verändern und erweitern
// Schwierigkeit: leicht bis mittel
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 9:
// Erstelle ein Array $helden mit:
// "Arin", "Luna", "Borin"
// Ändere "Borin" zu "Mira".
// Gib danach das komplette Array aus.


// Aufgabe 10:
// Erstelle ein Array $missionen mit:
// "Brücke überqueren", "Höhle suchen", "Schatz finden"
// Ändere "Höhle suchen" zu "Drachenhöhle untersuchen".
// Gib danach das Array aus.


// Aufgabe 11:
// Erstelle ein Array $inventar mit:
// "Heiltrank", "Fackel"
// Füge danach "Seil" und "Schlüssel" hinzu.
// Gib das fertige Array aus.


// Aufgabe 12:
// Erstelle ein Array $monster mit 3 Monstern.
// Füge ein viertes Monster hinzu.
// Ändere danach das zweite Monster.
// Gib das fertige Array aus.


// ------------------------------------------------------
// LEVEL 4 - Zählen und mit foreach arbeiten
// Schwierigkeit: mittel
// Richtzeit: ca. 20 Minuten
// ------------------------------------------------------

// Aufgabe 13:
// Erstelle ein Array $helden mit 5 Heldennamen.
// Gib mit count() aus, wie viele Helden gespeichert sind.


// Aufgabe 14:
// Erstelle ein Array $missionen mit 4 Missionen.
// Gib jede Mission mit foreach einzeln aus.


// Aufgabe 15:
// Erstelle ein Array $helden mit:
// "Arin", "Luna", "Mira", "Borin"
// Gib mit foreach zu jedem Helden diesen Satz aus:
// "<Name> beginnt das Abenteuer!"


// Aufgabe 16:
// Erstelle ein Array $inventar mit mindestens 5 Gegenständen.
// Gib zuerst die Anzahl der Gegenstände aus.
// Gib danach alle Gegenstände mit foreach einzeln aus.


// Aufgabe 17:
// Erstelle ein Array $orte mit 4 Abenteuer-Orten.
// Gib mit foreach für jeden Ort aus:
// "Du erreichst den Ort: <Ort>"


// ------------------------------------------------------
// LEVEL 5 - Assoziative Arrays
// Schwierigkeit: mittel
// Richtzeit: ca. 20 Minuten
// ------------------------------------------------------

// Aufgabe 18:
// Erstelle ein assoziatives Array $held mit:
// "name" => "Arin"
// "klasse" => "Krieger"
// "level" => 3
// Gib das komplette Array aus.


// Aufgabe 19:
// Verwende ein assoziatives Array für einen Helden mit den Schlüsseln:
// name, klasse, level, ort
// Wähle die Werte selbst.
// Gib danach nur den Namen und den aktuellen Ort aus.


// Aufgabe 20:
// Erstelle ein assoziatives Array $monster mit:
// name, staerke, lebensenergie, status
// Wähle passende Werte selbst.
// Gib nur die Stärke und den Status aus.


// Aufgabe 21:
// Erstelle ein assoziatives Array $quest mit:
// name, ziel, belohnung, schwierigkeitsgrad
// Gib alle Werte einzeln mit verständlichen Sätzen aus.
// Beispiel vom Aufbau her:
// "Quest: ..."
// "Belohnung: ..."


// ------------------------------------------------------
// LEVEL 6 - Mehrere Techniken kombinieren
// Schwierigkeit: mittel bis schwierig
// Richtzeit: ca. 20 Minuten
// ------------------------------------------------------

// Aufgabe 22:
// Erstelle ein Array mit 5 Heldennamen.
// 1. Gib die Anzahl der Helden aus.
// 2. Gib alle Helden mit foreach aus.
// 3. Ändere den dritten Helden.
// 4. Füge einen sechsten Helden hinzu.
// 5. Gib das fertige Array aus.


// Aufgabe 23:
// Erstelle ein Array $inventar mit mindestens 5 Gegenständen.
// Gib zuerst nur den zweiten Gegenstand aus.
// Ändere danach den vierten Gegenstand.
// Füge noch einen weiteren Gegenstand hinzu.
// Gib anschließend alle Gegenstände mit foreach aus.


// Aufgabe 24:
// Erstelle ein assoziatives Array für einen Helden mit:
// name, klasse, level, lieblingswaffe, bereit
// "bereit" soll true oder false sein.
// Gib danach einen kleinen Helden-Steckbrief aus.
// Jede Eigenschaft soll in einer eigenen Zeile erscheinen.


// Aufgabe 25:
// Erstelle ein Array $missionen mit 5 Missionen.
// Ersetze die dritte Mission durch "Den Drachen besiegen".
// Füge danach "Zum König zurückkehren" hinzu.
// Gib die Anzahl aller Missionen aus.
// Gib anschließend alle Missionen mit foreach aus.


// ------------------------------------------------------
// BOSSFIGHT - Das große Abenteuer
// Schwierigkeit: schwierig für Anfänger
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 26:
// Du planst deine erste große Abenteuerreise.
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
// Erstelle ein assoziatives Array $abenteurer für deine Spielfigur.
// Verwende mindestens diese Eigenschaften:
// name, klasse, level, ort, lebensenergie
//
// Gib daraus einen kleinen Abenteuer-Steckbrief aus.
// Formuliere die Ausgabe selbst als verständliche Sätze.


// ------------------------------------------------------
// FINAL BOSS - Das Abenteuer verwalten
// Schwierigkeit: am schwierigsten
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 28:
// Erstelle zwei Arrays:
//
// 1. $helden mit mindestens 5 Heldennamen
// 2. $missionen mit mindestens 4 Abenteuer-Missionen
//
// Dein Programm soll danach:
//
// - ausgeben, wie viele Helden gespeichert sind
// - alle Heldennamen mit foreach ausgeben
// - einen neuen Helden hinzufügen
// - einen vorhandenen Heldennamen ändern
// - ausgeben, wie viele Missionen gespeichert sind
// - alle Missionen als Sätze ausgeben
//
// Zusatz:
// Erstelle zum Schluss noch ein assoziatives Array $heldDesTages
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
