<?php

/*
============================================================
PHP ADVENTURE QUEST – NERD EDITION

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
Die beschriebenen Werte und Inhalte sind nur Vorgaben.
============================================================
*/


/*
============================================================
LEVEL 1 – DER VERDÄCHTIGE GOLD-BEUTEL

Erstelle ein Array mit mindestens 6 Goldbeträgen.

Beispielwerte:

3
12
50
2
100
7

Gehe mit foreach durch das Array.

Regeln:

unter 5 Gold:
"Das ist kein Schatz, das ist Kleingeld."

5 bis 20 Gold:
"Solider Anfänger-Loot."

21 bis 99 Gold:
"Der Händler wird plötzlich freundlich."

ab 100 Gold:
"Du hast vermutlich eine Nebenquest übersprungen."

Du musst benutzen:

- selbst erstelltes Array
- foreach
- if
- elseif
- else
- <
- >=
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 2 – TRANK-CHECK

Erstelle selbst ein Array mit mindestens 7 Tränken.

Jeder Eintrag ist eine Zahl und steht für die Heilung.

Beispielwerte:

5
10
25
50
80
3
100

Regeln:

unter 10:
"Das ist vermutlich gefärbtes Wasser."

10 bis 30:
"Kleiner Heiltrank"

31 bis 70:
"Großer Heiltrank"

über 70:
"Der Alchemist hat die Dokumentation ignoriert."

Zähle zusätzlich, wie viele starke Tränke
mehr als 30 Heilung besitzen.

Du musst benutzen:

- Array
- foreach
- +=
- if / elseif / else
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 3 – NPC-NAMENSCHECK

Erstelle ein Array mit mindestens 7 NPC-Namen.

Beispiele:

Gandolf
Sir Bugbert
Kevin
Merlin
Stackus Overflowus
Bob
DungeonMaster3000

Gehe durch alle Namen.

Regeln:

Wenn der Name "Kevin" ist:
"Kevin hat wieder die Quest kaputt gemacht."

Wenn der Name "Bob" ist:
"Bob verkauft verdächtig günstige Schwerter."

Sonst:
"NPC gefunden: NAME"

Bonus:

Benutze strlen().

Wenn ein Name länger als 10 Zeichen ist:
"Dieser NPC braucht ein größeres Namensschild."
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 4 – ERFAHRUNGSPUNKTE

Erstelle ein eigenes Array mit mindestens 8 XP-Werten.

Berechne:

- gesamte XP
- Anzahl der Missionen
- Durchschnitt

Versuche zuerst alles mit Schleifen.

Regeln für gesamte XP:

unter 50:
"Tutorial-Goblin"

50 bis 149:
"Abenteuer-Praktikant"

150 bis 299:
"Dungeon Developer"

ab 300:
"Senior Raid Architect"

Recherche danach:

count()
array_sum()
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 5 – ERSTES MEHRDIMENSIONALES ARRAY

Erstelle ein mehrdimensionales Array.

Jeder Held soll enthalten:

Index 0:
Name

Index 1:
Level

Index 2:
HP

Mindestens 5 Helden.

Beispiele für Namen:

Arthas
Gimli
ShadowKevin
ByteMage
Sir Nullpointer

Gehe mit foreach durch alle Helden.

Regeln:

Level unter 5:
"Anfänger"

Level 5 bis 10:
"Abenteurer"

Level 11 bis 20:
"Veteran"

über 20:
"Hat wahrscheinlich jede Nebenquest gemacht"

Gib zusätzlich Name und HP aus.

Recherche:

Wie greift man auf:

$held[0]
$held[1]
$held[2]

zu?
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 6 – WAFFENLAGER

Erstelle ein mehrdimensionales Array.

Jede Waffe soll enthalten:

[Name, Schaden, Haltbarkeit]

Mindestens 6 Waffen.

Beispiele:

Holzschwert
Laser-Axt
Verbuggter Zauberstab
Käsebrot des Schadens
USB-Schwert
Legendärer Löffel

Regeln:

Schaden unter 10:
"Tutorial-Waffe"

10 bis 30:
"Ordentliche Waffe"

31 bis 70:
"Boss-tauglich"

über 70:
"Balance-Team wurde nicht informiert"

Wenn Haltbarkeit unter 20 liegt:
"Waffe fällt vermutlich beim nächsten Schlag auseinander"

Du musst benutzen:

- mehrdimensionales Array
- foreach
- if / elseif / else
- &&
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 7 – MONSTER-DATENBANK

Erstelle ein mehrdimensionales Array.

Jedes Monster:

[Name, HP, Schaden]

Mindestens 6 Monster.

Berechne:

Kampfwert = HP + Schaden * 2

Regeln:

unter 100:
"Trash Mob"

100 bis 199:
"Normaler Gegner"

200 bis 399:
"Mini-Boss"

ab 400:
"Warum läuft hier Boss-Musik?"

Bonus:
Finde den höchsten Kampfwert ohne max().
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 8 – ASSOZIATIVES HELDEN-ARRAY

Erstelle einen Helden als assoziatives Array.

Er soll enthalten:

"name"
"class"
"level"
"hp"
"mana"
"alive"

Werte selbst wählen.

Gib alle Informationen aus.

Regeln:

Wenn hp < 30:
"Heiltrank wäre jetzt keine schlechte Idee."

Wenn mana < 20:
"Zauberer läuft auf Energiesparmodus."

Wenn alive == false:
"Dieser Held nimmt an keiner Quest mehr teil."

Recherche:

true
false
assoziatives Array
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 9 – MEHRDIMENSIONALES ASSOZIATIVES ARRAY

Erstelle mindestens 6 Helden.

Jeder Held soll besitzen:

"name"
"class"
"level"
"hp"
"damage"

Beispiele für Klassen:

Mage
Warrior
Rogue
Paladin

Regeln:

Level unter 5:
"Neuling"

5 bis 10:
"Erfahren"

11 bis 20:
"Veteran"

über 20:
"Hat offensichtlich zu viel Freizeit"

Wenn hp < 30 UND level > 10:
"Starker Held in sehr schlechtem Zustand"

Du musst benutzen:

- mehrdimensionales assoziatives Array
- foreach
- &&
- if / elseif / else
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 10 – DIE TAVERNE

Erstelle ein mehrdimensionales assoziatives Array.

Mindestens 4 Tische.

Jeder Tisch soll enthalten:

"name"
"gold"
"customers"

"customers" soll wieder ein Array mit NPC-Namen sein.

Beispiel:

Tisch "Zum kaputten Compiler"

Dort sitzen mehrere NPCs.

Gehe durch alle Tische.

Gib aus:

Tischname
Gold
alle Gäste

Benutze dafür eine foreach-Schleife
innerhalb einer foreach-Schleife.

Bonus:

Wenn mehr als 3 Gäste an einem Tisch sitzen:
"Tisch ist überfüllt."

Recherche:

verschachtelte foreach-Schleifen
count()
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 11 – DUNGEON MIT RÄUMEN

Erstelle ein mehrdimensionales assoziatives Array.

Struktur:

Dungeon
 -> Räume
    -> Monster

Mindestens:

3 Räume
jeweils mindestens 3 Monster

Jedes Monster soll enthalten:

"name"
"hp"
"damage"

Gib aus:

Raum
Monstername
HP
Schaden

Regeln:

HP < 20:
"Monster fast besiegt"

Schaden > 50:
"Sehr gefährlicher Gegner"

Wenn beides gleichzeitig:
"Glaskanonen-Monster"

Du musst benutzen:

- tief verschachteltes Array
- mehrere foreach-Schleifen
- &&
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 12 – QUEST-LOG

Erstelle mindestens 5 Quests.

Jede Quest soll besitzen:

"title"
"reward"
"difficulty"
"completed"

Regeln:

completed == true:
"Quest abgeschlossen"

completed == false:
"Quest noch offen"

difficulty unter 3:
"Einfach"

3 bis 6:
"Normal"

7 bis 9:
"Schwer"

10:
"Warum hast du diese Quest angenommen?"

Berechne zusätzlich das gesamte Gold
aller abgeschlossenen Quests.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 13 – QUESTS MIT TEILAUFGABEN

Erstelle ein mehrdimensionales assoziatives Array.

Jede Quest soll enthalten:

"title"
"tasks"

"tasks" ist wiederum ein Array.

Jede Teilaufgabe soll besitzen:

"name"
"done"

Mindestens:

3 Quests
jeweils 3 Teilaufgaben

Beispiel:

Quest:
"Rette das Königreich"

Tasks:
- finde Schlüssel
- besiege Goblin
- starte Server neu

Gib alle Quests und Teilaufgaben aus.

Zähle, wie viele Aufgaben erledigt sind.

Bonus:

Wenn alle Teilaufgaben erledigt sind:
"Quest vollständig abgeschlossen"

Recherche:

count()
Vergleich von Zählern
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 14 – INVENTAR EINES HELDEN

Erstelle mehrere Helden.

Jeder Held soll besitzen:

"name"
"inventory"

Inventory ist ein Array mit mehreren Items.

Beispiele:

Heiltrank
Schwert
Magischer USB-Stick
Goldener Debugger
Käsebrot

Gib alle Items jedes Helden aus.

Wenn ein Held mehr als 5 Items trägt:
"Inventar voll"

Wenn das Item "Käsebrot" vorkommt:
"Notfallration vorhanden"

Recherche:

count()
in_array()
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 15 – SHOP-SYSTEM

Erstelle mindestens 7 Shop-Produkte.

Jedes Produkt besitzt:

"name"
"price"
"stock"
"type"

Mögliche Typen:

weapon
armor
potion
junk

Beispiele:

Schwert
Zauberstab
Heiltrank
Rüstung
Legendärer Löffel
Defekte Tastatur

Berechne:

Lagerwert = price * stock

Regeln:

stock == 0:
"Ausverkauft"

stock < 3:
"Fast leer"

stock >= 3:
"Auf Lager"

Berechne zusätzlich:

Gesamtwert des Shops.

Bonus:

Berechne Gesamtwert je Produkttyp.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 16 – 3D-DUNGEON

Erstelle ein Array mit:

Dungeon
 -> Etagen
    -> Räume
       -> Monster

Mindestens:

3 Etagen
2 Räume pro Etage
2 Monster pro Raum

Gehe durch alles.

Gib aus:

Etage
Raum
Monster

Du brauchst wahrscheinlich drei
ineinander verschachtelte foreach-Schleifen.

Recherche:

Wie behält man bei drei Schleifen
noch den Überblick?
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 17 – 3D ASSOZIATIVER DUNGEON

Jetzt mit echten Daten.

Struktur:

Dungeon
 -> Etage
    -> Raum
       -> Monster-Daten

Jedes Monster besitzt:

"name"
"hp"
"damage"
"boss"

Mindestens:

2 Etagen
3 Räume je Etage
2 Monster je Raum

Regeln:

boss == true:
"Boss gefunden"

hp < 25:
"Gegner fast besiegt"

damage > 50:
"Hoher Schaden"

Wenn Boss UND damage > 50:
"Bitte speichern."

Zähle:

- alle Monster
- alle Bosse
- alle schwachen Monster
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 18 – KÖNIGREICH-DATENBANK

Erstelle diese logische Struktur:

Königreich
 -> Städte
    -> Händler
       -> Produkte

Mindestens:

2 Städte
2 Händler pro Stadt
3 Produkte pro Händler

Jedes Produkt besitzt:

"name"
"price"
"stock"

Berechne:

- Anzahl Städte
- Anzahl Händler
- Anzahl Produkte
- Gesamtwert aller Waren

Zusatz:

Wenn stock == 0:
Produkt nicht zum Gesamtwert addieren.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 19 – PARTY-SYSTEM

Erstelle eine Abenteurergruppe mit mindestens 6 Helden.

Jeder Held besitzt:

"name"
"class"
"hp"
"mana"
"alive"

Regeln:

Wenn alive == false:
Held komplett überspringen.

Benutze:
continue

Wenn ein Held den Namen
"Sir Nullpointer" besitzt:

"Fataler Fehler in der Party"

Danach Schleife beenden.

Benutze:
break

Alle anderen Helden normal ausgeben.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 20 – FOR-SCHLEIFE IM DUNGEON

Erstelle ein Array mit mindestens 10 Raum-Namen.

Gehe NICHT mit foreach durch das Array.

Benutze:

for
count()

Ausgabe:

Raum 1: Eingang
Raum 2: Goblin-Küche
...

Bonus:

Gib nur jeden zweiten Raum aus.

Recherche:

$i++
$i += 2
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 21 – WHILE: BOSS-KAMPF

Ein Boss startet mit:

200 HP

Der Held macht:

23 Schaden

Benutze eine while-Schleife.

Greife so lange an, bis der Boss keine HP mehr hat.

Nach jedem Angriff:

"Boss HP: ..."

Wenn Boss HP unter 50:
"Boss aktiviert Phase 2"

Wenn HP <= 0:
"Boss besiegt"

Bonus:

Zähle die Angriffe.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 22 – MODULO IM ZAUBERTURM

Erstelle ein Array mit mindestens 12 Mana-Werten.

Prüfe jeden Wert.

Wenn Wert gerade:
"Stabiler Zauber"

Wenn Wert ungerade:
"Chaotischer Zauber"

Wenn zusätzlich durch 5 teilbar:
"Mana-Bonus"

Wenn exakt 42:
"Der Magier versteht plötzlich das Universum."

Benutze:

%
==
foreach
if / else
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 23 – ERSTE FUNKTION

Erstelle eine Funktion:

checkDifficulty($difficulty)

Regeln:

unter 3:
"einfach"

3 bis 5:
"normal"

6 bis 8:
"schwer"

9 oder 10:
"Boss-Quest"

Die Funktion soll mit return
einen Text zurückgeben.

Erstelle danach mehrere Quests
und benutze die Funktion für jede Quest.

Recherche:

function
Parameter
return
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 24 – FUNKTION MIT HELDEN-ARRAY

Erstelle eine Funktion:

calculatePower($hero)

$hero ist ein assoziatives Array.

Es besitzt:

hp
damage
level

Berechnung:

Power = hp + damage * level

Gib Power mit return zurück.

Erstelle mindestens 5 Helden.

Berechne für jeden die Power.

Bonus:

Finde den stärksten Helden ohne max().
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 25 – LOOT-FILTER

Erstelle eine Funktion:

isLegendary($item)

Ein Item besitzt:

"name"
"rarity"

Die Funktion gibt true zurück,
wenn rarity >= 80.

Sonst false.

Erstelle mindestens 10 Items.

Speichere alle legendären Items
in einem neuen Array.

Recherche:

true
false
return
$array[]
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 26 – KLASSEN BEGINNEN

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

Ausgabe:

"Mein Name ist NAME und ich verursache DAMAGE Schaden."

Erstelle mindestens 4 Helden-Objekte.

Speichere alle Objekte in einem Array.

Gehe mit foreach durch das Array
und rufe introduce() auf.

Recherche:

class
public
$this
__construct()
new
->
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 27 – ANGRIFFSMETHODE

Erweitere Hero.

Erstelle:

attack($target)

Der Angreifer zieht seinen Schaden
von den HP des Ziels ab.

Beispiel:

"ByteMage greift BugLord an."

Danach:

"BugLord hat noch 75 HP."

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
LEVEL 28 – HELD GEGEN MONSTER

Erstelle:

einen Helden
einen Gegner

Lass beide mit while kämpfen.

Solange beide HP > 0 haben:

1. Held greift an
2. prüfen, ob Gegner noch lebt
3. Gegner greift zurück

Ein besiegter Charakter
darf nicht mehr angreifen.

Bonus:

Kampfrunden zählen.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 29 – PARTY AUS OBJEKTEN

Erstelle mindestens 6 Hero-Objekte.

Speichere sie in:

$party

Berechne:

- gesamte HP
- gesamten Schaden
- Durchschnittslevel

Dafür musst du deine Hero-Klasse
um ein Level erweitern.

Regeln:

Wenn Gesamt-HP > 500:
"Party ist ziemlich robust"

Wenn Gesamtschaden > 200:
"Boss sollte nervös werden"

Wenn beides:
"Raid-Gruppe bereit"
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 30 – GILDE ALS KLASSE

Erstelle eine Klasse:

Guild

Eigenschaften:

$name
$members

$members soll ein Array sein.

Methoden:

addMember($hero)
showMembers()
getTotalHp()

Recherche:

Wie speichert man Objekte
innerhalb eines Objekt-Arrays?

Hinweis:

$this->members[]
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 31 – VERERBUNG

Erstelle:

class Mage extends Hero

Zusätzliche Eigenschaft:

$mana

Zusätzliche Methode:

castSpell($target)

Der Zauber kostet Mana
und verursacht Schaden.

Recherche:

extends
parent::__construct()
protected
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 32 – MEHRERE HELDENKLASSEN

Erstelle:

class Warrior extends Hero
class Mage extends Hero
class Rogue extends Hero

Jede Klasse bekommt eine Spezialfähigkeit.

Warrior:
heavyAttack()

Mage:
castSpell()

Rogue:
criticalStrike()

Erstelle von jeder Klasse
mindestens ein Objekt.

Speichere alle gemeinsam
in einem Array.

Bonus:

Jede Klasse soll unterschiedliche Werte
für HP und Schaden haben.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 33 – MONSTER-VERERBUNG

Erstelle eine Klasse:

Monster

Danach:

Goblin extends Monster
Dragon extends Monster
Slime extends Monster

Jedes Monster bekommt
eine eigene Spezialfähigkeit.

Beispiele:

Goblin:
stealGold()

Dragon:
fireBreath()

Slime:
split()

Recherche:

Methoden überschreiben
Vererbung
protected
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 34 – DUNGEON MIT OBJEKTEN

Erstelle mehrere Monster-Objekte.

Speichere sie in einem
mehrdimensionalen Array.

Struktur:

Dungeon
 -> Räume
    -> Monster-Objekte

Gehe durch alle Räume.

Rufe für jedes Monster eine Methode auf.

Wenn HP <= 0:
Monster überspringen.

Benutze:
continue

Wenn ein Drache auftaucht:
"Boss-Raum erreicht"

Optional:
Schleife mit break beenden.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 35 – FINAL BOSS
ADVENTURE GAME ENGINE

Jetzt wird fast alles kombiniert.


TEIL 1 – HERO-KLASSE

Erstelle Hero mit:

$name
$class
$hp
$mana
$damage
$level
$gold
$inventory

Methoden:

attack()
takeDamage()
heal()
addItem()
showStatus()


------------------------------------------------------------
TEIL 2 – MONSTER-KLASSE

Erstelle Monster mit:

$name
$hp
$damage
$level
$loot

Methoden:

attack()
takeDamage()
dropLoot()


------------------------------------------------------------
TEIL 3 – DUNGEON

Erstelle ein mehrdimensionales
assoziatives Array.

Struktur:

Dungeon
 -> Etagen
    -> Räume
       -> Monster-Objekte

Mindestens:

3 Etagen
3 Räume pro Etage


------------------------------------------------------------
TEIL 4 – RAUM-DATEN

Jeder Raum soll zusätzlich besitzen:

"name"
"visited"
"trap"
"treasure"

Regeln:

Wenn trap == true:
Held verliert HP.

Wenn treasure == true:
Held bekommt Gold oder ein Item.


------------------------------------------------------------
TEIL 5 – MONSTERKÄMPFE

Wenn Monster im Raum sind:

Kampf mit while.

Held greift an.

Wenn Monster noch lebt:
Monster greift zurück.


------------------------------------------------------------
TEIL 6 – TOD

Wenn Hero HP <= 0:

"GAME OVER"

Der Dungeon soll nicht weiter
durchlaufen werden.

Überlege, wie du break benutzen kannst.


------------------------------------------------------------
TEIL 7 – LEVEL-UP

Nach gewonnenen Kämpfen:

XP erhöhen.

Wenn genug XP vorhanden:
Level erhöhen.

Beim Level-Up:

HP erhöhen
Damage erhöhen


------------------------------------------------------------
TEIL 8 – INVENTAR

Nach Kämpfen bekommt der Held Loot.

Speichere Items im Inventory.

Wenn Inventory mehr als 10 Items enthält:

"Inventar voll"


------------------------------------------------------------
TEIL 9 – TRÄNKE

Wenn HP unter 30 fallen UND
ein Heiltrank im Inventory vorhanden ist:

Heiltrank verwenden.

Recherche:

in_array()
array_search()
unset()


------------------------------------------------------------
TEIL 10 – MAGIE

Wenn der Held Mage ist:

Mana verwenden.

Wenn Mana nicht reicht:
Normalen Angriff benutzen.


------------------------------------------------------------
TEIL 11 – SCHATZ

Berechne Gold.

Wenn Gold >= 1000:

"Kapitalismus-Endboss erreicht"


------------------------------------------------------------
TEIL 12 – OPERATOR-CHECK

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
TEIL 13 – ARRAY-CHECK

Verwende:

- normales Array
- mehrdimensionales Array
- assoziatives Array
- mehrdimensionales assoziatives Array
- Array in einem Objekt
- Array mit Objekten
- Objekt innerhalb eines Arrays


------------------------------------------------------------
TEIL 14 – SCHLEIFEN

Verwende:

foreach
for
while

Zusätzlich:

break
continue


------------------------------------------------------------
TEIL 15 – FUNKTIONEN

Erstelle mindestens zwei eigene Funktionen.

Beispiele:

calculatePower()
calculateReward()
isBoss()
checkRoom()


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
ABENTEUER BEENDET
====================================

Held: ...
Klasse: ...
Level: ...
HP: ...
Mana: ...
Gold: ...
Besiegte Monster: ...
Besuchte Räume: ...
Gefundene Items: ...

Inventar:

- ...
- ...
- ...

Status:

SIEG
GAME OVER
ODER
ICH HABE MICH IM DUNGEON VERLAUFEN

====================================
*/


// DEIN FINAL-BOSS-CODE:














/*
============================================================
SECRET BOSS – DAS VÖLLIG ÜBERTRIEBENE RPG

Baue eine Datenstruktur:

Welt
 -> Königreiche
    -> Städte
       -> Gebäude
          -> Räume
             -> NPCs
             -> Monster
             -> Items

Jeder NPC soll besitzen:

"name"
"profession"
"quests"

Jede Quest:

"title"
"reward"
"completed"

Jedes Monster:

"name"
"hp"
"damage"
"loot"

Jedes Item:

"name"
"value"
"rarity"

Mindestens:

2 Königreiche
2 Städte pro Königreich
2 Gebäude pro Stadt
2 Räume pro Gebäude

Zähle:

- Königreiche
- Städte
- Gebäude
- Räume
- NPCs
- Quests
- Monster
- Items
- abgeschlossenene Quests
- gesamte Goldbelohnungen
- legendäre Items

Zusatz:

Finde:

- stärkstes Monster
- reichste Stadt
- NPC mit den meisten Quests
- Raum mit den meisten Monstern

Wenn du an dieser Stelle noch weißt,
welche foreach-Schleife gerade läuft,
hast du mehrdimensionale Arrays verstanden.
============================================================
*/


// DEIN CODE:






/*
============================================================
ULTRA SECRET BOSS – DAS VERBUGGTE PORTAL

Erstelle ein Portal-System.

Jedes Portal besitzt:

"name"
"destination"
"energy"
"active"

Portale befinden sich in verschiedenen:

Welten
 -> Regionen
    -> Dungeons
       -> Portale

Wenn energy <= 0:
Portal deaktivieren.

Wenn active == false:
Portal überspringen.

Wenn destination == "NULL":
"Das Portal führt direkt in den Fatal Error."

Wenn ein Portal mehr als 9000 Energie besitzt:
"Der Magier hat beim Balancing geschlafen."

Bonus:

Erstelle eine Klasse Portal.

Noch mehr Bonus:

Erstelle:

MagicPortal extends Portal

und

BugPortal extends Portal

BugPortal hat eine gewisse Wahrscheinlichkeit,
den Spieler in einen zufälligen Dungeon zu schicken.

Recherche:

random_int()
extends
parent::__construct()
============================================================
*/