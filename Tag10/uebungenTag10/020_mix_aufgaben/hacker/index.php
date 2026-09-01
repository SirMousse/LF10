<?php

/*
============================================================
PHP CYBER QUEST – HACKER / SECURITY EDITION

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
Cybersecurity, Logs, Server, Zugriffe, Rollen,
verdächtige Aktivitäten und Security-Simulationen.
============================================================
*/


/*
============================================================
MISSION 1 – SERVERLAST

Erstelle ein Array mit mindestens 7 CPU-Werten.

Beispielwerte:

12
35
67
91
100
45
82

Regeln:

unter 30:
"Server entspannt"

30 bis 69:
"Normale Last"

70 bis 89:
"Hohe Last"

ab 90:
"Der Server schwitzt"

Bei exakt 100:
"Jemand hat wahrscheinlich alles gleichzeitig gestartet."

Du musst benutzen:

- eigenes Array
- foreach
- if
- elseif
- else
- ==
- <
- >=
============================================================
*/


// DEIN CODE:






/*
============================================================
MISSION 2 – LOGIN-VERSUCHE

Erstelle ein Array mit mindestens 8 Zahlen.

Jede Zahl steht für fehlgeschlagene Login-Versuche
eines Benutzers.

Regeln:

0:
"Alles ruhig"

1 bis 2:
"Vertippt"

3 bis 5:
"Verdächtig"

mehr als 5:
"Account temporär beobachten"

Zähle zusätzlich alle Benutzer
mit mehr als 3 Fehlversuchen.

Du musst benutzen:

- foreach
- +=
- if / elseif / else
============================================================
*/


// DEIN CODE:






/*
============================================================
MISSION 3 – USERNAMEN-CHECK

Erstelle ein Array mit mindestens 7 Usernamen.

Beispiele:

root
admin
neo
hackerman
Kevin
NullByte
CoffeeOverclock

Regeln:

Wenn Name == "root":
"Sehr mächtiger Account"

Wenn Name == "admin":
"Admin-Account entdeckt"

Wenn Name == "Kevin":
"Kevin sagt, er habe nur kurz etwas getestet."

Sonst:
"Benutzer gefunden: NAME"

Bonus:

Benutze strlen().

Wenn Username länger als 12 Zeichen ist:
"Sehr langer Benutzername"
============================================================
*/


// DEIN CODE:






/*
============================================================
MISSION 4 – SECURITY SCORE

Erstelle ein Array mit mindestens 8 Sicherheitswerten.

Berechne:

- Summe
- Anzahl
- Durchschnitt

Regeln für Durchschnitt:

unter 30:
"System dringend härten"

30 bis 59:
"Verbesserungswürdig"

60 bis 79:
"Solide"

ab 80:
"Security-Team darf heute früher Kaffee holen"

Recherche:

count()
array_sum()
============================================================
*/


// DEIN CODE:






/*
============================================================
MISSION 5 – ERSTES MEHRDIMENSIONALES ARRAY

Erstelle ein mehrdimensionales Array.

Jeder Benutzer soll enthalten:

Index 0:
Username

Index 1:
Rolle

Index 2:
Login-Versuche

Mindestens 5 Benutzer.

Mögliche Rollen:

guest
user
developer
admin

Regeln:

Login-Versuche unter 3:
"Unauffällig"

3 bis 5:
"Prüfen"

über 5:
"Verdächtiges Verhalten"

Gib zusätzlich Username und Rolle aus.

Recherche:

$user[0]
$user[1]
$user[2]
============================================================
*/


// DEIN CODE:






/*
============================================================
MISSION 6 – SERVERLISTE

Erstelle ein mehrdimensionales Array.

Jeder Server enthält:

[Name, CPU, RAM]

Mindestens 6 Server.

Regeln:

CPU über 80:
"Hohe CPU-Auslastung"

RAM über 80:
"Hohe RAM-Auslastung"

Wenn CPU > 80 UND RAM > 80:
"Server braucht dringend Aufmerksamkeit"

Du musst benutzen:

- mehrdimensionales Array
- foreach
- &&
- if
============================================================
*/


// DEIN CODE:






