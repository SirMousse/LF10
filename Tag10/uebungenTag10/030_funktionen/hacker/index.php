<?php

// ======================================================
// PHP Aufgaben - Funktionen 
// Hacker Edition
// Themen: Funktionen, Parameter, Rückgabewerte, void,
// Standardwerte, mehrere Parameter
// Jede Aufgabe ist als Kommentar formuliert
// Du kannst direkt unter jeder Aufgabe deinen Code schreiben
// ======================================================


// ------------------------------------------------------
// LEVEL 1 - Erste Hacker-Funktionen
// Thema: einfache Funktionen ohne Parameter
// ------------------------------------------------------


// Aufgabe 1:
// Erstelle eine Funktion mit dem Namen halloTerminal().
// Die Funktion soll ausgeben:
// "Willkommen im Terminal!"


// Aufgabe 2:
// Erstelle eine Funktion mit dem Namen systemStart().
// Die Funktion soll ausgeben:
// "System wird gestartet!"


// Aufgabe 3:
// Erstelle eine Funktion mit dem Namen scanStart().
// Die Funktion soll ausgeben:
// "Der System-Scan beginnt!"


// Aufgabe 4:
// Erstelle eine Funktion mit dem Namen backupLaden().
// Die Funktion soll ausgeben:
// "Ein Backup wurde geladen."


// Aufgabe 5:
// Erstelle eine Funktion mit dem Namen dateiGefunden().
// Die Funktion soll ausgeben:
// "Eine Datei wurde entdeckt!"


// Aufgabe 6:
// Erstelle eine Funktion mit dem Namen warnungAnzeigen().
// Die Funktion soll ausgeben:
// "Eine Systemwarnung erscheint!"


// Aufgabe 7:
// Erstelle eine Funktion mit dem Namen auftragErhalten().
// Die Funktion soll ausgeben:
// "Du hast einen neuen IT-Auftrag erhalten!"


// Aufgabe 8:
// Rufe mindestens drei deiner bisher erstellten Funktionen auf.


// ------------------------------------------------------
// LEVEL 2 - Funktionen mit einem Parameter
// Thema: Werte übergeben
// ------------------------------------------------------


// Aufgabe 9:
// Erstelle eine Funktion mit dem Namen begruesseUser($name).
// Die Funktion soll ausgeben:
// "Willkommen, User <Name>!"


// Aufgabe 10:
// Erstelle eine Funktion mit dem Namen serverName($server).
// Die Funktion soll ausgeben:
// "Du verbindest dich mit <Server>."


// Aufgabe 11:
// Erstelle eine Funktion mit dem Namen sicherheitsLevel($level).
// Die Funktion soll ausgeben:
// "Das Sicherheitslevel ist <Level>."


// Aufgabe 12:
// Erstelle eine Funktion mit dem Namen netzwerkBetreten($ort).
// Die Funktion soll ausgeben:
// "Du betrittst das Netzwerk <Ort>."


// Aufgabe 13:
// Erstelle eine Funktion mit dem Namen zugriffsRolle($rolle).
// Die Funktion soll ausgeben:
// "Deine Rolle ist <Rolle>."


// Aufgabe 14:
// Erstelle eine Funktion mit dem Namen dateiGefundenMitName($item).
// Die Funktion soll ausgeben:
// "Du hast die Datei <Datei> gefunden!"


// Aufgabe 15:
// Erstelle eine Funktion mit dem Namen toolName($tool).
// Die Funktion soll ausgeben:
// "Dein Tool ist <Tool>."


// Aufgabe 16:
// Rufe mindestens drei Funktionen mit unterschiedlichen IT-Werten auf.


// ------------------------------------------------------
// LEVEL 3 - Funktionen mit mehreren Parametern
// Thema: mehrere Werte verarbeiten
// ------------------------------------------------------


// Aufgabe 17:
// Erstelle eine Funktion mit dem Namen userInfo($name, $rolle).
// Die Funktion soll ausgeben:
// "<Name> ist ein <Rolle>."


// Aufgabe 18:
// Erstelle eine Funktion mit dem Namen serverInfo($held, $server).
// Die Funktion soll ausgeben:
// "<User> kämpft gegen <Server>!"


// Aufgabe 19:
// Erstelle eine Funktion mit dem Namen toolKombi($held, $tool).
// Die Funktion soll ausgeben:
// "<User> benutzt <Tool>."


// Aufgabe 20:
// Erstelle eine Funktion mit dem Namen userStatus($name, $level).
// Die Funktion soll ausgeben:
// "<Name> hat Sicherheitslevel <Level>."


// Aufgabe 21:
// Erstelle eine Funktion mit dem Namen dateiNutzung($user, $datei).
// Die Funktion soll ausgeben:
// "<User> benutzt <Datei>."


// Aufgabe 22:
// Erstelle eine Funktion mit dem Namen serverAuftrag($server, $auftrag).
// Die Funktion soll ausgeben:
// "Auf <Server> wartet der Auftrag <Auftrag>."


// Aufgabe 23:
// Erstelle eine Funktion mit dem Namen teamPartner($name, $partner).
// Die Funktion soll ausgeben:
// "<Name> arbeitet mit <Partner>."


// Aufgabe 24:
// Rufe mindestens drei Funktionen mit zwei Parametern auf.


// ------------------------------------------------------
// LEVEL 4 - Funktionen mit Rückgabewerten
// Thema: return
// ------------------------------------------------------


// Aufgabe 25:
// Erstelle eine Funktion mit dem Namen gibUserName().
// Die Funktion soll den String "Neo" zurückgeben.


// Aufgabe 26:
// Erstelle eine Funktion mit dem Namen gibSecurityLevel().
// Die Funktion soll die Zahl 5 zurückgeben.


// Aufgabe 27:
// Erstelle eine Funktion mit dem Namen gibRolle().
// Die Funktion soll den String "Administrator" zurückgeben.


// Aufgabe 28:
// Erstelle eine Funktion mit dem Namen gibServer().
// Die Funktion soll den String "Server-01" zurückgeben.


// Aufgabe 29:
// Erstelle eine Funktion mit dem Namen gibDateiAnzahl().
// Die Funktion soll die Zahl 100 zurückgeben.


// Aufgabe 30:
// Speichere den Rückgabewert einer Funktion in einer Variable
// und gib ihn anschließend aus.


// ------------------------------------------------------
// LEVEL 5 - Rückgabewerte mit Parametern
// Thema: Funktionen, die etwas berechnen oder zurückgeben
// ------------------------------------------------------


// Aufgabe 31:
// Erstelle eine Funktion mit dem Namen userSatz($name).
// Die Funktion soll folgenden Text zurückgeben:
// "<Name> ist bereit für den IT-Auftrag!"


// Aufgabe 32:
// Erstelle eine Funktion mit dem Namen levelPlusEins($level).
// Die Funktion soll das Level + 1 zurückgeben.


// Aufgabe 33:
// Erstelle eine Funktion mit dem Namen speicherVerdoppeln($speicher).
// Die Funktion soll die doppelten Speicherwert zurückgeben.


// Aufgabe 34:
// Erstelle eine Funktion mit dem Namen dateienAddieren($dateien).
// Die Funktion soll 50 Dateien addieren und zurückgeben.


// Aufgabe 35:
// Erstelle eine Funktion mit dem Namen userBeschreibung($name, $rolle).
// Die Funktion soll einen Satz zurückgeben:
// "<Name> ist ein <Rolle>."


// Aufgabe 36:
// Erstelle eine Funktion mit dem Namen auftragText($anzahl).
// Die Funktion soll zurückgeben:
// "Du hast <Anzahl> IT-Aufträge abgeschlossen."


// Aufgabe 37:
// Erstelle eine Funktion mit dem Namen securityCheck($speicher).
// Die Funktion soll zurückgeben:
// "Sicherheitswarnung", wenn die Sicherheitswert kleiner als 20 sind.


// Aufgabe 38:
// Speichere mindestens zwei Rückgabewerte in Variablen
// und gib sie anschließend aus.


// ------------------------------------------------------
// LEVEL 6 - Standardwerte in Funktionen
// Thema: Default-Parameter
// ------------------------------------------------------


// Aufgabe 39:
// Erstelle eine Funktion mit dem Namen starterRolle($rolle = "User").
// Die Funktion soll ausgeben:
// "Deine Startklasse ist <Rolle>."


// Aufgabe 40:
// Erstelle eine Funktion mit dem Namen startSystem($ort = "Localhost").
// Die Funktion soll ausgeben:
// "Du startest auf <Ort>."


// Aufgabe 41:
// Erstelle eine Funktion mit dem Namen standardTool($tool = "Terminal").
// Die Funktion soll ausgeben:
// "Du benutzt ein <Tool>."


// Aufgabe 42:
// Erstelle eine Funktion mit dem Namen userTitel($name = "Neo").
// Die Funktion soll ausgeben:
// "User <Name> ist bereit."


// Aufgabe 43:
// Rufe eine Funktion einmal ohne Wert
// und einmal mit einem eigenen Wert auf.


// ------------------------------------------------------
// LEVEL 7 - Kleine Rechenfunktionen
// Thema: Funktionen mit Zahlen
// ------------------------------------------------------


// Aufgabe 44:
// Erstelle eine Funktion mit dem Namen addiereSpeicher($speicher1, $speicher2).
// Die Funktion soll beide Werte addieren und zurückgeben.


// Aufgabe 45:
// Erstelle eine Funktion mit dem Namen zieheSpeicherAb($speicher, $schaden).
// Die Funktion soll die restlichen Speicher zurückgeben.


// Aufgabe 46:
// Erstelle eine Funktion mit dem Namen dateienNachBackup($dateien, $bonus).
// Die Funktion soll das gesamte Anzahl Dateien zurückgeben.


// Aufgabe 47:
// Erstelle eine Funktion mit dem Namen portsRest($gesamt, $benutzt).
// Die Funktion soll ausrechnen, wie viele Ports übrig bleiben.


// Aufgabe 48:
// Erstelle eine Funktion mit dem Namen securityLevelUp($level).
// Die Funktion soll das nächste Sicherheitslevel zurückgeben.


// ------------------------------------------------------
// BOSSFIGHT - Kombination aus allem
// Thema: Funktionen kreativ anwenden
// ------------------------------------------------------


// Aufgabe 49:
// Erstelle eine Funktion mit dem Namen userProfil($name, $rolle, $level).
// Die Funktion soll einen vollständigen Satz ausgeben:
// "<Name> ist ein <Rolle> auf Level <Level>."


// Aufgabe 50:
// Erstelle eine Funktion mit dem Namen auftragProfil($name, $ziel, $status).
// Die Funktion soll einen vollständigen Satz ausgeben.


// Aufgabe 51:
// Erstelle eine Funktion mit dem Namen scanStartInfo($held, $server, $ort).
// Die Funktion soll einen Satz zurückgeben,
// der alle drei Werte enthält.


// Aufgabe 52:
// Erstelle eine Funktion mit dem Namen speicherErweitern($speicher, $heilwert).
// Die Funktion soll die neuen Speicherwert zurückgeben.


// Aufgabe 53:
// Erstelle eine Funktion mit dem Namen dateiAuftrag($user, $server, $datei).
// Die Funktion soll einen IT-Satz ausgeben.


// Aufgabe 54:
// Erstelle eine Funktion mit dem Namen serverMeldung($server).
// Je nachdem, welcher Gegner übergeben wird,
// soll ein passender Satz zurückgegeben werden.
// Beispiel:
// Server -> "Der Server ist erreichbar!"
// Firewall -> "Die Firewall ist aktiv!"


// ------------------------------------------------------
// ULTRA-BOSS - Eigene Hacker-Funktionen
// Thema: kreativ werden
// ------------------------------------------------------


// Aufgabe 55:
// Erstelle deine eigene Funktion für ein IT-System.
// Die Funktion soll mindestens einen Parameter haben.


// Aufgabe 56:
// Erstelle deine eigene Funktion für eine Systemprüfung.
// Die Funktion soll mindestens zwei Parameter haben.


// Aufgabe 57:
// Erstelle deine eigene Funktion für eine Datei.
// Die Funktion soll etwas zurückgeben.


// Aufgabe 58:
// Erstelle deine eigene Funktion für einen Benutzer.
// Die Funktion soll mit einem Standardwert arbeiten.


// Aufgabe 59:
// Erstelle deine eigene Funktion,
// die mit Zahlen rechnet und etwas ausgibt.


// Aufgabe 60:
// Erstelle deine eigene Funktion,
// die mit User, Rolle und Sicherheitslevel arbeitet.


// ------------------------------------------------------
// EXTRA - Freiwillige Zusatzaufgaben
// ------------------------------------------------------


// Zusatzaufgabe 61:
// Erstelle eine Funktion mit dem Namen serverCheck($server).
// Die Funktion soll ausgeben:
// "<Server> ist ein Boss-Gegner!"


// Zusatzaufgabe 62:
// Erstelle eine Funktion mit dem Namen auftragEintrag($nummer, $name).
// Die Funktion soll einen kleinen Logbuch-Satz ausgeben.


// Zusatzaufgabe 63:
// Erstelle eine Funktion mit dem Namen dateiEntdeckt($ort).
// Die Funktion soll zurückgeben:
// "Auf <Ort> wurde eine Datei entdeckt!"


// Zusatzaufgabe 64:
// Erstelle eine Funktion mit dem Namen auftragStand($anzahl).
// Die Funktion soll ausgeben,
// wie viele IT-Aufträge du schon abgeschlossen hast.


// Zusatzaufgabe 65:
// Erstelle eine Funktion mit dem Namen userStatusSetzen($name, $speicher).
// Die Funktion soll zurückgeben:
// "<Name> hat jetzt Sicherheitslevel <Level>."


?>