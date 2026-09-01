<?php

// ======================================================
// PHP Aufgaben - Funktionen 
// Abenteuer Edition
// Themen: Funktionen, Parameter, Rückgabewerte, void,
// Standardwerte, mehrere Parameter
// Jede Aufgabe ist als Kommentar formuliert
// Du kannst direkt unter jeder Aufgabe deinen Code schreiben
// ======================================================


// ------------------------------------------------------
// LEVEL 1 - Erste Abenteuer-Funktionen
// Thema: einfache Funktionen ohne Parameter
// ------------------------------------------------------


// Aufgabe 1:
// Erstelle eine Funktion mit dem Namen halloAbenteuer().
// Die Funktion soll ausgeben:
// "Willkommen zum Abenteuer!"


// Aufgabe 2:
// Erstelle eine Funktion mit dem Namen heldenRuf().
// Die Funktion soll ausgeben:
// "Auf in die Quest!"


// Aufgabe 3:
// Erstelle eine Funktion mit dem Namen kampfStart().
// Die Funktion soll ausgeben:
// "Der Kampf beginnt!"


// Aufgabe 4:
// Erstelle eine Funktion mit dem Namen heilTrank().
// Die Funktion soll ausgeben:
// "Ein Heiltrank wurde benutzt."


// Aufgabe 5:
// Erstelle eine Funktion mit dem Namen schatzGefunden().
// Die Funktion soll ausgeben:
// "Ein Schatz wurde entdeckt!"


// Aufgabe 6:
// Erstelle eine Funktion mit dem Namen gegnerBegegnung().
// Die Funktion soll ausgeben:
// "Ein Gegner erscheint!"


// Aufgabe 7:
// Erstelle eine Funktion mit dem Namen questErhalten().
// Die Funktion soll ausgeben:
// "Du hast eine neue Quest erhalten!"


// Aufgabe 8:
// Rufe mindestens drei deiner bisher erstellten Funktionen auf.


// ------------------------------------------------------
// LEVEL 2 - Funktionen mit einem Parameter
// Thema: Werte übergeben
// ------------------------------------------------------


// Aufgabe 9:
// Erstelle eine Funktion mit dem Namen begruesseHeld($name).
// Die Funktion soll ausgeben:
// "Willkommen, <Name>!"


// Aufgabe 10:
// Erstelle eine Funktion mit dem Namen gegnerName($gegner).
// Die Funktion soll ausgeben:
// "Du triffst auf <Gegner>."


// Aufgabe 11:
// Erstelle eine Funktion mit dem Namen levelAnzeige($level).
// Die Funktion soll ausgeben:
// "Dein Held ist auf Level <Level>."


// Aufgabe 12:
// Erstelle eine Funktion mit dem Namen ortBetreten($ort).
// Die Funktion soll ausgeben:
// "Du betrittst <Ort>."


// Aufgabe 13:
// Erstelle eine Funktion mit dem Namen klasseName($klasse).
// Die Funktion soll ausgeben:
// "Deine Klasse ist <Klasse>."


// Aufgabe 14:
// Erstelle eine Funktion mit dem Namen itemGefunden($item).
// Die Funktion soll ausgeben:
// "Du hast <Item> gefunden!"


// Aufgabe 15:
// Erstelle eine Funktion mit dem Namen waffenName($waffe).
// Die Funktion soll ausgeben:
// "Deine Waffe ist <Waffe>."


// Aufgabe 16:
// Rufe mindestens drei Funktionen mit unterschiedlichen Abenteuer-Werten auf.


// ------------------------------------------------------
// LEVEL 3 - Funktionen mit mehreren Parametern
// Thema: mehrere Werte verarbeiten
// ------------------------------------------------------


// Aufgabe 17:
// Erstelle eine Funktion mit dem Namen heldenInfo($name, $klasse).
// Die Funktion soll ausgeben:
// "<Name> ist ein <Klasse>."


// Aufgabe 18:
// Erstelle eine Funktion mit dem Namen kampfInfo($held, $gegner).
// Die Funktion soll ausgeben:
// "<Held> kämpft gegen <Gegner>!"


// Aufgabe 19:
// Erstelle eine Funktion mit dem Namen waffenKombi($held, $waffe).
// Die Funktion soll ausgeben:
// "<Held> benutzt <Waffe>."


// Aufgabe 20:
// Erstelle eine Funktion mit dem Namen heldenStatus($name, $level).
// Die Funktion soll ausgeben:
// "<Name> ist auf Level <Level>."


// Aufgabe 21:
// Erstelle eine Funktion mit dem Namen itemNutzung($held, $item).
// Die Funktion soll ausgeben:
// "<Held> benutzt <Item>."


// Aufgabe 22:
// Erstelle eine Funktion mit dem Namen ortMission($ort, $quest).
// Die Funktion soll ausgeben:
// "In <Ort> wartet die Quest <Quest>."


// Aufgabe 23:
// Erstelle eine Funktion mit dem Namen reiseBegleiter($name, $begleiter).
// Die Funktion soll ausgeben:
// "<Name> reist mit <Begleiter>."


// Aufgabe 24:
// Rufe mindestens drei Funktionen mit zwei Parametern auf.


// ------------------------------------------------------
// LEVEL 4 - Funktionen mit Rückgabewerten
// Thema: return
// ------------------------------------------------------


// Aufgabe 25:
// Erstelle eine Funktion mit dem Namen gibHeldenName().
// Die Funktion soll den String "Arin" zurückgeben.


// Aufgabe 26:
// Erstelle eine Funktion mit dem Namen gibLevel().
// Die Funktion soll die Zahl 25 zurückgeben.


// Aufgabe 27:
// Erstelle eine Funktion mit dem Namen gibKlasse().
// Die Funktion soll den String "Magier" zurückgeben.


// Aufgabe 28:
// Erstelle eine Funktion mit dem Namen gibOrt().
// Die Funktion soll den String "Verlassene Ruine" zurückgeben.


// Aufgabe 29:
// Erstelle eine Funktion mit dem Namen gibGold().
// Die Funktion soll die Zahl 100 zurückgeben.


// Aufgabe 30:
// Speichere den Rückgabewert einer Funktion in einer Variable
// und gib ihn anschließend aus.


// ------------------------------------------------------
// LEVEL 5 - Rückgabewerte mit Parametern
// Thema: Funktionen, die etwas berechnen oder zurückgeben
// ------------------------------------------------------


// Aufgabe 31:
// Erstelle eine Funktion mit dem Namen heldenSatz($name).
// Die Funktion soll folgenden Text zurückgeben:
// "<Name> ist bereit für die Quest!"


// Aufgabe 32:
// Erstelle eine Funktion mit dem Namen levelPlusEins($level).
// Die Funktion soll das Level + 1 zurückgeben.


// Aufgabe 33:
// Erstelle eine Funktion mit dem Namen lebenVerdoppeln($leben).
// Die Funktion soll die doppelten Lebenspunkte zurückgeben.


// Aufgabe 34:
// Erstelle eine Funktion mit dem Namen goldAddieren($gold).
// Die Funktion soll 50 Gold addieren und zurückgeben.


// Aufgabe 35:
// Erstelle eine Funktion mit dem Namen heldenBeschreibung($name, $klasse).
// Die Funktion soll einen Satz zurückgeben:
// "<Name> ist ein <Klasse>."


// Aufgabe 36:
// Erstelle eine Funktion mit dem Namen questText($anzahl).
// Die Funktion soll zurückgeben:
// "Du hast <Anzahl> Quests abgeschlossen."


// Aufgabe 37:
// Erstelle eine Funktion mit dem Namen gefahrCheck($leben).
// Die Funktion soll zurückgeben:
// "Gefahr steigt", wenn die Lebenspunkte kleiner als 20 sind.


// Aufgabe 38:
// Speichere mindestens zwei Rückgabewerte in Variablen
// und gib sie anschließend aus.


// ------------------------------------------------------
// LEVEL 6 - Standardwerte in Funktionen
// Thema: Default-Parameter
// ------------------------------------------------------


// Aufgabe 39:
// Erstelle eine Funktion mit dem Namen starterKlasse($klasse = "Krieger").
// Die Funktion soll ausgeben:
// "Deine Startklasse ist <Klasse>."


// Aufgabe 40:
// Erstelle eine Funktion mit dem Namen startOrt($ort = "Dorf").
// Die Funktion soll ausgeben:
// "Du startest in <Ort>."


// Aufgabe 41:
// Erstelle eine Funktion mit dem Namen standardWaffe($waffe = "Schwert").
// Die Funktion soll ausgeben:
// "Du benutzt ein <Waffe>."


// Aufgabe 42:
// Erstelle eine Funktion mit dem Namen heldenTitel($name = "Arin").
// Die Funktion soll ausgeben:
// "Held <Name> ist bereit."


// Aufgabe 43:
// Rufe eine Funktion einmal ohne Wert
// und einmal mit einem eigenen Wert auf.


// ------------------------------------------------------
// LEVEL 7 - Kleine Rechenfunktionen
// Thema: Funktionen mit Zahlen
// ------------------------------------------------------


// Aufgabe 44:
// Erstelle eine Funktion mit dem Namen addiereLeben($leben1, $leben2).
// Die Funktion soll beide Werte addieren und zurückgeben.


// Aufgabe 45:
// Erstelle eine Funktion mit dem Namen zieheSchadenAb($leben, $schaden).
// Die Funktion soll die restlichen Lebenspunkte zurückgeben.


// Aufgabe 46:
// Erstelle eine Funktion mit dem Namen goldNachQuest($gold, $bonus).
// Die Funktion soll das gesamte Gold zurückgeben.


// Aufgabe 47:
// Erstelle eine Funktion mit dem Namen trankRest($gesamt, $benutzt).
// Die Funktion soll ausrechnen, wie viele Tränke übrig bleiben.


// Aufgabe 48:
// Erstelle eine Funktion mit dem Namen levelUpCheck($level).
// Die Funktion soll das nächste Level zurückgeben.


// ------------------------------------------------------
// BOSSFIGHT - Kombination aus allem
// Thema: Funktionen kreativ anwenden
// ------------------------------------------------------


// Aufgabe 49:
// Erstelle eine Funktion mit dem Namen heldenProfil($name, $klasse, $level).
// Die Funktion soll einen vollständigen Satz ausgeben:
// "<Name> ist ein <Klasse> auf Level <Level>."


// Aufgabe 50:
// Erstelle eine Funktion mit dem Namen questProfil($name, $ziel, $belohnung).
// Die Funktion soll einen vollständigen Satz ausgeben.


// Aufgabe 51:
// Erstelle eine Funktion mit dem Namen kampfStartInfo($held, $gegner, $ort).
// Die Funktion soll einen Satz zurückgeben,
// der alle drei Werte enthält.


// Aufgabe 52:
// Erstelle eine Funktion mit dem Namen heilung($leben, $heilwert).
// Die Funktion soll die geheilten Lebenspunkte zurückgeben.


// Aufgabe 53:
// Erstelle eine Funktion mit dem Namen schatzMission($held, $ort, $item).
// Die Funktion soll einen Abenteuer-Satz ausgeben.


// Aufgabe 54:
// Erstelle eine Funktion mit dem Namen gegnerRuf($gegner).
// Je nachdem, welcher Gegner übergeben wird,
// soll ein passender Satz zurückgegeben werden.
// Beispiel:
// Drache -> "Ein Drache versperrt den Weg!"
// Troll -> "Ein Troll greift an!"


// ------------------------------------------------------
// ULTRA-BOSS - Eigene Abenteuer-Funktionen
// Thema: kreativ werden
// ------------------------------------------------------


// Aufgabe 55:
// Erstelle deine eigene Funktion für ein magisches Wesen.
// Die Funktion soll mindestens einen Parameter haben.


// Aufgabe 56:
// Erstelle deine eigene Funktion für einen Kampf.
// Die Funktion soll mindestens zwei Parameter haben.


// Aufgabe 57:
// Erstelle deine eigene Funktion für einen Schatz.
// Die Funktion soll etwas zurückgeben.


// Aufgabe 58:
// Erstelle deine eigene Funktion für einen Helden.
// Die Funktion soll mit einem Standardwert arbeiten.


// Aufgabe 59:
// Erstelle deine eigene Funktion,
// die mit Zahlen rechnet und etwas ausgibt.


// Aufgabe 60:
// Erstelle deine eigene Funktion,
// die mit Held, Klasse und Level arbeitet.


// ------------------------------------------------------
// EXTRA - Freiwillige Zusatzaufgaben
// ------------------------------------------------------


// Zusatzaufgabe 61:
// Erstelle eine Funktion mit dem Namen drachenCheck($gegner).
// Die Funktion soll ausgeben:
// "<Gegner> ist ein Boss-Gegner!"


// Zusatzaufgabe 62:
// Erstelle eine Funktion mit dem Namen questEintrag($nummer, $name).
// Die Funktion soll einen kleinen Questbuch-Satz ausgeben.


// Zusatzaufgabe 63:
// Erstelle eine Funktion mit dem Namen geheimnisEntdeckt($ort).
// Die Funktion soll zurückgeben:
// "In <Ort> wurde ein Geheimnis entdeckt!"


// Zusatzaufgabe 64:
// Erstelle eine Funktion mit dem Namen questStand($anzahl).
// Die Funktion soll ausgeben,
// wie viele Quests du schon abgeschlossen hast.


// Zusatzaufgabe 65:
// Erstelle eine Funktion mit dem Namen heldHeilen($name, $leben).
// Die Funktion soll zurückgeben:
// "<Name> wurde auf <Leben> Lebenspunkte geheilt."


?>