/*
============================================================
MISSION 7 – LOG-EINTRÄGE

Erstelle ein mehrdimensionales Array.

Jeder Logeintrag besitzt:

[User, Event, Risk]

Beispiel-Events:

"login"
"logout"
"file_access"
"settings_change"
"failed_login"

Risk ist eine Zahl von 1 bis 10.

Regeln:

Risk unter 3:
"Normal"

3 bis 6:
"Beobachten"

7 bis 9:
"Verdächtig"

10:
"Sofort prüfen"

Bonus:

Zähle alle Einträge mit Risk >= 7.
============================================================
*/


// DEIN CODE:






/*
============================================================
MISSION 8 – ASSOZIATIVER ACCOUNT

Erstelle einen Benutzer
als assoziatives Array.

Er soll enthalten:

"username"
"role"
"active"
"failedLogins"
"risk"

Werte selbst wählen.

Regeln:

Wenn active == false:
"Account deaktiviert"

Wenn failedLogins >= 5:
"Viele Fehlversuche"

Wenn risk >= 8:
"Hohes Risiko"

Recherche:

assoziative Arrays
true
false
============================================================
*/


// DEIN CODE:






/*
============================================================
MISSION 9 – MEHRDIMENSIONALES ASSOZIATIVES ARRAY

Erstelle mindestens 6 Benutzer.

Jeder Benutzer besitzt:

"username"
"role"
"failedLogins"
"risk"
"active"

Regeln:

risk < 3:
"Niedrig"

3 bis 5:
"Mittel"

6 bis 8:
"Hoch"

9 oder 10:
"Kritisch"

Wenn failedLogins >= 5 UND risk >= 7:
"Account genauer untersuchen"

Du musst benutzen:

- mehrdimensionales assoziatives Array
- foreach
- &&
============================================================
*/


// DEIN CODE:






/*
============================================================
MISSION 10 – NETZWERKSEGMENTE

Erstelle ein mehrdimensionales
assoziatives Array.

Mindestens 4 Netzwerksegmente.

Jedes Segment besitzt:

"name"
"online"
"risk"
"devices"

"devices" ist wieder ein Array.

Beispiele:

Office
Servers
Guest
Lab

Regeln:

online == false:
"Segment offline"

risk >= 8:
"Hohes Risiko"

Wenn online == true UND risk < 5:
"Segment stabil"

Gib alle Geräte mit einer
zweiten foreach-Schleife aus.
============================================================
*/


// DEIN CODE:






/*
============================================================
MISSION 11 – SECURITY CENTER

Erstelle folgende Struktur:

SecurityCenter
 -> Systeme
    -> Benutzer

Mindestens:

3 Systeme
jeweils mindestens 3 Benutzer

Jeder Benutzer besitzt:

"username"
"role"
"risk"

Gib aus:

System
Username
Rolle
Risiko

Regeln:

role == "admin" UND risk >= 7:
"Admin-Account mit hohem Risiko"

role == "guest":
"Eingeschränkter Benutzer"

risk <= 2:
"Unauffällig"
============================================================
*/


// DEIN CODE:






/*
============================================================
MISSION 12 – LOGFILES PRO SERVER

Erstelle mindestens 4 Server.

Jeder Server besitzt:

"name"
"logs"

"logs" ist ein Array mit mehreren Einträgen.

Jeder Logeintrag besitzt:

"type"
"user"
"risk"

Mögliche Typen:

login
failed_login
file_access
config_change
logout

Gib alle Logs aus.

Zähle:

- alle Logs
- Logs mit Risk >= 7
- failed_login Einträge
============================================================
*/


// DEIN CODE:






/*
============================================================
MISSION 13 – BENUTZER UND BERECHTIGUNGEN

Erstelle ein mehrdimensionales
assoziatives Array.

Jeder Benutzer besitzt:

"username"
"role"
"permissions"

"permissions" ist ein Array.

Mögliche Berechtigungen:

read
write
delete
manage_users
view_logs

Regeln:

Wenn "manage_users" vorhanden:
"Benutzerverwaltung erlaubt"

Wenn "delete" vorhanden:
"Löschrechte vorhanden"

Wenn mehr als 3 Rechte vorhanden:
"Sehr weitreichende Berechtigungen"

Recherche:

in_array()
count()
============================================================
*/


// DEIN CODE:






/*
============================================================
MISSION 14 – SECURITY INCIDENTS

Erstelle mehrere Incidents.

Jeder Incident besitzt:

"title"
"severity"
"resolved"
"systems"

"systems" ist ein Array
betroffener Systeme.

Regeln:

resolved == true:
"Incident geschlossen"

severity unter 4:
"Niedrig"

4 bis 7:
"Mittel"

8 bis 10:
"Kritisch"

Wenn severity >= 8 UND resolved == false:
"Sofort priorisieren"

Zähle offene Incidents.
============================================================
*/


// DEIN CODE:






/*
============================================================
MISSION 15 – 3D-INFRASTRUKTUR

Erstelle folgende Struktur:

Firma
 -> Standorte
    -> Server
       -> Dienste

Mindestens:

2 Standorte
3 Server pro Standort
2 Dienste pro Server

Gib aus:

Standort
Server
Dienst

Du brauchst mehrere
verschachtelte foreach-Schleifen.
============================================================
*/


// DEIN CODE:






/*
============================================================
MISSION 16 – 3D ASSOZIATIVE SECURITY-DATEN

Struktur:

Firma
 -> Standort
    -> Server
       -> Logs

Jeder Logeintrag besitzt:

"user"
"event"
"risk"

Mindestens:

2 Standorte
2 Server je Standort
3 Logs je Server

Regeln:

risk >= 8:
"Kritischer Logeintrag"

event == "failed_login":
"Fehlgeschlagener Login"

Wenn beides:
"Priorität hoch"

Zähle:

- alle Logs
- kritische Logs
- fehlgeschlagene Logins
============================================================
*/


// DEIN CODE:






/*
============================================================
MISSION 17 – DEVICE-INVENTAR

Erstelle folgende Struktur:

Abteilung
 -> Geräte
    -> Eigenschaften

Jedes Gerät besitzt:

"name"
"type"
"online"
"risk"
"owner"

Mindestens:

3 Abteilungen
3 Geräte pro Abteilung

Regeln:

online == false:
"Gerät offline"

risk >= 7:
"Gerät prüfen"

owner == "":
"Kein Besitzer eingetragen"

Bonus:

Zähle alle Geräte.
============================================================
*/


// DEIN CODE:






/*
============================================================
MISSION 18 – BREAK UND CONTINUE

Erstelle mindestens 8 Accounts.

Jeder Account besitzt:

"username"
"active"
"risk"

Regeln:

Wenn active == false:
Account überspringen.

Benutze:
continue

Wenn username == "EmergencyShutdown":
"Kritischer Systemaccount gefunden"

Danach Schleife beenden.

Benutze:
break

Alle anderen Accounts normal prüfen.
============================================================
*/


// DEIN CODE:






/*
============================================================
MISSION 19 – FOR-SCHLEIFE

Erstelle ein Array mit mindestens 10 Servernamen.

Gehe NICHT mit foreach durch das Array.

Benutze:

for
count()

Ausgabe:

Server 1: ...
Server 2: ...

Bonus:

Gib nur jeden zweiten Server aus.
============================================================
*/


// DEIN CODE:






/*
============================================================
MISSION 20 – WHILE: SYSTEMSTABILISIERUNG

Ein System startet mit:

$risk = 100;

Jede Sicherheitsmaßnahme reduziert Risk um:

11

Benutze while.

Solange risk > 0:
weiter absichern.

Nach jeder Runde:
"Risk: ..."

Wenn risk < 30:
"System wird stabil"

Wenn risk <= 0:
"System abgesichert"

Bonus:
Zähle die Maßnahmen.
============================================================
*/


// DEIN CODE:






/*
============================================================
MISSION 21 – MODULO-CHECK

Erstelle ein Array mit mindestens 12 Zahlen.

Prüfe jede Zahl.

Gerade:
"Gerade ID"

Ungerade:
"Ungerade ID"

Durch 5 teilbar:
"Fünfer-Muster"

Exakt 42:
"Security-Team hat die Antwort gefunden"

Benutze:

%
==
foreach
============================================================
*/


// DEIN CODE:






/*
============================================================
MISSION 22 – ERSTE FUNKTION

Erstelle eine Funktion:

checkRisk($risk)

Regeln:

unter 3:
"low"

3 bis 5:
"medium"

6 bis 8:
"high"

9 oder 10:
"critical"

Die Funktion soll einen Text zurückgeben.

Recherche:

function
Parameter
return

Benutze die Funktion danach
für mehrere Systeme.
============================================================
*/


// DEIN CODE:






/*
============================================================
MISSION 23 – SECURITY SCORE FUNKTION

Erstelle eine Funktion:

calculateSecurityScore($system)

$system ist ein assoziatives Array.

Es besitzt:

"patchLevel"
"firewall"
"failedLogins"

Beispielberechnung:

Score =
patchLevel * 2
+ firewall * 3
- failedLogins * 5

Gib den Score mit return zurück.

Erstelle mindestens 5 Systeme.

Bonus:

Finde den höchsten Score ohne max().
============================================================
*/


// DEIN CODE:






/*
============================================================
MISSION 24 – EVENT-FILTER

Erstelle eine Funktion:

isCriticalEvent($event)

Ein Event besitzt:

"type"
"risk"

Die Funktion gibt true zurück,
wenn risk >= 8.

Sonst false.

Erstelle mindestens 10 Events.

Speichere kritische Events
in einem neuen Array.
============================================================
*/


// DEIN CODE:






/*
============================================================
MISSION 25 – ERSTE KLASSE

Erstelle eine Klasse:

SecurityAnalyst

Eigenschaften:

public $name;
public $experience;
public $incidentsSolved;

Konstruktor:

__construct()

Methode:

introduce()

Ausgabe ungefähr:

"NAME hat X Incidents gelöst."

Erstelle mindestens 4 Analysten.

Speichere alle Objekte in einem Array.

Gehe mit foreach durch das Array.
============================================================
*/


// DEIN CODE:






/*
============================================================
MISSION 26 – ACCOUNT ALS KLASSE

Erstelle eine Klasse:

Account

Eigenschaften:

$username
$role
$risk
$active

Methode:

showStatus()

Regeln:

risk >= 8:
"Hohes Risiko"

active == false:
"Account deaktiviert"

Erstelle mehrere Account-Objekte
und speichere sie in einem Array.
============================================================
*/


// DEIN CODE:






/*
============================================================
MISSION 27 – ANALYSE-METHODE

Erweitere SecurityAnalyst.

Erstelle:

analyzeAccount($account)

Die Methode soll abhängig von Daten
den Risk-Wert verändern.

Beispiel:

Viele Fehlversuche:
Risk erhöhen.

Account deaktiviert:
Risk senken.

Du kannst dafür zusätzliche
Eigenschaften in Account einbauen.
============================================================
*/


// DEIN CODE:






/*
============================================================
MISSION 28 – SECURITY-TEAM

Erstelle mindestens 6 Analysten.

Speichere sie in:

$team

Berechne:

- gesamte Erfahrung
- gesamte gelöste Incidents
- Durchschnitt

Regeln:

Gesamterfahrung > 100:
"Erfahrenes Team"

Gelöste Incidents > 50:
"Sehr produktiv"

Wenn beides:
"Blue-Team-Elite"
============================================================
*/


// DEIN CODE:






/*
============================================================
MISSION 29 – SECURITY CENTER ALS KLASSE

Erstelle eine Klasse:

SecurityCenter

Eigenschaften:

$name
$analysts
$incidents

Beide sollen Arrays sein.

Methoden:

addAnalyst($analyst)
addIncident($incident)
showAnalysts()
showIncidents()

Recherche:

$this->analysts[]
============================================================
*/


// DEIN CODE:






/*
============================================================
MISSION 30 – VERERBUNG

Erstelle:

class ForensicAnalyst extends SecurityAnalyst

Zusätzliche Eigenschaft:

$forensicSkill

Zusätzliche Methode:

analyzeEvidence()

Recherche:

extends
parent::__construct()
protected
============================================================
*/


// DEIN CODE:






/*
============================================================
MISSION 31 – MEHRERE SECURITY-ROLLEN

Erstelle:

class NetworkAnalyst extends SecurityAnalyst
class ForensicAnalyst extends SecurityAnalyst
class IncidentResponder extends SecurityAnalyst

Jede Klasse bekommt eine eigene Methode.

NetworkAnalyst:
checkNetwork()

ForensicAnalyst:
analyzeEvidence()

IncidentResponder:
containIncident()

Erstelle von jeder Klasse
mindestens ein Objekt.
============================================================
*/


// DEIN CODE:






/*
============================================================
MISSION 32 – DIGITALER BEWEIS

Erstelle eine Klasse:

DigitalEvidence

Eigenschaften:

$name
$type
$size
$encrypted
$risk

Methoden:

showInfo()
checkRisk()

Regeln:

encrypted == true:
"Datei verschlüsselt"

risk >= 8:
"Wichtiges Security-Artefakt"

Erstelle mehrere Objekte.
============================================================
*/


// DEIN CODE:






/*
============================================================
MISSION 33 – INFRASTRUKTUR MIT OBJEKTEN

Erstelle mehrere Account-Objekte.

Speichere sie in einem
mehrdimensionalen Array.

Struktur:

Systeme
 -> Systemname
    -> Accounts

Gehe durch alle Systeme.

Rufe für jeden Account
showStatus() auf.

Wenn active == false:
Account überspringen.

Benutze:
continue
============================================================
*/


// DEIN CODE:






/*
============================================================
MISSION 34 – SECURITY DASHBOARD

Erstelle ein mehrdimensionales
assoziatives Array.

Struktur:

Firma
 -> Abteilungen
    -> Systeme
       -> Accounts
       -> Logs

Zähle:

- Abteilungen
- Systeme
- Accounts
- Logs
- kritische Accounts
- kritische Logs

Gib am Ende einen Status aus:

0 bis 2 kritische Einträge:
"STABIL"

3 bis 5:
"AUFMERKSAM BLEIBEN"

mehr als 5:
"SECURITY TEAM BRAUCHT KAFFEE"
============================================================
*/


// DEIN CODE:






/*
============================================================
MISSION 35 – FINAL BOSS
CYBER SECURITY CONTROL CENTER

Jetzt wird alles kombiniert.


TEIL 1 – ACCOUNT-KLASSE

Erstelle Account mit:

$username
$role
$risk
$active
$failedLogins
$permissions

Methoden:

showStatus()
increaseRisk()
decreaseRisk()


------------------------------------------------------------
TEIL 2 – SYSTEM-KLASSE

Erstelle SystemNode mit:

$name
$online
$risk
$accounts
$logs

Methoden:

addAccount()
addLog()
showStatus()
calculateRisk()


------------------------------------------------------------
TEIL 3 – SECURITY ANALYST

Erstelle SecurityAnalyst mit:

$name
$experience
$energy
$incidentsSolved

Methoden:

analyzeSystem()
analyzeAccount()
showStatus()


------------------------------------------------------------
TEIL 4 – INFRASTRUKTUR

Erstelle ein mehrdimensionales
assoziatives Array.

Struktur:

Firma
 -> Standorte
    -> Netzwerke
       -> SystemNode-Objekte

Mindestens:

2 Standorte
2 Netzwerke pro Standort
3 Systeme pro Netzwerk


------------------------------------------------------------
TEIL 5 – LOGS

Jedes System besitzt mehrere Logs.

Ein Log besitzt:

"type"
"user"
"risk"
"processed"

Mögliche Typen:

login
logout
failed_login
config_change
file_access


------------------------------------------------------------
TEIL 6 – RISIKO

Regeln:

risk >= 8:
"Kritisch"

failedLogins >= 5:
"Viele Fehlversuche"

role == "admin" UND risk >= 7:
"Admin-Account genauer prüfen"


------------------------------------------------------------
TEIL 7 – INCIDENTS

Erstelle Incidents.

Jeder Incident besitzt:

"title"
"severity"
"resolved"
"systems"

Wenn severity >= 8 UND resolved == false:
"Incident priorisieren"


------------------------------------------------------------
TEIL 8 – ANALYSTEN-ENERGIE

Jede Analyse kostet Energie.

Zum Beispiel:

$analyst->energy -= 10;

Wenn Energie <= 20:
"Kaffee empfohlen"

Wenn Energie <= 0:
"Analyst braucht Pause"


------------------------------------------------------------
TEIL 9 – BREAK UND CONTINUE

Benutze beide sinnvoll.

Beispiele:

Deaktivierter Account:
continue

System komplett offline:
break


------------------------------------------------------------
TEIL 10 – OPERATOR-CHECKLISTE

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
TEIL 11 – ARRAY-CHECKLISTE

Verwende:

- normales Array
- mehrdimensionales Array
- assoziatives Array
- mehrdimensionales assoziatives Array
- Array mit Objekten
- Array in einem Objekt
- Objekte in verschachtelten Arrays


------------------------------------------------------------
TEIL 12 – SCHLEIFEN

Verwende:

foreach
for
while
break
continue


------------------------------------------------------------
TEIL 13 – FUNKTIONEN

Erstelle mindestens 3 eigene Funktionen.

Beispiele:

calculateRisk()
isCritical()
checkPermissions()
calculateSecurityScore()


------------------------------------------------------------
TEIL 14 – OOP

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
TEIL 15 – ABSCHLUSSSTATISTIK

Am Ende soll ungefähr erscheinen:

====================================
CYBER SECURITY CONTROL CENTER
====================================

Standorte: ...
Netzwerke: ...
Systeme: ...
Accounts: ...
Logs: ...
Kritische Accounts: ...
Kritische Logs: ...
Offene Incidents: ...

Risk Score: ...

Status:

STABIL
ERHÖHT
KRITISCH
ODER
KEVIN HAT PROD-ZUGRIFF

====================================
*/


// DEIN FINAL-BOSS-CODE:














/*
============================================================
SECRET MISSION – SECURITY OPERATIONS CENTER

Baue folgende Struktur:

Organisation
 -> Standorte
    -> Abteilungen
       -> Netzwerke
          -> Systeme
             -> Accounts
             -> Logs
             -> Incidents

Jeder Account besitzt:

"username"
"role"
"active"
"risk"
"permissions"

Jeder Logeintrag besitzt:

"type"
"user"
"risk"
"processed"

Jeder Incident besitzt:

"title"
"severity"
"resolved"

Mindestens:

2 Standorte
2 Abteilungen pro Standort
2 Netzwerke pro Abteilung
2 Systeme pro Netzwerk

Zähle:

- Standorte
- Abteilungen
- Netzwerke
- Systeme
- Accounts
- Logs
- Incidents
- kritische Accounts
- kritische Logs
- offene Incidents

Finde zusätzlich:

- System mit höchstem Risk
- Netzwerk mit den meisten kritischen Logs
- Account mit höchstem Risk
- Abteilung mit den meisten Incidents

Wenn du hier noch weißt,
welche foreach-Schleife gerade läuft,
hast du verschachtelte Datenstrukturen verstanden.
============================================================
*/


// DEIN CODE:






/*
============================================================
ULTRA SECRET MISSION – DER VERDÄCHTIGE LOG-EINTRAG

In einem Unternehmen tauchen ungewöhnliche Aktivitäten auf.

Erstelle Daten für:

- Benutzer
- Systeme
- Logs
- Rollen
- Berechtigungen

Jeder Benutzer besitzt:

"username"
"role"
"failedLogins"
"risk"
"active"

Jedes System besitzt:

"name"
"online"
"risk"

Jeder Logeintrag besitzt:

"user"
"system"
"type"
"risk"

Aufgabe:

Erstelle eine Auswertung.

Beispiele:

Wenn viele Fehlversuche auftreten:
Risk erhöhen.

Wenn ein Account deaktiviert ist:
überspringen.

Wenn ein Admin-Account sehr hohes Risk besitzt:
priorisieren.

Wenn mehrere kritische Logs
zum gleichen System gehören:
System-Risk erhöhen.

Sortiere am Ende Accounts
nach Risk.

Recherche:

usort()

Bonus:

Erstelle aus Accounts,
Systemen und Incidents eigene Klassen.

Noch mehr Bonus:

Baue ein kleines Security-Dashboard,
das nur Daten analysiert und bewertet.

Keine echten Angriffe durchführen.
Das Ziel ist Datenverarbeitung,
Logik und objektorientiertes PHP.
============================================================
*/


// DEIN CODE: