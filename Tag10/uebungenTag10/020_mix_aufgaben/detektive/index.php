<?php

/*
============================================================
PHP DETEKTIV QUEST – NERD KRIMI EDITION

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
============================================================
*/


/*
============================================================
FALL 1 – DIE VERDÄCHTIGEN KAFFEEBECHER

Erstelle ein Array mit mindestens 6 Koffeinwerten.

Beispielwerte:

10
40
80
5
120
30

Gehe mit foreach durch das Array.

Regeln:

unter 20:
"Unverdächtig. Fast schon Tee."

20 bis 60:
"Normaler Ermittler-Kaffee."

61 bis 100:
"Verdächtig viel Koffein."

über 100:
"Diese Person ermittelt seit Dienstag ohne Schlaf."

Du musst benutzen:

- eigenes Array
- foreach
- if
- elseif
- else
============================================================
*/


// DEIN CODE:






/*
============================================================
FALL 2 – FINGERABDRUCK-CHECK

Erstelle ein Array mit mindestens 8 Trefferwerten.

Die Werte liegen zwischen 0 und 100.

Regeln:

unter 20:
"Kaum Übereinstimmung."

20 bis 49:
"Schwacher Treffer."

50 bis 79:
"Verdächtig."

80 bis 99:
"Sehr starke Übereinstimmung."

100:
"Entweder Täter gefunden oder Datenbank kaputt."

Zähle zusätzlich,
wie viele Werte mindestens 80 sind.

Du musst benutzen:

- Array
- foreach
- >=
- ==
- +=
- if / elseif / else
============================================================
*/


// DEIN CODE:






/*
============================================================
FALL 3 – VERDÄCHTIGEN-NAMENSCHECK

Erstelle ein Array mit mindestens 7 Namen.

Beispiele:

Moriarty
Watson
Kevin
Ada
Nullpointer Nick
Buggy Bob
Sherlock.exe

Regeln:

Wenn Name == "Kevin":
"Kevin behauptet, er sei nur zufällig im Serverraum."

Wenn Name == "Moriarty":
"Hauptverdächtiger mit unnötig dramatischem Namen."

Sonst:
"Person registriert: NAME"

Bonus:

Benutze strlen().

Wenn ein Name länger als 10 Zeichen ist:
"Dieser Name passt nicht auf das Beweisetikett."
============================================================
*/


// DEIN CODE:






/*
============================================================
FALL 4 – SPURENPUNKTE

Erstelle ein Array mit mindestens 8 Punktwerten
für gefundene Beweise.

Berechne:

- Gesamtpunkte
- Anzahl der Beweise
- Durchschnitt

Regeln für Gesamtpunkte:

unter 50:
"Der Fall besteht aktuell aus Vermutungen und Kaffee."

50 bis 149:
"Es wird interessant."

150 bis 299:
"Der Täter sollte langsam nervös werden."

ab 300:
"Fall praktisch gelöst."

Recherche später:

count()
array_sum()
============================================================
*/


// DEIN CODE:






/*
============================================================
FALL 5 – ERSTES MEHRDIMENSIONALES ARRAY

Erstelle ein mehrdimensionales Array.

Jede verdächtige Person soll enthalten:

Index 0:
Name

Index 1:
Alter

Index 2:
Verdachtslevel

Mindestens 5 Personen.

Beispiele für Namen:

Moriarty
Ada
Kevin
Inspector Byte
Professor Cache

Regeln:

Verdachtslevel unter 3:
"Kaum verdächtig"

3 bis 5:
"Beobachten"

6 bis 8:
"Sehr verdächtig"

9 oder 10:
"Warum läuft diese Person noch frei herum?"

Gib zusätzlich Name und Alter aus.

Recherche:

$person[0]
$person[1]
$person[2]
============================================================
*/


// DEIN CODE:






