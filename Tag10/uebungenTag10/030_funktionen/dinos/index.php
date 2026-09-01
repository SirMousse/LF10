<?php

// ======================================================
// PHP Aufgaben - Funktionen 
// Dino Edition
// Themen: Funktionen, Parameter, Rückgabewerte, void,
// Standardwerte, mehrere Parameter
// Jede Aufgabe ist als Kommentar formuliert
// Du kannst direkt unter jeder Aufgabe deinen Code schreiben
// ======================================================


// ------------------------------------------------------
// LEVEL 1 - Erste Dino-Funktionen
// Thema: einfache Funktionen ohne Parameter
// ------------------------------------------------------


// Aufgabe 1:
// Erstelle eine Funktion mit dem Namen halloDino().
// Die Funktion soll ausgeben:
// "Willkommen in der Dino-Welt!"


// Aufgabe 2:
// Erstelle eine Funktion mit dem Namen dinoRuf().
// Die Funktion soll ausgeben:
// "Auf zur Dino-Expedition!"


// Aufgabe 3:
// Erstelle eine Funktion mit dem Namen dinoBegegnung().
// Die Funktion soll ausgeben:
// "Ein Dinosaurier taucht auf!"


// Aufgabe 4:
// Erstelle eine Funktion mit dem Namen futterPause().
// Die Funktion soll ausgeben:
// "Der Dino bekommt etwas zu fressen."


// Aufgabe 5:
// Erstelle eine Funktion mit dem Namen fossilGefunden().
// Die Funktion soll ausgeben:
// "Ein Fossil wurde entdeckt!"


// Aufgabe 6:
// Erstelle eine Funktion mit dem Namen raubDinoBegegnung().
// Die Funktion soll ausgeben:
// "Ein Raubsaurier erscheint!"


// Aufgabe 7:
// Erstelle eine Funktion mit dem Namen expeditionStart().
// Die Funktion soll ausgeben:
// "Du hast eine neue Dino-Expedition gestartet!"


// Aufgabe 8:
// Rufe mindestens drei deiner bisher erstellten Funktionen auf.


// ------------------------------------------------------
// LEVEL 2 - Funktionen mit einem Parameter
// Thema: Werte übergeben
// ------------------------------------------------------


// Aufgabe 9:
// Erstelle eine Funktion mit dem Namen begruesseForscher($name).
// Die Funktion soll ausgeben:
// "Willkommen im Dino-Park, <Name>!"


// Aufgabe 10:
// Erstelle eine Funktion mit dem Namen dinoName($dino).
// Die Funktion soll ausgeben:
// "Du entdeckst einen <Dino>."


// Aufgabe 11:
// Erstelle eine Funktion mit dem Namen groesseAnzeige($groesse).
// Die Funktion soll ausgeben:
// "Der Dino ist <Groesse> Meter groß."


// Aufgabe 12:
// Erstelle eine Funktion mit dem Namen gebietBetreten($ort).
// Die Funktion soll ausgeben:
// "Du betrittst das Gebiet <Ort>."


// Aufgabe 13:
// Erstelle eine Funktion mit dem Namen dinoArt($art).
// Die Funktion soll ausgeben:
// "Die Dino-Art ist <Art>."


// Aufgabe 14:
// Erstelle eine Funktion mit dem Namen fossilTeilGefunden($fossil).
// Die Funktion soll ausgeben:
// "Du hast <Fossil> gefunden!"


// Aufgabe 15:
// Erstelle eine Funktion mit dem Namen futterName($futter).
// Die Funktion soll ausgeben:
// "Das Dino-Futter ist <Futter>."


// Aufgabe 16:
// Rufe mindestens drei Funktionen mit unterschiedlichen Dino-Werten auf.


// ------------------------------------------------------
// LEVEL 3 - Funktionen mit mehreren Parametern
// Thema: mehrere Werte verarbeiten
// ------------------------------------------------------


// Aufgabe 17:
// Erstelle eine Funktion mit dem Namen dinoInfo($name, $art).
// Die Funktion soll ausgeben:
// "<Name> ist ein <Art>."


// Aufgabe 18:
// Erstelle eine Funktion mit dem Namen begegnungsInfo($forscher, $dino).
// Die Funktion soll ausgeben:
// "<Forscher> begegnet <Dino>!"


// Aufgabe 19:
// Erstelle eine Funktion mit dem Namen futterKombi($dino, $futter).
// Die Funktion soll ausgeben:
// "<Dino> frisst <Futter>."


// Aufgabe 20:
// Erstelle eine Funktion mit dem Namen dinoStatus($name, $alter).
// Die Funktion soll ausgeben:
// "<Name> ist <Alter> Jahre alt."


// Aufgabe 21:
// Erstelle eine Funktion mit dem Namen fossilUntersuchung($forscher, $fossil).
// Die Funktion soll ausgeben:
// "<Forscher> untersucht <Fossil>."


// Aufgabe 22:
// Erstelle eine Funktion mit dem Namen gebietMission($ort, $dino).
// Die Funktion soll ausgeben:
// "In <Ort> lebt der Dino <Dino>."


// Aufgabe 23:
// Erstelle eine Funktion mit dem Namen expeditionBegleiter($name, $begleiter).
// Die Funktion soll ausgeben:
// "<Name> erforscht den Park mit <Begleiter>."


// Aufgabe 24:
// Rufe mindestens drei Funktionen mit zwei Parametern auf.


// ------------------------------------------------------
// LEVEL 4 - Funktionen mit Rückgabewerten
// Thema: return
// ------------------------------------------------------


// Aufgabe 25:
// Erstelle eine Funktion mit dem Namen gibDinoName().
// Die Funktion soll den String "Rexi" zurückgeben.


// Aufgabe 26:
// Erstelle eine Funktion mit dem Namen gibDinoAlter().
// Die Funktion soll die Zahl 12 zurückgeben.


// Aufgabe 27:
// Erstelle eine Funktion mit dem Namen gibDinoArt().
// Die Funktion soll den String "Tyrannosaurus Rex" zurückgeben.


// Aufgabe 28:
// Erstelle eine Funktion mit dem Namen gibFundort().
// Die Funktion soll den String "Fossilien-Canyon" zurückgeben.


// Aufgabe 29:
// Erstelle eine Funktion mit dem Namen gibFossilien().
// Die Funktion soll die Zahl 100 zurückgeben.


// Aufgabe 30:
// Speichere den Rückgabewert einer Funktion in einer Variable
// und gib ihn anschließend aus.


// ------------------------------------------------------
// LEVEL 5 - Rückgabewerte mit Parametern
// Thema: Funktionen, die etwas berechnen oder zurückgeben
// ------------------------------------------------------


// Aufgabe 31:
// Erstelle eine Funktion mit dem Namen dinoSatz($name).
// Die Funktion soll folgenden Text zurückgeben:
// "<Name> ist bereit für die Dino-Tour!"


// Aufgabe 32:
// Erstelle eine Funktion mit dem Namen alterPlusEins($alter).
// Die Funktion soll das Alter + 1 zurückgeben.


// Aufgabe 33:
// Erstelle eine Funktion mit dem Namen gewichtVerdoppeln($gewicht).
// Die Funktion soll das doppelte Gewicht zurückgeben.


// Aufgabe 34:
// Erstelle eine Funktion mit dem Namen fossilienAddieren($fossilien).
// Die Funktion soll 50 Fossilien addieren und zurückgeben.


// Aufgabe 35:
// Erstelle eine Funktion mit dem Namen dinoBeschreibung($name, $art).
// Die Funktion soll einen Satz zurückgeben:
// "<Name> ist ein <Art>."


// Aufgabe 36:
// Erstelle eine Funktion mit dem Namen fundText($anzahl).
// Die Funktion soll zurückgeben:
// "Du hast <Anzahl> Fossilien gefunden."


// Aufgabe 37:
// Erstelle eine Funktion mit dem Namen raubDinoCheck($abstand).
// Die Funktion soll zurückgeben:
// "Achtung, Raubsaurier in der Nähe!", wenn der Abstand kleiner als 20 Meter ist.


// Aufgabe 38:
// Speichere mindestens zwei Rückgabewerte in Variablen
// und gib sie anschließend aus.


// ------------------------------------------------------
// LEVEL 6 - Standardwerte in Funktionen
// Thema: Default-Parameter
// ------------------------------------------------------


// Aufgabe 39:
// Erstelle eine Funktion mit dem Namen starterDino($art = "Triceratops").
// Die Funktion soll ausgeben:
// "Dein Start-Dino ist <Art>."


// Aufgabe 40:
// Erstelle eine Funktion mit dem Namen startGebiet($ort = "Dino-Camp").
// Die Funktion soll ausgeben:
// "Deine Expedition startet in <Ort>."


// Aufgabe 41:
// Erstelle eine Funktion mit dem Namen standardFutter($futter = "Blätter").
// Die Funktion soll ausgeben:
// "Der Dino frisst <Futter>."


// Aufgabe 42:
// Erstelle eine Funktion mit dem Namen dinoTitel($name = "Rexi").
// Die Funktion soll ausgeben:
// "Dino <Name> ist bereit."


// Aufgabe 43:
// Rufe eine Funktion einmal ohne Wert
// und einmal mit einem eigenen Wert auf.


// ------------------------------------------------------
// LEVEL 7 - Kleine Rechenfunktionen
// Thema: Funktionen mit Zahlen
// ------------------------------------------------------


// Aufgabe 44:
// Erstelle eine Funktion mit dem Namen addiereGewicht($gewicht1, $gewicht2).
// Die Funktion soll beide Werte addieren und zurückgeben.


// Aufgabe 45:
// Erstelle eine Funktion mit dem Namen zieheFutterAb($vorrat, $gefressen).
// Die Funktion soll den restlichen Futtervorrat zurückgeben.


// Aufgabe 46:
// Erstelle eine Funktion mit dem Namen fossilienNachFund($fossilien, $bonus).
// Die Funktion soll die gesamte Anzahl an Fossilien zurückgeben.


// Aufgabe 47:
// Erstelle eine Funktion mit dem Namen eierRest($gesamt, $benutzt).
// Die Funktion soll ausrechnen, wie viele Dino-Eier übrig bleiben.


// Aufgabe 48:
// Erstelle eine Funktion mit dem Namen naechstesAlter($alter).
// Die Funktion soll das nächste Alter zurückgeben.


// ------------------------------------------------------
// BOSSFIGHT - Kombination aus allem
// Thema: Funktionen kreativ anwenden
// ------------------------------------------------------


// Aufgabe 49:
// Erstelle eine Funktion mit dem Namen dinoProfil($name, $art, $alter).
// Die Funktion soll einen vollständigen Satz ausgeben:
// "<Name> ist ein <Art> und <Alter> Jahre alt."


// Aufgabe 50:
// Erstelle eine Funktion mit dem Namen expeditionsProfil($name, $gebiet, $fund).
// Die Funktion soll einen vollständigen Satz ausgeben.


// Aufgabe 51:
// Erstelle eine Funktion mit dem Namen dinoFundInfo($forscher, $dino, $ort).
// Die Funktion soll einen Satz zurückgeben,
// der alle drei Werte enthält.


// Aufgabe 52:
// Erstelle eine Funktion mit dem Namen fuetterung($gewicht, $futtermenge).
// Die Funktion soll das neue Gewicht zurückgeben.


// Aufgabe 53:
// Erstelle eine Funktion mit dem Namen fossilMission($forscher, $ort, $fossil).
// Die Funktion soll einen Dino-Satz ausgeben.


// Aufgabe 54:
// Erstelle eine Funktion mit dem Namen dinoWarnung($dino).
// Je nachdem, welcher Dino übergeben wird,
// soll ein passender Satz zurückgegeben werden.
// Beispiel:
// T-Rex -> "Ein T-Rex versperrt den Weg!"
// Raptor -> "Ein Raptor kommt näher!"


// ------------------------------------------------------
// ULTRA-BOSS - Eigene Dino-Funktionen
// Thema: kreativ werden
// ------------------------------------------------------


// Aufgabe 55:
// Erstelle deine eigene Funktion für einen Dinosaurier.
// Die Funktion soll mindestens einen Parameter haben.


// Aufgabe 56:
// Erstelle deine eigene Funktion für eine Dino-Begegnung.
// Die Funktion soll mindestens zwei Parameter haben.


// Aufgabe 57:
// Erstelle deine eigene Funktion für einen Fossilienfund.
// Die Funktion soll etwas zurückgeben.


// Aufgabe 58:
// Erstelle deine eigene Funktion für einen Dino.
// Die Funktion soll mit einem Standardwert arbeiten.


// Aufgabe 59:
// Erstelle deine eigene Funktion,
// die mit Zahlen rechnet und etwas ausgibt.


// Aufgabe 60:
// Erstelle deine eigene Funktion,
// die mit Dino, Art und Alter arbeitet.


// ------------------------------------------------------
// EXTRA - Freiwillige Zusatzaufgaben
// ------------------------------------------------------


// Zusatzaufgabe 61:
// Erstelle eine Funktion mit dem Namen trexCheck($dino).
// Die Funktion soll ausgeben:
// "<Dino> ist ein gefährlicher Raubsaurier!"


// Zusatzaufgabe 62:
// Erstelle eine Funktion mit dem Namen fundEintrag($nummer, $name).
// Die Funktion soll einen kleinen Forscherbuch-Satz ausgeben.


// Zusatzaufgabe 63:
// Erstelle eine Funktion mit dem Namen fossilEntdeckt($ort).
// Die Funktion soll zurückgeben:
// "In <Ort> wurde ein Fossil entdeckt!"


// Zusatzaufgabe 64:
// Erstelle eine Funktion mit dem Namen fossilStand($anzahl).
// Die Funktion soll ausgeben,
// wie viele Fossilien du schon gefunden hast.


// Zusatzaufgabe 65:
// Erstelle eine Funktion mit dem Namen dinoFuettern($name, $gewicht).
// Die Funktion soll zurückgeben:
// "<Name> wiegt nach dem Füttern <Gewicht> kg."


?>