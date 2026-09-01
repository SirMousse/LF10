<?php

// ======================================================
// PHP Aufgaben - Funktionen 
// Detektiv Edition
// Themen: Funktionen, Parameter, Rückgabewerte, void,
// Standardwerte, mehrere Parameter
// Jede Aufgabe ist als Kommentar formuliert
// Du kannst direkt unter jeder Aufgabe deinen Code schreiben
// ======================================================


// ------------------------------------------------------
// LEVEL 1 - Erste Detektiv-Funktionen
// Thema: einfache Funktionen ohne Parameter
// ------------------------------------------------------


// Aufgabe 1:
// Erstelle eine Funktion mit dem Namen halloDetektiv().
// Die Funktion soll ausgeben:
// "Willkommen im Detektivbüro!"


// Aufgabe 2:
// Erstelle eine Funktion mit dem Namen ermittlungStart().
// Die Funktion soll ausgeben:
// "Die Ermittlungen beginnen!"


// Aufgabe 3:
// Erstelle eine Funktion mit dem Namen fallStart().
// Die Funktion soll ausgeben:
// "Ein neuer Fall beginnt!"


// Aufgabe 4:
// Erstelle eine Funktion mit dem Namen kaffeePause().
// Die Funktion soll ausgeben:
// "Der Detektiv macht eine Kaffeepause."


// Aufgabe 5:
// Erstelle eine Funktion mit dem Namen hinweisGefunden().
// Die Funktion soll ausgeben:
// "Ein wichtiger Hinweis wurde entdeckt!"


// Aufgabe 6:
// Erstelle eine Funktion mit dem Namen verdaechtigerBegegnung().
// Die Funktion soll ausgeben:
// "Eine verdächtige Person erscheint!"


// Aufgabe 7:
// Erstelle eine Funktion mit dem Namen fallErhalten().
// Die Funktion soll ausgeben:
// "Du hast einen neuen Fall erhalten!"


// Aufgabe 8:
// Rufe mindestens drei deiner bisher erstellten Funktionen auf.


// ------------------------------------------------------
// LEVEL 2 - Funktionen mit einem Parameter
// Thema: Werte übergeben
// ------------------------------------------------------


// Aufgabe 9:
// Erstelle eine Funktion mit dem Namen begruesseDetektiv($name).
// Die Funktion soll ausgeben:
// "Willkommen im Detektivbüro, <Name>!"


// Aufgabe 10:
// Erstelle eine Funktion mit dem Namen verdaechtigerName($verdaechtiger).
// Die Funktion soll ausgeben:
// "Du befragst <Verdaechtiger>."


// Aufgabe 11:
// Erstelle eine Funktion mit dem Namen fallNummer($nummer).
// Die Funktion soll ausgeben:
// "Du bearbeitest Fall Nummer <Nummer>."


// Aufgabe 12:
// Erstelle eine Funktion mit dem Namen tatortBetreten($ort).
// Die Funktion soll ausgeben:
// "Du untersuchst den Tatort <Ort>."


// Aufgabe 13:
// Erstelle eine Funktion mit dem Namen detektivRolle($rolle).
// Die Funktion soll ausgeben:
// "Deine Ermittlerrolle ist <Rolle>."


// Aufgabe 14:
// Erstelle eine Funktion mit dem Namen beweisGefunden($beweis).
// Die Funktion soll ausgeben:
// "Du hast den Beweis <Beweis> gefunden!"


// Aufgabe 15:
// Erstelle eine Funktion mit dem Namen werkzeugName($werkzeug).
// Die Funktion soll ausgeben:
// "Dein Ermittlungswerkzeug ist <Werkzeug>."


// Aufgabe 16:
// Rufe mindestens drei Funktionen mit unterschiedlichen Detektiv-Werten auf.


// ------------------------------------------------------
// LEVEL 3 - Funktionen mit mehreren Parametern
// Thema: mehrere Werte verarbeiten
// ------------------------------------------------------


// Aufgabe 17:
// Erstelle eine Funktion mit dem Namen detektivInfo($name, $rolle).
// Die Funktion soll ausgeben:
// "<Name> ist ein <Rolle>."


// Aufgabe 18:
// Erstelle eine Funktion mit dem Namen verhoerInfo($held, $verdaechtiger).
// Die Funktion soll ausgeben:
// "<Detektiv> kämpft gegen <Verdaechtiger>!"


// Aufgabe 19:
// Erstelle eine Funktion mit dem Namen werkzeugKombi($held, $werkzeug).
// Die Funktion soll ausgeben:
// "<Detektiv> benutzt <Werkzeug>."


// Aufgabe 20:
// Erstelle eine Funktion mit dem Namen fallStatus($name, $nummer).
// Die Funktion soll ausgeben:
// "<Name> ist auf Level <Nummer>."


// Aufgabe 21:
// Erstelle eine Funktion mit dem Namen beweisUntersuchung($held, $beweis).
// Die Funktion soll ausgeben:
// "<Detektiv> benutzt <Beweis>."


// Aufgabe 22:
// Erstelle eine Funktion mit dem Namen tatortFall($ort, $fall).
// Die Funktion soll ausgeben:
// "Am Tatort <Ort> wartet der Fall <Fall>."


// Aufgabe 23:
// Erstelle eine Funktion mit dem Namen ermittlungsPartner($name, $partner).
// Die Funktion soll ausgeben:
// "<Name> ermittelt mit <Partner>."


// Aufgabe 24:
// Rufe mindestens drei Funktionen mit zwei Parametern auf.


// ------------------------------------------------------
// LEVEL 4 - Funktionen mit Rückgabewerten
// Thema: return
// ------------------------------------------------------


// Aufgabe 25:
// Erstelle eine Funktion mit dem Namen gibDetektivName().
// Die Funktion soll den String "Sherlock" zurückgeben.


// Aufgabe 26:
// Erstelle eine Funktion mit dem Namen gibFallNummer().
// Die Funktion soll die Zahl 25 zurückgeben.


// Aufgabe 27:
// Erstelle eine Funktion mit dem Namen gibRolle().
// Die Funktion soll den String "Privatdetektiv" zurückgeben.


// Aufgabe 28:
// Erstelle eine Funktion mit dem Namen gibTatort().
// Die Funktion soll den String "Alte Villa" zurückgeben.


// Aufgabe 29:
// Erstelle eine Funktion mit dem Namen gibHinweise().
// Die Funktion soll die Zahl 10 zurückgeben.


// Aufgabe 30:
// Speichere den Rückgabewert einer Funktion in einer Variable
// und gib ihn anschließend aus.


// ------------------------------------------------------
// LEVEL 5 - Rückgabewerte mit Parametern
// Thema: Funktionen, die etwas berechnen oder zurückgeben
// ------------------------------------------------------


// Aufgabe 31:
// Erstelle eine Funktion mit dem Namen detektivSatz($name).
// Die Funktion soll folgenden Text zurückgeben:
// "<Name> ist bereit für den nächsten Fall!"


// Aufgabe 32:
// Erstelle eine Funktion mit dem Namen fallPlusEins($nummer).
// Die Funktion soll die Fallnummer + 1 zurückgeben.


// Aufgabe 33:
// Erstelle eine Funktion mit dem Namen hinweiseVerdoppeln($hinweise).
// Die Funktion soll die doppelte Anzahl Hinweise zurückgeben.


// Aufgabe 34:
// Erstelle eine Funktion mit dem Namen hinweiseAddieren($hinweise).
// Die Funktion soll 5 Hinweise addieren und zurückgeben.


// Aufgabe 35:
// Erstelle eine Funktion mit dem Namen detektivBeschreibung($name, $rolle).
// Die Funktion soll einen Satz zurückgeben:
// "<Name> ist ein <Rolle>."


// Aufgabe 36:
// Erstelle eine Funktion mit dem Namen fallText($anzahl).
// Die Funktion soll zurückgeben:
// "Du hast <Anzahl> Fälle gelöst."


// Aufgabe 37:
// Erstelle eine Funktion mit dem Namen spurenCheck($hinweise).
// Die Funktion soll zurückgeben:
// "Es fehlen noch Hinweise", wenn die Anzahl der Hinweise kleiner als 3 sind.


// Aufgabe 38:
// Speichere mindestens zwei Rückgabewerte in Variablen
// und gib sie anschließend aus.


// ------------------------------------------------------
// LEVEL 6 - Standardwerte in Funktionen
// Thema: Default-Parameter
// ------------------------------------------------------


// Aufgabe 39:
// Erstelle eine Funktion mit dem Namen starterRolle($rolle = "Privatdetektiv").
// Die Funktion soll ausgeben:
// "Deine Startklasse ist <Rolle>."


// Aufgabe 40:
// Erstelle eine Funktion mit dem Namen startTatort($ort = "Detektivbüro").
// Die Funktion soll ausgeben:
// "Deine Ermittlung startet in <Ort>."


// Aufgabe 41:
// Erstelle eine Funktion mit dem Namen standardWerkzeug($werkzeug = "Lupe").
// Die Funktion soll ausgeben:
// "Du benutzt ein <Werkzeug>."


// Aufgabe 42:
// Erstelle eine Funktion mit dem Namen detektivTitel($name = "Sherlock").
// Die Funktion soll ausgeben:
// "Detektiv <Name> ist bereit."


// Aufgabe 43:
// Rufe eine Funktion einmal ohne Wert
// und einmal mit einem eigenen Wert auf.


// ------------------------------------------------------
// LEVEL 7 - Kleine Rechenfunktionen
// Thema: Funktionen mit Zahlen
// ------------------------------------------------------


// Aufgabe 44:
// Erstelle eine Funktion mit dem Namen addiereHinweise($hinweise1, $hinweise2).
// Die Funktion soll beide Werte addieren und zurückgeben.


// Aufgabe 45:
// Erstelle eine Funktion mit dem Namen zieheHinweiseAb($hinweise, $schaden).
// Die Funktion soll die restlichen Hinweise zurückgeben.


// Aufgabe 46:
// Erstelle eine Funktion mit dem Namen hinweiseNachFall($hinweise, $bonus).
// Die Funktion soll das gesamte Anzahl Hinweise zurückgeben.


// Aufgabe 47:
// Erstelle eine Funktion mit dem Namen beweiseRest($gesamt, $benutzt).
// Die Funktion soll ausrechnen, wie viele Beweise übrig bleiben.


// Aufgabe 48:
// Erstelle eine Funktion mit dem Namen naechsterFall($nummer).
// Die Funktion soll die nächste Fallnummer zurückgeben.


// ------------------------------------------------------
// BOSSFIGHT - Kombination aus allem
// Thema: Funktionen kreativ anwenden
// ------------------------------------------------------


// Aufgabe 49:
// Erstelle eine Funktion mit dem Namen detektivProfil($name, $rolle, $nummer).
// Die Funktion soll einen vollständigen Satz ausgeben:
// "<Name> ist ein <Rolle> auf Level <Nummer>."


// Aufgabe 50:
// Erstelle eine Funktion mit dem Namen fallProfil($name, $tatort, $hinweis).
// Die Funktion soll einen vollständigen Satz ausgeben.


// Aufgabe 51:
// Erstelle eine Funktion mit dem Namen fallStartInfo($held, $verdaechtiger, $ort).
// Die Funktion soll einen Satz zurückgeben,
// der alle drei Werte enthält.


// Aufgabe 52:
// Erstelle eine Funktion mit dem Namen hinweisHinzufuegen($hinweise, $heilwert).
// Die Funktion soll die neue Anzahl Hinweise zurückgeben.


// Aufgabe 53:
// Erstelle eine Funktion mit dem Namen beweisMission($held, $ort, $beweis).
// Die Funktion soll einen Detektiv-Satz ausgeben.


// Aufgabe 54:
// Erstelle eine Funktion mit dem Namen verdaechtigerRuf($verdaechtiger).
// Je nachdem, welcher Gegner übergeben wird,
// soll ein passender Satz zurückgegeben werden.
// Beispiel:
// Butler -> "Der Butler wirkt verdächtig!"
// Gärtner -> "Der Gärtner hat etwas beobachtet!"


// ------------------------------------------------------
// ULTRA-BOSS - Eigene Detektiv-Funktionen
// Thema: kreativ werden
// ------------------------------------------------------


// Aufgabe 55:
// Erstelle deine eigene Funktion für ein verdächtige Person.
// Die Funktion soll mindestens einen Parameter haben.


// Aufgabe 56:
// Erstelle deine eigene Funktion für ein Verhör.
// Die Funktion soll mindestens zwei Parameter haben.


// Aufgabe 57:
// Erstelle deine eigene Funktion für einen Beweis.
// Die Funktion soll etwas zurückgeben.


// Aufgabe 58:
// Erstelle deine eigene Funktion für einen Detektiv.
// Die Funktion soll mit einem Standardwert arbeiten.


// Aufgabe 59:
// Erstelle deine eigene Funktion,
// die mit Zahlen rechnet und etwas ausgibt.


// Aufgabe 60:
// Erstelle deine eigene Funktion,
// die mit Detektiv, Rolle und Fallnummer arbeitet.


// ------------------------------------------------------
// EXTRA - Freiwillige Zusatzaufgaben
// ------------------------------------------------------


// Zusatzaufgabe 61:
// Erstelle eine Funktion mit dem Namen verdaechtigerCheck($verdaechtiger).
// Die Funktion soll ausgeben:
// "<Verdaechtiger> ist ein Boss-Gegner!"


// Zusatzaufgabe 62:
// Erstelle eine Funktion mit dem Namen fallEintrag($nummer, $name).
// Die Funktion soll einen kleinen Ermittlungsakten-Satz ausgeben.


// Zusatzaufgabe 63:
// Erstelle eine Funktion mit dem Namen spurEntdeckt($ort).
// Die Funktion soll zurückgeben:
// "In <Ort> wurde eine neue Spur entdeckt!"


// Zusatzaufgabe 64:
// Erstelle eine Funktion mit dem Namen fallStand($anzahl).
// Die Funktion soll ausgeben,
// wie viele Fälle du schon gelöst hast.


// Zusatzaufgabe 65:
// Erstelle eine Funktion mit dem Namen detektivFortschritt($name, $hinweise).
// Die Funktion soll zurückgeben:
// "<Name> hat jetzt <Hinweise> Hinweise gesammelt."


?>