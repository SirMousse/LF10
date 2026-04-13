<?php

/*
========================================
PHP FUNKTIONEN QUEST 
Harry Potter • Abenteuer • Herr der Ringe • Pokémon • Piraten • Zombies
========================================

LEVEL 1 – DIE ERSTEN ZAUBER
---------------------------

1. SPRECHENDER HUT (Harry Potter)
function sprechenderHut($name)
→ Gibt zurück: "[Name] kommt nach Gryffindor!"

2. POKÉMON RUF
function pokemonRuf($pokemon)
→ Gibt zurück: "Pikachu! Pikachu!"

3. ZOMBIE BISS
function zombieBiss($leben)
→ Zieht 10 Leben ab und gibt den neuen Wert zurück


LEVEL 2 – ENTSCHEIDUNGEN
------------------------

4. DER EINE RING (Herr der Ringe)
function hatDenRing($name)
→ true wenn "Frodo", sonst false

5. SCHATZTRUHE (Abenteuer)
function schatztruhe($gold)
→ >100 → "Legendärer Schatz!"
→ sonst → "Nur ein paar Münzen."

6. KANONEN TREFFER (Piraten)
function kanonenTreffer($leben, $schaden)
→ Leben darf nicht unter 0 fallen


LEVEL 3 – MEHR LOGIK
--------------------

7. ZAUBERSPRUCH VERSTÄRKER
function zauberspruch($spruch, $staerke)
→ Wiederholt den Spruch X-mal

8. POKÉMON EFFEKTIVITÄT
function istEffektiv($typ)
→ Wasser → Feuer
→ Feuer → Pflanze
→ sonst → unbekannt

9. ZOMBIE INFEKTION
function istInfiziert($bisse)
→ >0 → true
→ sonst → false


LEVEL 4 – NERD LEVEL
--------------------

10. GEFÄHRTEN (Herr der Ringe)
function anzahlGefaehrten($anzahl)
→ prüft gültige Zahl (>0)

11. BEUTE TEILEN (Piraten)
function beuteTeilen($gold, $piraten)
→ Division
→ wenn 0 → "Division durch Null verboten!"

12. MAGISCHES TOR
function oeffneTor($schluessel)
→ "Mondstein" → öffnet sich
→ sonst → bleibt zu


LEVEL 5 – FUNKTIONEN KOMBINIEREN
--------------------------------

13. HELD ERSTELLEN
function hausZuweisen($name)
function starteMission($name, $haus)

→ "Luna aus Ravenclaw startet ihre Mission."

14. POKÉMON KAMPF
function schadenBerechnen($angriff, $verteidigung)
function kampfText($pokemon, $schaden)

15. ZOMBIE ÜBERLEBEN
function verbleibendesLeben($leben, $schaden)
function lebtNoch($leben)


BOSS LEVEL 👑
-------------

16. FRODOS REISE
function reiseNachMordor($energie)
→ >80 → stark
→ 40–80 → erschöpft
→ <40 → bricht zusammen

17. VERFLUCHTES SCHIFF
function verfluchtesSchiff($crew, $zombies)
→ Zombies > Crew → verloren

18. PATRONUS
function patronusKraft($glueck)
→ >90 → stark
→ >50 → schwach
→ sonst → keiner

19. POKÉMON TEAM
function teamStaerke($p1, $p2, $p3)
→ Summe zurückgeben

20. ENDBOSS
function endboss($name, $kraft, $waffe)
→ Kraft >80 + Legendenschwert → Sieg
→ sonst → Niederlage


EXTRA CHALLENGE
---------------

Erstelle eigene Funktionen zu:
- Hogwarts
- Mordor
- Pokémon Arena
- Zombie Apokalypse
- Piratenschatz

Regeln:
- mindestens 1 Parameter
- sinnvoller Name
- Rückgabewert nutzen


MERKSÄTZE:
------------

- Funktionen sind Zaubersprüche
- Parameter = Eingaben
- return = Ergebnis
- Eine Funktion = eine Aufgabe

========================================
*/

?>