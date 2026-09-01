<?php

/*
============================================================
PHP MIDDLE-EARTH QUEST – FANTASY NERD EDITION

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
Gefährten, Orks, Zwerge, Elben, Magier,
Ringe, Quests, Berge, Festungen und
eine erstaunlich schlecht dokumentierte Fantasy-IT.
============================================================
*/


/*
============================================================
LEVEL 1 – PROVIANT DER GEFÄHRTEN

Erstelle ein Array mit mindestens 7 Proviantwerten.

Beispielwerte:

3
8
12
2
20
5
1

Jede Zahl steht für Tagesrationen.

Regeln:

unter 3:
"Das reicht nicht weit."

3 bis 7:
"Solider Reiseproviant."

8 bis 15:
"Die Gruppe ist gut vorbereitet."

über 15:
"Jemand hat den halben Vorratsraum mitgenommen."

Berechne zusätzlich die Gesamtmenge.

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
LEVEL 2 – ORK-GEFAHRENLEVEL

Erstelle ein Array mit mindestens 8 Gefahrenwerten.

Werte zwischen 0 und 100.

Regeln:

0 bis 20:
"Einzelner Goblin. Wahrscheinlich."

21 bis 50:
"Kleine Ork-Gruppe."

51 bis 80:
"Das wird unangenehm."

über 80:
"Warum hört man Trommeln?"

Zähle zusätzlich alle Werte >= 50.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 3 – NAMEN DER GEFÄHRTEN

Erstelle ein Array mit mindestens 7 Namen.

Beispiele:

Arin
Borin
Eldor
Mira
Kevin
Stackwise
Nullgrim

Regeln:

Wenn Name == "Kevin":
"Kevin trägt angeblich keinen verfluchten Ring."

Wenn Name == "Nullgrim":
"Dieser Gefährte wurde in der Datenbank nicht gefunden."

Sonst:
"Gefährte registriert: NAME"

Bonus:

Benutze strlen().

Wenn der Name länger als 10 Zeichen ist:
"Dieser Name passt kaum auf die Questrolle."
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 4 – GOLD DER ZWERGE

Erstelle ein Array mit mindestens 8 Goldbeträgen.

Berechne:

- Gesamtgold
- Anzahl der Einträge
- Durchschnitt

Regeln für Durchschnitt:

unter 10:
"Sehr bescheidener Schatz"

10 bis 30:
"Ordentlicher Schatz"

31 bis 70:
"Zwergengenehmigt"

über 70:
"Der Drache wird langsam aufmerksam"

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

Jeder Gefährte soll enthalten:

Index 0:
Name

Index 1:
Level

Index 2:
HP

Mindestens 5 Gefährten.

Regeln:

Level unter 5:
"Anfänger"

5 bis 10:
"Erfahrener Reisender"

11 bis 20:
"Veteran"

über 20:
"Hat vermutlich jede Nebenquest erledigt"

Gib zusätzlich Name und HP aus.

Recherche:

$gefaehrte[0]
$gefaehrte[1]
$gefaehrte[2]
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 6 – WAFFENKAMMER VON GOND... ÄH, DER FESTUNG

Erstelle ein mehrdimensionales Array.

Jede Waffe enthält:

[Name, Schaden, Haltbarkeit]

Mindestens 6 Waffen.

Beispiele:

Langschwert
Zwergenaxt
Elbenbogen
Verfluchter Dolch
Runenhammer
Legendärer Kochlöffel

Regeln:

Schaden unter 10:
"Übungswaffe"

10 bis 30:
"Solide Waffe"

31 bis 60:
"Sehr stark"

über 60:
"Der Schmied hat das Balancing ignoriert"

Wenn Haltbarkeit unter 20:
"Waffe kurz vor dem Zerbrechen"
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 7 – MONSTER-DATENBANK

Erstelle ein mehrdimensionales Array.

Jedes Monster enthält:

[Name, HP, Schaden]

Mindestens 6 Monster.

Beispiele:

Goblin
Ork
Troll
Warg
Schattenbestie
Balrog-ähnliches Etwas

Berechne:

Kampfwert = HP + Schaden * 2

Regeln:

unter 100:
"Kleiner Gegner"

100 bis 199:
"Ernstzunehmend"

200 bis 399:
"Mini-Boss"

ab 400:
"Warum läuft plötzlich epische Musik?"

Bonus:

Finde den höchsten Kampfwert ohne max().
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 8 – ASSOZIATIVER GEFÄHRTE

Erstelle einen Gefährten als assoziatives Array.

Er soll enthalten:

"name"
"race"
"level"
"hp"
"stamina"
"ringBearer"

Werte selbst wählen.

Regeln:

Wenn hp < 30:
"Gefährte verletzt"

Wenn stamina < 20:
"Gefährte braucht eine Pause"

Wenn ringBearer == true:
"Sehr wichtige Person. Möglichst nicht verlieren."

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

Erstelle mindestens 6 Gefährten.

Jeder besitzt:

"name"
"race"
"level"
"hp"
"danger"

Mögliche Völker:

Human
Elf
Dwarf
Hobbit
Wizard

Regeln:

danger < 3:
"Unauffällig"

3 bis 5:
"Kann sich verteidigen"

6 bis 8:
"Gefährlicher Kämpfer"

9 oder 10:
"Bitte nicht provozieren"

Wenn hp < 30 UND danger >= 7:
"Starker, aber schwer verletzter Gefährte"

Du musst benutzen:

- mehrdimensionales assoziatives Array
- foreach
- &&
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 10 – DIE GEFÄHRTEN-GRUPPE

Erstelle ein mehrdimensionales assoziatives Array.

Mindestens 4 Gruppen.

Jede Gruppe besitzt:

"name"
"morale"
"supplies"
"members"

"members" ist wieder ein Array mit Namen.

Regeln:

morale >= 80 UND supplies >= 20:
"Gruppe einsatzbereit"

morale < 40:
"Gruppe braucht eine Pause"

supplies < 5:
"Proviant kritisch"

Gib zusätzlich alle Mitglieder
mit einer zweiten foreach-Schleife aus.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 11 – KÖNIGREICH MIT REGIONEN

Erstelle folgende Struktur:

Königreich
 -> Regionen
    -> Bewohner

Mindestens:

3 Regionen
jeweils mindestens 3 Bewohner

Jeder Bewohner besitzt:

"name"
"race"
"hp"
"danger"

Gib aus:

Region
Name
Volk
HP
Gefahr

Regeln:

danger >= 8:
"Hochgefährlich"

hp <= 20:
"Schwer verletzt"

Wenn beides:
"Gefährlich und schwer verletzt"
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 12 – REISEPLAN

Erstelle mehrere Gefährten.

Jeder Gefährte besitzt:

"name"
"route"

"route" ist ein assoziatives Array mit:

"morning"
"afternoon"
"evening"

Jeder Zeitraum kann wieder ein Array
mit mehreren Orten enthalten.

Beispiele:

Wald
Bergpass
Ruine
Fluss
Festung
Taverne

Gib den kompletten Reiseplan aus.

Bonus:

Wenn "Mordor" oder ein ähnlich
unangenehmer Ort vorkommt:
"Sehr fragwürdige Reiseplanung"
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 13 – INVENTAR DER GEFÄHRTEN

Erstelle mindestens 5 Gefährten.

Jeder besitzt:

"name"
"inventory"

Inventory ist ein Array.

Beispiele:

Schwert
Brot
Seil
Umhang
Ring
Karte
Magischer USB-Stick

Gib alle Items aus.

Wenn mehr als 5 Items vorhanden:
"Inventar ziemlich voll"

Wenn "Ring" vorhanden:
"Ring besser nicht einfach herumzeigen"

Recherche:

count()
in_array()
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 14 – MAGISCHE ARTEFAKTE

Erstelle mindestens 6 Artefakte.

Jedes Artefakt besitzt:

"name"
"power"
"cursed"
"owner"

Regeln:

cursed == true:
"Verfluchtes Artefakt"

power < 30:
"Schwach magisch"

30 bis 69:
"Stark magisch"

ab 70:
"Nicht unbeaufsichtigt liegen lassen"

Wenn cursed == true UND power >= 70:
"Extrem schlechte Geschenkidee"
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 15 – 3D-MITTELERDE-STRUKTUR

Erstelle folgende Struktur:

Welt
 -> Regionen
    -> Orte
       -> Bewohner

Mindestens:

3 Regionen
2 Orte pro Region
2 Bewohner pro Ort

Gib aus:

Region
Ort
Bewohner

Du brauchst mehrere
verschachtelte foreach-Schleifen.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 16 – 3D ASSOZIATIVE STRUKTUR

Struktur:

Welt
 -> Region
    -> Festung
       -> Charakterdaten

Jeder Charakter besitzt:

"name"
"race"
"hp"
"danger"

Mindestens:

2 Regionen
2 Festungen je Region
2 Charaktere je Festung

Regeln:

danger >= 8:
"Hochrisiko"

hp <= 25:
"Verletzt"

Wenn beides:
"Verletzter Hochrisiko-Charakter"

Zähle:

- alle Charaktere
- gefährliche Charaktere
- verletzte Charaktere
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 17 – FESTUNGSVERTEIDIGUNG

Erstelle mehrere Festungen.

Jede Festung besitzt:

"name"
"gate"
"walls"
"guards"
"enemies"

Regeln:

gate == false:
"Tor zerstört"

walls < 30:
"Mauern kritisch"

guards < 10:
"Zu wenige Wachen"

Wenn gate == false UND walls < 30:
"Festung kurz vor dem Fall"

Wenn mehr als 3 Gegner vorhanden
UND guards < 10:
"Verteidigung stark unterbesetzt"

Recherche:

count()
&&
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 18 – BREAK UND CONTINUE

Erstelle mindestens 8 Gefährten.

Jeder besitzt:

"name"
"alive"
"corruption"

Regeln:

Wenn alive == false:
Gefährte überspringen.

Benutze:
continue

Wenn corruption >= 9999:
"Der dunkle Einfluss ist außer Kontrolle"

Danach Schleife beenden.

Benutze:
break
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 19 – FOR-SCHLEIFE DURCH DIE MINEN

Erstelle ein Array mit mindestens 10 Raumnamen.

Gehe NICHT mit foreach durch das Array.

Benutze:

for
count()

Ausgabe:

Raum 1: ...
Raum 2: ...

Bonus:

Gib nur jeden zweiten Raum aus.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 20 – WHILE: TROLL-KAMPF

Ein Troll startet mit:

$hp = 180;

Dein Held verursacht:

$damage = 21;

Benutze while.

Solange HP > 0:
weiter angreifen.

Nach jedem Angriff:
"Troll HP: ..."

Wenn HP < 50:
"Troll wird wütend"

Wenn HP <= 0:
"Troll besiegt"

Bonus:
Zähle die Angriffe.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 21 – MODULO-RUNEN

Erstelle ein Array mit mindestens 12 Runenwerten.

Gerade Zahl:
"Stabile Rune"

Ungerade Zahl:
"Chaotische Rune"

Durch 5 teilbar:
"Runenbonus"

Exakt 42:
"Der Zauberer versteht plötzlich alles"

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

checkDanger($danger)

Regeln:

unter 3:
"niedrig"

3 bis 5:
"mittel"

6 bis 8:
"hoch"

9 oder 10:
"extrem"

Die Funktion soll einen Text zurückgeben.

Recherche:

function
Parameter
return

Benutze sie danach für mehrere Gegner.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 23 – KAMPFKRAFT-FUNKTION

Erstelle eine Funktion:

calculatePower($character)

$character ist ein assoziatives Array.

Es besitzt:

"hp"
"damage"
"level"

Berechnung:

Power = hp + damage * level

Gib Power mit return zurück.

Erstelle mindestens 5 Charaktere.

Bonus:

Finde den stärksten ohne max().
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 24 – GEGNER-FILTER

Erstelle eine Funktion:

isDangerousEnemy($enemy)

Die Funktion gibt true zurück,
wenn:

danger >= 7
UND
hp > 0

Sonst false.

Erstelle mindestens 8 Gegner.

Speichere gefährliche lebende Gegner
in einem neuen Array.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 25 – ERSTE KLASSE

Erstelle eine Klasse:

Hero

Eigenschaften:

public $name;
public $hp;
public $damage;

Konstruktor:

__construct()

Methode:

introduce()

Ausgabe ungefähr:

"NAME zieht in die Schlacht."

Erstelle mindestens 4 Hero-Objekte.

Speichere sie in einem Array.

Gehe mit foreach durch das Array.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 26 – ANGRIFFSMETHODE

Erweitere Hero.

Erstelle:

attack($target)

Der Schaden des Angreifers
soll von den HP des Ziels abgezogen werden.

Ausgabe ungefähr:

"Arin greift den Ork an."
"Der Ork hat noch 70 HP."

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
LEVEL 27 – DUELL

Erstelle zwei Hero- oder Enemy-Objekte.

Lass sie mit while kämpfen.

Solange beide HP > 0 haben:

1. Charakter A greift an
2. prüfen, ob Charakter B lebt
3. Charakter B greift zurück

Ein besiegter Charakter
darf nicht mehr angreifen.

Bonus:

Kampfrunden zählen.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 28 – GEFÄHRTENGRUPPE ALS KLASSE

Erstelle eine Klasse:

Fellowship

Eigenschaften:

$name
$members
$morale

$members soll ein Array sein.

Methoden:

addMember($hero)
showMembers()
increaseMorale()
decreaseMorale()

Recherche:

$this->members[]
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 29 – VERERBUNG

Erstelle:

class Warrior extends Hero
class Ranger extends Hero
class Wizard extends Hero

Jede Klasse bekommt eine Spezialmethode.

Warrior:
heavyStrike()

Ranger:
preciseShot()

Wizard:
castSpell()

Recherche:

extends
parent::__construct()
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 30 – ORKS ALS KLASSE

Erstelle eine Basisklasse:

Enemy

Eigenschaften:

$name
$hp
$damage
$danger

Danach:

class Orc extends Enemy
class Troll extends Enemy
class DarkMage extends Enemy

Jede Klasse bekommt eine Spezialmethode.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 31 – FESTUNG ALS KLASSE

Erstelle eine Klasse:

Fortress

Eigenschaften:

$name
$guards
$walls
$gate
$defenders

$defenders soll ein Array sein.

Methoden:

addDefender()
checkDefense()
showStatus()

Bonus:

Berechne Gesamtstärke aller Verteidiger.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 32 – OBJEKTE IN MEHRDIMENSIONALEN ARRAYS

Erstelle mehrere Hero-Objekte.

Speichere sie in einer Struktur:

Welt
 -> Regionen
    -> Hero-Objekte

Gehe durch alle Regionen
und alle Helden.

Rufe introduce() auf.

Wenn hp <= 0:
Held überspringen.

Benutze:
continue
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 33 – ZWEI ARMEEN

Erstelle zwei Arrays
mit mehreren Hero- oder Enemy-Objekten.

Berechne pro Armee:

- Gesamt-HP
- Gesamtschaden
- Durchschnittslevel

Regeln:

Mehr HP:
"Robustere Armee"

Mehr Schaden:
"Offensivere Armee"

Wenn beides größer:
"Klar überlegen"
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 34 – TURNIER DER FREIEN VÖLKER

Erstelle mindestens 8 Charakter-Objekte.

Speichere sie in einem Array.

Je zwei treten gegeneinander an.

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
MIDDLE-EARTH CONTROL SYSTEM

Jetzt soll fast alles zusammenkommen.


TEIL 1 – HERO-KLASSE

Erstelle Hero mit:

$name
$race
$hp
$damage
$level
$stamina
$gold
$inventory

Methoden:

attack()
takeDamage()
rest()
addGold()
addItem()
showStatus()


------------------------------------------------------------
TEIL 2 – ENEMY-KLASSE

Erstelle Enemy mit:

$name
$type
$hp
$damage
$danger
$loot

Methoden:

attack()
takeDamage()
dropLoot()


------------------------------------------------------------
TEIL 3 – GEFÄHRTENGRUPPE

Erstelle Fellowship mit:

$name
$members
$morale
$supplies

Methoden:

addMember()
changeMorale()
useSupplies()
showStatus()


------------------------------------------------------------
TEIL 4 – WELTSTRUKTUR

Erstelle ein mehrdimensionales
assoziatives Array.

Struktur:

Welt
 -> Regionen
    -> Orte
       -> Charakter-Objekte

Mindestens:

3 Regionen
3 Orte pro Region


------------------------------------------------------------
TEIL 5 – ORTE

Jeder Ort besitzt:

"name"
"danger"
"safe"
"enemies"

Regeln:

danger >= 8:
"Sehr gefährliches Gebiet"

safe == false:
"Kein sicherer Rastplatz"

Wenn beides:
"Extrem schlechte Reiseentscheidung"


------------------------------------------------------------
TEIL 6 – PROVIANT

Jede Reise kostet Proviant.

Zum Beispiel:

$supplies -= 5;

Wenn supplies <= 10:
"Proviant knapp"

Wenn supplies <= 0:
"Die Gruppe hat ein Problem"


------------------------------------------------------------
TEIL 7 – KÄMPFE

Wenn Gegner vorhanden sind:

Kampf mit while.

Held greift an.

Wenn Gegner noch lebt:
Gegner greift zurück.


------------------------------------------------------------
TEIL 8 – LOOT

Nach einem Sieg:

Gold erhöhen
Item hinzufügen

Beispiele:

Ork-Klinge
Alte Rune
Zwergenmünze
Magischer Ring
Verdächtige Schriftrolle


------------------------------------------------------------
TEIL 9 – RING-SYSTEM

Erstelle ein Artefakt:

Ring

Eigenschaften:

"name"
"power"
"corruption"

Wenn getragen:
Power kann steigen.

Aber:
Corruption steigt ebenfalls.

Wenn corruption >= 100:
"Der Ringträger verliert die Kontrolle"

Du entscheidest selbst,
wie du das modellierst.


------------------------------------------------------------
TEIL 10 – MORALE

Nach Niederlagen:
Morale senken.

Nach Siegen:
Morale erhöhen.

Wenn morale < 30:
"Gruppe zweifelt"

Wenn morale > 80:
"Gruppe hochmotiviert"


------------------------------------------------------------
TEIL 11 – BREAK UND CONTINUE

Benutze beide sinnvoll.

Beispiele:

Toter Charakter:
continue

Region komplett verloren:
break


------------------------------------------------------------
TEIL 12 – OPERATOR-CHECKLISTE

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
TEIL 13 – ARRAY-CHECKLISTE

Verwende:

- normales Array
- mehrdimensionales Array
- assoziatives Array
- mehrdimensionales assoziatives Array
- Array mit Objekten
- Array innerhalb eines Objekts
- Objekte in verschachtelten Arrays


------------------------------------------------------------
TEIL 14 – SCHLEIFEN

Verwende:

foreach
for
while
break
continue


------------------------------------------------------------
TEIL 15 – FUNKTIONEN

Erstelle mindestens 3 eigene Funktionen.

Beispiele:

calculateArmyPower()
checkDanger()
calculateLoot()
checkMorale()


------------------------------------------------------------
TEIL 16 – OOP

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
TEIL 17 – ABSCHLUSSSTATISTIK

Am Ende soll ungefähr erscheinen:

====================================
MIDDLE-EARTH CONTROL SYSTEM
====================================

Regionen: ...
Orte: ...
Gefährten: ...
Gegner: ...
Besiegte Gegner: ...
Gefundene Items: ...
Gold: ...
Proviant: ...
Moral: ...

Stärkster Gefährte:
...

Gefährlichste Region:
...

Status:

REISE LÄUFT
KRITISCHE LAGE
SIEG
ODER
KEVIN HAT DEN RING ANGEZOGEN

====================================
*/


// DEIN FINAL-BOSS-CODE:














/*
============================================================
SECRET LEVEL – DIE KOMPLETTE FANTASY-WELT

Baue folgende Struktur:

Welt
 -> Königreiche
    -> Regionen
       -> Städte
          -> Gebäude
             -> Bewohner
             -> Händler
             -> Quests

Jeder Bewohner besitzt:

"name"
"race"
"level"
"hp"

Jeder Händler besitzt:

"name"
"gold"
"items"

Jede Quest besitzt:

"title"
"difficulty"
"reward"
"completed"

Mindestens:

2 Königreiche
2 Regionen pro Königreich
2 Städte pro Region
2 Gebäude pro Stadt

Zähle:

- Königreiche
- Regionen
- Städte
- Gebäude
- Bewohner
- Händler
- Quests
- abgeschlossene Quests
- alle Items
- gesamtes Quest-Gold

Finde zusätzlich:

- stärksten Bewohner
- reichsten Händler
- schwierigste Quest
- Stadt mit den meisten Bewohnern

Wenn du hier noch genau weißt,
welches Array welche Ebene darstellt,
hast du verschachtelte Arrays verstanden.
============================================================
*/


// DEIN CODE:






/*
============================================================
ULTRA SECRET LEVEL – DIE MITTELERDE-IT

Die große Festung besitzt jetzt ein IT-System.

Es gibt:

- Wachterminals
- Tore
- Signalfeuer
- Nachrichtenstationen
- Lagerverwaltung
- Späherberichte

Baue:

Festung
 -> Systeme
    -> Geräte
       -> Logs

Jedes Gerät besitzt:

"name"
"type"
"online"
"risk"

Jeder Logeintrag besitzt:

"user"
"action"
"risk"

Regeln:

online == false:
"System ausgefallen"

risk >= 8:
"System dringend prüfen"

Wenn Torsteuerung offline ist
UND eine feindliche Armee vor der Festung steht:

"Das Timing könnte besser sein"

Bonus:

Erstelle Klassen für:

FortressSystem
SignalBeacon
GateSystem

Noch mehr Bonus:

Verbinde Armee,
Festung und IT-System.

Wenn ein Ork laut Log versucht hat,
sich Adminrechte zu geben:

"Mittelerde benötigt dringend MFA."
============================================================
*/


// DEIN CODE: