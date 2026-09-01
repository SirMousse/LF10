<?php

// ======================================================
// PHP Aufgaben - Arrays
// Zombie Edition
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
// LEVEL 1 - Die Zombie-Apokalypse beginnt
// Schwierigkeit: sehr leicht
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 1:
// Erstelle ein Array mit dem Namen $ueberlebende.
// Speichere darin:
// "Alex", "Mia", "Ben"
// Gib das komplette Array mit print_r() aus.


// Aufgabe 2:
// Erstelle ein Array $ausruestung mit:
// "Taschenlampe", "Rucksack", "Funkgerät", "Verbandskasten"
// Gib das komplette Array aus.


// Aufgabe 3:
// Erstelle ein Array $orte mit:
// "Bunker", "Supermarkt", "Krankenhaus"
// Gib das komplette Array aus.


// Aufgabe 4:
// Erstelle selbst ein Array $vorraete mit 4 Dingen,
// die man während einer Zombie-Apokalypse brauchen könnte.
// Gib das Array aus.


// ------------------------------------------------------
// LEVEL 2 - Werte gezielt auslesen
// Schwierigkeit: leicht
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 5:
// Erstelle ein Array $ueberlebende mit:
// "Alex", "Mia", "Ben", "Lena"
// Gib nur die erste Person aus.


// Aufgabe 6:
// Verwende dieses Array:
// $vorraete = ["Wasser", "Konserven", "Medizin", "Batterien"];
// Gib nur "Medizin" aus.


// Aufgabe 7:
// Erstelle ein Array $sichereOrte mit 5 Orten.
// Gib nur den zweiten und den vierten Ort aus.


// Aufgabe 8:
// Erstelle ein Array $fundstuecke mit:
// "Schlüssel", "Karte", "Funkgerät", "Batterie", "Rucksack"
// Gib den ersten und den letzten Wert aus.
// Tipp: Überlege dir zuerst, welchen Index der letzte Wert hat.


// ------------------------------------------------------
// LEVEL 3 - Arrays verändern und erweitern
// Schwierigkeit: leicht bis mittel
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 9:
// Erstelle ein Array $ueberlebende mit:
// "Alex", "Mia", "Tom"
// Ändere "Tom" zu "Lena".
// Gib danach das komplette Array aus.


// Aufgabe 10:
// Erstelle ein Array $aufgaben mit:
// "Vorräte suchen", "Bunker prüfen", "Funkgerät reparieren"
// Ändere "Bunker prüfen" zu "Krankenhaus durchsuchen".
// Gib danach das Array aus.


// Aufgabe 11:
// Erstelle ein Array $vorraete mit:
// "Wasser", "Konserven"
// Füge danach "Medizin" und "Batterien" hinzu.
// Gib das fertige Array aus.


// Aufgabe 12:
// Erstelle ein Array $zombies mit 3 Zombie-Namen oder Zombie-Arten.
// Füge einen vierten Zombie hinzu.
// Ändere danach den zweiten Eintrag.
// Gib das fertige Array aus.


// ------------------------------------------------------
// LEVEL 4 - Zählen und mit foreach arbeiten
// Schwierigkeit: mittel
// Richtzeit: ca. 20 Minuten
// ------------------------------------------------------

// Aufgabe 13:
// Erstelle ein Array $ueberlebende mit 5 Namen.
// Gib mit count() aus, wie viele Überlebende gespeichert sind.


// Aufgabe 14:
// Erstelle ein Array $zombies mit 4 Zombie-Arten.
// Gib jede Zombie-Art mit foreach einzeln aus.


// Aufgabe 15:
// Erstelle ein Array $ueberlebende mit:
// "Alex", "Mia", "Ben", "Lena"
// Gib mit foreach zu jeder Person diesen Satz aus:
// "<Name> ist noch am Leben!"


// Aufgabe 16:
// Erstelle ein Array $vorraete mit mindestens 5 Dingen.
// Gib zuerst die Anzahl der Vorräte aus.
// Gib danach alle Vorräte mit foreach einzeln aus.


// Aufgabe 17:
// Erstelle ein Array $orte mit 4 Orten.
// Gib mit foreach für jeden Ort aus:
// "Die Gruppe erreicht: <Ort>"


// ------------------------------------------------------
// LEVEL 5 - Assoziative Arrays
// Schwierigkeit: mittel
// Richtzeit: ca. 20 Minuten
// ------------------------------------------------------

// Aufgabe 18:
// Erstelle ein assoziatives Array $ueberlebender mit:
// "name" => "Alex"
// "alter" => 24
// "gesundheit" => 80
// Gib das komplette Array aus.


// Aufgabe 19:
// Erstelle ein assoziatives Array für eine Person mit den Schlüsseln:
// name, alter, aufgabe, gesundheit
// Wähle die Werte selbst.
// Gib danach nur den Namen und die Aufgabe aus.


// Aufgabe 20:
// Erstelle ein assoziatives Array $bunker mit:
// name, ort, vorraete, sicher
// Wähle passende Werte selbst.
// "sicher" soll true oder false sein.
// Gib nur den Ort und die Anzahl der Vorräte aus.


// Aufgabe 21:
// Erstelle ein assoziatives Array $mission mit:
// name, ziel, ort, erledigt
// Gib alle Werte einzeln mit verständlichen Sätzen aus.
// Beispiel:
// "Mission: ..."
// "Ziel: ..."


// ------------------------------------------------------
// LEVEL 6 - Mehrere Techniken kombinieren
// Schwierigkeit: mittel bis schwierig
// Richtzeit: ca. 20 Minuten
// ------------------------------------------------------

// Aufgabe 22:
// Erstelle ein Array mit 5 Überlebenden.
// 1. Gib die Anzahl der Überlebenden aus.
// 2. Gib alle Namen mit foreach aus.
// 3. Ändere die dritte Person.
// 4. Füge eine sechste Person hinzu.
// 5. Gib das fertige Array aus.


// Aufgabe 23:
// Erstelle ein Array $vorraete mit mindestens 5 Dingen.
// Gib zuerst nur den zweiten Vorrat aus.
// Ändere danach den vierten Vorrat.
// Füge noch einen weiteren Vorrat hinzu.
// Gib anschließend alle Vorräte mit foreach aus.


// Aufgabe 24:
// Erstelle ein assoziatives Array für einen Überlebenden mit:
// name, alter, gesundheit, aufgabe, infiziert
// "infiziert" soll true oder false sein.
// Gib danach einen kleinen Steckbrief aus.
// Jede Eigenschaft soll in einer eigenen Zeile erscheinen.


// Aufgabe 25:
// Erstelle ein Array $tagesPlan mit 5 Aufgaben.
// Ersetze die dritte Aufgabe durch "Vorräte im Krankenhaus suchen".
// Füge danach "Bunkertür sichern" hinzu.
// Gib die Anzahl aller Aufgaben aus.
// Gib anschließend alle Aufgaben mit foreach aus.


// ------------------------------------------------------
// BOSSFIGHT - Die große Flucht
// Schwierigkeit: schwierig für Anfänger
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 26:
// Die Gruppe muss aus einer von Zombies überrannten Stadt fliehen.
//
// Erstelle ein Array $fluchtPlan mit mindestens 5 Schritten.
// Danach soll dein Programm:
//
// - die Anzahl der Schritte ausgeben
// - alle Schritte einzeln mit foreach ausgeben
// - einen Schritt im Array verändern
// - einen neuen Schritt hinzufügen
// - am Ende das komplette Array ausgeben
//
// Versuche diese Aufgabe ohne Hilfe aus den vorherigen Aufgaben zu lösen.


// Aufgabe 27:
// Erstelle ein assoziatives Array $gruppenLeiter.
// Verwende mindestens diese Eigenschaften:
// name, alter, gesundheit, aufgabe, bereit
//
// Gib daraus einen kleinen Überlebenden-Steckbrief aus.
// Formuliere die Ausgabe selbst als verständliche Sätze.


// ------------------------------------------------------
// FINAL BOSS - Den Bunker verwalten
// Schwierigkeit: am schwierigsten
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 28:
// Erstelle zwei Arrays:
//
// 1. $ueberlebende mit mindestens 5 Namen
// 2. $vorraete mit mindestens 4 Dingen
//
// Dein Programm soll danach:
//
// - ausgeben, wie viele Überlebende gespeichert sind
// - alle Überlebenden mit foreach ausgeben
// - eine neue Person hinzufügen
// - einen vorhandenen Namen ändern
// - ausgeben, wie viele Vorräte gespeichert sind
// - alle Vorräte als Sätze ausgeben
//
// Zusatz:
// Erstelle zum Schluss noch ein assoziatives Array $bunkerStatus
// mit mindestens 4 Eigenschaften.
// Gib daraus einen kleinen Bunker-Bericht aus.
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
