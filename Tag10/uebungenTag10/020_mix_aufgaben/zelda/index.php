<?php

/*
============================================================
PHP HERO OF HYRULE QUEST – NERD EDITION

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
Helden, Rubine, Herzen, Schreine, Dungeons,
Monster, Waffen, Truhen, Magie und ein Königreich,
dessen Sicherheitskonzept hauptsächlich aus "hoffentlich hält das Tor" besteht.
============================================================
*/


/*
============================================================
LEVEL 1 – RUBINE SAMMELN

Erstelle ein Array mit mindestens 7 Rubinwerten.

Beispielwerte:

1
5
20
50
2
100
10

Regeln:

unter 5:
"Kleiner Fund"

5 bis 19:
"Solider Rubin-Fund"

20 bis 49:
"Guter Schatz"

ab 50:
"Der Händler wird plötzlich sehr freundlich"

Berechne zusätzlich die Gesamtsumme aller Rubine.

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
LEVEL 2 – HERZEN

Erstelle ein Array mit mindestens 8 Herz-Werten.

Jede Zahl steht für aktuelle Lebensenergie.

Regeln:

unter 3:
"Sehr kritisch"

3 bis 5:
"Verletzt"

6 bis 10:
"Alles okay"

über 10:
"Sehr gut vorbereitet"

Zähle zusätzlich alle Werte unter 5.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 3 – HELDENNAMEN

Erstelle ein Array mit mindestens 7 Namen.

Beispiele:

Linkus
ZeldaByte
Mipha
Daruk
Kevin
NullKnight
StackHero

Regeln:

Wenn Name == "Kevin":
"Kevin hat den Schlüssel zum Bossraum verloren."

Wenn Name == "NullKnight":
"Dieser Held wurde nicht geladen."

Sonst:
"Held registriert: NAME"

Bonus:

Benutze strlen().

Wenn der Name länger als 10 Zeichen ist:
"Der Name passt kaum auf die Questanzeige."
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 4 – AUSDAUERLEISTE

Erstelle ein Array mit mindestens 8 Ausdauerwerten.

Berechne:

- Gesamtausdauer
- Anzahl der Werte
- Durchschnitt

Regeln für Durchschnitt:

unter 20:
"Nach drei Metern Klettern ist Schluss"

20 bis 49:
"Normale Ausdauer"

50 bis 79:
"Gut trainiert"

ab 80:
"Kann vermutlich senkrechte Berge hochlaufen"

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

Jede Spielfigur soll enthalten:

Index 0:
Name

Index 1:
Level

Index 2:
Herzen

Mindestens 5 Figuren.

Regeln:

Level unter 5:
"Anfänger"

5 bis 10:
"Abenteurer"

11 bis 20:
"Veteran"

über 20:
"Hat vermutlich schon 97 Schreine gefunden"

Gib zusätzlich Name und Herzen aus.

Recherche:

$figur[0]
$figur[1]
$figur[2]
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 6 – WAFFENINVENTAR

Erstelle ein mehrdimensionales Array.

Jede Waffe enthält:

[Name, Schaden, Haltbarkeit]

Mindestens 6 Waffen.

Beispiele:

Holzschwert
Soldatenschwert
Rostiger Speer
Antiker Bogen
Runenklinge
Legendärer Kochlöffel

Regeln:

Schaden unter 10:
"Sehr schwach"

10 bis 29:
"Solide"

30 bis 59:
"Stark"

ab 60:
"Das Balancing-Team schaut nervös"

Wenn Haltbarkeit unter 20:
"Diese Waffe zerbricht vermutlich gleich"
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 7 – MONSTERLISTE

Erstelle ein mehrdimensionales Array.

Jedes Monster enthält:

[Name, HP, Schaden]

Mindestens 6 Monster.

Beispiele:

Bokoblin
Moblin
Lizalfos
Keese
Wächter
Sehr verdächtiger Stein

Berechne:

Kampfwert = HP + Schaden * 2

Regeln:

unter 100:
"Kleiner Gegner"

100 bis 199:
"Gefährlich"

200 bis 399:
"Mini-Boss"

ab 400:
"Warum läuft Bossmusik?"

Bonus:

Finde den höchsten Kampfwert ohne max().
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 8 – ASSOZIATIVER HELD

Erstelle einen Helden als assoziatives Array.

Er soll enthalten:

"name"
"hearts"
"stamina"
"rupees"
"weapon"
"alive"

Werte selbst wählen.

Regeln:

Wenn hearts < 3:
"Fast besiegt"

Wenn stamina < 20:
"Erstmal nicht klettern"

Wenn alive == false:
"Game Over"

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

Erstelle mindestens 6 Helden oder Abenteurer.

Jeder besitzt:

"name"
"hearts"
"stamina"
"attack"
"rupees"

Regeln:

attack < 20:
"Schwach"

20 bis 49:
"Normal"

50 bis 79:
"Stark"

ab 80:
"Sehr stark"

Wenn hearts < 3 UND attack >= 60:
"Extrem gefährlich, aber fast besiegt"

Du musst benutzen:

- mehrdimensionales assoziatives Array
- foreach
- &&
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 10 – SCHREINE

Erstelle ein mehrdimensionales assoziatives Array.

Mindestens 5 Schreine.

Jeder Schrein besitzt:

"name"
"difficulty"
"completed"
"treasures"

"treasures" ist wieder ein Array.

Regeln:

difficulty unter 3:
"Einfacher Schrein"

3 bis 6:
"Normal"

7 bis 9:
"Knifflig"

10:
"Wer hat dieses Rätsel gebaut?"

Wenn completed == true:
"Schrein abgeschlossen"

Gib zusätzlich alle Schätze aus.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 11 – REGIONEN UND ORTE

Erstelle folgende Struktur:

Königreich
 -> Regionen
    -> Orte

Mindestens:

3 Regionen
jeweils mindestens 3 Orte

Jeder Ort besitzt:

"name"
"danger"
"weather"

Regeln:

danger >= 8:
"Sehr gefährlich"

weather == "storm":
"Gewitter"

Wenn beides:
"Vielleicht nicht mit Metallschwert herumlaufen"

Gib aus:

Region
Ort
Gefahr
Wetter
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 12 – REISEPLAN

Erstelle mehrere Helden.

Jeder Held besitzt:

"name"
"route"

"route" ist ein assoziatives Array:

"morning"
"afternoon"
"evening"

Jeder Zeitraum enthält ein Array
mit mehreren Orten.

Beispiele:

Dorf
Schrein
Wald
Berg
Ruine
Stall

Gib den kompletten Reiseplan aus.

Bonus:

Wenn "Vulkan" vorkommt:
"Feuerresistenz könnte hilfreich sein"
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 13 – INVENTAR DES HELDEN

Erstelle mindestens 5 Helden.

Jeder besitzt:

"name"
"inventory"

Inventory ist ein Array.

Beispiele:

Schwert
Schild
Bogen
Apfel
Pilz
Trank
Fackel
Verdächtiger USB-Stein

Gib alle Items aus.

Wenn mehr als 6 Items vorhanden:
"Inventar ziemlich voll"

Wenn "Apfel" vorhanden:
"Notfallessen vorhanden"

Recherche:

count()
in_array()
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 14 – KOCHSYSTEM

Erstelle mindestens 6 Gerichte.

Jedes Gericht besitzt:

"name"
"healing"
"bonus"
"ingredients"

"ingredients" ist ein Array.

Regeln:

healing unter 3:
"Snack"

3 bis 6:
"Gute Mahlzeit"

7 bis 10:
"Sehr starke Heilung"

über 10:
"Der Koch hat etwas übertrieben"

Wenn bonus == "stamina":
"Ausdauerbonus"

Wenn bonus == "attack":
"Angriffsbonus"

Gib zusätzlich alle Zutaten aus.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 15 – 3D-DUNGEON

Erstelle folgende Struktur:

Dungeon
 -> Etagen
    -> Räume
       -> Monster

Mindestens:

3 Etagen
2 Räume pro Etage
2 Monster pro Raum

Gib aus:

Etage
Raum
Monster

Du brauchst mehrere
verschachtelte foreach-Schleifen.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 16 – 3D ASSOZIATIVER DUNGEON

Struktur:

Dungeon
 -> Etage
    -> Raum
       -> Monsterdaten

Jedes Monster besitzt:

"name"
"hp"
"damage"
"boss"

Mindestens:

2 Etagen
2 Räume je Etage
2 Monster je Raum

Regeln:

boss == true:
"Boss gefunden"

hp <= 25:
"Fast besiegt"

damage >= 50:
"Hoher Schaden"

Wenn alles zutrifft:
"Bitte vorher speichern"

Zähle:

- alle Monster
- Bosse
- verletzte Monster
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 17 – BURGVERTEIDIGUNG

Erstelle mehrere Festungen oder Burgen.

Jede besitzt:

"name"
"gate"
"guards"
"walls"
"monsters"

Regeln:

gate == false:
"Tor offen oder zerstört"

guards < 10:
"Zu wenige Wachen"

walls < 30:
"Mauer kritisch"

Wenn gate == false UND guards < 10:
"Das sieht nicht gut aus"

Wenn mehr als 3 Monster vorhanden
UND walls < 50:
"Verteidigung überfordert"

Recherche:

count()
&&
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 18 – BREAK UND CONTINUE

Erstelle mindestens 8 Helden.

Jeder besitzt:

"name"
"alive"
"corruption"

Regeln:

Wenn alive == false:
Held überspringen.

Benutze:
continue

Wenn corruption >= 9999:
"Die dunkle Macht übernimmt"

Danach Schleife beenden.

Benutze:
break
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 19 – FOR-SCHLEIFE DURCH DEN DUNGEON

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
LEVEL 20 – WHILE: BOSS-KAMPF

Ein Boss startet mit:

$hp = 200;

Dein Held verursacht:

$damage = 24;

Benutze while.

Solange HP > 0:
weiter angreifen.

Nach jedem Angriff:
"Boss HP: ..."

Wenn HP < 50:
"Boss wird wütend"

Wenn HP <= 0:
"Boss besiegt"

Bonus:
Zähle die Angriffe.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 21 – MODULO-RUNEN

Erstelle ein Array mit mindestens 12 Runenwerten.

Gerade:
"Stabile Rune"

Ungerade:
"Chaotische Rune"

Durch 5 teilbar:
"Bonus-Muster"

Exakt 42:
"Die alte Maschine zeigt eine seltsame Nachricht"

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

Benutze sie danach für mehrere Orte.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 23 – HELDENSTÄRKE

Erstelle eine Funktion:

calculateHeroPower($hero)

$hero ist ein assoziatives Array.

Es besitzt:

"hearts"
"attack"
"stamina"

Berechnung:

Power =
hearts * 10
+ attack * 2
+ stamina

Gib den Wert mit return zurück.

Erstelle mindestens 5 Helden.

Bonus:

Finde den stärksten ohne max().
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 24 – SCHATZFILTER

Erstelle eine Funktion:

isRareTreasure($item)

Das Item besitzt:

"name"
"rarity"

Die Funktion gibt true zurück,
wenn rarity >= 80.

Sonst false.

Erstelle mindestens 10 Items.

Speichere alle seltenen Schätze
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
public $hearts;
public $attack;

Konstruktor:

__construct()

Methode:

introduce()

Ausgabe ungefähr:

"NAME zieht sein Schwert."

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

Der Angriffswert
soll von den HP des Ziels
abgezogen werden.

Dafür braucht das Ziel z.B.:

$hp

Ausgabe ungefähr:

"Linkus greift einen Moblin an."
"Moblin hat noch 55 HP."

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
LEVEL 27 – HELD GEGEN MONSTER

Erstelle:

einen Hero
ein Monster

Lass beide mit while kämpfen.

Solange beide HP > 0 haben:

1. Hero greift an
2. prüfen, ob Monster noch lebt
3. Monster greift zurück

Ein besiegter Charakter
darf nicht nochmal angreifen.

Bonus:

Kampfrunden zählen.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 28 – INVENTAR ALS KLASSE

Erstelle eine Klasse:

Inventory

Eigenschaften:

$items
$capacity

Methoden:

addItem($item)
removeItem($item)
showItems()
isFull()

Wenn count($items) >= capacity:
"Inventar voll"

Recherche:

$this->items[]
array_search()
unset()
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 29 – VERERBUNG

Erstelle:

class Warrior extends Hero
class Archer extends Hero
class Mage extends Hero

Jede Klasse bekommt eine Spezialmethode.

Warrior:
spinAttack()

Archer:
chargedShot()

Mage:
castSpell()

Recherche:

extends
parent::__construct()
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 30 – MONSTER ALS KLASSE

Erstelle eine Basisklasse:

Monster

Eigenschaften:

$name
$hp
$damage
$danger

Danach:

class Bokoblin extends Monster
class Moblin extends Monster
class Guardian extends Monster

Jede Klasse bekommt eine Spezialmethode.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 31 – SCHREIN ALS KLASSE

Erstelle eine Klasse:

Shrine

Eigenschaften:

$name
$difficulty
$completed
$treasures

$treasures soll ein Array sein.

Methoden:

complete()
addTreasure()
showTreasures()
showStatus()
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 32 – OBJEKTE IN MEHRDIMENSIONALEN ARRAYS

Erstelle mehrere Hero- oder Monster-Objekte.

Speichere sie in einer Struktur:

Königreich
 -> Regionen
    -> Objekte

Gehe durch alle Regionen.

Wenn HP <= 0:
Objekt überspringen.

Benutze:
continue
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 33 – ZWEI ABENTEUERGRUPPEN

Erstelle zwei Gruppen
mit mehreren Hero-Objekten.

Berechne pro Gruppe:

- Gesamt-Herzen
- Gesamt-Angriff
- Durchschnittsausdauer

Regeln:

Mehr Herzen:
"Robuster"

Mehr Angriff:
"Offensiver"

Wenn beides:
"Klar stärker"
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 34 – TURNIER

Erstelle mindestens 8 Hero- oder Monster-Objekte.

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
KINGDOM ADVENTURE CONTROL SYSTEM

Jetzt soll fast alles zusammenkommen.


TEIL 1 – HERO-KLASSE

Erstelle Hero mit:

$name
$hearts
$maxHearts
$stamina
$attack
$defense
$rupees
$inventory
$weapons

Methoden:

attack()
takeDamage()
heal()
rest()
addRupees()
addItem()
showStatus()


------------------------------------------------------------
TEIL 2 – MONSTER-KLASSE

Erstelle Monster mit:

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
TEIL 3 – SCHREINE

Erstelle Shrine mit:

$name
$difficulty
$completed
$treasures

Methoden:

complete()
addTreasure()
showStatus()


------------------------------------------------------------
TEIL 4 – WELTSTRUKTUR

Erstelle ein mehrdimensionales
assoziatives Array.

Struktur:

Königreich
 -> Regionen
    -> Orte
       -> Monster-Objekte
       -> Schätze
       -> Schreine

Mindestens:

3 Regionen
3 Orte pro Region


------------------------------------------------------------
TEIL 5 – WETTER UND REGIONEN

Jeder Ort besitzt:

"name"
"weather"
"temperature"
"danger"

Regeln:

weather == "storm":
"Gewitter"

temperature < 0:
"Kälte"

temperature > 40:
"Extreme Hitze"

Wenn danger >= 8:
"Hochrisikogebiet"


------------------------------------------------------------
TEIL 6 – AUSDAUER

Klettern kostet Ausdauer.

Zum Beispiel:

$stamina -= 10;

Wenn stamina <= 20:
"Ausdauer niedrig"

Wenn stamina <= 0:
"Klettern nicht mehr möglich"


------------------------------------------------------------
TEIL 7 – KÄMPFE

Wenn Monster vorhanden:

Kampf mit while.

Held greift an.

Wenn Monster noch lebt:
Monster greift zurück.


------------------------------------------------------------
TEIL 8 – WAFFENHALTBARKEIT

Jede Waffe besitzt:

"name"
"damage"
"durability"

Nach jedem Angriff:

durability -= 1

Wenn durability <= 0:
"Waffe zerbrochen"

Entferne sie aus dem Inventar.


------------------------------------------------------------
TEIL 9 – LOOT

Nach einem Sieg:

Rubine erhöhen
Item hinzufügen

Beispiele:

Monsterhorn
Kristall
Antikes Zahnrad
Pilz
Pfeile
Sehr verdächtiger Stein


------------------------------------------------------------
TEIL 10 – KOCHEN

Erstelle Gerichte.

Jedes Gericht besitzt:

"name"
"healing"
"bonus"

Beim Essen:

Herzen erhöhen.

Aber nicht über maxHearts.


------------------------------------------------------------
TEIL 11 – SCHREINE

Bei abgeschlossenem Schrein:

Belohnung erhöhen.

Zähle alle abgeschlossenen Schreine.

Wenn genug Schreine abgeschlossen:
"Neue Fähigkeit freigeschaltet"


------------------------------------------------------------
TEIL 12 – BREAK UND CONTINUE

Benutze beide sinnvoll.

Beispiele:

Besiegtes Monster:
continue

Region komplett unpassierbar:
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

calculateHeroPower()
checkWeatherDanger()
calculateLootValue()
isRareTreasure()


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
KINGDOM ADVENTURE CONTROL SYSTEM
====================================

Regionen: ...
Orte: ...
Schreine: ...
Abgeschlossene Schreine: ...
Monster: ...
Besiegte Monster: ...
Rubine: ...
Items: ...
Waffen: ...
Gefundene Schätze: ...

Stärkster Held:
...

Gefährlichste Region:
...

Status:

ABENTEUER LÄUFT
KRITISCH
KÖNIGREICH GERETTET
ODER
KEVIN HAT DAS MASTER-SCHWERT VERKAUFT

====================================
*/


// DEIN FINAL-BOSS-CODE:














/*
============================================================
SECRET LEVEL – DAS KOMPLETTE KÖNIGREICH

Baue folgende Struktur:

Welt
 -> Regionen
    -> Städte
       -> Gebäude
          -> Bewohner
          -> Händler
          -> Quests
          -> Items

Jeder Bewohner besitzt:

"name"
"role"
"hearts"
"danger"

Jeder Händler besitzt:

"name"
"rupees"
"items"

Jede Quest besitzt:

"title"
"difficulty"
"reward"
"completed"

Jedes Item besitzt:

"name"
"value"
"rarity"

Mindestens:

2 Regionen
3 Städte pro Region
2 Gebäude pro Stadt
2 Bewohner pro Gebäude

Zähle:

- Regionen
- Städte
- Gebäude
- Bewohner
- Händler
- Quests
- Items
- abgeschlossene Quests
- gesamte Rubinbelohnungen

Finde zusätzlich:

- stärksten Bewohner
- reichsten Händler
- schwierigste Quest
- Stadt mit den meisten Items

Wenn du hier noch weißt,
welcher Array-Key wohin gehört,
hast du verschachtelte Arrays verstanden.
============================================================
*/


// DEIN CODE:






/*
============================================================
ULTRA SECRET LEVEL – DIE SHEIKAH-IT

Das Königreich besitzt ein uraltes Techniksystem.

Es gibt:

- Türme
- Terminals
- Schreine
- Kartenmodule
- Sensoren
- Wächter

Baue:

Königreich
 -> Systeme
    -> Geräte
       -> Logs

Jedes Gerät besitzt:

"name"
"type"
"online"
"energy"
"risk"

Jeder Logeintrag besitzt:

"user"
"action"
"risk"

Regeln:

online == false:
"System offline"

energy <= 10:
"Energie kritisch"

risk >= 8:
"System prüfen"

Wenn Wächter online UND risk >= 9:
"Vielleicht nicht direkt davor stehen"

Bonus:

Erstelle Klassen für:

AncientSystem
GuardianSystem
ShrineTerminal

Noch mehr Bonus:

Verbinde Welt,
Monster,
Schreine und Technik miteinander.

Wenn im Log steht,
dass Kevin versucht hat,
einen Wächter per PHP neu zu starten:

"Das Königreich braucht dringend eine IT-Richtlinie."
============================================================
*/


// DEIN CODE: