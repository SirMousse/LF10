<?php

/*
============================================================
PHP TIERHEIM QUEST – NERD EDITION

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
Tiere, Futter, Gehege, Pflege, Vermittlung,
Tierärzte, Mitarbeiter und ein Tierheim-System,
das hoffentlich besser dokumentiert ist als die Kaffeemaschine.
============================================================
*/


/*
============================================================
LEVEL 1 – FUTTERMENGEN

Erstelle ein Array mit mindestens 7 Futtermengen.

Beispielwerte:

2
5
8
1
12
6
3

Regeln:

unter 3:
"Sehr kleine Portion"

3 bis 6:
"Normale Portion"

7 bis 10:
"Große Portion"

über 10:
"Dieses Tier hat offensichtlich Hunger"

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
LEVEL 2 – ALTER DER TIERE

Erstelle ein Array mit mindestens 8 Alterswerten.

Regeln:

unter 1:
"Baby"

1 bis 3:
"Jungtier"

4 bis 9:
"Erwachsen"

ab 10:
"Senior"

Zähle zusätzlich alle Senioren.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 3 – TIERNAMEN

Erstelle ein Array mit mindestens 7 Tiernamen.

Beispiele:

Bello
Minka
Pixel
Kevin
Sir Wuffington
NullCat
Byte

Regeln:

Wenn Name == "Kevin":
"Kevin hat wieder seinen Futternapf umgedreht."

Wenn Name == "NullCat":
"Dieses Tier existiert laut Datenbank nicht."

Sonst:
"Tier registriert: NAME"

Bonus:

Benutze strlen().

Wenn der Name länger als 10 Zeichen ist:
"Dieser Name passt kaum auf das Halsband."
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 4 – FUTTERLAGER

Erstelle ein Array mit mindestens 8 Futterbeständen.

Berechne:

- Gesamtmenge
- Anzahl der Einträge
- Durchschnitt

Regeln für Durchschnitt:

unter 10:
"Futterlager kritisch"

10 bis 25:
"Futterlager okay"

26 bis 50:
"Gut gefüllt"

über 50:
"Die Tiere eröffnen ein Buffet"

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

Jedes Tier soll enthalten:

Index 0:
Name

Index 1:
Art

Index 2:
Alter

Mindestens 5 Tiere.

Beispiele für Arten:

Hund
Katze
Kaninchen
Vogel
Meerschweinchen

Regeln:

Alter unter 1:
"Baby"

1 bis 5:
"Jung bis erwachsen"

6 bis 10:
"Erfahrenes Tier"

über 10:
"Senior"

Gib zusätzlich Name und Tierart aus.

Recherche:

$tier[0]
$tier[1]
$tier[2]
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 6 – GESUNDHEITSCHECK

Erstelle ein mehrdimensionales Array.

Jedes Tier enthält:

[Name, Gewicht, Gesundheitswert]

Gesundheitswert:
0 bis 100

Mindestens 6 Tiere.

Regeln:

unter 30:
"Tierarzt dringend"

30 bis 59:
"Beobachten"

60 bis 79:
"Gesund"

ab 80:
"Topfit"

Wenn Gewicht <= 0:
"Ungültiger Wert in der Datenbank"

Bonus:
Zähle alle Tiere mit Gesundheitswert unter 60.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 7 – FUTTERARTEN

Erstelle ein mehrdimensionales Array.

Jedes Tier enthält:

[Name, Tierart, Futterart]

Mögliche Futterarten:

"Trockenfutter"
"Nassfutter"
"Gemüse"
"Körner"

Regeln:

Trockenfutter:
"Standardversorgung"

Nassfutter:
"Premium-Geräusch beim Öffnen der Dose"

Gemüse:
"Sehr gesund"

Körner:
"Bitte nicht auf dem Boden verteilen"

Zähle zusätzlich,
wie oft jede Futterart vorkommt.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 8 – ASSOZIATIVES TIER

Erstelle ein Tier als assoziatives Array.

Es soll enthalten:

"name"
"species"
"age"
"weight"
"healthy"
"adopted"

Werte selbst wählen.

Regeln:

Wenn healthy == false:
"Tier benötigt Behandlung"

Wenn adopted == true:
"Tier wurde vermittelt"

Wenn age >= 10:
"Senior-Tier"

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

Erstelle mindestens 6 Tiere.

Jedes besitzt:

"name"
"species"
"age"
"health"
"adopted"

Regeln:

health < 30:
"Kritisch"

30 bis 59:
"Behandlung empfohlen"

60 bis 79:
"Gesund"

ab 80:
"Topfit"

Wenn adopted == false UND health >= 60:
"Bereit für Vermittlung"

Du musst benutzen:

- mehrdimensionales assoziatives Array
- foreach
- &&
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 10 – GEHEGE

Erstelle ein mehrdimensionales assoziatives Array.

Mindestens 4 Gehege.

Jedes Gehege besitzt:

"name"
"clean"
"capacity"
"animals"

"animals" ist wieder ein Array
mit mehreren Tiernamen.

Regeln:

clean == false:
"Gehege muss gereinigt werden"

Wenn Anzahl Tiere > capacity:
"Gehege überbelegt"

Wenn sauber UND nicht überbelegt:
"Gehege in Ordnung"

Gib zusätzlich alle Tiere
mit einer zweiten foreach-Schleife aus.

Recherche:

count()
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 11 – TIERHEIM MIT BEREICHEN

Erstelle folgende Struktur:

Tierheim
 -> Bereiche
    -> Tiere

Mindestens:

3 Bereiche
jeweils mindestens 3 Tiere

Beispiele für Bereiche:

Hundebereich
Katzenbereich
Kleintiere

Jedes Tier besitzt:

"name"
"age"
"health"
"hungry"

Regeln:

hungry == true:
"Tier füttern"

health <= 30:
"Tierarzt rufen"

Wenn beides:
"Tier dringend versorgen"
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 12 – PFLEGEPLAN

Erstelle mehrere Tiere.

Jedes Tier besitzt:

"name"
"schedule"

"schedule" ist ein assoziatives Array:

"morning"
"afternoon"
"evening"

Jeder Zeitraum enthält wieder
ein Array mit Aufgaben.

Beispiele:

Füttern
Medikamente
Spaziergang
Gehege reinigen
Fellpflege

Gib den kompletten Pflegeplan aus.

Bonus:

Wenn "Medikamente" vorkommt:
"Medizinische Aufgabe vorhanden"
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 13 – BESITZTÜMER DES TIERS

Erstelle mindestens 5 Tiere.

Jedes Tier besitzt:

"name"
"items"

Items ist ein Array.

Beispiele:

Decke
Spielzeug
Napf
Leine
Transportbox
Kuscheltier

Gib alle Items aus.

Wenn mehr als 5 Items vorhanden:
"Tier besitzt mehr Sachen als manche Mitarbeiter"

Wenn "Spielzeug" vorhanden:
"Beschäftigung vorhanden"

Recherche:

count()
in_array()
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 14 – MEDIZINISCHE DATEN

Erstelle mindestens 6 Tiere.

Jedes besitzt:

"name"
"vaccinated"
"health"
"medication"

"medication" kann ein Array sein.

Regeln:

vaccinated == false:
"Impfstatus prüfen"

health < 50:
"Gesundheitszustand beobachten"

Wenn Medikamente vorhanden:
"Medikamentenplan beachten"

Wenn nicht geimpft UND health < 50:
"Tierarzttermin priorisieren"
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 15 – 3D-TIERHEIM

Erstelle folgende Struktur:

Tierheim
 -> Bereiche
    -> Gehege
       -> Tiere

Mindestens:

3 Bereiche
2 Gehege pro Bereich
2 Tiere pro Gehege

Gib aus:

Bereich
Gehege
Tier

Du brauchst mehrere
verschachtelte foreach-Schleifen.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 16 – 3D ASSOZIATIVE TIERHEIMSTRUKTUR

Struktur:

Tierheim
 -> Bereich
    -> Gehege
       -> Tierdaten

Jedes Tier besitzt:

"name"
"species"
"age"
"health"
"adopted"

Mindestens:

2 Bereiche
2 Gehege je Bereich
2 Tiere je Gehege

Regeln:

health <= 30:
"Gesundheit kritisch"

age >= 10:
"Senior"

Wenn beides:
"Senior mit besonderem Pflegebedarf"

Zähle:

- alle Tiere
- Senioren
- Tiere mit kritischer Gesundheit
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 17 – VERMITTLUNG

Erstelle mehrere Tiere.

Jedes Tier besitzt:

"name"
"health"
"vaccinated"
"behavior"
"adopted"

behavior ist ein Wert von 1 bis 10.

Regeln:

Tier kann vermittelt werden, wenn:

health >= 60
UND
vaccinated == true
UND
behavior >= 5
UND
adopted == false

Dann:
"Bereit für Vermittlung"

Sonst:
"Noch nicht vermittlungsbereit"

Zähle alle vermittelbaren Tiere.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 18 – BREAK UND CONTINUE

Erstelle mindestens 8 Tiere.

Jedes besitzt:

"name"
"present"
"health"

Regeln:

Wenn present == false:
Tier überspringen.

Benutze:
continue

Wenn health <= 0:
"Kritischer medizinischer Notfall"

Danach Schleife beenden.

Benutze:
break
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 19 – FOR-SCHLEIFE IM TIERREGISTER

Erstelle ein Array mit mindestens 10 Tiernamen.

Gehe NICHT mit foreach durch das Array.

Benutze:

for
count()

Ausgabe:

Tier 1: ...
Tier 2: ...

Bonus:

Gib nur jedes zweite Tier aus.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 20 – WHILE: FUTTERVORRAT AUFFÜLLEN

Ein Futterbehälter startet mit:

$food = 0;

Er soll auf mindestens 100 Einheiten aufgefüllt werden.

Pro Runde kommen 12 Einheiten dazu.

Benutze while.

Nach jeder Runde:
"Futterstand: ..."

Wenn Futter >= 50:
"Halbwegs gefüllt"

Wenn Futter >= 100:
"Vorrat ausreichend"

Bonus:
Zähle die Auffüllrunden.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 21 – MODULO: CHIP-IDs

Erstelle ein Array mit mindestens 12 Chip-IDs.

Gerade:
"Gerade Chip-ID"

Ungerade:
"Ungerade Chip-ID"

Durch 5 teilbar:
"Sondergruppe"

Exakt 42:
"Dieses Tier hat offenbar die Antwort auf alles"

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

checkHealth($health)

Regeln:

unter 30:
"kritisch"

30 bis 59:
"beobachten"

60 bis 79:
"gesund"

ab 80:
"topfit"

Die Funktion soll einen Text zurückgeben.

Recherche:

function
Parameter
return

Benutze sie danach für mehrere Tiere.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 23 – VERMITTLUNGS-SCORE

Erstelle eine Funktion:

calculateAdoptionScore($animal)

$animal ist ein assoziatives Array.

Es besitzt:

"health"
"behavior"
"age"

Beispielberechnung:

Score =
health
+ behavior * 5
- age * 2

Gib den Score mit return zurück.

Erstelle mindestens 5 Tiere.

Bonus:

Finde den höchsten Score ohne max().
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 24 – VERMITTLUNGSFILTER

Erstelle eine Funktion:

isReadyForAdoption($animal)

Die Funktion gibt true zurück,
wenn:

health >= 60
UND
vaccinated == true
UND
adopted == false

Sonst false.

Erstelle mindestens 8 Tiere.

Speichere alle geeigneten Tiere
in einem neuen Array.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 25 – ERSTE KLASSE

Erstelle eine Klasse:

Animal

Eigenschaften:

public $name;
public $species;
public $health;

Konstruktor:

__construct()

Methode:

showInfo()

Ausgabe ungefähr:

"NAME ist ein SPECIES und hat HEALTH Gesundheit."

Erstelle mindestens 4 Tier-Objekte.

Speichere sie in einem Array.

Gehe mit foreach durch das Array.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 26 – FÜTTERN ALS METHODE

Erweitere Animal.

Zusätzliche Eigenschaft:

$hunger

Erstelle Methode:

feed($amount)

Die Methode soll Hunger reduzieren.

Wenn Hunger <= 0:
"Tier ist satt"

Wenn Hunger noch > 0:
"Tier hat noch Hunger"

Achte darauf,
dass Hunger nicht negativ bleiben muss.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 27 – HEILUNG ALS METHODE

Erweitere Animal.

Methode:

heal($amount)

Gesundheit erhöhen.

Wenn health > 100:
auf 100 begrenzen.

Recherche:

Wie kann man Werte begrenzen?

Optional:
min()
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
$capacity
$animals
$clean

$animals soll ein Array sein.

Methoden:

addAnimal($animal)
showAnimals()
cleanEnclosure()
checkCapacity()

Recherche:

$this->animals[]
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 29 – VERERBUNG

Erstelle:

class Dog extends Animal
class Cat extends Animal
class Rabbit extends Animal

Jede Klasse bekommt eine Spezialmethode.

Dog:
goForWalk()

Cat:
climb()

Rabbit:
hop()

Recherche:

extends
parent::__construct()
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 30 – MITARBEITER ALS KLASSE

Erstelle eine Klasse:

Employee

Eigenschaften:

$name
$role
$energy
$tasksCompleted

Methoden:

doTask()
rest()
showStatus()

Jede Aufgabe kostet Energie.

Wenn energy <= 20:
"Mitarbeiter braucht Pause"

Wenn energy <= 0:
"Mitarbeiter läuft nur noch auf Kaffee"
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 31 – TIERARZT ALS VERERBUNG

Erstelle:

class Vet extends Employee

Zusätzliche Eigenschaft:

$medicalSkill

Methode:

treatAnimal($animal)

Behandlung soll health erhöhen.

Recherche:

extends
parent::__construct()
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 32 – TIERHEIM ALS KLASSE

Erstelle eine Klasse:

AnimalShelter

Eigenschaften:

$name
$animals
$employees
$enclosures

Alle drei sollen Arrays sein.

Methoden:

addAnimal()
addEmployee()
addEnclosure()
showShelterStatus()

Bonus:

Berechne die Gesamtzahl aller Tiere.
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 33 – OBJEKTE IN MEHRDIMENSIONALEN ARRAYS

Erstelle mehrere Animal-Objekte.

Speichere sie in einer Struktur:

Tierheim
 -> Bereiche
    -> Animal-Objekte

Gehe durch alle Bereiche
und alle Tiere.

Rufe showInfo() auf.

Wenn health <= 0:
Tier überspringen.

Benutze:
continue
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 34 – VERMITTLUNGSWOCHE

Erstelle mindestens 8 Animal-Objekte.

Jedes Tier soll zusätzlich besitzen:

$adopted
$vaccinated
$behavior

Prüfe alle Tiere.

Vermittelbar, wenn:

health >= 60
vaccinated == true
behavior >= 5
adopted == false

Speichere alle geeigneten Tiere
in einem neuen Array.

Bonus:

Sortiere sie nach Vermittlungs-Score.

Recherche:

usort()
============================================================
*/


// DEIN CODE:






/*
============================================================
LEVEL 35 – FINAL BOSS
TIERHEIM MANAGEMENT SYSTEM

Jetzt soll fast alles zusammenkommen.


TEIL 1 – ANIMAL-KLASSE

Erstelle Animal mit:

$name
$species
$age
$health
$hunger
$weight
$vaccinated
$adopted
$behavior
$items

Methoden:

feed()
heal()
vaccinate()
addItem()
showStatus()


------------------------------------------------------------
TEIL 2 – GEHEGE-KLASSE

Erstelle Enclosure mit:

$name
$capacity
$clean
$animals

Methoden:

addAnimal()
removeAnimal()
cleanEnclosure()
checkCapacity()
showStatus()


------------------------------------------------------------
TEIL 3 – MITARBEITER-KLASSE

Erstelle Employee mit:

$name
$role
$energy
$tasksCompleted

Methoden:

doTask()
rest()
showStatus()


------------------------------------------------------------
TEIL 4 – TIERARZT

Erstelle:

class Vet extends Employee

Zusätzliche Eigenschaften:

$medicalSkill

Methoden:

treatAnimal()
vaccinateAnimal()


------------------------------------------------------------
TEIL 5 – TIERHEIMSTRUKTUR

Erstelle ein mehrdimensionales
assoziatives Array.

Struktur:

Tierheim
 -> Bereiche
    -> Gehege
       -> Animal-Objekte

Mindestens:

3 Bereiche
2 Gehege pro Bereich
3 Tiere pro Gehege


------------------------------------------------------------
TEIL 6 – FUTTER

Jedes Tier besitzt Hunger.

Wenn hunger >= 70:
füttern.

Jede Fütterung kostet
zum Beispiel 5 Futtereinheiten.

Berechne:

- gefütterte Tiere
- gesamten Futterverbrauch


------------------------------------------------------------
TEIL 7 – GESUNDHEIT

Wenn health <= 30:
Tierarzt benötigt.

Wenn health <= 10:
"Dringender medizinischer Fall"

Zähle alle Tiere,
die behandelt werden müssen.


------------------------------------------------------------
TEIL 8 – IMPFUNGEN

Wenn vaccinated == false:
Impfung erforderlich.

Zähle:

- geimpfte Tiere
- ungeimpfte Tiere


------------------------------------------------------------
TEIL 9 – VERMITTLUNG

Ein Tier darf vermittelt werden, wenn:

health >= 60
UND
vaccinated == true
UND
behavior >= 5
UND
adopted == false

Bei erfolgreicher Vermittlung:

adopted = true

Zähle alle Vermittlungen.


------------------------------------------------------------
TEIL 10 – GEHEGE

Wenn count($animals) > capacity:
"Gehege überbelegt"

Wenn clean == false:
"Reinigung erforderlich"

Wenn beides:
"Gehege dringend bearbeiten"


------------------------------------------------------------
TEIL 11 – MITARBEITER

Aufgaben kosten Energie.

Beispiele:

Füttern
Reinigen
Spazierengehen
Medikamente geben
Vermittlungsgespräch

Wenn energy <= 20:
Pause empfehlen.


------------------------------------------------------------
TEIL 12 – BREAK UND CONTINUE

Benutze beide sinnvoll.

Beispiele:

Bereits vermitteltes Tier:
continue

Medizinischer Notfall:
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

calculateAdoptionScore()
checkHealth()
calculateFoodCost()
isReadyForAdoption()


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
TIERHEIM MANAGEMENT SYSTEM
====================================

Bereiche: ...
Gehege: ...
Tiere: ...
Hunde: ...
Katzen: ...
Andere Tiere: ...
Senioren: ...
Behandlungsfälle: ...
Ungeimpfte Tiere: ...
Vermittelte Tiere: ...
Gefütterte Tiere: ...
Futterverbrauch: ...
Mitarbeiter: ...

Tier mit bestem Vermittlungs-Score:
...

Bereich mit den meisten Tieren:
...

Status:

ALLES RUHIG
VIEL ZU TUN
KRITISCH
ODER
KEVIN HAT ALLE FUTTERSÄCKE GEÖFFNET

====================================
*/


// DEIN FINAL-BOSS-CODE:














/*
============================================================
SECRET LEVEL – DIE KOMPLETTE TIERHEIM-DATENBANK

Baue folgende Struktur:

Organisation
 -> Tierheime
    -> Bereiche
       -> Gehege
          -> Tiere
             -> Medizinische Daten
             -> Pflegeplan
             -> Gegenstände

Jedes Tier besitzt:

"name"
"species"
"age"
"health"
"weight"
"hunger"
"vaccinated"
"adopted"

Zusätzlich:

"medical" => [
    "medication" => [...],
    "lastCheck" => ...,
    "needsTreatment" => ...
]

"schedule" => [
    "morning" => [...],
    "afternoon" => [...],
    "evening" => [...]
]

"items" => [...]

Mindestens:

2 Tierheime
3 Bereiche pro Tierheim
2 Gehege pro Bereich
2 Tiere pro Gehege

Zähle:

- Tierheime
- Bereiche
- Gehege
- Tiere
- Hunde
- Katzen
- Senioren
- ungeimpfte Tiere
- Tiere in Behandlung
- vermittelte Tiere
- Items
- Medikamente

Finde zusätzlich:

- Tierheim mit den meisten Tieren
- Gehege mit der höchsten Auslastung
- ältestes Tier
- Tier mit dem besten Vermittlungs-Score

Wenn du hier noch genau weißt,
auf welcher Array-Ebene du dich befindest,
hast du verschachtelte Arrays verstanden.
============================================================
*/


// DEIN CODE:






/*
============================================================
ULTRA SECRET LEVEL – DIE TIERHEIM-IT

Das Tierheim besitzt jetzt ein digitales System.

Es gibt:

- Tierregister
- Mitarbeiterkonten
- Futterautomaten
- Türsysteme
- Kameras
- Vermittlungsdatenbank

Baue:

Tierheim
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

Wenn Futterautomat offline ist
UND mehrere Tiere Hunger >= 80 haben:
"Die IT sollte sich beeilen"

Bonus:

Erstelle Klassen für:

ShelterSystem
FeedingSystem
AccessSystem

Noch mehr Bonus:

Verbinde Tierdaten,
Gehege und IT-System miteinander.

Wenn im Log steht,
dass eine Katze nachts Administratorrechte bekommen hat:

"Das erklärt einiges."
============================================================
*/


// DEIN CODE: