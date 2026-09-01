<?php

// ======================================================
// PHP Aufgaben - Arrays
// Hacker / Cybersecurity Edition
// Dauer: ca. 2 Stunden für Anfänger
// Schwierigkeit: leicht -> schwierig
// Themen: Arrays erstellen, auslesen, ändern, erweitern,
// zählen, foreach, assoziative Arrays, Kombinationen
//
// WICHTIG:
// Schreibe deinen PHP-Code direkt unter die jeweilige Aufgabe.
// Es sind absichtlich KEINE Lösungen enthalten.
//
// HINWEIS:
// Die Aufgaben sind rein fiktiv und dienen nur zum Lernen
// von PHP-Arrays und grundlegenden Cybersecurity-Begriffen.
// ======================================================


// ------------------------------------------------------
// LEVEL 1 - Erste Cyber-Arrays
// Schwierigkeit: sehr leicht
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 1:
// Erstelle ein Array mit dem Namen $benutzer.
// Speichere darin:
// "admin", "alex", "mia"
// Gib das komplette Array mit print_r() aus.


// Aufgabe 2:
// Erstelle ein Array $systeme mit diesen Werten:
// "Webserver", "Datenbank", "Firewall", "Backup-Server"
// Gib das komplette Array aus.


// Aufgabe 3:
// Erstelle ein Array $statusMeldungen mit:
// "online", "offline", "wartung"
// Gib das komplette Array aus.


// Aufgabe 4:
// Erstelle selbst ein Array $tools mit 4 Dingen,
// die man für einen Sicherheitscheck brauchen könnte.
// Gib das Array aus.


// ------------------------------------------------------
// LEVEL 2 - Werte gezielt auslesen
// Schwierigkeit: leicht
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 5:
// Erstelle ein Array $accounts mit:
// "root", "support", "developer", "guest"
// Gib nur den ersten Account aus.


// Aufgabe 6:
// Verwende dieses Array:
// $logs = ["Login erfolgreich", "Login fehlgeschlagen", "Backup gestartet", "Firewall aktiv"];
// Gib nur "Backup gestartet" aus.


// Aufgabe 7:
// Erstelle ein Array $server mit 5 Servernamen.
// Gib nur den zweiten und den vierten Server aus.


// Aufgabe 8:
// Erstelle ein Array $meldungen mit:
// "Neue Anmeldung", "Passwort geändert", "Update verfügbar", "Backup fertig", "Scan beendet"
// Gib den ersten und den letzten Wert aus.
// Tipp: Überlege dir zuerst, welchen Index der letzte Wert hat.


// ------------------------------------------------------
// LEVEL 3 - Arrays verändern und erweitern
// Schwierigkeit: leicht bis mittel
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 9:
// Erstelle ein Array $benutzer mit:
// "admin", "alex", "gast"
// Ändere "gast" zu "support".
// Gib danach das komplette Array aus.


// Aufgabe 10:
// Erstelle ein Array $aufgaben mit:
// "Logs prüfen", "Backup kontrollieren", "Updates installieren"
// Ändere "Backup kontrollieren" zu "Firewall prüfen".
// Gib danach das Array aus.


// Aufgabe 11:
// Erstelle ein Array $systeme mit:
// "Webserver", "Datenbank"
// Füge danach "Firewall" und "Backup-Server" hinzu.
// Gib das fertige Array aus.


// Aufgabe 12:
// Erstelle ein Array $warnungen mit 3 Warnmeldungen.
// Füge eine vierte Warnmeldung hinzu.
// Ändere danach die zweite Warnmeldung.
// Gib das fertige Array aus.


// ------------------------------------------------------
// LEVEL 4 - Zählen und mit foreach arbeiten
// Schwierigkeit: mittel
// Richtzeit: ca. 20 Minuten
// ------------------------------------------------------

// Aufgabe 13:
// Erstelle ein Array $accounts mit 5 Benutzernamen.
// Gib mit count() aus, wie viele Accounts gespeichert sind.


// Aufgabe 14:
// Erstelle ein Array $logs mit 4 Log-Einträgen.
// Gib jeden Log-Eintrag mit foreach einzeln aus.


// Aufgabe 15:
// Erstelle ein Array $systeme mit:
// "Webserver", "Datenbank", "Firewall", "Backup-Server"
// Gib mit foreach zu jedem System diesen Satz aus:
// "System <Name> wird überprüft."


// Aufgabe 16:
// Erstelle ein Array $warnungen mit mindestens 5 Warnmeldungen.
// Gib zuerst die Anzahl der Warnmeldungen aus.
// Gib danach alle Warnmeldungen mit foreach einzeln aus.


// Aufgabe 17:
// Erstelle ein Array $checks mit 4 Sicherheitschecks.
// Gib mit foreach für jeden Check aus:
// "Sicherheitscheck: <Check>"


// ------------------------------------------------------
// LEVEL 5 - Assoziative Arrays
// Schwierigkeit: mittel
// Richtzeit: ca. 20 Minuten
// ------------------------------------------------------

// Aufgabe 18:
// Erstelle ein assoziatives Array $account mit:
// "name" => "admin"
// "rolle" => "Administrator"
// "aktiv" => true
// Gib das komplette Array aus.


// Aufgabe 19:
// Verwende ein assoziatives Array für einen Server mit den Schlüsseln:
// name, typ, status, standort
// Wähle die Werte selbst.
// Gib danach nur den Namen und den Status aus.


// Aufgabe 20:
// Erstelle ein assoziatives Array $warnung mit:
// titel, prioritaet, system, behoben
// Wähle passende Werte selbst.
// "behoben" soll true oder false sein.
// Gib nur die Priorität und das System aus.


// Aufgabe 21:
// Erstelle ein assoziatives Array $sicherheitsCheck mit:
// name, ziel, ergebnis, status
// Gib alle Werte einzeln mit verständlichen Sätzen aus.
// Beispiel vom Aufbau her:
// "Check: ..."
// "Ergebnis: ..."


// ------------------------------------------------------
// LEVEL 6 - Mehrere Techniken kombinieren
// Schwierigkeit: mittel bis schwierig
// Richtzeit: ca. 20 Minuten
// ------------------------------------------------------

// Aufgabe 22:
// Erstelle ein Array mit 5 Systemnamen.
// 1. Gib die Anzahl der Systeme aus.
// 2. Gib alle Systeme mit foreach aus.
// 3. Ändere das dritte System.
// 4. Füge ein sechstes System hinzu.
// 5. Gib das fertige Array aus.


// Aufgabe 23:
// Erstelle ein Array $logs mit mindestens 5 Log-Einträgen.
// Gib zuerst nur den zweiten Log-Eintrag aus.
// Ändere danach den vierten Log-Eintrag.
// Füge noch einen weiteren Log-Eintrag hinzu.
// Gib anschließend alle Logs mit foreach aus.


// Aufgabe 24:
// Erstelle ein assoziatives Array für einen Server mit:
// name, typ, status, ipIntern, sicher
// "sicher" soll true oder false sein.
// Gib danach einen kleinen Server-Steckbrief aus.
// Jede Eigenschaft soll in einer eigenen Zeile erscheinen.


// Aufgabe 25:
// Erstelle ein Array $sicherheitsAufgaben mit 5 Aufgaben.
// Ersetze die dritte Aufgabe durch "Berechtigungen überprüfen".
// Füge danach "Abschlussbericht erstellen" hinzu.
// Gib die Anzahl aller Aufgaben aus.
// Gib anschließend alle Aufgaben mit foreach aus.


// ------------------------------------------------------
// BOSSFIGHT - Der große Sicherheitscheck
// Schwierigkeit: schwierig für Anfänger
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 26:
// Du planst einen vollständigen Sicherheitscheck.
//
// Erstelle ein Array $checkPlan mit mindestens 5 Schritten.
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
// Erstelle ein assoziatives Array $systemBericht.
// Verwende mindestens diese Eigenschaften:
// name, typ, status, letztePruefung, sicher
//
// Gib daraus einen kleinen Sicherheitsbericht aus.
// Formuliere die Ausgabe selbst als verständliche Sätze.


// ------------------------------------------------------
// FINAL BOSS - Das Netzwerk verwalten
// Schwierigkeit: am schwierigsten
// Richtzeit: ca. 15 Minuten
// ------------------------------------------------------

// Aufgabe 28:
// Erstelle zwei Arrays:
//
// 1. $systeme mit mindestens 5 Systemnamen
// 2. $warnungen mit mindestens 4 Warnmeldungen
//
// Dein Programm soll danach:
//
// - ausgeben, wie viele Systeme gespeichert sind
// - alle Systeme mit foreach ausgeben
// - ein neues System hinzufügen
// - einen vorhandenen Systemnamen ändern
// - ausgeben, wie viele Warnmeldungen gespeichert sind
// - alle Warnmeldungen als Sätze ausgeben
//
// Zusatz:
// Erstelle zum Schluss noch ein assoziatives Array $kritischesSystem
// mit mindestens 4 Eigenschaften.
// Gib daraus einen kleinen System-Steckbrief aus.
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
