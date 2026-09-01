<?php

// ======================================================
// PHP Aufgaben - Funktionen 
// Pokemon Edition
// Themen: Funktionen, Parameter, Rückgabewerte, void,
// Standardwerte, mehrere Parameter
// Jede Aufgabe ist als Kommentar formuliert
// Du kannst direkt unter jeder Aufgabe deinen Code schreiben
// ======================================================


// ------------------------------------------------------
// LEVEL 1 - Erste Pokemon-Funktionen
// Thema: einfache Funktionen ohne Parameter
// ------------------------------------------------------


// Aufgabe 1:
// Erstelle eine Funktion mit dem Namen halloPokemon().
// Die Funktion soll ausgeben:
// "Willkommen in der Pokemon-Welt!"


// Aufgabe 2:
// Erstelle eine Funktion mit dem Namen pikachuRuf().
// Die Funktion soll ausgeben:
// "Pika Pika!"


// Aufgabe 3:
// Erstelle eine Funktion mit dem Namen arenaStart().
// Die Funktion soll ausgeben:
// "Der Arenakampf beginnt!"


// Aufgabe 4:
// Erstelle eine Funktion mit dem Namen pokemonCenter().
// Die Funktion soll ausgeben:
// "Deine Pokemon wurden geheilt."


// Aufgabe 5:
// Erstelle eine Funktion mit dem Namen pokedexInfo().
// Die Funktion soll ausgeben:
// "Pokedex wird aktualisiert..."


// Aufgabe 6:
// Erstelle eine Funktion mit dem Namen wildeBegegnung().
// Die Funktion soll ausgeben:
// "Ein wildes Pokemon erscheint!"


// Aufgabe 7:
// Erstelle eine Funktion mit dem Namen ordenErhalten().
// Die Funktion soll ausgeben:
// "Du hast einen Arenaorden erhalten!"


// Aufgabe 8:
// Rufe mindestens drei deiner bisher erstellten Funktionen auf.


// ------------------------------------------------------
// LEVEL 2 - Funktionen mit einem Parameter
// Thema: Werte übergeben
// ------------------------------------------------------


// Aufgabe 9:
// Erstelle eine Funktion mit dem Namen begruessePokemon($name).
// Die Funktion soll ausgeben:
// "Los geht's, <Name>!"


// Aufgabe 10:
// Erstelle eine Funktion mit dem Namen pokemonTyp($typ).
// Die Funktion soll ausgeben:
// "Dieses Pokemon ist vom Typ <Typ>."


// Aufgabe 11:
// Erstelle eine Funktion mit dem Namen levelAnzeige($level).
// Die Funktion soll ausgeben:
// "Dieses Pokemon ist auf Level <Level>."


// Aufgabe 12:
// Erstelle eine Funktion mit dem Namen arenaName($arena).
// Die Funktion soll ausgeben:
// "Du betrittst die Arena von <Arena>."


// Aufgabe 13:
// Erstelle eine Funktion mit dem Namen trainerName($trainer).
// Die Funktion soll ausgeben:
// "Trainer <Trainer> fordert dich heraus!"


// Aufgabe 14:
// Erstelle eine Funktion mit dem Namen itemGefunden($item).
// Die Funktion soll ausgeben:
// "Du hast <Item> gefunden!"


// Aufgabe 15:
// Erstelle eine Funktion mit dem Namen pokeballWurf($pokeball).
// Die Funktion soll ausgeben:
// "Du wirfst einen <Pokeball>!"


// Aufgabe 16:
// Rufe mindestens drei Funktionen mit unterschiedlichen Pokemon-Werten auf.


// ------------------------------------------------------
// LEVEL 3 - Funktionen mit mehreren Parametern
// Thema: mehrere Werte verarbeiten
// ------------------------------------------------------


// Aufgabe 17:
// Erstelle eine Funktion mit dem Namen pokemonInfo($name, $typ).
// Die Funktion soll ausgeben:
// "<Name> ist vom Typ <Typ>."


// Aufgabe 18:
// Erstelle eine Funktion mit dem Namen kampfInfo($pokemon, $gegner).
// Die Funktion soll ausgeben:
// "<Pokemon> kämpft gegen <Gegner>!"


// Aufgabe 19:
// Erstelle eine Funktion mit dem Namen trainerPokemon($trainer, $pokemon).
// Die Funktion soll ausgeben:
// "<Trainer> setzt <Pokemon> ein."


// Aufgabe 20:
// Erstelle eine Funktion mit dem Namen pokemonStatus($name, $level).
// Die Funktion soll ausgeben:
// "<Name> ist auf Level <Level>."