/*
============================================================
FALL 6 – BEWEISSTÜCKE

Erstelle ein mehrdimensionales Array.

Jedes Beweisstück enthält:

[Name, Relevanz, Zustand]

Beispiele:

"USB-Stick"
"Fingerabdruck"
"Kaffeebecher"
"Verdächtige Tastatur"
"Zerrissene Notiz"
"Sehr ominöse Diskette"

Relevanz:
Zahl von 1 bis 100

Zustand:
zum Beispiel
"gut"
"beschädigt"
"unbrauchbar"

Regeln:

Relevanz unter 20:
"Fast irrelevant"

20 bis 59:
"Interessant"

60 bis 89:
"Wichtig"

ab 90:
"Das sollte ins Beweislabor"

Wenn Zustand == "unbrauchbar":
"Kann vermutlich nicht verwendet werden"

Du musst benutzen:

- mehrdimensionales Array
- foreach
- if / elseif / else
============================================================
*/


// DEIN CODE:






/*
============================================================
FALL 7 – ALIBI-PRÜFUNG

Erstelle ein mehrdimensionales Array.

Jede Person:

[Name, Uhrzeit, AlibiPunkte]

Mindestens 6 Personen.

AlibiPunkte gehen von 0 bis 100.

Regeln:

unter 20:
"Alibi besteht aus Hoffnung."

20 bis 49:
"Schwach."

50 bis 79:
"Glaubwürdig."

80 bis 100:
"Sehr gutes Alibi."

Bonus:

Finde die Person mit dem schwächsten Alibi,
ohne min() zu benutzen.
============================================================
*/


// DEIN CODE:






/*
============================================================
FALL 8 – ASSOZIATIVES VERDÄCHTIGEN-ARRAY

Erstelle eine Person als assoziatives Array.

Sie soll enthalten:

"name"
"age"
"occupation"
"suspicion"
"alibi"
"missing"

Werte selbst wählen.

Regeln:

Wenn suspicion >= 8:
"Hauptverdächtiger"

Wenn alibi == false:
"Kein bestätigtes Alibi"

Wenn missing == true:
"Person ist verschwunden. Praktisch."

Recherche:

true
false
assoziative Arrays
============================================================
*/


// DEIN CODE:






/*
============================================================
FALL 9 – MEHRDIMENSIONALES ASSOZIATIVES ARRAY

Erstelle mindestens 6 verdächtige Personen.

Jede Person soll besitzen:

"name"
"occupation"
"suspicion"
"alibi"
"evidence"

"evidence" ist eine Zahl von 0 bis 100.

Regeln:

suspicion < 3:
"Unauffällig"

3 bis 5:
"Beobachten"

6 bis 8:
"Verdächtig"

9 oder 10:
"Sehr verdächtig"

Wenn suspicion >= 7 UND evidence >= 70:
"Dringend verhören"

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
FALL 10 – TATORTE

Erstelle ein mehrdimensionales assoziatives Array.

Mindestens 4 Tatorte.

Jeder Tatort soll enthalten:

"name"
"secured"
"risk"
"evidence"

"evidence" soll wieder ein Array
mit mehreren Beweisstücken sein.

Beispiele für Tatorte:

Serverraum
Bibliothek
Parkhaus
Kellerlabor

Regeln:

secured == true UND risk < 5:
"Tatort kontrolliert"

secured == false:
"Tatort nicht abgesichert"

risk >= 8:
"Gefährlicher Tatort"

Gib zusätzlich alle Beweisstücke
mit einer zweiten foreach-Schleife aus.

Recherche:

verschachtelte foreach-Schleifen
============================================================
*/


// DEIN CODE:






/*
============================================================
FALL 11 – POLIZEIREVIER DATENBANK

Erstelle folgende Struktur:

Revier
 -> Fälle
    -> Verdächtige

Mindestens:

3 Fälle
jeweils mindestens 3 Verdächtige

Jede Person soll besitzen:

"name"
"suspicion"
"alibi"

Gib aus:

Fall
Name
Verdachtslevel
Alibi

Regeln:

suspicion >= 8 UND alibi == false:
"Priorität hoch"

alibi == true:
"Alibi bestätigt"

suspicion <= 2:
"Momentan wenig interessant"

Du musst benutzen:

- tief verschachteltes Array
- mehrere foreach-Schleifen
- &&
============================================================
*/


// DEIN CODE:






/*
============================================================
FALL 12 – ZEUGENBERICHTE

Erstelle mindestens 5 Zeugen.

Jeder Zeuge soll enthalten:

"name"
"credibility"
"statements"

"statements" ist ein Array
mit mindestens 3 Aussagen.

Beispielaussagen:

"Ich habe nichts gesehen."
"Da war jemand mit Kapuze."
"Der Drucker hat plötzlich gebrannt."
"Kevin war es wahrscheinlich nicht."
"Ich möchte meinen Anwalt."

Regeln:

credibility unter 30:
"Sehr fragwürdiger Zeuge"

30 bis 69:
"Teilweise glaubwürdig"

ab 70:
"Glaubwürdiger Zeuge"

Gib alle Aussagen jedes Zeugen aus.
============================================================
*/


// DEIN CODE:






/*
============================================================
FALL 13 – FALLAKTEN MIT AUFGABEN

Erstelle ein mehrdimensionales assoziatives Array.

Jeder Fall soll enthalten:

"title"
"priority"
"tasks"

"tasks" ist wieder ein Array.

Jede Aufgabe soll besitzen:

"name"
"done"

Mindestens:

3 Fälle
jeweils mindestens 4 Aufgaben

Beispiele:

Fingerabdrücke prüfen
Serverlogs lesen
Kevin befragen
Kaffeemaschine beschlagnahmen

Zähle:

- erledigte Aufgaben
- offene Aufgaben

Wenn alle Aufgaben erledigt sind:
"Fall bereit zur Auswertung"
============================================================
*/


// DEIN CODE:






/*
============================================================
FALL 14 – BEWEISLAGER

Erstelle mehrere Fälle.

Jeder Fall besitzt:

"title"
"evidence"

"evidence" ist ein Array
mit mehreren Beweisstücken.

Beispiele:

USB-Stick
Festplatte
Handschuh
Notiz
Tasse
Netzwerkkabel

Gib alle Beweisstücke aus.

Wenn ein Fall mehr als 5 Beweise besitzt:
"Beweislager wird unübersichtlich"

Wenn "USB-Stick" vorkommt:
"Digitale Forensik erforderlich"

Recherche:

count()
in_array()
============================================================
*/


// DEIN CODE:






/*
============================================================
FALL 15 – FORENSIK-LABOR

Erstelle mindestens 7 Laborproben.

Jede Probe besitzt:

"name"
"confidence"
"processed"
"type"

Mögliche Typen:

fingerprint
dna
digital
fiber
unknown

Regeln:

processed == false:
"Noch nicht analysiert"

confidence < 30:
"Schwacher Treffer"

30 bis 69:
"Brauchbarer Treffer"

ab 70:
"Starker Treffer"

Zähle zusätzlich:

- bearbeitete Proben
- unbearbeitete Proben
============================================================
*/


// DEIN CODE:






/*
============================================================
FALL 16 – 3D-FALLSYSTEM

Erstelle eine Struktur:

Revier
 -> Abteilungen
    -> Fälle
       -> Verdächtige

Mindestens:

3 Abteilungen
2 Fälle pro Abteilung
2 Verdächtige pro Fall

Gehe durch alles.

Gib aus:

Abteilung
Fall
Verdächtiger

Du brauchst mehrere
verschachtelte foreach-Schleifen.
============================================================
*/


// DEIN CODE:






/*
============================================================
FALL 17 – 3D ASSOZIATIVES FALLSYSTEM

Jetzt mit echten Daten.

Struktur:

Revier
 -> Abteilung
    -> Fall
       -> Verdächtige

Jede verdächtige Person besitzt:

"name"
"suspicion"
"alibi"
"evidence"

Mindestens:

2 Abteilungen
3 Fälle pro Abteilung
2 Verdächtige pro Fall

Regeln:

suspicion >= 8:
"Hochverdächtig"

alibi == false:
"Kein Alibi"

evidence >= 80:
"Starke Beweislage"

Wenn alles gleichzeitig zutrifft:
"Festnahme prüfen"

Zähle:

- alle Verdächtigen
- alle Personen ohne Alibi
- alle Hochverdächtigen
============================================================
*/


// DEIN CODE:






/*
============================================================
FALL 18 – STADTWEITES ERMITTLUNGSSYSTEM

Erstelle diese Struktur:

Stadt
 -> Bezirke
    -> Tatorte
       -> Beweise

Mindestens:

2 Bezirke
2 Tatorte pro Bezirk
3 Beweise pro Tatort

Jedes Beweisstück besitzt:

"name"
"relevance"
"processed"

Berechne:

- Anzahl Bezirke
- Anzahl Tatorte
- Anzahl Beweise
- Anzahl unbearbeiteter Beweise
============================================================
*/


// DEIN CODE:






/*
============================================================
FALL 19 – BREAK UND CONTINUE

Erstelle mindestens 8 Verdächtige.

Jede Person besitzt:

"name"
"suspicion"
"available"

Regeln:

Wenn available == false:
Person überspringen.

Benutze:
continue

Wenn Name == "Professor FatalError":
"Der Hauptverdächtige wurde gefunden."

Danach Schleife sofort beenden.

Benutze:
break

Alle anderen normal prüfen.
============================================================
*/


// DEIN CODE:






/*
============================================================
FALL 20 – FOR-SCHLEIFE IN DER AKTENABLAGE

Erstelle ein Array mit mindestens 10 Fallnamen.

Gehe NICHT mit foreach durch das Array.

Benutze:

for
count()

Ausgabe:

Fall 1: ...
Fall 2: ...

Bonus:

Gib nur jeden zweiten Fall aus.
============================================================
*/


// DEIN CODE:






/*
============================================================
FALL 21 – WHILE: VERHÖR

Eine verdächtige Person startet mit:

$stress = 100;

Jede gute Frage reduziert Stress um:

13

Benutze while.

Solange Stress > 0:
weiterfragen.

Nach jeder Runde:
"Stress: ..."

Wenn Stress < 30:
"Verdächtiger wird nervös."

Wenn Stress <= 0:
"Verdächtiger redet."

Bonus:
Zähle die Fragen.
============================================================
*/


// DEIN CODE:






/*
============================================================
FALL 22 – MODULO-CODEKNACKER

Erstelle ein Array mit mindestens 12 Zahlencodes.

Prüfe jeden Code.

Gerade Zahl:
"Code stabil"

Ungerade Zahl:
"Code verdächtig"

Durch 5 teilbar:
"Zusatzmuster erkannt"

Exakt 42:
"Die Antwort auf den Fall gefunden"

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
FALL 23 – ERSTE FUNKTION

Erstelle eine Funktion:

checkSuspicion($value)

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

Erstelle danach mehrere Personen
und benutze die Funktion.
============================================================
*/


// DEIN CODE:






/*
============================================================
FALL 24 – FUNKTION MIT VERDÄCHTIGEN-ARRAY

Erstelle eine Funktion:

calculateCaseScore($suspect)

$suspect ist ein assoziatives Array.

Es besitzt:

"suspicion"
"evidence"
"lies"

Berechnung:

Score = suspicion * 2 + evidence + lies * 5

Gib Score mit return zurück.

Erstelle mindestens 5 Verdächtige.

Berechne für jeden den Score.

Bonus:

Finde den höchsten Score ohne max().
============================================================
*/


// DEIN CODE:






/*
============================================================
FALL 25 – BEWEIS-FILTER

Erstelle eine Funktion:

isImportantEvidence($evidence)

Ein Beweis besitzt:

"name"
"relevance"

Die Funktion gibt true zurück,
wenn relevance >= 70.

Sonst false.

Erstelle mindestens 10 Beweise.

Speichere alle wichtigen Beweise
in einem neuen Array.
============================================================
*/


// DEIN CODE:






/*
============================================================
FALL 26 – ERSTE KLASSE

Erstelle eine Klasse:

Detective

Eigenschaften:

public $name;
public $experience;
public $casesSolved;

Konstruktor:

__construct()

Methode:

introduce()

Ausgabe ungefähr:

"Detective NAME hat X Fälle gelöst."

Erstelle mindestens 4 Detektiv-Objekte.

Speichere sie in einem Array.

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
FALL 27 – VERDÄCHTIGER ALS KLASSE

Erstelle eine Klasse:

Suspect

Eigenschaften:

$name
$suspicion
$alibi

Methode:

showStatus()

Regeln:

Wenn suspicion >= 8:
"Sehr verdächtig"

Wenn alibi == false:
"Kein Alibi"

Erstelle mehrere Objekte
und speichere sie in einem Array.
============================================================
*/


// DEIN CODE:






/*
============================================================
FALL 28 – VERHÖRMETHODE

Erweitere Detective.

Erstelle:

interrogate($suspect)

Die Methode soll zum Beispiel
das Verdachtslevel verändern.

Beispiel:

$suspect->suspicion += 1;

Oder bei gutem Alibi:
$suspect->suspicion -= 1;

Achte darauf,
dass das Verdachtslevel sinnvoll bleibt.
============================================================
*/


// DEIN CODE:






/*
============================================================
FALL 29 – DETEKTIVTEAM

Erstelle mindestens 6 Detective-Objekte.

Speichere sie in:

$team

Berechne:

- gesamte Erfahrung
- gesamte gelöste Fälle
- durchschnittliche gelöste Fälle

Regeln:

Wenn Gesamterfahrung > 100:
"Veteranenteam"

Wenn gelöste Fälle > 50:
"Das Team kennt vermutlich jeden Kaffeeautomaten der Stadt."

Wenn beides:
"Elite-Ermittler"
============================================================
*/


// DEIN CODE:






/*
============================================================
FALL 30 – POLIZEIREVIER ALS KLASSE

Erstelle eine Klasse:

PoliceStation

Eigenschaften:

$name
$detectives
$cases

$detectives soll ein Array sein.
$cases soll ein Array sein.

Methoden:

addDetective($detective)
addCase($case)
showDetectives()
showCases()

Recherche:

Wie speichert man Objekte
in einem Array innerhalb eines Objekts?

Hinweis:

$this->detectives[]
============================================================
*/


// DEIN CODE:






/*
============================================================
FALL 31 – VERERBUNG

Erstelle:

class ForensicDetective extends Detective

Zusätzliche Eigenschaft:

$labSkill

Zusätzliche Methode:

analyzeEvidence($evidence)

Recherche:

extends
parent::__construct()
protected
============================================================
*/


// DEIN CODE:






/*
============================================================
FALL 32 – MEHRERE ERMITTLERKLASSEN

Erstelle:

class ForensicDetective extends Detective
class CyberDetective extends Detective
class UndercoverDetective extends Detective

Jede Klasse bekommt eine Spezialmethode.

ForensicDetective:
analyzeEvidence()

CyberDetective:
scanServer()

UndercoverDetective:
followSuspect()

Erstelle von jeder Klasse mindestens ein Objekt.

Speichere alle gemeinsam in einem Array.
============================================================
*/


// DEIN CODE:






/*
============================================================
FALL 33 – DIGITALE FORENSIK

Erstelle eine Klasse:

DigitalEvidence

Eigenschaften:

$name
$fileType
$size
$encrypted
$relevance

Methoden:

showInfo()
decrypt()
checkRelevance()

Regeln:

Wenn encrypted == true:
"Datei verschlüsselt"

Wenn relevance >= 80:
"Wichtiges digitales Beweisstück"

Bonus:

Erstelle mehrere DigitalEvidence-Objekte
und speichere sie in einem Array.
============================================================
*/


// DEIN CODE:






/*
============================================================
FALL 34 – FÄLLE MIT OBJEKTEN

Erstelle mehrere Suspect-Objekte.

Speichere sie in einem
mehrdimensionalen Array.

Struktur:

Fälle
 -> Fallname
    -> Verdächtige Objekte

Gehe durch alle Fälle.

Rufe für jeden Verdächtigen
showStatus() auf.

Wenn suspicion <= 1:
Person überspringen.

Benutze:
continue
============================================================
*/


// DEIN CODE:






/*
============================================================
FALL 35 – FINALER GROSSFALL
CITY CRIME CONTROL SYSTEM

Jetzt soll fast alles kombiniert werden.


TEIL 1 – DETECTIVE-KLASSE

Erstelle Detective mit:

$name
$experience
$casesSolved
$energy
$inventory

Methoden:

interrogate()
collectEvidence()
showStatus()
rest()


------------------------------------------------------------
TEIL 2 – SUSPECT-KLASSE

Erstelle Suspect mit:

$name
$suspicion
$alibi
$available
$evidenceScore

Methoden:

showStatus()
changeSuspicion()


------------------------------------------------------------
TEIL 3 – CASE-KLASSE

Erstelle eine Klasse:

CrimeCase

Eigenschaften:

$title
$priority
$solved
$suspects
$evidence

$suspects soll ein Array sein.
$evidence soll ein Array sein.

Methoden:

addSuspect()
addEvidence()
showCase()
calculateScore()


------------------------------------------------------------
TEIL 4 – FALLSYSTEM

Erstelle ein mehrdimensionales
assoziatives Array.

Struktur:

Stadt
 -> Bezirke
    -> Fälle
       -> CrimeCase-Objekte

Mindestens:

3 Bezirke
3 Fälle pro Bezirk


------------------------------------------------------------
TEIL 5 – TATORTE

Jeder Fall bekommt zusätzlich Informationen zu:

location
secured
risk
witnesses

witnesses ist ein Array.


------------------------------------------------------------
TEIL 6 – VERDÄCHTIGE

Jeder Fall besitzt mehrere Verdächtige.

Wenn:

suspicion >= 8
UND
evidenceScore >= 70
UND
alibi == false

Dann:

"Festnahme prüfen"


------------------------------------------------------------
TEIL 7 – ERMITTLER-ENERGIE

Jede Ermittlung kostet Energie.

Zum Beispiel:

$detective->energy -= 10;

Wenn Energie <= 20:

"Detektiv braucht Kaffee."

Wenn Energie <= 0:

"Ermittlung pausiert."


------------------------------------------------------------
TEIL 8 – BEWEISE

Jeder Fall besitzt mehrere Beweise.

Beweise haben:

name
type
relevance
processed

Zähle:

- alle Beweise
- wichtige Beweise
- unbearbeitete Beweise


------------------------------------------------------------
TEIL 9 – FALL LÖSEN

Berechne einen Fall-Score.

Beispiel:

Score =
wichtige Beweise * 20
+
Verdachtswerte
+
Zeugenaussagen

Wenn Score hoch genug:

Fall auf solved = true setzen.


------------------------------------------------------------
TEIL 10 – BREAK UND CONTINUE

Benutze beide sinnvoll.

Beispiele:

Person nicht verfügbar:
continue

Gefahr am Tatort zu hoch:
break


------------------------------------------------------------
TEIL 11 – OPERATOR-CHECK

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
TEIL 12 – ARRAY-CHECK

Verwende:

- normales Array
- mehrdimensionales Array
- assoziatives Array
- mehrdimensionales assoziatives Array
- Array mit Objekten
- Array innerhalb eines Objekts
- Objekte innerhalb verschachtelter Arrays


------------------------------------------------------------
TEIL 13 – SCHLEIFEN

Verwende:

foreach
for
while

Zusätzlich:

break
continue


------------------------------------------------------------
TEIL 14 – FUNKTIONEN

Erstelle mindestens 2 eigene Funktionen.

Beispiele:

calculateEvidenceScore()
checkAlibi()
calculateRisk()
isHighPriority()


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

Am Ende soll ungefähr ausgegeben werden:

====================================
CITY CRIME CONTROL SYSTEM
====================================

Detektive: ...
Fälle: ...
Gelöste Fälle: ...
Offene Fälle: ...
Verdächtige: ...
Beweise: ...
Wichtige Beweise: ...
Zeugen: ...

Hauptverdächtiger:
...

Gefährlichster Tatort:
...

Erfolgreichster Detektiv:
...

Status:

STADT RELATIV SICHER
KRITISCHE LAGE
ODER
KEVIN HAT ADMINRECHTE

====================================
*/


// DEIN FINAL-BOSS-CODE:














/*
============================================================
SECRET CASE – DIE KOMPLETTE DETEKTIV-DATENBANK

Baue folgende Struktur:

Land
 -> Städte
    -> Polizeireviere
       -> Abteilungen
          -> Fälle
             -> Verdächtige
             -> Beweise
             -> Zeugen

Jeder Verdächtige:

"name"
"suspicion"
"alibi"
"evidenceScore"

Jeder Beweis:

"name"
"type"
"relevance"
"processed"

Jeder Zeuge:

"name"
"credibility"
"statements"

Mindestens:

2 Städte
2 Reviere pro Stadt
2 Abteilungen pro Revier
2 Fälle pro Abteilung

Zähle:

- Städte
- Reviere
- Abteilungen
- Fälle
- Verdächtige
- Beweise
- Zeugen
- gelöste Fälle
- Personen ohne Alibi
- wichtige Beweise

Finde zusätzlich:

- Fall mit den meisten Verdächtigen
- Verdächtigen mit höchstem Verdachtslevel
- glaubwürdigsten Zeugen
- Revier mit den meisten Fällen

Wenn du an dieser Stelle noch weißt,
in welchem foreach du gerade bist,
bist du offiziell bereit für echte Datenstrukturen.
============================================================
*/


// DEIN CODE:






/*
============================================================
ULTRA SECRET CASE – DER SERVERMORD

Im Rechenzentrum wurde ein Produktionsserver
um 03:17 Uhr "ermordet".

Verdächtige:

- Praktikant
- Senior Developer
- Sysadmin
- Projektmanager
- Kevin

Erstelle ein Ermittlungs-System.

Jede Person besitzt:

"name"
"accessLevel"
"wasPresent"
"alibi"
"suspicion"

Zusätzlich gibt es:

serverLogs
doorLogs
cameraLogs
usbDevices

Alle sollen als Arrays modelliert werden.

Baue daraus eine Auswertung.

Beispiele:

Wenn Person hohe Zugriffsrechte besitzt
UND zur Tatzeit anwesend war:
Verdacht erhöhen.

Wenn bestätigtes Alibi vorhanden:
Verdacht reduzieren.

Wenn USB-Gerät zur Person passt:
Verdacht erhöhen.

Wenn Name == "Kevin"
UND kein Alibi vorhanden:
"Das sieht schlecht aus, Kevin."

Aber:

Nicht automatisch Kevin beschuldigen.
Die Daten sollen entscheiden.

Bonus:

Sortiere am Ende alle Verdächtigen
nach Verdachtslevel.

Recherche:

usort()

Noch mehr Bonus:

Baue aus Verdächtigen, Beweisen und Fällen
eigene Klassen.

Wenn dein Programm am Ende den Täter
anhand der Daten bestimmen kann,
hast du aus einer Übung fast schon
eine kleine Ermittlungssoftware gebaut.
============================================================
*/


// DEIN CODE: