<?php

/*
============================================================
PHP ZOMBIE APOCALYPSE QUEST – NERD EDITION

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
Zombies, Überlebende, Vorräte, Schutzräume,
Barrikaden, Infektionen, Quests und eine
Apokalypse-IT, die seit drei Tagen nur noch
mit einem Verlängerungskabel betrieben wird.
============================================================
*/


/*
============================================================
LEVEL 1 – DOSENFUTTER

Erstelle ein Array mit mindestens 7 Vorratsmengen.

Beispielwerte:

2
5
12
1
20
8
3

Regeln:

unter 3:
"Fast nichts mehr da"

3 bis 7:
"Kleiner Vorrat"

8 bis 15:
"Solider Vorrat"

über 15:
"Jemand hat offenbar den Supermarkt geplündert"

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
LEVEL 2 – ZOMBIE-GEFAHRENLEVEL

Erstelle ein Array mit mindestens 8 Gefahrenwerten.

Die Werte liegen zwischen 0 und 100.

Regeln:

0 bis 20:
"Einzelner langsamer Zombie"

21 bis 50:
"Kleine Gruppe"

51 bis 80:
"Das wird unangenehm"

über 80:
"Warum rennt da eine ganze Horde?"

Zähle zusätzlich alle Werte >= 50.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 3 – ÜBERLEBENDEN-NAMEN

Erstelle ein Array mit mindestens 7 Namen.

Beispiele:

Alex
Morgan
Byte
Kevin
NullRick
StackWalker
Mira

Regeln:

Wenn Name == "Kevin":
"Kevin behauptet, er habe die Kellertür nur kurz geöffnet."

Wenn Name == "NullRick":
"Diese Person wurde laut Datenbank nie angelegt."

Sonst:
"Überlebender registriert: NAME"

Bonus:

Benutze strlen().

Wenn ein Name länger als 10 Zeichen ist:
"Der Name passt kaum auf das Funkgerät."
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 4 – MUNITIONSVORRAT

Erstelle ein Array mit mindestens 8 Zahlen.

Berechne:

- Gesamtmenge
- Anzahl der Einträge
- Durchschnitt

Regeln für Durchschnitt:

unter 10:
"Sehr knapp"

10 bis 25:
"Ausreichend"

26 bis 50:
"Gut vorbereitet"

über 50:
"Wer verwaltet eigentlich dieses Lager?"

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

Jeder Überlebende soll enthalten:

Index 0:
Name

Index 1:
Alter

Index 2:
HP

Mindestens 5 Personen.

Regeln:

HP unter 20:
"Kritisch"

20 bis 49:
"Verletzt"

50 bis 79:
"Stabil"

ab 80:
"Topfit"

Gib zusätzlich Name und Alter aus.

Recherche:

$survivor[0]
$survivor[1]
$survivor[2]
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 6 – WAFFENLAGER

Erstelle ein mehrdimensionales Array.

Jede Waffe enthält:

[Name, Schaden, Haltbarkeit]

Mindestens 6 Waffen.

Beispiele:

Baseballschläger
Brecheisen
Armbrust
Schaufel
Taschenlampe
Legendärer Kochlöffel

Regeln:

Schaden unter 10:
"Improvisierte Waffe"

10 bis 29:
"Brauchbar"

30 bis 59:
"Stark"

ab 60:
"Das Balancing ist in der Apokalypse offenbar egal"

Wenn Haltbarkeit unter 20:
"Diese Waffe hält nicht mehr lange"
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 7 – ZOMBIE-DATENBANK

Erstelle ein mehrdimensionales Array.

Jeder Zombie enthält:

[Name, HP, Gefahr]

Mindestens 6 Zombies.

Beispiele:

Walker
Runner
Crawler
Tank
Screamer
OfficeZombie

Berechne:

Gefahrenwert = HP + Gefahr * 10

Regeln:

unter 100:
"Harmlos-ish"

100 bis 199:
"Gefährlich"

200 bis 399:
"Sehr gefährlich"

ab 400:
"Warum ist der so groß?"

Bonus:

Finde den höchsten Wert ohne max().
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 8 – ASSOZIATIVER ÜBERLEBENDER

Erstelle eine Person als assoziatives Array.

Sie soll enthalten:

"name"
"hp"
"hunger"
"infection"
"armed"
"alive"

Werte selbst wählen.

Regeln:

Wenn hp < 30:
"Stark verletzt"

Wenn hunger >= 80:
"Dringend Nahrung benötigt"

Wenn infection >= 70:
"Infektion kritisch"

Wenn alive == false:
"Person nicht mehr aktiv"

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

Erstelle mindestens 6 Überlebende.

Jeder besitzt:

"name"
"hp"
"hunger"
"infection"
"morale"

Regeln:

infection < 20:
"Unauffällig"

20 bis 49:
"Beobachten"

50 bis 79:
"Kritisch"

ab 80:
"Quarantäne"

Wenn hp < 30 UND infection >= 50:
"Medizinischer Notfall"

Du musst benutzen:

- mehrdimensionales assoziatives Array
- foreach
- &&
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 10 – SCHUTZRÄUME

Erstelle ein mehrdimensionales assoziatives Array.

Mindestens 4 Schutzräume.

Jeder Schutzraum besitzt:

"name"
"doors"
"food"
"survivors"

"survivors" ist wieder ein Array mit Namen.

Regeln:

doors == false:
"Schutzraum nicht gesichert"

food < 20:
"Vorräte knapp"

Wenn doors == true UND food >= 20:
"Schutzraum stabil"

Gib zusätzlich alle Überlebenden
mit einer zweiten foreach-Schleife aus.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 11 – STADTSEKTOREN

Erstelle folgende Struktur:

Stadt
 -> Sektoren
    -> Überlebende

Mindestens:

3 Sektoren
jeweils mindestens 3 Überlebende

Jede Person besitzt:

"name"
"hp"
"infection"
"armed"

Regeln:

infection >= 70:
"Quarantäne"

hp <= 20:
"Medizinische Hilfe"

Wenn beides:
"Höchste Priorität"
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 12 – TAGESPLAN DER BASIS

Erstelle mehrere Überlebende.

Jeder besitzt:

"name"
"schedule"

"schedule" ist ein assoziatives Array:

"morning"
"afternoon"
"evening"

Jeder Zeitraum enthält wieder ein Array
mit mehreren Aufgaben.

Beispiele:

Barrikade reparieren
Wache halten
Vorräte zählen
Funk prüfen
Kochen
Generator warten

Gib den kompletten Tagesplan aus.

Bonus:

Wenn "Generator warten" vorkommt:
"Technische Aufgabe erkannt"
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 13 – INVENTAR DER ÜBERLEBENDEN

Erstelle mindestens 5 Überlebende.

Jeder besitzt:

"name"
"inventory"

Inventory ist ein Array.

Beispiele:

Wasser
Konserve
Verbandskasten
Taschenlampe
Batterie
Funkgerät
USB-Stick mit völlig unwichtigen Backups

Gib alle Items aus.

Wenn mehr als 6 Items vorhanden:
"Rucksack ziemlich voll"

Wenn "Verbandskasten" vorhanden:
"Medizinische Versorgung vorhanden"

Recherche:

count()
in_array()
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 14 – MEDIZINISCHE STATION

Erstelle mindestens 6 Überlebende.

Jeder besitzt:

"name"
"hp"
"infection"
"medicine"

"medicine" kann ein Array sein.

Regeln:

hp < 30:
"Behandlung erforderlich"

infection >= 50:
"Infektion beobachten"

Wenn Medikamente vorhanden:
"Medikamentenplan vorhanden"

Wenn hp < 30 UND infection >= 50:
"Medizinischer Notfall"
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 15 – 3D-APOKALYPSE

Erstelle folgende Struktur:

Stadt
 -> Sektoren
    -> Gebäude
       -> Überlebende

Mindestens:

3 Sektoren
2 Gebäude pro Sektor
2 Überlebende pro Gebäude

Gib aus:

Sektor
Gebäude
Überlebender

Du brauchst mehrere
verschachtelte foreach-Schleifen.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 16 – 3D ASSOZIATIVE STRUKTUR

Struktur:

Stadt
 -> Sektor
    -> Gebäude
       -> Personendaten

Jede Person besitzt:

"name"
"hp"
"infection"
"armed"

Mindestens:

2 Sektoren
2 Gebäude je Sektor
2 Personen je Gebäude

Regeln:

infection >= 70:
"Hochrisiko"

hp <= 25:
"Verletzt"

Wenn beides:
"Verletzte Hochrisiko-Person"

Zähle:

- alle Personen
- verletzte Personen
- Hochrisiko-Personen
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 17 – BASIS-SICHERHEIT

Erstelle mehrere Basen.

Jede Basis besitzt:

"name"
"power"
"doors"
"walls"
"survivors"
"zombiesOutside"

Regeln:

power == false:
"Generator aus"

doors == false:
"Türen nicht gesichert"

walls < 30:
"Barrikaden kritisch"

Wenn power == false UND doors == false:
"Sehr schlechter Zeitpunkt für einen Stromausfall"

Wenn zombiesOutside > 20 UND walls < 50:
"Horde bedroht die Basis"
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 18 – BREAK UND CONTINUE

Erstelle mindestens 8 Überlebende.

Jeder besitzt:

"name"
"alive"
"infection"

Regeln:

Wenn alive == false:
Person überspringen.

Benutze:
continue

Wenn infection >= 100:
"Vollständige Infektion festgestellt"

Danach Schleife beenden.

Benutze:
break
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 19 – FOR-SCHLEIFE DURCH DIE STADT

Erstelle ein Array mit mindestens 10 Ortsnamen.

Gehe NICHT mit foreach durch das Array.

Benutze:

for
count()

Ausgabe:

Ort 1: ...
Ort 2: ...

Bonus:

Gib nur jeden zweiten Ort aus.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 20 – WHILE: BARRIKADE REPARIEREN

Eine Barrikade startet mit:

$stability = 20;

Sie soll mindestens 100 Stabilität erreichen.

Jede Reparaturrunde gibt:

+13 Stabilität

Benutze while.

Nach jeder Runde:
"Stabilität: ..."

Wenn Stabilität >= 50:
"Barrikade hält wieder halbwegs"

Wenn Stabilität >= 100:
"Barrikade vollständig repariert"

Bonus:
Zähle die Reparaturrunden.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 21 – MODULO: FUNKGERÄT-CODES

Erstelle ein Array mit mindestens 12 Codes.

Gerade:
"Gerader Code"

Ungerade:
"Ungerader Code"

Durch 5 teilbar:
"Sonderkanal"

Exakt 42:
"Die Funkstation behauptet, das sei die Antwort auf alles"

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

checkInfection($infection)

Regeln:

unter 20:
"niedrig"

20 bis 49:
"mittel"

50 bis 79:
"hoch"

ab 80:
"kritisch"

Die Funktion soll einen Text zurückgeben.

Recherche:

function
Parameter
return

Benutze sie danach für mehrere Personen.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 23 – ÜBERLEBENS-SCORE

Erstelle eine Funktion:

calculateSurvivalScore($survivor)

$survivor ist ein assoziatives Array.

Es besitzt:

"hp"
"morale"
"infection"
"supplies"

Beispielberechnung:

Score =
hp
+ morale
+ supplies * 2
- infection

Gib den Wert mit return zurück.

Erstelle mindestens 5 Überlebende.

Bonus:

Finde den höchsten Score ohne max().
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 24 – QUARANTÄNE-FILTER

Erstelle eine Funktion:

needsQuarantine($survivor)

Die Funktion gibt true zurück,
wenn:

infection >= 70
UND
alive == true

Sonst false.

Erstelle mindestens 8 Überlebende.

Speichere alle Quarantänefälle
in einem neuen Array.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 25 – ERSTE KLASSE

Erstelle eine Klasse:

Survivor

Eigenschaften:

public $name;
public $hp;
public $infection;

Konstruktor:

__construct()

Methode:

showStatus()

Ausgabe ungefähr:

"NAME hat HP Leben und INFECTION Infektion."

Erstelle mindestens 4 Objekte.

Speichere sie in einem Array.

Gehe mit foreach durch das Array.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 26 – HEILUNG ALS METHODE

Erweitere Survivor.

Zusätzliche Methode:

heal($amount)

Die Methode soll HP erhöhen.

Wenn HP > 100:
auf 100 begrenzen.

Bonus:

Wenn HP wieder 100 sind:
"Vollständig versorgt"
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 27 – INFEKTION ALS METHODE

Erweitere Survivor.

Erstelle:

increaseInfection($amount)

und

reduceInfection($amount)

Regeln:

Infektion darf nicht unter 0 fallen.

Wenn infection >= 80:
"Infektion kritisch"

Wenn infection == 0:
"Keine Infektion"
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 28 – SCHUTZRAUM ALS KLASSE

Erstelle eine Klasse:

Shelter

Eigenschaften:

$name
$capacity
$survivors
$food
$secure

$survivors soll ein Array sein.

Methoden:

addSurvivor($survivor)
showSurvivors()
useFood()
checkCapacity()
showStatus()

Recherche:

$this->survivors[]
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 29 – ZOMBIE ALS KLASSE

Erstelle eine Basisklasse:

Zombie

Eigenschaften:

$name
$hp
$damage
$danger

Methoden:

attack()
takeDamage()
showStatus()

Danach:

class Walker extends Zombie
class Runner extends Zombie
class TankZombie extends Zombie

Jede Klasse bekommt eine Spezialmethode.

Walker:
slowAttack()

Runner:
fastAttack()

TankZombie:
heavyAttack()

Recherche:

extends
parent::__construct()
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 30 – MITARBEITERROLLEN

Erstelle eine Basisklasse:

Survivor

Danach:

class Medic extends Survivor
class Engineer extends Survivor
class Scout extends Survivor

Jede Klasse bekommt eine Spezialmethode.

Medic:
treat()

Engineer:
repair()

Scout:
searchArea()
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 31 – BASIS ALS KLASSE

Erstelle eine Klasse:

Base

Eigenschaften:

$name
$survivors
$food
$water
$power
$walls

Methoden:

addSurvivor()
useFood()
useWater()
repairWalls()
showStatus()

Bonus:

Berechne die Anzahl aller Überlebenden.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 32 – OBJEKTE IN MEHRDIMENSIONALEN ARRAYS

Erstelle mehrere Survivor-Objekte.

Speichere sie in einer Struktur:

Stadt
 -> Sektoren
    -> Survivor-Objekte

Gehe durch alle Sektoren.

Wenn hp <= 0:
Person überspringen.

Benutze:
continue

Rufe showStatus() auf.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 33 – ZWEI ÜBERLEBENDENGRUPPEN

Erstelle zwei Gruppen
mit mehreren Survivor-Objekten.

Berechne pro Gruppe:

- Gesamt-HP
- durchschnittliche Infektion
- Gesamtvorräte

Regeln:

Mehr HP:
"Robustere Gruppe"

Weniger Infektion:
"Gesündere Gruppe"

Mehr Vorräte:
"Besser vorbereitet"

Wenn eine Gruppe in allen drei Kategorien besser ist:
"Deutlich bessere Überlebenschance"
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 34 – ZOMBIE-WELLEN

Erstelle ein Array mit mehreren Zombie-Objekten.

Es gibt mehrere Wellen.

Beispiel:

Welle 1
 -> mehrere Zombies

Welle 2
 -> mehrere Zombies

Welle 3
 -> mehrere Zombies

Speichere die Wellen in einem
mehrdimensionalen Array.

Gehe durch:

Wellen
 -> Zombies

Wenn Zombie HP <= 0:
continue

Berechne den Gesamt-Gefahrenwert jeder Welle.

Bonus:

Finde die gefährlichste Welle.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 35 – FINAL BOSS
ZOMBIE APOCALYPSE CONTROL SYSTEM

Jetzt soll fast alles zusammenkommen.


TEIL 1 – SURVIVOR-KLASSE

Erstelle Survivor mit:

$name
$hp
$hunger
$thirst
$infection
$morale
$energy
$inventory
$alive

Methoden:

heal()
eat()
drink()
rest()
increaseInfection()
reduceInfection()
addItem()
showStatus()


------------------------------------------------------------
TEIL 2 – ZOMBIE-KLASSE

Erstelle Zombie mit:

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
showStatus()


------------------------------------------------------------
TEIL 3 – BASE-KLASSE

Erstelle Base mit:

$name
$survivors
$food
$water
$power
$walls
$doors

Methoden:

addSurvivor()
useFood()
useWater()
repairWalls()
checkSecurity()
showStatus()


------------------------------------------------------------
TEIL 4 – STADTSTRUKTUR

Erstelle ein mehrdimensionales
assoziatives Array.

Struktur:

Stadt
 -> Sektoren
    -> Gebäude
       -> Survivor-Objekte
       -> Zombie-Objekte
       -> Loot

Mindestens:

3 Sektoren
3 Gebäude pro Sektor


------------------------------------------------------------
TEIL 5 – SICHERHEIT

Jedes Gebäude besitzt:

"name"
"doors"
"power"
"danger"

Regeln:

doors == false:
"Gebäude nicht gesichert"

power == false:
"Kein Strom"

danger >= 8:
"Hochrisikogebiet"

Wenn alles problematisch ist:
"Vielleicht nicht hineingehen"


------------------------------------------------------------
TEIL 6 – HUNGER UND DURST

Wenn hunger >= 80:
Nahrung verwenden.

Wenn thirst >= 80:
Wasser verwenden.

Berechne:

- gesamten Futterverbrauch
- gesamten Wasserverbrauch


------------------------------------------------------------
TEIL 7 – INFEKTION

Wenn infection >= 70:
Quarantäne.

Wenn infection >= 100:
Person gilt als verloren.

Zähle:

- Quarantänefälle
- gesunde Personen
- kritische Fälle


------------------------------------------------------------
TEIL 8 – MEDIZINER

Erstelle:

class Medic extends Survivor

Methode:

treat($target)

Behandlung kann:

HP erhöhen
Infektion senken

Jede Behandlung kostet Energie.


------------------------------------------------------------
TEIL 9 – INGENIEUR

Erstelle:

class Engineer extends Survivor

Methode:

repair($base)

Kann:

walls erhöhen
power reparieren
doors reparieren

Jede Reparatur kostet Energie.


------------------------------------------------------------
TEIL 10 – SCOUT

Erstelle:

class Scout extends Survivor

Methode:

searchArea()

Der Scout kann Loot finden.

Optional:

Recherche:
random_int()

Beispiele für Loot:

Konserve
Wasser
Batterie
Medizin
Werkzeug
Funkgerät


------------------------------------------------------------
TEIL 11 – ZOMBIEKÄMPFE

Lass Überlebende gegen Zombies kämpfen.

Benutze:

while
attack()
takeDamage()

Wenn eine Seite keine HP mehr hat:
Kampf beenden.


------------------------------------------------------------
TEIL 12 – VORRÄTE

Die Basis besitzt:

food
water
medicine
fuel

Verbrauche Ressourcen.

Wenn eine Ressource <= 10:
"Vorrat kritisch"

Wenn Ressource <= 0:
"Vorrat aufgebraucht"


------------------------------------------------------------
TEIL 13 – ZOMBIE-WELLEN

Erstelle mehrere Zombie-Wellen.

Jede Welle besitzt:

"number"
"zombies"
"difficulty"

Je höher die Welle,
desto gefährlicher die Zombies.

Nach jeder Welle:
Status der Basis prüfen.


------------------------------------------------------------
TEIL 14 – BREAK UND CONTINUE

Benutze beide sinnvoll.

Beispiele:

Toter Überlebender:
continue

Basis vollständig gefallen:
break


------------------------------------------------------------
TEIL 15 – OPERATOR-CHECKLISTE

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
TEIL 16 – ARRAY-CHECKLISTE

Verwende:

- normales Array
- mehrdimensionales Array
- assoziatives Array
- mehrdimensionales assoziatives Array
- Array mit Objekten
- Array innerhalb eines Objekts
- Objekte in verschachtelten Arrays


------------------------------------------------------------
TEIL 17 – SCHLEIFEN

Verwende:

foreach
for
while
break
continue


------------------------------------------------------------
TEIL 18 – FUNKTIONEN

Erstelle mindestens 3 eigene Funktionen.

Beispiele:

calculateSurvivalScore()
checkInfection()
calculateBaseSecurity()
isCriticalSurvivor()


------------------------------------------------------------
TEIL 19 – OOP

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
TEIL 20 – ABSCHLUSSSTATISTIK

Am Ende soll ungefähr erscheinen:

====================================
ZOMBIE APOCALYPSE CONTROL SYSTEM
====================================

Sektoren: ...
Gebäude: ...
Überlebende: ...
Gesunde Personen: ...
Verletzte Personen: ...
Quarantänefälle: ...
Zombies: ...
Besiegte Zombies: ...
Nahrung: ...
Wasser: ...
Medizin: ...
Treibstoff: ...
Basis-Stabilität: ...

Überlebender mit bestem Score:
...

Gefährlichster Sektor:
...

Status:

BASIS STABIL
VORRÄTE KRITISCH
HORDE IM ANMARSCH
ODER
KEVIN HAT DIE BARRIKADE "NUR KURZ" GEÖFFNET

====================================
*/


// DEIN FINAL-BOSS-CODE:














/*
============================================================
SECRET LEVEL – DIE KOMPLETTE APOKALYPSE-DATENBANK

Baue folgende Struktur:

Land
 -> Städte
    -> Sektoren
       -> Gebäude
          -> Überlebende
             -> Inventar
             -> Gesundheitsdaten
             -> Tagesplan
          -> Zombies
          -> Vorräte

Jeder Überlebende besitzt:

"name"
"hp"
"hunger"
"thirst"
"infection"
"morale"
"alive"

Zusätzlich:

"inventory" => [...]

"medical" => [
    "medicine" => [...],
    "needsTreatment" => ...
]

"schedule" => [
    "morning" => [...],
    "afternoon" => [...],
    "evening" => [...]
]

Jeder Zombie besitzt:

"name"
"type"
"hp"
"danger"

Mindestens:

2 Städte
3 Sektoren pro Stadt
2 Gebäude pro Sektor
2 Überlebende pro Gebäude

Zähle:

- Städte
- Sektoren
- Gebäude
- Überlebende
- Zombies
- Verletzte
- Quarantänefälle
- Items
- Medikamente
- Vorräte

Finde zusätzlich:

- Stadt mit den meisten Überlebenden
- gefährlichsten Sektor
- Überlebenden mit bestem Survival-Score
- Gebäude mit den meisten Zombies

Wenn du hier noch weißt,
welche foreach-Schleife gerade läuft,
bist du bereit für echte Datenstrukturen.
============================================================
*/


// DEIN CODE:






/*
============================================================
ULTRA SECRET LEVEL – APOKALYPSE-IT

Die Basis besitzt noch ein halbwegs funktionierendes IT-System.

Es gibt:

- Kameras
- Funkgeräte
- Generatorsteuerung
- Türsysteme
- Vorratsdatenbank
- Bewegungsmelder

Baue:

Basis
 -> Systeme
    -> Geräte
       -> Logs

Jedes Gerät besitzt:

"name"
"type"
"online"
"battery"
"risk"

Jeder Logeintrag besitzt:

"user"
"action"
"risk"

Regeln:

online == false:
"Gerät offline"

battery <= 10:
"Batterie kritisch"

risk >= 8:
"System prüfen"

Wenn Türsystem offline ist
UND ZombiesOutside > 20:
"Das könnte gleich hektisch werden"

Bonus:

Erstelle Klassen für:

BaseSystem
DoorSystem
GeneratorSystem
RadioSystem

Noch mehr Bonus:

Verbinde Überlebende,
Basis,
Zombies und IT-System miteinander.

Wenn im Log steht,
dass ein Zombie dreimal den richtigen PIN eingegeben hat:

"Das Entwicklungsteam möchte ein ernstes Gespräch führen."
============================================================
*/


// DEIN CODE: