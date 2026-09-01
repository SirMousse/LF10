<?php

// ======================================================
// PHP Aufgaben - Funktionen 
// Tierheim Edition
// Themen: Funktionen, Parameter, Rückgabewerte, void,
// Standardwerte, mehrere Parameter
// Jede Aufgabe ist als Kommentar formuliert
// Du kannst direkt unter jeder Aufgabe deinen Code schreiben
// ======================================================


// ------------------------------------------------------
// LEVEL 1 - Erste Tierheim-Funktionen
// Thema: einfache Funktionen ohne Parameter
// ------------------------------------------------------


// Aufgabe 1:
// Erstelle eine Funktion mit dem Namen halloTierheim().
// Die Funktion soll ausgeben:
// "Willkommen im Tierheim!"


// Aufgabe 2:
// Erstelle eine Funktion mit dem Namen futterZeit().
// Die Funktion soll ausgeben:
// "Es ist Fütterungszeit!"


// Aufgabe 3:
// Erstelle eine Funktion mit dem Namen pflegeStart().
// Die Funktion soll ausgeben:
// "Die Pflege beginnt!"


// Aufgabe 4:
// Erstelle eine Funktion mit dem Namen heilBehandlung().
// Die Funktion soll ausgeben:
// "Eine Behandlung wurde durchgeführt."


// Aufgabe 5:
// Erstelle eine Funktion mit dem Namen neuesTier().
// Die Funktion soll ausgeben:
// "Ein neues Tier ist angekommen!"


// Aufgabe 6:
// Erstelle eine Funktion mit dem Namen vermittlungStart().
// Die Funktion soll ausgeben:
// "Eine Vermittlung beginnt!"


// Aufgabe 7:
// Erstelle eine Funktion mit dem Namen spendeErhalten().
// Die Funktion soll ausgeben:
// "Das Tierheim hat eine Spende erhalten!"


// Aufgabe 8:
// Rufe mindestens drei deiner bisher erstellten Funktionen auf.


// ------------------------------------------------------
// LEVEL 2 - Funktionen mit einem Parameter
// Thema: Werte übergeben
// ------------------------------------------------------


// Aufgabe 9:
// Erstelle eine Funktion mit dem Namen begruesseTier($name).
// Die Funktion soll ausgeben:
// "Hallo, <Name>!"


// Aufgabe 10:
// Erstelle eine Funktion mit dem Namen tierArt($art).
// Die Funktion soll ausgeben:
// "Dieses Tier ist ein/e <Art>."


// Aufgabe 11:
// Erstelle eine Funktion mit dem Namen alterAnzeige($alter).
// Die Funktion soll ausgeben:
// "Das Tier ist <Alter> Jahre alt."


// Aufgabe 12:
// Erstelle eine Funktion mit dem Namen bereichName($bereich).
// Die Funktion soll ausgeben:
// "Du betrittst den Bereich <Bereich>."


// Aufgabe 13:
// Erstelle eine Funktion mit dem Namen pflegerName($pfleger).
// Die Funktion soll ausgeben:
// "<Pfleger> übernimmt die Pflege."


// Aufgabe 14:
// Erstelle eine Funktion mit dem Namen itemGefunden($item).
// Die Funktion soll ausgeben:
// "Du hast <Item> gefunden!"


// Aufgabe 15:
// Erstelle eine Funktion mit dem Namen futterName($futter).
// Die Funktion soll ausgeben:
// "Heute gibt es <Futter>."


// Aufgabe 16:
// Rufe mindestens drei Funktionen mit unterschiedlichen Tierheim-Werten auf.


// ------------------------------------------------------
// LEVEL 3 - Funktionen mit mehreren Parametern
// Thema: mehrere Werte verarbeiten
// ------------------------------------------------------


// Aufgabe 17:
// Erstelle eine Funktion mit dem Namen tierInfo($name, $art).
// Die Funktion soll ausgeben:
// "<Name> ist ein/e <Art>."


// Aufgabe 18:
// Erstelle eine Funktion mit dem Namen pflegeInfo($tier, $pfleger).
// Die Funktion soll ausgeben:
// "<Pfleger> kümmert sich um <Tier>!"


// Aufgabe 19:
// Erstelle eine Funktion mit dem Namen futterInfo($tier, $futter).
// Die Funktion soll ausgeben:
// "<Tier> bekommt <Futter>."


// Aufgabe 20:
// Erstelle eine Funktion mit dem Namen tierStatus($name, $alter).
// Die Funktion soll ausgeben:
// "<Name> ist <Alter> Jahre alt."


// Aufgabe 21:
// Erstelle eine Funktion mit dem Namen behandlungInfo($tier, $behandlung).
// Die Funktion soll ausgeben:
// "<Tier> bekommt <Behandlung>."


// Aufgabe 22:
// Erstelle eine Funktion mit dem Namen vermittlungInfo($tier, $familie).
// Die Funktion soll ausgeben:
// "<Tier> wird von <Familie> besucht."


// Aufgabe 23:
// Erstelle eine Funktion mit dem Namen tierBegleiter($name, $spielzeug).
// Die Funktion soll ausgeben:
// "<Name> spielt mit <Spielzeug>."


// Aufgabe 24:
// Rufe mindestens drei Funktionen mit zwei Parametern auf.


// ------------------------------------------------------
// LEVEL 4 - Funktionen mit Rückgabewerten
// Thema: return
// ------------------------------------------------------


// Aufgabe 25:
// Erstelle eine Funktion mit dem Namen gibTierName().
// Die Funktion soll den String "Bello" zurückgeben.


// Aufgabe 26:
// Erstelle eine Funktion mit dem Namen gibAlter().
// Die Funktion soll die Zahl 4 zurückgeben.


// Aufgabe 27:
// Erstelle eine Funktion mit dem Namen gibTierArt().
// Die Funktion soll den String "Hund" zurückgeben.


// Aufgabe 28:
// Erstelle eine Funktion mit dem Namen gibBereich().
// Die Funktion soll den String "Hundezimmer" zurückgeben.


// Aufgabe 29:
// Erstelle eine Funktion mit dem Namen gibFutterPortionen().
// Die Funktion soll die Zahl 6 zurückgeben.


// Aufgabe 30:
// Speichere den Rückgabewert einer Funktion in einer Variable
// und gib ihn anschließend aus.


// ------------------------------------------------------
// LEVEL 5 - Rückgabewerte mit Parametern
// Thema: Funktionen, die etwas berechnen oder zurückgeben
// ------------------------------------------------------


// Aufgabe 31:
// Erstelle eine Funktion mit dem Namen tierSatz($name).
// Die Funktion soll folgenden Text zurückgeben:
// "<Name> wartet auf ein Zuhause!"


// Aufgabe 32:
// Erstelle eine Funktion mit dem Namen alterPlusEins($alter).
// Die Funktion soll das Alter + 1 zurückgeben.


// Aufgabe 33:
// Erstelle eine Funktion mit dem Namen gesundheitVerdoppeln($wert).
// Die Funktion soll den doppelten Gesundheitswert zurückgeben.


// Aufgabe 34:
// Erstelle eine Funktion mit dem Namen futterAddieren($portionen).
// Die Funktion soll 3 Futterportionen addieren und zurückgeben.


// Aufgabe 35:
// Erstelle eine Funktion mit dem Namen tierBeschreibung($name, $art).
// Die Funktion soll einen Satz zurückgeben:
// "<Name> ist ein/e <Art>."


// Aufgabe 36:
// Erstelle eine Funktion mit dem Namen vermittlungsText($anzahl).
// Die Funktion soll zurückgeben:
// "Heute gab es <Anzahl> Vermittlungen."


// Aufgabe 37:
// Erstelle eine Funktion mit dem Namen pflegeCheck($gesundheit).
// Die Funktion soll zurückgeben:
// "Braucht besondere Pflege", wenn der Gesundheitswert kleiner als 20 ist.


// Aufgabe 38:
// Speichere mindestens zwei Rückgabewerte in Variablen
// und gib sie anschließend aus.


// ------------------------------------------------------
// LEVEL 6 - Standardwerte in Funktionen
// Thema: Default-Parameter
// ------------------------------------------------------


// Aufgabe 39:
// Erstelle eine Funktion mit dem Namen standardTier($art = "Hund").
// Die Funktion soll ausgeben:
// "Das Standard-Tier ist <Art>."


// Aufgabe 40:
// Erstelle eine Funktion mit dem Namen startBereich($bereich = "Katzenzimmer").
// Die Funktion soll ausgeben:
// "Du startest im Bereich <Bereich>."


// Aufgabe 41:
// Erstelle eine Funktion mit dem Namen standardFutter($futter = "Trockenfutter").
// Die Funktion soll ausgeben:
// "Heute gibt es <Futter>."


// Aufgabe 42:
// Erstelle eine Funktion mit dem Namen tierTitel($name = "Luna").
// Die Funktion soll ausgeben:
// "Tier <Name> ist bereit für die Pflege."


// Aufgabe 43:
// Rufe eine Funktion einmal ohne Wert
// und einmal mit einem eigenen Wert auf.


// ------------------------------------------------------
// LEVEL 7 - Kleine Rechenfunktionen
// Thema: Funktionen mit Zahlen
// ------------------------------------------------------


// Aufgabe 44:
// Erstelle eine Funktion mit dem Namen addiereFutter($f1, $f2).
// Die Funktion soll beide Werte addieren und zurückgeben.


// Aufgabe 45:
// Erstelle eine Funktion mit dem Namen zieheStressAb($gesundheit, $stress).
// Die Funktion soll den neuen Gesundheitswert zurückgeben.


// Aufgabe 46:
// Erstelle eine Funktion mit dem Namen spendenNachTag($spenden, $bonus).
// Die Funktion soll die gesamte Spendensumme zurückgeben.


// Aufgabe 47:
// Erstelle eine Funktion mit dem Namen portionenRest($gesamt, $benutzt).
// Die Funktion soll ausrechnen, wie viele Portionen übrig bleiben.


// Aufgabe 48:
// Erstelle eine Funktion mit dem Namen alterCheck($alter).
// Die Funktion soll das nächste Alter zurückgeben.


// ------------------------------------------------------
// BOSSFIGHT - Kombination aus allem
// Thema: Funktionen kreativ anwenden
// ------------------------------------------------------


// Aufgabe 49:
// Erstelle eine Funktion mit dem Namen tierProfil($name, $art, $alter).
// Die Funktion soll einen vollständigen Satz ausgeben:
// "<Name> ist ein/e <Art> und <Alter> Jahre alt."


// Aufgabe 50:
// Erstelle eine Funktion mit dem Namen pflegerProfil($name, $bereich, $aufgabe).
// Die Funktion soll einen vollständigen Satz ausgeben.


// Aufgabe 51:
// Erstelle eine Funktion mit dem Namen vermittlungStartInfo($tier, $familie, $bereich).
// Die Funktion soll einen Satz zurückgeben,
// der alle drei Werte enthält.


// Aufgabe 52:
// Erstelle eine Funktion mit dem Namen heilung($gesundheit, $heilwert).
// Die Funktion soll die geheilten Gesundheitspunkte zurückgeben.


// Aufgabe 53:
// Erstelle eine Funktion mit dem Namen versorgungsMission($tier, $bereich, $item).
// Die Funktion soll einen Tierheim-Satz ausgeben.


// Aufgabe 54:
// Erstelle eine Funktion mit dem Namen tierRuf($art).
// Je nachdem, welche Tierart übergeben wird,
// soll ein passender Satz zurückgegeben werden.
// Beispiel:
// Hund -> "Wuff! Bello freut sich!"
// Katze -> "Miau! Luna schnurrt."


// ------------------------------------------------------
// ULTRA-BOSS - Eigene Tierheim-Funktionen
// Thema: kreativ werden
// ------------------------------------------------------


// Aufgabe 55:
// Erstelle deine eigene Funktion für ein Tier.
// Die Funktion soll mindestens einen Parameter haben.


// Aufgabe 56:
// Erstelle deine eigene Funktion für eine Behandlung.
// Die Funktion soll mindestens zwei Parameter haben.


// Aufgabe 57:
// Erstelle deine eigene Funktion für eine Vermittlung.
// Die Funktion soll etwas zurückgeben.


// Aufgabe 58:
// Erstelle deine eigene Funktion für einen Pfleger.
// Die Funktion soll mit einem Standardwert arbeiten.


// Aufgabe 59:
// Erstelle deine eigene Funktion,
// die mit Zahlen rechnet und etwas ausgibt.


// Aufgabe 60:
// Erstelle deine eigene Funktion,
// die mit Tier, Art und Alter arbeitet.


// ------------------------------------------------------
// EXTRA - Freiwillige Zusatzaufgaben
// ------------------------------------------------------


// Zusatzaufgabe 61:
// Erstelle eine Funktion mit dem Namen notfallCheck($tier).
// Die Funktion soll ausgeben:
// "<Tier> braucht sofort Hilfe!"


// Zusatzaufgabe 62:
// Erstelle eine Funktion mit dem Namen tierKarte($nummer, $name).
// Die Funktion soll einen kleinen Tierheimkarten-Satz ausgeben.


// Zusatzaufgabe 63:
// Erstelle eine Funktion mit dem Namen neuesZuhause($name).
// Die Funktion soll zurückgeben:
// "<Name> hat ein neues Zuhause gefunden!"


// Zusatzaufgabe 64:
// Erstelle eine Funktion mit dem Namen vermittlungsStand($anzahl).
// Die Funktion soll ausgeben,
// wie viele Tiere bereits vermittelt wurden.


// Zusatzaufgabe 65:
// Erstelle eine Funktion mit dem Namen tierHeilen($name, $gesundheit).
// Die Funktion soll zurückgeben:
// "<Name> wurde auf <Gesundheit> Gesundheit geheilt."


?>