// Aufgabe 21:
// Erstelle eine Funktion mit dem Namen itemNutzung($trainer, $item).
// Die Funktion soll ausgeben:
// "<Trainer> benutzt <Item>."


// Aufgabe 22:
// Erstelle eine Funktion mit dem Namen arenaChallenge($arena, $orden).
// Die Funktion soll ausgeben:
// "Arena <Arena> bringt dir den <Orden>."


// Aufgabe 23:
// Erstelle eine Funktion mit dem Namen fangVersuch($pokemon, $pokeball).
// Die Funktion soll ausgeben:
// "Du versuchst, <Pokemon> mit einem <Pokeball> zu fangen."


// Aufgabe 24:
// Rufe mindestens drei Funktionen mit zwei Parametern auf.


// ------------------------------------------------------
// LEVEL 4 - Funktionen mit Rückgabewerten
// Thema: return
// ------------------------------------------------------


// Aufgabe 25:
// Erstelle eine Funktion mit dem Namen gibPokemonName().
// Die Funktion soll den String "Pikachu" zurückgeben.


// Aufgabe 26:
// Erstelle eine Funktion mit dem Namen gibLevel().
// Die Funktion soll die Zahl 25 zurückgeben.


// Aufgabe 27:
// Erstelle eine Funktion mit dem Namen gibTyp().
// Die Funktion soll den String "Elektro" zurückgeben.


// Aufgabe 28:
// Erstelle eine Funktion mit dem Namen gibArena().
// Die Funktion soll den String "Marmoria City" zurückgeben.


// Aufgabe 29:
// Erstelle eine Funktion mit dem Namen gibPokeballAnzahl().
// Die Funktion soll die Zahl 10 zurückgeben.


// Aufgabe 30:
// Speichere den Rückgabewert einer Funktion in einer Variable
// und gib ihn anschließend aus.


// ------------------------------------------------------
// LEVEL 5 - Rückgabewerte mit Parametern
// Thema: Funktionen, die etwas berechnen oder zurückgeben
// ------------------------------------------------------


// Aufgabe 31:
// Erstelle eine Funktion mit dem Namen pokemonSatz($name).
// Die Funktion soll folgenden Text zurückgeben:
// "<Name> ist bereit für den Kampf!"


// Aufgabe 32:
// Erstelle eine Funktion mit dem Namen levelPlusEins($level).
// Die Funktion soll das Level + 1 zurückgeben.


// Aufgabe 33:
// Erstelle eine Funktion mit dem Namen kpVerdoppeln($kp).
// Die Funktion soll die doppelten KP zurückgeben.


// Aufgabe 34:
// Erstelle eine Funktion mit dem Namen epAddieren($ep).
// Die Funktion soll 50 EP auf den Wert addieren und zurückgeben.


// Aufgabe 35:
// Erstelle eine Funktion mit dem Namen pokemonBeschreibung($name, $typ).
// Die Funktion soll einen Satz zurückgeben:
// "<Name> gehört zum Typ <Typ>."


// Aufgabe 36:
// Erstelle eine Funktion mit dem Namen ordenText($anzahl).
// Die Funktion soll zurückgeben:
// "Du hast <Anzahl> Orden."


// Aufgabe 37:
// Erstelle eine Funktion mit dem Namen fangChance($kp).
// Die Funktion soll zurückgeben:
// "Fangchance steigt", wenn die KP kleiner als 20 sind.


// Aufgabe 38:
// Speichere mindestens zwei Rückgabewerte in Variablen
// und gib sie anschließend aus.


// ------------------------------------------------------
// LEVEL 6 - Standardwerte in Funktionen
// Thema: Default-Parameter
// ------------------------------------------------------


// Aufgabe 39:
// Erstelle eine Funktion mit dem Namen starterPokemon($name = "Pikachu").
// Die Funktion soll ausgeben:
// "Dein Starter ist <Name>."


// Aufgabe 40:
// Erstelle eine Funktion mit dem Namen arenaOrt($ort = "Alabastia").
// Die Funktion soll ausgeben:
// "Du startest in <Ort>."


// Aufgabe 41:
// Erstelle eine Funktion mit dem Namen standardBall($ball = "Pokeball").
// Die Funktion soll ausgeben:
// "Du benutzt einen <Ball>."


// Aufgabe 42:
// Erstelle eine Funktion mit dem Namen trainerTitel($name = "Ash").
// Die Funktion soll ausgeben:
// "Trainer <Name> ist bereit."


// Aufgabe 43:
// Rufe eine Funktion einmal ohne Wert
// und einmal mit einem eigenen Wert auf.


// ------------------------------------------------------
// LEVEL 7 - Kleine Rechenfunktionen
// Thema: Funktionen mit Zahlen
// ------------------------------------------------------


// Aufgabe 44:
// Erstelle eine Funktion mit dem Namen addiereKP($kp1, $kp2).
// Die Funktion soll beide Werte addieren und zurückgeben.


// Aufgabe 45:
// Erstelle eine Funktion mit dem Namen zieheSchadenAb($kp, $schaden).
// Die Funktion soll die restlichen KP zurückgeben.


// Aufgabe 46:
// Erstelle eine Funktion mit dem Namen epNachKampf($ep, $bonus).
// Die Funktion soll die gesamte Erfahrung zurückgeben.


// Aufgabe 47:
// Erstelle eine Funktion mit dem Namen pokeballRest($gesamt, $benutzt).
// Die Funktion soll ausrechnen, wie viele Pokebälle übrig bleiben.


// Aufgabe 48:
// Erstelle eine Funktion mit dem Namen levelUpCheck($level).
// Die Funktion soll das nächste Level zurückgeben.


// ------------------------------------------------------
// BOSSFIGHT - Kombination aus allem
// Thema: Funktionen kreativ anwenden
// ------------------------------------------------------


// Aufgabe 49:
// Erstelle eine Funktion mit dem Namen pokemonProfil($name, $typ, $level).
// Die Funktion soll einen vollständigen Satz ausgeben:
// "<Name> ist ein <Typ>-Pokemon auf Level <Level>."


// Aufgabe 50:
// Erstelle eine Funktion mit dem Namen trainerProfil($name, $orden, $starter).
// Die Funktion soll einen vollständigen Satz ausgeben.


// Aufgabe 51:
// Erstelle eine Funktion mit dem Namen kampfStart($pokemon, $gegner, $arena).
// Die Funktion soll einen Satz zurückgeben,
// der alle drei Werte enthält.


// Aufgabe 52:
// Erstelle eine Funktion mit dem Namen heilung($kp, $heilwert).
// Die Funktion soll die geheilten KP zurückgeben.


// Aufgabe 53:
// Erstelle eine Funktion mit dem Namen fangMission($pokemon, $ball, $ort).
// Die Funktion soll einen Fang-Satz ausgeben.


// Aufgabe 54:
// Erstelle eine Funktion mit dem Namen pokemonRuf($name).
// Je nachdem, welcher Name übergeben wird,
// soll ein passender Ruf zurückgegeben werden.
// Beispiel:
// Pikachu -> "Pika Pika!"
// Glumanda -> "Glu Glu!"


// ------------------------------------------------------
// ULTRA-BOSS - Eigene Pokemon-Funktionen
// Thema: kreativ werden
// ------------------------------------------------------


// Aufgabe 55:
// Erstelle deine eigene Funktion für ein legendäres Pokemon.
// Die Funktion soll mindestens einen Parameter haben.


// Aufgabe 56:
// Erstelle deine eigene Funktion für einen Arenakampf.
// Die Funktion soll mindestens zwei Parameter haben.


// Aufgabe 57:
// Erstelle deine eigene Funktion für ein Pokemon Center.
// Die Funktion soll etwas zurückgeben.


// Aufgabe 58:
// Erstelle deine eigene Funktion für einen Trainer.
// Die Funktion soll mit einem Standardwert arbeiten.


// Aufgabe 59:
// Erstelle deine eigene Funktion,
// die mit Zahlen rechnet und etwas ausgibt.


// Aufgabe 60:
// Erstelle deine eigene Funktion,
// die mit Pokemon, Typ und Level arbeitet.


// ------------------------------------------------------
// EXTRA - Freiwillige Zusatzaufgaben
// ------------------------------------------------------


// Zusatzaufgabe 61:
// Erstelle eine Funktion mit dem Namen shinyCheck($pokemon).
// Die Funktion soll ausgeben:
// "<Pokemon> könnte ein Shiny sein!"


// Zusatzaufgabe 62:
// Erstelle eine Funktion mit dem Namen pokedexEintrag($nummer, $name).
// Die Funktion soll einen kleinen Pokedex-Satz ausgeben.


// Zusatzaufgabe 63:
// Erstelle eine Funktion mit dem Namen entwicklePokemon($name).
// Die Funktion soll zurückgeben:
// "<Name> entwickelt sich!"


// Zusatzaufgabe 64:
// Erstelle eine Funktion mit dem Namen arenaOrden($anzahl).
// Die Funktion soll ausgeben,
// wie viele Orden du schon gesammelt hast.


// Zusatzaufgabe 65:
// Erstelle eine Funktion mit dem Namen pokemonHeilen($name, $kp).
// Die Funktion soll zurückgeben:
// "<Name> wurde auf <KP> KP geheilt."


?>