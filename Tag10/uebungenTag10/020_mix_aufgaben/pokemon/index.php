<?php

/*
============================================================
PHP MONSTER TRAINER QUEST – NERD EDITION

Themen:
- Variablen
- Operatoren
- if / elseif / else
- foreach
- for
- while
- Arrays
- mehrdimensionale Arrays
- assoziative Arrays
- mehrdimensionale assoziative Arrays
- break
- continue
- Funktionen
- Klassen
- Objekte
- Methoden
- Vererbung

Wichtig:
Alle Arrays sollen selbst erstellt werden.
Die beschriebenen Daten sind nur Vorgaben.

Thema:
Monster, Trainer, Arenen, Typen, Kämpfe,
Items, Attacken, Heilzentren und eine
erschreckend komplexe Monster-Datenbank.
============================================================
*/


/*
============================================================
LEVEL 1 – KP-WERTE

Erstelle ein Array mit mindestens 7 KP-Werten.

Beispielwerte:

12
45
80
23
100
5
67

Regeln:

unter 20:
"Monster braucht dringend Heilung"

20 bis 49:
"Monster angeschlagen"

50 bis 79:
"Monster fit"

ab 80:
"Monster topfit"

Berechne zusätzlich die Summe aller KP.

Du musst benutzen:

- eigenes Array
- foreach
- +=
- if
- elseif
- else
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 2 – TRAINER-LEVEL

Erstelle ein Array mit mindestens 8 Trainer-Leveln.

Regeln:

unter 5:
"Anfänger"

5 bis 10:
"Fortgeschritten"

11 bis 20:
"Erfahrener Trainer"

über 20:
"Hat vermutlich jede Route dreimal abgegrast"

Zähle alle Trainer ab Level 10.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 3 – MONSTERNAMEN

Erstelle ein Array mit mindestens 7 Namen.

Beispiele:

Voltmaus
Flammi
Aquax
Kevin
Bytechu
Nullmon
Stackasaur

Regeln:

Wenn Name == "Kevin":
"Kevin wurde versehentlich als Monster registriert."

Wenn Name == "Nullmon":
"Dieses Monster existiert laut Datenbank nicht."

Sonst:
"Monster registriert: NAME"

Bonus:

Benutze strlen().

Wenn der Name länger als 10 Zeichen ist:
"Dieser Name passt kaum auf die Trainerkarte."
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 4 – ERFAHRUNGSPUNKTE

Erstelle ein Array mit mindestens 8 XP-Werten.

Berechne:

- gesamte XP
- Anzahl der Kämpfe
- Durchschnitt

Regeln für Gesamt-XP:

unter 100:
"Frisch aus dem Tutorial"

100 bis 299:
"Solider Trainer"

300 bis 599:
"Arena-tauglich"

ab 600:
"Hat eindeutig zu viel gegrindet"

Recherche später:

count()
array_sum()
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 5 – ERSTES MEHRDIMENSIONALES ARRAY

Erstelle ein mehrdimensionales Array.

Jedes Monster soll enthalten:

Index 0:
Name

Index 1:
Level

Index 2:
KP

Mindestens 5 Monster.

Regeln:

Level unter 5:
"Baby-Level"

5 bis 15:
"Trainiert"

16 bis 30:
"Stark"

über 30:
"Boss-Material"

Gib zusätzlich Name und KP aus.

Recherche:

$monster[0]
$monster[1]
$monster[2]
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 6 – ATTACKENLISTE

Erstelle ein mehrdimensionales Array.

Jede Attacke enthält:

[Name, Schaden, Genauigkeit]

Mindestens 6 Attacken.

Beispiele:

Funkenblitz
Flammenstoß
Aquawelle
Datenschlag
Kritischer Käsebiss
Nullpointer-Kick

Regeln:

Schaden unter 20:
"Schwache Attacke"

20 bis 49:
"Normale Attacke"

50 bis 79:
"Starke Attacke"

ab 80:
"Balancing-Team wurde übergangen"

Wenn Genauigkeit unter 50:
"Trifft ungefähr jedes Schaltjahr"
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 7 – TYPEN

Erstelle ein mehrdimensionales Array.

Jedes Monster enthält:

[Name, Typ, Stärke]

Mögliche Typen:

"Feuer"
"Wasser"
"Pflanze"
"Elektro"

Regeln:

Feuer:
"Mag Hitze"

Wasser:
"Kann vermutlich schwimmen"

Pflanze:
"Photosynthese mit Kampfwerten"

Elektro:
"Bitte nicht am Ladekabel lecken"

Wenn Stärke > 80:
"Sehr starkes Monster"

Zähle zusätzlich alle Monster pro Typ.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 8 – ASSOZIATIVES MONSTER

Erstelle ein Monster als assoziatives Array.

Es soll enthalten:

"name"
"type"
"level"
"hp"
"attack"
"caught"

Werte selbst wählen.

Regeln:

Wenn hp < 30:
"Monster geschwächt"

Wenn attack >= 80:
"Hoher Angriff"

Wenn caught == false:
"Noch nicht gefangen"

Recherche:

assoziative Arrays
true
false
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 9 – MEHRDIMENSIONALES ASSOZIATIVES ARRAY

Erstelle mindestens 6 Monster.

Jedes besitzt:

"name"
"type"
"level"
"hp"
"attack"

Regeln:

attack < 30:
"Schwach"

30 bis 59:
"Normal"

60 bis 79:
"Stark"

ab 80:
"Sehr stark"

Wenn hp < 30 UND attack >= 70:
"Starkes, aber angeschlagenes Monster"

Du musst benutzen:

- mehrdimensionales assoziatives Array
- foreach
- &&
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 10 – TRAINERTEAMS

Erstelle ein mehrdimensionales assoziatives Array.

Mindestens 4 Trainer.

Jeder Trainer besitzt:

"name"
"level"
"badges"
"team"

"team" ist wieder ein Array mit Monsternamen.

Regeln:

badges == 0:
"Anfängertrainer"

1 bis 3:
"Erste Arena-Erfahrung"

4 bis 7:
"Erfahrener Trainer"

ab 8:
"Liga bereit"

Gib zusätzlich alle Monster jedes Teams aus.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 11 – REGIONEN UND ROUTEN

Erstelle folgende Struktur:

Region
 -> Routen
    -> Monster

Mindestens:

3 Routen
jeweils mindestens 3 Monster

Jedes Monster besitzt:

"name"
"type"
"level"
"rarity"

Regeln:

rarity < 20:
"Häufig"

20 bis 49:
"Ungewöhnlich"

50 bis 79:
"Selten"

ab 80:
"Sehr selten"

Gib aus:

Route
Name
Typ
Level
Seltenheit
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 12 – ATTACKEN PRO MONSTER

Erstelle mehrere Monster.

Jedes Monster besitzt:

"name"
"moves"

"moves" ist ein Array.

Jede Attacke soll besitzen:

"name"
"damage"
"type"

Mindestens 4 Monster
mit jeweils mindestens 3 Attacken.

Gib alle Attacken jedes Monsters aus.

Bonus:

Wenn eine Attacke mehr als 80 Schaden macht:
"Extrem starke Attacke"
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 13 – INVENTAR DES TRAINERS

Erstelle mindestens 5 Trainer.

Jeder besitzt:

"name"
"inventory"

Inventory ist ein Array.

Beispiele:

Heiltrank
Supertrank
Ball
Spezialball
Beere
Fahrrad
Verdächtiger USB-Stick

Gib alle Items aus.

Wenn mehr als 6 Items vorhanden:
"Rucksack ziemlich voll"

Wenn "Heiltrank" vorhanden:
"Heilung verfügbar"

Recherche:

count()
in_array()
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 14 – MONSTER-CENTER

Erstelle mindestens 6 Monster.

Jedes besitzt:

"name"
"hp"
"maxHp"
"status"

Mögliche Statuswerte:

"normal"
"vergiftet"
"gelähmt"
"schlafend"

Regeln:

Wenn hp < maxHp / 2:
"Heilung empfohlen"

Wenn status != "normal":
"Statusproblem vorhanden"

Wenn beides:
"Monster dringend behandeln"
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 15 – 3D-REGION

Erstelle folgende Struktur:

Region
 -> Städte
    -> Trainer
       -> Monster

Mindestens:

3 Städte
2 Trainer pro Stadt
2 Monster pro Trainer

Gib aus:

Stadt
Trainer
Monster

Du brauchst mehrere
verschachtelte foreach-Schleifen.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 16 – 3D ASSOZIATIVE STRUKTUR

Struktur:

Region
 -> Stadt
    -> Arena
       -> Trainerdaten

Jeder Trainer besitzt:

"name"
"level"
"badges"
"teamStrength"

Mindestens:

2 Städte
2 Arenen je Stadt
2 Trainer je Arena

Regeln:

teamStrength >= 80:
"Sehr starkes Team"

badges >= 8:
"Liga-Erfahrung"

Wenn beides:
"Elite-Trainer"

Zähle:

- alle Trainer
- Elite-Trainer
- Trainer mit 8 oder mehr Abzeichen
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 17 – ARENA-SYSTEM

Erstelle mehrere Arenen.

Jede Arena besitzt:

"name"
"type"
"difficulty"
"leader"
"challengers"

Regeln:

difficulty < 4:
"Leichte Arena"

4 bis 7:
"Normale Arena"

8 bis 10:
"Sehr schwere Arena"

Wenn mehr als 5 Herausforderer vorhanden:
"Die Warteschlange ist länger als beim Release eines neuen Spiels"

Recherche:

count()
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 18 – BREAK UND CONTINUE

Erstelle mindestens 8 Monster.

Jedes besitzt:

"name"
"active"
"glitch"

Regeln:

Wenn active == false:
Monster überspringen.

Benutze:
continue

Wenn glitch >= 9999:
"Monster-Datenbank vollständig beschädigt"

Danach Schleife beenden.

Benutze:
break
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 19 – FOR-SCHLEIFE IM POKEDEX-ERSATZ

Erstelle ein Array mit mindestens 10 Monsternamen.

Gehe NICHT mit foreach durch das Array.

Benutze:

for
count()

Ausgabe:

Monster 1: ...
Monster 2: ...

Bonus:

Gib nur jedes zweite Monster aus.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 20 – WHILE: ARENAKAMPF

Ein Arenamonster startet mit:

$hp = 180;

Dein Monster verursacht:

$damage = 22;

Benutze while.

Solange HP > 0:
weiter angreifen.

Nach jedem Angriff:
"Gegner KP: ..."

Wenn HP < 50:
"Gegner wird schwach"

Wenn HP <= 0:
"Kampf gewonnen"

Bonus:
Zähle die Angriffe.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 21 – MODULO-MONSTER-ID

Erstelle ein Array mit mindestens 12 Monster-IDs.

Gerade:
"Gerade ID"

Ungerade:
"Ungerade ID"

Durch 5 teilbar:
"Sondermuster"

Exakt 42:
"Der Professor sagt, diese ID sei wichtig"

Benutze:

%
==
foreach
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 22 – ERSTE FUNKTION

Erstelle eine Funktion:

checkStrength($strength)

Regeln:

unter 20:
"schwach"

20 bis 49:
"normal"

50 bis 79:
"stark"

ab 80:
"sehr stark"

Die Funktion soll einen Text zurückgeben.

Recherche:

function
Parameter
return

Benutze sie danach für mehrere Monster.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 23 – POWER-FUNKTION

Erstelle eine Funktion:

calculateMonsterPower($monster)

$monster ist ein assoziatives Array.

Es besitzt:

"hp"
"attack"
"level"

Berechnung:

Power =
hp + attack * level

Gib Power mit return zurück.

Erstelle mindestens 5 Monster.

Bonus:

Finde das stärkste Monster ohne max().
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 24 – SELTENHEITSFILTER

Erstelle eine Funktion:

isRareMonster($monster)

Die Funktion gibt true zurück,
wenn:

rarity >= 70
UND
active == true

Sonst false.

Erstelle mindestens 8 Monster.

Speichere seltene aktive Monster
in einem neuen Array.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 25 – ERSTE KLASSE

Erstelle eine Klasse:

Monster

Eigenschaften:

public $name;
public $hp;
public $attack;

Konstruktor:

__construct()

Methode:

cry()

Ausgabe ungefähr:

"NAME macht sein Kampfgeräusch."

Erstelle mindestens 4 Monster-Objekte.

Speichere sie in einem Array.

Gehe mit foreach durch das Array.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 26 – ANGRIFFSMETHODE

Erweitere Monster.

Erstelle:

attack($target)

Der Angriffswert des Monsters
soll von den HP des Ziels abgezogen werden.

Ausgabe ungefähr:

"Voltmaus greift Aquax an."
"Aquax hat noch 65 KP."

Du brauchst:

$this
$target
->
-=
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 27 – MONSTERKAMPF

Erstelle zwei Monster-Objekte.

Lass sie mit while kämpfen.

Solange beide HP > 0 haben:

1. Monster A greift an
2. prüfen, ob Monster B noch lebt
3. Monster B greift zurück

Ein besiegtes Monster
darf nicht mehr angreifen.

Bonus:

Kampfrunden zählen.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 28 – TRAINER ALS KLASSE

Erstelle eine Klasse:

Trainer

Eigenschaften:

$name
$team
$badges

$team soll ein Array sein.

Methoden:

addMonster($monster)
showTeam()
addBadge()
showStatus()

Recherche:

$this->team[]
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 29 – TYP-VERERBUNG

Erstelle:

class FireMonster extends Monster
class WaterMonster extends Monster
class PlantMonster extends Monster

Jede Klasse bekommt eine Spezialmethode.

FireMonster:
fireBlast()

WaterMonster:
waterWave()

PlantMonster:
vineAttack()

Recherche:

extends
parent::__construct()
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 30 – TRAINERKLASSEN

Erstelle eine Basisklasse:

Trainer

Danach:

class RookieTrainer extends Trainer
class GymLeader extends Trainer
class EliteTrainer extends Trainer

Jede Klasse bekommt eine eigene Spezialmethode.

RookieTrainer:
train()

GymLeader:
startArenaBattle()

EliteTrainer:
challenge()

============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 31 – ARENA ALS KLASSE

Erstelle eine Klasse:

Arena

Eigenschaften:

$name
$type
$leader
$challengers

$challengers soll ein Array sein.

Methoden:

addChallenger()
showChallengers()
startBattle()
showStatus()
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 32 – OBJEKTE IN MEHRDIMENSIONALEN ARRAYS

Erstelle mehrere Monster-Objekte.

Speichere sie in einer Struktur:

Region
 -> Städte
    -> Monster-Objekte

Gehe durch alle Städte
und alle Monster.

Rufe cry() auf.

Wenn hp <= 0:
Monster überspringen.

Benutze:
continue
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 33 – ZWEI TRAINERTEAMS

Erstelle zwei Trainer
mit mehreren Monster-Objekten.

Berechne pro Team:

- Gesamt-KP
- Gesamt-Angriff
- Durchschnittslevel

Regeln:

Mehr KP:
"Robusteres Team"

Mehr Angriff:
"Offensiveres Team"

Wenn beides größer:
"Klar stärkeres Team"
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 34 – MONSTER-TURNIER

Erstelle mindestens 8 Monster-Objekte.

Speichere sie in einem Array.

Je zwei Monster treten gegeneinander an.

Benutze:

for
while
if
Methoden

Der Sieger kommt in die nächste Runde.

Bonus:

Mehrere Runden.

Bonus 2:

Gewinner in neuem Array speichern.

Bonus 3:

Am Ende gibt es genau einen Champion.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 35 – FINAL BOSS
MONSTER LEAGUE CONTROL SYSTEM

Jetzt soll fast alles zusammenkommen.


TEIL 1 – MONSTER-KLASSE

Erstelle Monster mit:

$name
$type
$hp
$maxHp
$attack
$defense
$level
$xp
$status
$moves

Methoden:

attack()
takeDamage()
heal()
gainXp()
learnMove()
showStatus()


------------------------------------------------------------
TEIL 2 – TRAINER-KLASSE

Erstelle Trainer mit:

$name
$level
$badges
$money
$team
$inventory

Methoden:

addMonster()
removeMonster()
addItem()
useItem()
addBadge()
showStatus()


------------------------------------------------------------
TEIL 3 – ARENA-KLASSE

Erstelle Arena mit:

$name
$type
$difficulty
$leader
$challengers

Methoden:

addChallenger()
startBattle()
showStatus()


------------------------------------------------------------
TEIL 4 – REGIONSSTRUKTUR

Erstelle ein mehrdimensionales
assoziatives Array.

Struktur:

Region
 -> Städte
    -> Arenen
       -> Trainer-Objekte

Mindestens:

3 Städte
2 Arenen pro Stadt
2 Trainer pro Arena


------------------------------------------------------------
TEIL 5 – MONSTERDATEN

Jedes Monster besitzt zusätzlich:

"rarity"
"caught"
"active"

Wenn rarity >= 80:
"Sehr selten"

Wenn caught == false:
"Noch nicht gefangen"

Wenn active == false:
überspringen


------------------------------------------------------------
TEIL 6 – KÄMPFE

Lass mehrere Monster kämpfen.

Benutze:

while
attack()
takeDamage()

Wenn ein Monster besiegt ist:
Kampf beenden.


------------------------------------------------------------
TEIL 7 – XP UND LEVEL-UP

Nach einem Sieg:

XP erhöhen.

Wenn genug XP:
Level erhöhen.

Beim Level-Up:

maxHp erhöhen
attack erhöhen
defense erhöhen


------------------------------------------------------------
TEIL 8 – INVENTAR

Trainer besitzt Items.

Beispiele:

Heiltrank
Supertrank
Ball
Spezialball
Beere
Fluchtseil

Wenn Inventar mehr als 10 Items enthält:
"Rucksack voll"


------------------------------------------------------------
TEIL 9 – HEILUNG

Wenn HP < 30
UND Heiltrank vorhanden:

Heiltrank benutzen.

Recherche:

in_array()
array_search()
unset()


------------------------------------------------------------
TEIL 10 – TYPEN

Baue eine einfache Typenlogik.

Beispiel:

Feuer stärker gegen Pflanze
Pflanze stärker gegen Wasser
Wasser stärker gegen Feuer

Du entscheidest selbst,
wie viel Bonus-Schaden entsteht.

Benutze:

if
elseif
else


------------------------------------------------------------
TEIL 11 – ABZEICHEN

Nach gewonnenen Arenakämpfen:

$badges += 1;

Wenn badges >= 8:
"Liga freigeschaltet"


------------------------------------------------------------
TEIL 12 – BREAK UND CONTINUE

Benutze beide sinnvoll.

Beispiele:

Inaktives Monster:
continue

Trainer ohne kampffähige Monster:
break


------------------------------------------------------------
TEIL 13 – OPERATOR-CHECKLISTE

Verwende sinnvoll:

==
!=
>
<
>=
<=
+
-
*
/
%
+=
-=
&&
||
!


------------------------------------------------------------
TEIL 14 – ARRAY-CHECKLISTE

Verwende:

- normales Array
- mehrdimensionales Array
- assoziatives Array
- mehrdimensionales assoziatives Array
- Array mit Objekten
- Array innerhalb eines Objekts
- Objekte in verschachtelten Arrays


------------------------------------------------------------
TEIL 15 – SCHLEIFEN

Verwende:

foreach
for
while
break
continue


------------------------------------------------------------
TEIL 16 – FUNKTIONEN

Erstelle mindestens 3 eigene Funktionen.

Beispiele:

calculateMonsterPower()
checkTypeAdvantage()
calculateReward()
isRareMonster()


------------------------------------------------------------
TEIL 17 – OOP

Verwende:

class
public
protected
__construct()
$this
new
Methoden
extends
parent::__construct()


------------------------------------------------------------
TEIL 18 – ABSCHLUSSSTATISTIK

Am Ende soll ungefähr erscheinen:

====================================
MONSTER LEAGUE CONTROL SYSTEM
====================================

Städte: ...
Arenen: ...
Trainer: ...
Monster: ...
Gefangene Monster: ...
Seltene Monster: ...
Besiegte Monster: ...
Abzeichen: ...
Gold: ...
Items: ...

Stärkstes Monster:
...

Stärkster Trainer:
...

Status:

TRAINING
ARENA-MODUS
LIGA FREIGESCHALTET
ODER
KEVIN HAT EIN LEVEL-100-MONSTER IM TUTORIALGEBIET

====================================
*/


// DEIN FINAL-BOSS-CODE:














/*
============================================================
SECRET LEVEL – DIE KOMPLETTE MONSTER-WELT

Baue folgende Struktur:

Welt
 -> Regionen
    -> Städte
       -> Arenen
          -> Trainer
             -> Monster
             -> Inventar
             -> Abzeichen

Jedes Monster besitzt:

"name"
"type"
"level"
"hp"
"attack"
"defense"
"rarity"
"status"

Zusätzlich:

"moves" => [...]

Jeder Trainer besitzt:

"name"
"money"
"badges"
"team"

Mindestens:

2 Regionen
3 Städte pro Region
2 Arenen pro Stadt
2 Trainer pro Arena
2 Monster pro Trainer

Zähle:

- Regionen
- Städte
- Arenen
- Trainer
- Monster
- Attacken
- Items
- Abzeichen
- seltene Monster
- verletzte Monster

Finde zusätzlich:

- stärkstes Monster
- Trainer mit den meisten Abzeichen
- Stadt mit den meisten Trainern
- Arena mit der höchsten Durchschnittsstärke

Wenn du hier noch weißt,
welcher Array-Key auf welcher Ebene liegt,
hast du verschachtelte Arrays verstanden.
============================================================
*/


// DEIN CODE:






/*
============================================================
ULTRA SECRET LEVEL – MONSTER-PC-SYSTEM

Die Monsterwelt besitzt ein digitales Speichersystem.

Es gibt:

- Trainerkonten
- Boxen
- Monster
- Kampfprotokolle
- Itemlager

Baue:

PC-System
 -> Trainer
    -> Boxen
       -> Monster

Jedes Monster besitzt:

"name"
"type"
"level"
"hp"
"stored"
"favorite"

Regeln:

stored == true:
"Monster befindet sich in der Box"

favorite == true:
"Lieblingsmonster"

Wenn Box mehr als 6 Monster enthält:
"Box fast voll"

Bonus:

Erstelle Klassen für:

MonsterBox
TrainerAccount
BattleLog

Noch mehr Bonus:

Baue Suchfunktionen:

findMonsterByName()
findMonsterByType()
findStrongestMonster()

Wenn ein Trainer 400 Monster in 70 Boxen
gespeichert hat:

"Vielleicht sollte jemand über Datenbanken sprechen."
============================================================
*/


// DEIN CODE: