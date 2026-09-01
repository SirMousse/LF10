<?php

// ======================================================
// PHP Aufgaben - Arrays
// Zelda Edition
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
// LEVEL 1 - Erste Hyrule-Arrays
// Schwierigkeit: sehr leicht
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 1:
// Erstelle ein Array mit dem Namen $charaktere.
// Speichere darin:
// "Link", "Zelda", "Impa"
// Gib das komplette Array mit print_r() aus.


// Aufgabe 2:
// Erstelle ein Array $items mit diesen Werten:
// "Schwert", "Schild", "Bogen", "Trank"
// Gib das komplette Array aus.


// Aufgabe 3:
// Erstelle ein Array $orte mit:
// "Hyrule", "Kakariko", "Verlorene Wälder"
// Gib das komplette Array aus.


// Aufgabe 4:
// Erstelle selbst ein Array $ausruestung mit 4 Dingen,
// die Link auf einer Reise gebrauchen könnte.
// Gib das Array aus.


// ------------------------------------------------------
// LEVEL 2 - Werte gezielt auslesen
// Schwierigkeit: leicht
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 5:
// Erstelle ein Array $charaktere mit:
// "Link", "Zelda", "Impa", "Daruk"
// Gib nur den ersten Charakter aus.


// Aufgabe 6:
// Verwende dieses Array:
// $waffen = ["Meisterschwert", "Bogen", "Speer", "Hammer"];
// Gib nur "Speer" aus.


// Aufgabe 7:
// Erstelle ein Array $dungeons mit 5 Dungeons.
// Gib nur den zweiten und den vierten Dungeon aus.


// Aufgabe 8:
// Erstelle ein Array $items mit:
// "Rubin", "Bombe", "Schlüssel", "Fee", "Trank"
// Gib den ersten und den letzten Wert aus.
// Tipp: Überlege dir zuerst, welchen Index der letzte Wert hat.


// ------------------------------------------------------
// LEVEL 3 - Arrays verändern und erweitern
// Schwierigkeit: leicht bis mittel
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 9:
// Erstelle ein Array $charaktere mit:
// "Link", "Zelda", "Bokblin"
// Ändere "Bokblin" zu "Impa".
// Gib danach das komplette Array aus.


// Aufgabe 10:
// Erstelle ein Array $aufgaben mit:
// "Dorf besuchen", "Dungeon betreten", "Boss besiegen"
// Ändere "Dungeon betreten" zu "Tempel untersuchen".
// Gib danach das Array aus.


// Aufgabe 11:
// Erstelle ein Array $items mit:
// "Schwert", "Schild"
// Füge danach "Bogen" und "Trank" hinzu.
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
// Erstelle ein Array $items mit 5 Gegenständen.
// Gib mit count() aus, wie viele Items gespeichert sind.


// Aufgabe 14:
// Erstelle ein Array $gegner mit 4 Gegnern.
// Gib jeden Gegner mit foreach einzeln aus.


// Aufgabe 15:
// Erstelle ein Array $orte mit:
// "Hyrule", "Kakariko", "Gerudo-Wüste", "Todesberg"
// Gib mit foreach zu jedem Ort diesen Satz aus:
// "Link erreicht: <Ort>"


// Aufgabe 16:
// Erstelle ein Array $ausruestung mit mindestens 5 Gegenständen.
// Gib zuerst die Anzahl der Gegenstände aus.
// Gib danach alle Gegenstände mit foreach einzeln aus.


// Aufgabe 17:
// Erstelle ein Array $quests mit 4 Aufgaben.
// Gib mit foreach für jede Quest aus:
// "Neue Quest: <Quest>"


// ------------------------------------------------------
// LEVEL 5 - Assoziative Arrays
// Schwierigkeit: mittel
// Richtzeit: ca. 20 Minuten
// ------------------------------------------------------

// Aufgabe 18:
// Erstelle ein assoziatives Array $held mit:
// "name" => "Link"
// "herzen" => 5
// "ort" => "Hyrule"
// Gib das komplette Array aus.


// Aufgabe 19:
// Verwende ein assoziatives Array für einen Charakter mit den Schlüsseln:
// name, rolle, ort, aufgabe
// Wähle die Werte selbst.
// Gib danach nur den Namen und die Aufgabe aus.


// Aufgabe 20:
// Erstelle ein assoziatives Array $waffe mit:
// name, staerke, haltbarkeit, legendär
// Wähle passende Werte selbst.
// "legendär" soll true oder false sein.
// Gib nur die Stärke und die Haltbarkeit aus.


// Aufgabe 21:
// Erstelle ein assoziatives Array $quest mit:
// name, ziel, belohnung, erledigt
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
// Erstelle ein Array mit 5 Orten.
// 1. Gib die Anzahl der Orte aus.
// 2. Gib alle Orte mit foreach aus.
// 3. Ändere den dritten Ort.
// 4. Füge einen sechsten Ort hinzu.
// 5. Gib das fertige Array aus.


// Aufgabe 23:
// Erstelle ein Array $items mit mindestens 5 Gegenständen.
// Gib zuerst nur das zweite Item aus.
// Ändere danach das vierte Item.
// Füge noch ein weiteres Item hinzu.
// Gib anschließend alle Items mit foreach aus.


// Aufgabe 24:
// Erstelle ein assoziatives Array für Link mit:
// name, herzen, waffe, ort, bereit
// "bereit" soll true oder false sein.
// Gib danach einen kleinen Helden-Steckbrief aus.
// Jede Eigenschaft soll in einer eigenen Zeile erscheinen.


// Aufgabe 25:
// Erstelle ein Array $reisePlan mit 5 Aufgaben.
// Ersetze die dritte Aufgabe durch "Dungeon-Boss besiegen".
// Füge danach "Prinzessin Zelda treffen" hinzu.
// Gib die Anzahl aller Aufgaben aus.
// Gib anschließend alle Aufgaben mit foreach aus.


// ------------------------------------------------------
// BOSSFIGHT - Das große Hyrule-Abenteuer
// Schwierigkeit: schwierig für Anfänger
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 26:
// Du planst ein großes Abenteuer durch Hyrule.
//
// Erstelle ein Array $abenteuerPlan mit mindestens 5 Stationen oder Aufgaben.
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
// Erstelle ein assoziatives Array $boss.
// Verwende mindestens diese Eigenschaften:
// name, ort, staerke, belohnung, besiegt
//
// Gib daraus einen kleinen Boss-Steckbrief aus.
// Formuliere die Ausgabe selbst als verständliche Sätze.


// ------------------------------------------------------
// FINAL BOSS - Hyrule verwalten
// Schwierigkeit: am schwierigsten
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 28:
// Erstelle zwei Arrays:
//
// 1. $charaktere mit mindestens 5 Namen
// 2. $quests mit mindestens 4 Aufgaben
//
// Dein Programm soll danach:
//
// - ausgeben, wie viele Charaktere gespeichert sind
// - alle Charaktere mit foreach ausgeben
// - einen neuen Charakter hinzufügen
// - einen vorhandenen Charakter ändern
// - ausgeben, wie viele Quests gespeichert sind
// - alle Quests als Sätze ausgeben
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
