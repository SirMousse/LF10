<?php

/*
============================================================
PHP DINO QUEST – JURASSIC NERD EDITION

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
Dinos, Gehege, Futter, Forschung, Parksysteme,
Dino-Kämpfe und eine IT-Abteilung,
die vermutlich von Raptoren betrieben wird.
============================================================
*/


/*
============================================================
LEVEL 1 – DINO-EIER

Erstelle ein Array mit mindestens 7 Zahlen.

Jede Zahl steht für Dino-Eier in einem Nest.

Beispielwerte:

2
5
12
3
20
8
1

Regeln:

unter 3:
"Kleines Nest"

3 bis 7:
"Normales Nest"

8 bis 15:
"Großes Nest"

über 15:
"Das wird ein Personalproblem"

Berechne zusätzlich die Gesamtzahl aller Eier.

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
LEVEL 2 – RAPTOR-HUNGER

Erstelle ein Array mit mindestens 8 Hungerwerten.

Die Werte liegen zwischen 0 und 100.

Regeln:

0 bis 20:
"Raptor satt"

21 bis 50:
"Raptor könnte einen Snack vertragen"

51 bis 80:
"Raptor beobachtet das Personal"

über 80:
"Niemand bewegt sich hektisch"

Zähle zusätzlich alle Hungerwerte >= 50.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 3 – DINO-NAMEN

Erstelle ein Array mit mindestens 7 Dino-Namen.

Beispiele:

Rex
Blue
Spike
Kevin
ByteRaptor
Nullosaurus
Stackosaurus

Regeln:

Wenn Name == "Kevin":
"Kevin hat wieder das Tor geöffnet."

Wenn Name == "Nullosaurus":
"Dieser Dino existiert laut Datenbank nicht."

Sonst:
"Dino registriert: NAME"

Bonus:

Benutze strlen().

Wenn der Name länger als 10 Zeichen ist:
"Dieser Dino braucht ein größeres Namensschild."
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 4 – FUTTERLAGER

Erstelle ein Array mit mindestens 8 Futtermengen.

Berechne:

- Gesamtmenge
- Anzahl
- Durchschnitt

Regeln für Durchschnitt:

unter 10:
"Futterlager kritisch"

10 bis 25:
"Futterlager ausreichend"

26 bis 50:
"Gut gefüllt"

über 50:
"T-Rex Buffet eröffnet"

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

Jeder Dino soll enthalten:

Index 0:
Name

Index 1:
Alter

Index 2:
Gewicht

Mindestens 5 Dinos.

Regeln:

Gewicht unter 100:
"Mini-Dino"

100 bis 999:
"Mittelgroßer Dino"

1000 bis 4999:
"Großer Dino"

ab 5000:
"Bitte Statik des Gebäudes prüfen"

Gib zusätzlich Name und Alter aus.

Recherche:

$dino[0]
$dino[1]
$dino[2]
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 6 – DINO-KAMPFWERTE

Erstelle ein mehrdimensionales Array.

Jeder Dino enthält:

[Name, HP, Schaden]

Mindestens 6 Dinos.

Berechne:

Kampfwert = HP + Schaden * 2

Regeln:

unter 100:
"Anfänger"

100 bis 199:
"Gefährlich"

200 bis 399:
"Boss"

ab 400:
"Balance-Team hat Urlaub"

Bonus:

Finde den höchsten Kampfwert
ohne max() zu benutzen.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 7 – FUTTERARTEN

Erstelle ein mehrdimensionales Array.

Jeder Dino enthält:

[Name, Futterart, Menge]

Mögliche Futterarten:

"Fleisch"
"Pflanzen"
"Fisch"

Regeln:

"Fleisch":
"Fleischfresser"

"Pflanzen":
"Pflanzenfresser"

"Fisch":
"Fischfresser"

Wenn Menge > 50:
"Großbestellung erforderlich"

Zähle zusätzlich:

- Fleischfresser
- Pflanzenfresser
- Fischfresser
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 8 – ASSOZIATIVER DINO

Erstelle einen Dino als assoziatives Array.

Er soll enthalten:

"name"
"species"
"age"
"hp"
"hunger"
"danger"

Werte selbst wählen.

Regeln:

Wenn hp < 30:
"Dino verletzt"

Wenn hunger >= 80:
"Dino sehr hungrig"

Wenn danger >= 8:
"Nicht alleine ins Gehege gehen"

Recherche:

assoziative Arrays
$array["key"]
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 9 – MEHRDIMENSIONALES ASSOZIATIVES ARRAY

Erstelle mindestens 6 Dinos.

Jeder Dino besitzt:

"name"
"species"
"hp"
"hunger"
"danger"

Regeln:

danger < 3:
"Relativ harmlos"

3 bis 5:
"Vorsicht"

6 bis 8:
"Gefährlich"

9 oder 10:
"Warum steht das Gehege offen?"

Wenn hunger >= 80 UND danger >= 7:
"Sehr hungriger gefährlicher Dino"

Du musst benutzen:

- mehrdimensionales assoziatives Array
- foreach
- &&
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 10 – DINO-GEHEGE

Erstelle ein mehrdimensionales assoziatives Array.

Mindestens 4 Gehege.

Jedes Gehege besitzt:

"name"
"security"
"power"
"dinosaurs"

"dinosaurs" ist wieder ein Array
mit mehreren Dino-Namen.

Regeln:

security >= 80 UND power == true:
"Gehege sicher"

power == false:
"Stromausfall"

security < 50:
"Sicherheitsproblem"

Gib zusätzlich alle Dinos
mit einer zweiten foreach-Schleife aus.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 11 – PARK MIT SEKTOREN

Erstelle folgende Struktur:

Park
 -> Sektoren
    -> Dinos

Mindestens:

3 Sektoren
jeweils mindestens 3 Dinos

Jeder Dino besitzt:

"name"
"hp"
"hunger"
"danger"

Gib aus:

Sektor
Name
HP
Hunger
Gefahr

Regeln:

hunger >= 80:
"Sofort füttern"

hp <= 20:
"Tierarzt rufen"

Wenn beides:
"Kritischer Dino-Zustand"
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 12 – DINO-TAGESPLAN

Erstelle mehrere Dinos.

Jeder Dino besitzt:

"name"
"schedule"

"schedule" ist ein assoziatives Array:

"morning"
"afternoon"
"evening"

Jeder Zeitraum kann wieder ein Array
mit mehreren Aktivitäten enthalten.

Beispiele:

Füttern
Training
Gehege prüfen
Schlafen
Besucher erschrecken

Gib alle Aktivitäten aus.

Bonus:

Wenn "Gehege prüfen" vorkommt:
"Sicherheitsroutine erkannt"
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 13 – INVENTAR PRO DINO

Erstelle mindestens 5 Dinos.

Jeder Dino besitzt:

"name"
"inventory"

Inventory ist ein Array.

Beispiele:

Tracker
Futter
Sicherheitschip
Spielzeug
Kaputte Kamera
Serverkabel

Gib alle Items aus.

Wenn mehr als 5 Items vorhanden:
"Inventar überfüllt"

Wenn "Serverkabel" vorhanden:
"Der Dino war in der IT."

Recherche:

count()
in_array()
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 14 – FORSCHUNGSLABOR

Erstelle mindestens 6 Forschungsproben.

Jede Probe besitzt:

"name"
"dnaQuality"
"stable"
"species"

Regeln:

stable == false:
"Probe instabil"

dnaQuality < 30:
"Schlechte DNA"

30 bis 69:
"Brauchbare Probe"

ab 70:
"Sehr gute Probe"

Wenn instabil UND dnaQuality >= 70:
"Laborleitung informieren"
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 15 – 3D-PARKSTRUKTUR

Erstelle folgende Struktur:

Park
 -> Sektoren
    -> Gehege
       -> Dinos

Mindestens:

3 Sektoren
2 Gehege pro Sektor
2 Dinos pro Gehege

Gib aus:

Sektor
Gehege
Dino

Du brauchst mehrere
verschachtelte foreach-Schleifen.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 16 – 3D ASSOZIATIVE PARKSTRUKTUR

Struktur:

Park
 -> Sektor
    -> Gehege
       -> Dino-Daten

Jeder Dino besitzt:

"name"
"hp"
"hunger"
"danger"

Mindestens:

2 Sektoren
2 Gehege je Sektor
2 Dinos je Gehege

Regeln:

danger >= 8:
"Hochrisiko-Dino"

hp <= 25:
"Verletzt"

Wenn beides:
"Verletzter Hochrisiko-Dino"

Zähle:

- alle Dinos
- verletzte Dinos
- gefährliche Dinos
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 17 – PARK-SICHERHEIT

Erstelle mehrere Sektoren.

Jeder Sektor besitzt:

"name"
"power"
"doors"
"security"
"dinosaurs"

Regeln:

power == false:
"Stromausfall"

doors == false:
"Türen reagieren nicht"

security < 30:
"Kritische Sicherheitsstufe"

Wenn power == false UND doors == false:
"Sehr schlechter Tag im Dino-Park"

Wenn mehr als 3 Dinos im Sektor sind
UND security < 50:
"Zu viele Dinos für diese Sicherheitsstufe"

Recherche:

count()
&&
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 18 – BREAK UND CONTINUE

Erstelle mindestens 8 Dinos.

Jeder Dino besitzt:

"name"
"alive"
"mutation"

Regeln:

Wenn alive == false:
Dino überspringen.

Benutze:
continue

Wenn mutation >= 9999:
"Genexperiment außer Kontrolle"

Danach Schleife beenden.

Benutze:
break

Alle anderen normal prüfen.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 19 – FOR-SCHLEIFE IM GEHEGE

Erstelle ein Array mit mindestens 10 Dino-Namen.

Gehe NICHT mit foreach durch das Array.

Benutze:

for
count()

Ausgabe:

Dino 1: ...
Dino 2: ...

Bonus:

Gib nur jeden zweiten Dino aus.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 20 – WHILE: T-REX BERUHIGEN

Ein T-Rex startet mit:

$rage = 100;

Jede Beruhigungsmaßnahme reduziert Rage um:

13

Benutze while.

Solange Rage > 0:
weiter beruhigen.

Nach jeder Runde:
"Rage: ..."

Wenn Rage < 30:
"T-Rex wird ruhiger"

Wenn Rage <= 0:
"T-Rex schläft"

Bonus:

Zähle die Maßnahmen.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 21 – MODULO-DINO

Erstelle ein Array mit mindestens 12 Zahlen.

Jede Zahl ist eine Dino-ID.

Gerade:
"Gerade ID"

Ungerade:
"Ungerade ID"

Durch 5 teilbar:
"Fünfer-Muster"

Exakt 42:
"Der Dino kennt die Antwort auf alles"

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

Benutze sie danach
für mehrere Dinos.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 23 – DINO-POWER FUNKTION

Erstelle eine Funktion:

calculateDinoPower($dino)

$dino ist ein assoziatives Array.

Es besitzt:

"hp"
"damage"
"level"

Berechnung:

Power =
hp + damage * level

Gib Power mit return zurück.

Erstelle mindestens 5 Dinos.

Bonus:

Finde den stärksten Dino ohne max().
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 24 – DINO-FILTER

Erstelle eine Funktion:

isDangerousDino($dino)

Die Funktion gibt true zurück,
wenn:

danger >= 7
UND
hp > 0

Sonst false.

Erstelle mindestens 8 Dinos.

Speichere gefährliche lebende Dinos
in einem neuen Array.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 25 – ERSTE KLASSE

Erstelle eine Klasse:

Dino

Eigenschaften:

public $name;
public $hp;
public $damage;

Konstruktor:

__construct()

Methode:

roar()

Ausgabe ungefähr:

"NAME brüllt."

Erstelle mindestens 4 Dino-Objekte.

Speichere sie in einem Array.

Gehe mit foreach durch das Array
und rufe roar() auf.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 26 – ANGRIFFSMETHODE

Erweitere Dino.

Erstelle:

attack($target)

Der Schaden des Angreifers
soll von den HP des Ziels
abgezogen werden.

Ausgabe ungefähr:

"Rex greift Blue an."
"Blue hat noch 70 HP."

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
LEVEL 27 – DINO-KAMPF

Erstelle zwei Dino-Objekte.

Lass sie mit while kämpfen.

Solange beide HP > 0 haben:

1. Dino A greift Dino B an
2. prüfen, ob Dino B noch lebt
3. Dino B greift zurück

Ein besiegter Dino darf nicht
noch einmal angreifen.

Bonus:

Kampfrunden zählen.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 28 – GEHEGE ALS KLASSE

Erstelle eine Klasse:

Enclosure

Eigenschaften:

$name
$dinosaurs
$security

$dinosaurs soll ein Array sein.

Methoden:

addDino($dino)
showDinosaurs()
checkSecurity()

Recherche:

$this->dinosaurs[]
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 29 – DINO-VERERBUNG

Erstelle:

class Raptor extends Dino
class TRex extends Dino
class Triceratops extends Dino

Jede Klasse bekommt
eine Spezialmethode.

Raptor:
quickAttack()

TRex:
megaBite()

Triceratops:
charge()

Recherche:

extends
parent::__construct()
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 30 – FORSCHER ALS KLASSE

Erstelle eine Klasse:

Researcher

Eigenschaften:

$name
$experience
$energy
$samples

$samples soll ein Array sein.

Methoden:

collectSample()
analyzeSample()
rest()
showStatus()

Jede Analyse kostet Energie.

Wenn energy <= 20:
"Forscher braucht Kaffee"

Wenn energy <= 0:
"Forschung pausiert"
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 31 – PARK ALS KLASSE

Erstelle eine Klasse:

DinoPark

Eigenschaften:

$name
$enclosures
$researchers
$dinosaurs

Alle drei sollen Arrays sein.

Methoden:

addEnclosure()
addResearcher()
addDino()
showParkStatus()

Bonus:

Berechne die Gesamtzahl aller Dinos.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 32 – OBJEKTE IN MEHRDIMENSIONALEN ARRAYS

Erstelle mehrere Dino-Objekte.

Speichere sie in einer Struktur:

Park
 -> Sektoren
    -> Dino-Objekte

Gehe durch alle Sektoren
und alle Dinos.

Rufe roar() auf.

Wenn hp <= 0:
Dino überspringen.

Benutze:
continue
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 33 – DINO-TEAM

Erstelle zwei Teams
mit mehreren Dino-Objekten.

Berechne pro Team:

- Gesamt-HP
- Gesamtschaden
- Durchschnittslevel

Regeln:

Mehr HP:
"Robusteres Team"

Mehr Schaden:
"Offensiveres Team"

Wenn beides größer:
"Klares Siegerteam"
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 34 – DINO-TURNIER

Erstelle mindestens 8 Dino-Objekte.

Speichere sie in einem Array.

Je zwei Dinos treten gegeneinander an.

Benutze:

for
while
if
Methoden

Der Sieger kommt in die nächste Runde.

Bonus:

Baue mehrere Runden.

Bonus 2:

Nutze ein neues Array
für die Gewinner.

Bonus 3:

Am Ende gibt es
einen Park-Champion.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 35 – FINAL BOSS
JURASSIC PARK CONTROL SYSTEM

Jetzt soll fast alles zusammenkommen.


TEIL 1 – DINO-KLASSE

Erstelle Dino mit:

$name
$species
$hp
$damage
$level
$hunger
$danger
$inventory

Methoden:

attack()
takeDamage()
feed()
addItem()
showStatus()


------------------------------------------------------------
TEIL 2 – GEHEGE-KLASSE

Erstelle Enclosure mit:

$name
$security
$power
$doors
$dinosaurs

Methoden:

addDino()
checkSecurity()
showDinosaurs()


------------------------------------------------------------
TEIL 3 – FORSCHER-KLASSE

Erstelle Researcher mit:

$name
$experience
$energy
$samples

Methoden:

collectSample()
analyzeSample()
rest()


------------------------------------------------------------
TEIL 4 – PARKSTRUKTUR

Erstelle ein mehrdimensionales
assoziatives Array.

Struktur:

Park
 -> Sektoren
    -> Gehege
       -> Dino-Objekte

Mindestens:

3 Sektoren
2 Gehege pro Sektor
3 Dinos pro Gehege


------------------------------------------------------------
TEIL 5 – SICHERHEIT

Jeder Sektor besitzt:

"name"
"power"
"security"
"doors"

Regeln:

power == false:
"Stromausfall"

security < 50:
"Sicherheitsproblem"

doors == false:
"Türen gestört"

Wenn power == false UND doors == false:
"Der Park hat jetzt ein sehr großes Problem"


------------------------------------------------------------
TEIL 6 – HUNGER

Wenn hunger >= 80:
Dino füttern.

Jede Fütterung kostet
zum Beispiel 20 Futtereinheiten.

Berechne:

- gesamte Futtermenge
- Anzahl gefütterter Dinos


------------------------------------------------------------
TEIL 7 – GEFAHR

Wenn danger >= 8:
"Hochrisiko-Dino"

Zähle alle Hochrisiko-Dinos.

Wenn mehr als 3
in einem Sektor sind:

"Evakuierung empfohlen"


------------------------------------------------------------
TEIL 8 – KÄMPFE

Lass mehrere Dinos gegeneinander kämpfen.

Benutze:

while
attack()
takeDamage()

Wenn ein Dino stirbt:
Kampf beenden.


------------------------------------------------------------
TEIL 9 – INVENTAR

Nach einem gewonnenen Kampf
bekommt ein Dino ein Item.

Beispiele:

Raptor-Zahn
DNA-Probe
Kaputte Kamera
Sicherheitschip
Serverkabel mit Bissspuren

Wenn mehr als 5 Items:
"Inventar voll"


------------------------------------------------------------
TEIL 10 – FORSCHUNG

Forscher sammeln Proben.

Jede Probe besitzt:

"name"
"quality"
"stable"

Wenn quality >= 70:
"Gute Probe"

Wenn stable == false:
"Probe instabil"


------------------------------------------------------------
TEIL 11 – BREAK UND CONTINUE

Benutze beide sinnvoll.

Beispiele:

Toter Dino:
continue

Kompletter Systemausfall:
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

calculateDanger()
calculateDinoPower()
checkEnclosure()
calculateFoodCost()


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
JURASSIC PARK CONTROL SYSTEM
====================================

Sektoren: ...
Gehege: ...
Dinos: ...
Hochrisiko-Dinos: ...
Verletzte Dinos: ...
Gefütterte Dinos: ...
Futterverbrauch: ...
Forscher: ...
Proben: ...
Stromausfälle: ...

Stärkster Dino:
...

Gefährlichstes Gehege:
...

Parkstatus:

STABIL
KRITISCH
EVAKUIERUNG
ODER
KEVIN HAT DEN RAPTOR-KÄFIG GEÖFFNET

====================================
*/


// DEIN FINAL-BOSS-CODE:














/*
============================================================
SECRET LEVEL – DIE KOMPLETTE DINO-DATENBANK

Baue folgende Struktur:

Firma
 -> Parks
    -> Sektoren
       -> Gehege
          -> Dinos
             -> Eigenschaften
             -> Inventar
             -> Futterplan
             -> Medizinische Daten

Jeder Dino besitzt:

"name"
"species"
"hp"
"damage"
"hunger"
"danger"
"age"

Zusätzlich:

"inventory" => [...]

"feedingSchedule" => [
    "morning" => ...,
    "afternoon" => ...,
    "evening" => ...
]

"medical" => [
    "healthy" => ...,
    "lastCheck" => ...,
    "medicine" => [...]
]

Mindestens:

2 Parks
3 Sektoren pro Park
2 Gehege pro Sektor
2 Dinos pro Gehege

Zähle:

- Parks
- Sektoren
- Gehege
- Dinos
- gefährliche Dinos
- hungrige Dinos
- verletzte Dinos
- Items
- Medikamente

Finde zusätzlich:

- stärksten Dino
- gefährlichsten Dino
- Gehege mit den meisten Dinos
- Park mit den meisten Hochrisiko-Dinos

Wenn du hier noch weißt,
welche foreach-Schleife gerade läuft,
hast du mehrdimensionale Arrays verstanden.
============================================================
*/


// DEIN CODE:






/*
============================================================
ULTRA SECRET LEVEL – DINO PARK IT

Der Park besitzt jetzt ein IT-System.

Es gibt:

- Terminals
- Mitarbeiter
- Gehege-Steuerungen
- Sicherheitslogs
- Futterautomaten
- Kameras

Baue eine Struktur:

Park
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
"Gerät offline"

risk >= 8:
"System prüfen"

Wenn ein Gehege-System offline ist
UND danger im Gehege hoch ist:

"Das könnte jetzt interessant werden"

Bonus:

Erstelle Klassen für:

ParkSystem
SecurityLog
FeedingSystem

Noch mehr Bonus:

Verbinde Dino-Daten,
Gehege-Daten und IT-System miteinander.

Wenn ein Raptor laut Log
versucht hat, sich selbst Adminrechte zu geben:

"Die Evolution ist zu weit gegangen."
============================================================
*/


// DEIN CODE: