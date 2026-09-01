<?php

/*
============================================================
PHP MAGIC SCHOOL QUEST – ZAUBERSCHUL EDITION

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
Zauberschule, Häuser, Tränke, magische Wesen,
Besen, Unterricht, Punkte, Duelle und sehr
fragwürdige magische IT.
============================================================
*/


/*
============================================================
LEVEL 1 – HAUSPUNKTE

Erstelle ein Array mit mindestens 7 Punktwerten.

Beispielwerte:

5
10
-5
20
50
3
-10

Gehe mit foreach durch das Array.

Regeln:

unter 0:
"Haus verliert Punkte"

0 bis 10:
"Kleine Punktzahl"

11 bis 30:
"Ordentliche Leistung"

über 30:
"Professor war beeindruckt"

Berechne zusätzlich die Gesamtpunktzahl.

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
LEVEL 2 – ZAUBERSTAB-STÄRKE

Erstelle ein Array mit mindestens 8 Zahlen.

Jede Zahl steht für die Stärke eines Zauberstabs.

Regeln:

unter 20:
"Anfänger-Zauberstab"

20 bis 49:
"Solider Zauberstab"

50 bis 79:
"Starker Zauberstab"

ab 80:
"Dieser Zauberstab sollte vielleicht registriert werden"

Zähle alle Zauberstäbe mit Stärke >= 50.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 3 – SCHÜLERNAMEN

Erstelle ein Array mit mindestens 7 Namen.

Beispiele:

LunaByte
CedricLoop
Mira
Professor Nullius
Kevin
Bytebeard
Hexa

Regeln:

Wenn Name == "Kevin":
"Kevin behauptet, der Kessel sei von selbst explodiert."

Wenn Name == "Professor Nullius":
"Dieser Professor unterrichtet wahrscheinlich Exceptions."

Sonst:
"Schüler registriert: NAME"

Bonus:

Benutze strlen().

Wenn ein Name länger als 10 Zeichen ist:
"Der Name passt kaum auf den Stundenplan."
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 4 – TRANKZUTATEN

Erstelle ein Array mit mindestens 8 Mengenwerten.

Jeder Wert steht für Gramm einer Zutat.

Berechne:

- Gesamtmenge
- Anzahl der Zutaten
- Durchschnitt

Regeln:

Durchschnitt unter 10:
"Trank wird vermutlich sehr dünn."

10 bis 30:
"Normale Mischung"

über 30:
"Der Kessel beginnt verdächtig zu blubbern"

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

Jeder Schüler soll enthalten:

Index 0:
Name

Index 1:
Jahrgang

Index 2:
Hauspunkte

Mindestens 5 Schüler.

Regeln:

Jahrgang 1 bis 2:
"Anfänger"

Jahrgang 3 bis 5:
"Fortgeschritten"

Jahrgang 6 oder 7:
"Prüfungsstress incoming"

Gib zusätzlich Name und Hauspunkte aus.

Recherche:

$schueler[0]
$schueler[1]
$schueler[2]
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 6 – MAGISCHE GEGENSTÄNDE

Erstelle ein mehrdimensionales Array.

Jeder Gegenstand enthält:

[Name, MagieLevel, Zustand]

Mindestens 6 Gegenstände.

Beispiele:

Zauberstab
Besen
Kristallkugel
Verzauberter USB-Stick
Selbstschreibende Feder
Verdächtiger Kessel

Zustand kann sein:

"gut"
"beschädigt"
"verflucht"

Regeln:

MagieLevel unter 20:
"Schwach magisch"

20 bis 59:
"Normal magisch"

60 bis 89:
"Stark magisch"

ab 90:
"Nicht unbeaufsichtigt herumliegen lassen"

Wenn Zustand == "verflucht":
"Nicht anfassen"
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 7 – MAGISCHE WESEN

Erstelle ein mehrdimensionales Array.

Jedes Wesen enthält:

[Name, Gefahrenlevel, Gewicht]

Mindestens 6 Wesen.

Regeln:

Gefahrenlevel unter 3:
"Relativ harmlos"

3 bis 5:
"Vorsicht"

6 bis 8:
"Sehr gefährlich"

9 oder 10:
"Warum ist dieses Wesen auf dem Schulgelände?"

Bonus:

Finde das gefährlichste Wesen ohne max().
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 8 – ASSOZIATIVER SCHÜLER

Erstelle einen Schüler als assoziatives Array.

Er soll enthalten:

"name"
"house"
"year"
"mana"
"points"
"detention"

Werte selbst wählen.

Regeln:

Wenn mana < 20:
"Zauberenergie niedrig"

Wenn points < 0:
"Haus ist nicht begeistert"

Wenn detention == true:
"Nachsitzen im Kerker"

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

Erstelle mindestens 6 Schüler.

Jeder Schüler besitzt:

"name"
"house"
"year"
"mana"
"points"

Regeln:

mana < 20:
"Erschöpft"

20 bis 60:
"Mana okay"

über 60:
"Zauberbereit"

Wenn year >= 5 UND mana < 20:
"Oberstufenschüler läuft auf Energiesparmodus"

Du musst benutzen:

- mehrdimensionales assoziatives Array
- foreach
- &&
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 10 – UNTERRICHTSFÄCHER

Erstelle ein mehrdimensionales assoziatives Array.

Mindestens 5 Fächer.

Jedes Fach besitzt:

"name"
"teacher"
"difficulty"
"students"

"students" ist wieder ein Array mit Namen.

Beispiele:

Zaubertränke
Verwandlung
Magische Netzwerke
Besenflug
Runenkunde

Regeln:

difficulty unter 4:
"Einfach"

4 bis 7:
"Normal"

8 bis 10:
"Professor hat offenbar etwas gegen Schüler"

Gib zusätzlich alle Schüler jedes Fachs aus.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 11 – HÄUSER UND SCHÜLER

Erstelle folgende Struktur:

Schule
 -> Häuser
    -> Schüler

Mindestens:

4 Häuser
jeweils mindestens 3 Schüler

Jeder Schüler besitzt:

"name"
"year"
"points"

Gib aus:

Haus
Name
Jahrgang
Punkte

Berechne zusätzlich:

- Gesamtpunkte pro Haus
- Anzahl Schüler pro Haus

Bonus:

Finde das Haus mit den meisten Punkten.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 12 – STUNDENPLAN

Erstelle mehrere Schüler.

Jeder Schüler besitzt:

"name"
"schedule"

"schedule" ist ein assoziatives Array mit:

"monday"
"tuesday"
"wednesday"

Jeder Tag enthält wieder ein Array
mit mehreren Fächern.

Beispielstruktur:

Schüler
 -> Stundenplan
    -> Tag
       -> Fächer

Gib den kompletten Stundenplan aus.

Das ist absichtlich tiefer verschachtelt.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 13 – ZAUBERBUCH

Erstelle mindestens 5 Schüler.

Jeder Schüler besitzt:

"name"
"spells"

"spells" ist ein Array.

Beispiele:

Lichtzauber
Schutzzauber
Reparaturzauber
Schwebezauber
Debug-Zauber

Gib alle Zauber jedes Schülers aus.

Wenn ein Schüler mehr als 5 Zauber kennt:
"Fortgeschrittener Zauberer"

Wenn "Debug-Zauber" vorkommt:
"Dieser Schüler ist für magische IT geeignet"

Recherche:

count()
in_array()
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 14 – TRANKLABOR

Erstelle mindestens 6 Tränke.

Jeder Trank besitzt:

"name"
"power"
"stable"
"ingredients"

"ingredients" ist ein Array.

Regeln:

stable == false:
"Trank instabil"

power < 30:
"Schwacher Trank"

30 bis 69:
"Starker Trank"

ab 70:
"Vielleicht nicht direkt trinken"

Wenn instabil UND power >= 70:
"Kessel verlassen"
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 15 – 3D-SCHULSTRUKTUR

Erstelle folgende Struktur:

Schule
 -> Stockwerke
    -> Räume
       -> Schüler

Mindestens:

3 Stockwerke
2 Räume pro Stockwerk
2 Schüler pro Raum

Gib aus:

Stockwerk
Raum
Schüler

Du brauchst mehrere verschachtelte foreach-Schleifen.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 16 – 3D ASSOZIATIVE SCHULSTRUKTUR

Struktur:

Schule
 -> Haus
    -> Schlafsaal
       -> Schülerdaten

Jeder Schüler besitzt:

"name"
"year"
"mana"
"points"

Mindestens:

4 Häuser
2 Schlafsäle pro Haus
2 Schüler pro Schlafsaal

Regeln:

mana < 20:
"Schüler erschöpft"

points < 0:
"Punktestand kritisch"

year == 7:
"Abschlussjahr"

Zähle:

- alle Schüler
- alle Siebtklässler
- alle Schüler mit niedrigem Mana
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 17 – MAGISCHE BIBLIOTHEK

Erstelle folgende Struktur:

Bibliothek
 -> Bereiche
    -> Regale
       -> Bücher

Jedes Buch besitzt:

"title"
"danger"
"borrowed"

Mindestens:

2 Bereiche
2 Regale je Bereich
3 Bücher je Regal

Regeln:

danger >= 8:
"Nur mit Genehmigung lesen"

borrowed == true:
"Ausgeliehen"

Wenn beides:
"Wer hat dieses Buch ausgeliehen?"
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 18 – BREAK UND CONTINUE

Erstelle mindestens 8 Schüler.

Jeder Schüler besitzt:

"name"
"present"
"mana"

Regeln:

Wenn present == false:
Schüler überspringen.

Benutze:
continue

Wenn name == "Professor Fatalis":
"Geheimer Bosskampf aktiviert"

Danach Schleife beenden.

Benutze:
break
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 19 – FOR-SCHLEIFE IM ZAUBERTURM

Erstelle ein Array mit mindestens 10 Turmräumen.

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
LEVEL 20 – WHILE: MAGISCHES DUELL

Ein Gegner startet mit:

$hp = 150;

Dein Zauber verursacht:

$damage = 17;

Benutze while.

Solange HP > 0:
Zauber wirken.

Nach jedem Angriff:
"Gegner HP: ..."

Wenn HP < 40:
"Gegner wirkt nervös"

Wenn HP <= 0:
"Duell gewonnen"

Bonus:
Zähle die Zauber.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 21 – MODULO-MAGIE

Erstelle ein Array mit mindestens 12 Mana-Werten.

Gerade Zahl:
"Stabile Magie"

Ungerade Zahl:
"Chaotische Magie"

Durch 5 teilbar:
"Mana-Bonus"

Exakt 42:
"Der Runenprofessor nickt zufrieden"

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

checkMagicPower($power)

Regeln:

unter 20:
"schwach"

20 bis 49:
"normal"

50 bis 79:
"stark"

ab 80:
"extrem"

Die Funktion soll einen Text zurückgeben.

Recherche:

function
Parameter
return

Benutze sie danach für mehrere Zauber.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 23 – ZAUBER-SCORE FUNKTION

Erstelle eine Funktion:

calculateSpellScore($spell)

$spell ist ein assoziatives Array.

Es besitzt:

"power"
"manaCost"
"difficulty"

Beispielberechnung:

Score =
power * 2
- manaCost
+ difficulty * 5

Gib den Score mit return zurück.

Erstelle mindestens 5 Zauber.

Bonus:

Finde den stärksten Zauber ohne max().
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 24 – TRANK-FILTER

Erstelle eine Funktion:

isDangerousPotion($potion)

Ein Trank besitzt:

"name"
"power"
"stable"

Die Funktion gibt true zurück,
wenn:

power >= 70
UND
stable == false

Sonst false.

Erstelle mindestens 8 Tränke.

Speichere gefährliche Tränke
in einem neuen Array.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 25 – ERSTE KLASSE

Erstelle eine Klasse:

WizardStudent

Eigenschaften:

public $name;
public $house;
public $mana;

Konstruktor:

__construct()

Methode:

introduce()

Ausgabe ungefähr:

"NAME gehört zu HOUSE und hat MANA Mana."

Erstelle mindestens 4 Objekte.

Speichere sie in einem Array.

Gehe mit foreach durch das Array.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 26 – ZAUBER ALS METHODE

Erweitere WizardStudent.

Zusätzliche Eigenschaft:

$spellPower

Methode:

castSpell($target)

Der Zauber soll dem Ziel HP abziehen.

Du brauchst eventuell zusätzlich:

$hp

für deine Schüler.

Ausgabe ungefähr:

"ByteMage wirkt einen Zauber."
"Nullius hat noch 75 HP."
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 27 – MAGISCHES DUELL MIT OBJEKTEN

Erstelle zwei WizardStudent-Objekte.

Lass beide mit while kämpfen.

Solange beide HP > 0 besitzen:

1. Schüler A zaubert
2. prüfen, ob Schüler B noch lebt
3. Schüler B zaubert zurück

Ein besiegter Schüler darf nicht
noch einmal zaubern.

Bonus:

Kampfrunden zählen.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 28 – HAUS ALS KLASSE

Erstelle eine Klasse:

MagicHouse

Eigenschaften:

$name
$students
$points

$students soll ein Array sein.

Methoden:

addStudent($student)
addPoints($points)
removePoints($points)
showStudents()
showStatus()

Recherche:

$this->students[]
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 29 – MAGISCHE WESEN ALS KLASSE

Erstelle:

class MagicalCreature

Eigenschaften:

$name
$hp
$danger

Methoden:

showStatus()

Danach:

class Dragon extends MagicalCreature
class Pixie extends MagicalCreature
class Troll extends MagicalCreature

Jede Klasse bekommt eine Spezialmethode.

Beispiele:

Dragon:
fireBreath()

Pixie:
causeChaos()

Troll:
smashDoor()

Recherche:

extends
parent::__construct()
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 30 – MEHRERE SCHÜLERKLASSEN

Erstelle eine Basisklasse:

WizardStudent

Danach:

class PotionStudent extends WizardStudent
class DuelStudent extends WizardStudent
class RuneStudent extends WizardStudent

Jede Klasse bekommt eine eigene Spezialmethode.

PotionStudent:
brewPotion()

DuelStudent:
specialAttack()

RuneStudent:
decodeRune()

Erstelle von jeder Klasse mindestens ein Objekt.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 31 – SCHULE ALS KLASSE

Erstelle eine Klasse:

MagicSchool

Eigenschaften:

$name
$houses
$teachers
$students

Alle drei sollen Arrays sein.

Methoden:

addHouse()
addTeacher()
addStudent()
showSchoolStatus()

Bonus:

Berechne die Gesamtzahl aller Schüler.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 32 – OBJEKTE IN MEHRDIMENSIONALEN ARRAYS

Erstelle mehrere WizardStudent-Objekte.

Speichere sie in einer Struktur:

Schule
 -> Häuser
    -> Schüler-Objekte

Gehe durch alle Häuser
und alle Schüler.

Rufe introduce() auf.

Wenn mana <= 0:
Schüler überspringen.

Benutze:
continue
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 33 – MAGISCHER PUNKTEWETTBEWERB

Erstelle vier MagicHouse-Objekte.

Jedes Haus besitzt mehrere Schüler.

Jeder Schüler sammelt Punkte.

Berechne:

- Gesamtpunkte jedes Hauses
- Durchschnittspunkte
- Schülerzahl

Finde:

- bestes Haus
- schlechtestes Haus
- Schüler mit den meisten Punkten

Versuche zuerst ohne:

max()
min()
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 34 – MAGISCHES TURNIER

Erstelle mindestens 8 Schüler-Objekte.

Speichere sie in einem Array.

Je zwei Schüler treten gegeneinander an.

Benutze:

for
while
if
Methoden

Sieger kommt in die nächste Runde.

Bonus:

Baue mehrere Runden.

Bonus 2:

Nutze Arrays für Gewinnerlisten.

Bonus 3:

Am Ende gibt es genau einen Champion.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 35 – FINAL BOSS
MAGIC SCHOOL MANAGEMENT SYSTEM

Jetzt soll fast alles zusammenkommen.


TEIL 1 – SCHÜLERKLASSE

Erstelle WizardStudent mit:

$name
$house
$year
$hp
$mana
$spellPower
$points
$inventory
$spells

Methoden:

castSpell()
takeDamage()
restoreMana()
addPoints()
removePoints()
addItem()
learnSpell()
showStatus()


------------------------------------------------------------
TEIL 2 – HAUSKLASSE

Erstelle MagicHouse mit:

$name
$students
$points

Methoden:

addStudent()
addPoints()
removePoints()
showStudents()
showStatus()


------------------------------------------------------------
TEIL 3 – PROFESSOREN

Erstelle eine Klasse:

Professor

Eigenschaften:

$name
$subject
$strictness
$housePointsGiven

Methoden:

teach()
givePoints()
removePoints()


------------------------------------------------------------
TEIL 4 – SCHULSTRUKTUR

Erstelle ein mehrdimensionales
assoziatives Array.

Struktur:

Schule
 -> Häuser
    -> Schlafsäle
       -> Schüler-Objekte

Mindestens:

4 Häuser
2 Schlafsäle pro Haus
3 Schüler pro Schlafsaal


------------------------------------------------------------
TEIL 5 – UNTERRICHT

Erstelle Fächer.

Jedes Fach besitzt:

"name"
"difficulty"
"teacher"
"students"

Zähle:

- Fächer
- Schüler pro Fach
- schwere Fächer


------------------------------------------------------------
TEIL 6 – TRÄNKE

Jeder Trank besitzt:

"name"
"power"
"stable"
"ingredients"

Wenn:

power >= 70
UND
stable == false

Dann:

"Labor evakuieren"


------------------------------------------------------------
TEIL 7 – DUELLE

Lass mehrere Schüler gegeneinander kämpfen.

Benutze:

while
castSpell()
takeDamage()

Wenn Mana nicht reicht:
normalen Angriff verwenden
oder Runde aussetzen.


------------------------------------------------------------
TEIL 8 – HAUSPUNKTE

Punkte können steigen und fallen.

Benutze sinnvoll:

+=
-=

Wenn Punkte < 0:
"Haus befindet sich im Minus"

Wenn Punkte > 500:
"Haus führt deutlich"


------------------------------------------------------------
TEIL 9 – MAGISCHE WESEN

Erstelle mehrere MagicalCreature-Objekte.

Speichere sie in einem Array.

Wenn danger >= 8:
"Kreatur nur unter Aufsicht"

Wenn HP <= 0:
continue


------------------------------------------------------------
TEIL 10 – BREAK UND CONTINUE

Benutze beide sinnvoll.

Beispiele:

Schüler nicht anwesend:
continue

Magisches Experiment komplett außer Kontrolle:
break


------------------------------------------------------------
TEIL 11 – OPERATOR-CHECKLISTE

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
TEIL 12 – ARRAY-CHECKLISTE

Verwende:

- normales Array
- mehrdimensionales Array
- assoziatives Array
- mehrdimensionales assoziatives Array
- Array mit Objekten
- Array innerhalb eines Objekts
- Objekte in verschachtelten Arrays


------------------------------------------------------------
TEIL 13 – SCHLEIFEN

Verwende:

foreach
for
while
break
continue


------------------------------------------------------------
TEIL 14 – FUNKTIONEN

Erstelle mindestens 3 eigene Funktionen.

Beispiele:

calculateHouseScore()
checkPotion()
calculateSpellPower()
isDangerousCreature()


------------------------------------------------------------
TEIL 15 – OOP

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
TEIL 16 – ABSCHLUSSSTATISTIK

Am Ende soll ungefähr erscheinen:

====================================
MAGIC SCHOOL CONTROL SYSTEM
====================================

Schüler: ...
Professoren: ...
Häuser: ...
Fächer: ...
Gelernte Zauber: ...
Gefährliche Tränke: ...
Magische Wesen: ...
Duelle: ...

Hauswertung:

1. ...
2. ...
3. ...
4. ...

Stärkster Schüler:
...

Gefährlichstes Wesen:
...

Status:

ALLES NORMAL
MAGISCHE STÖRUNG
ODER
KEVIN HAT EINEN ZEITZAUBER GEFUNDEN

====================================
*/


// DEIN FINAL-BOSS-CODE:














/*
============================================================
SECRET LEVEL – DAS KOMPLETTE MAGISCHE SCHULSYSTEM

Baue folgende Struktur:

Magische Welt
 -> Schulen
    -> Häuser
       -> Schlafsäle
          -> Schüler
             -> Zauber
             -> Inventar
             -> Stundenplan

Jeder Schüler besitzt:

"name"
"year"
"mana"
"points"
"hp"

"spells" => [...]

"inventory" => [...]

"schedule" => [
    "monday" => [...],
    "tuesday" => [...],
    "wednesday" => [...]
]

Mindestens:

2 Schulen
4 Häuser pro Schule
2 Schlafsäle pro Haus
2 Schüler pro Schlafsaal

Zähle:

- Schulen
- Häuser
- Schlafsäle
- Schüler
- Zauber
- Items
- Unterrichtseinträge
- Schüler mit wenig Mana
- Schüler mit negativen Punkten

Finde zusätzlich:

- stärksten Schüler
- Haus mit den meisten Punkten
- Schüler mit den meisten Zaubern
- Schüler mit dem größten Inventar

Wenn du hier noch genau weißt,
welcher Array-Key gerade was bedeutet,
hast du verschachtelte Arrays verstanden.
============================================================
*/


// DEIN CODE:






/*
============================================================
ULTRA SECRET LEVEL – DIE MAGISCHE IT-ABTEILUNG

Die Schule besitzt jetzt ein verzaubertes IT-System.

Es gibt:

- magische Terminals
- Benutzerkonten
- Zauberprotokolle
- Hauspunkte-Datenbank
- digitale Bibliothek

Erstelle eine Struktur:

Schule
 -> Abteilungen
    -> Systeme
       -> Benutzer
       -> Logs

Jeder Benutzer besitzt:

"name"
"role"
"manaAccess"
"active"

Mögliche Rollen:

student
teacher
librarian
admin

Jeder Logeintrag besitzt:

"user"
"action"
"risk"

Regeln:

Admin UND risk >= 8:
"Magischen Administrator prüfen"

active == false:
Benutzer überspringen.

risk >= 10:
"Der Server hat vermutlich angefangen zu zaubern."

Bonus:

Erstelle Klassen für:

MagicUser
MagicSystem
MagicLog

Noch mehr Bonus:

Verbinde das Schul-System,
Hauspunkte-System und IT-System miteinander.

Wenn ein Schüler sein eigenes Haus
mit einem selbst geschriebenen PHP-Skript
500 Punkte gibt:

"Professoren möchten ein Gespräch führen."
============================================================
*/


// DEIN CODE: