<?php
// 1. Indizierte Arrays (Numerische Arrays)
// -> hier werden die Elemente über Zahlen angesprochen

// Aussehen intern für PHP/ Computer:
$entwickler = [
    0 => "Frontend-Fee",
    1 => "Backend-Berserker",
    2 => "StackOverflow-Magier",
    3 => "Azubi mit Adminrechten"
];

// Ausgabe aufrufen
echo $entwickler[0];    // Frontend-Fee         | [0] = der Index

echo "\n";

// MERKE: Indizierte Arrays = Liste von Dingen

##############################################################################

// 2. Automatische Indizes
// -> PHP vergibt automatisch den nächsten freien Index

$entwickler[] = "Senior Entwickler";

echo $entwickler[0];
echo $entwickler[1];
echo $entwickler[2];
echo $entwickler[3];
echo $entwickler[4];

print_r($entwickler);   // print_r = Ausgabe soll readable (lesbar)
                        // -> Php, zeig mir dieses Ding bitte halbwegs menschenlesbar!

var_dump($entwickler);  // Datentyp + Länge vom String + Anzahl der Elemente + Schlüssel + Werte

/* Wann benutzt man was?

echo        =>  wenn wir konkrete Werte ausgeben sollen

print_r     =>  wenn wir schnell den Inhalt eines Arrays anschauen wollen

var_dump()  =>  wenn etwas nicht funktioniert und wir wissen wollen warum
*/

################################################################################

// 3. Assoziative Arrays
// -> hier besteht der Schlüssel aus einem Namen statt einer Zahl

$entwickler = [
    "name" => "Kevin",
    "alter" => 24,
    "lieblingssprache" => "PHP",
    "kaffeeHeute" => 17
];

// Möchte den Namen ausgeben
echo $entwickler["name"]."\n";

// Möchten den Kaffeekonsum ausgeben
echo $entwickler["kaffeeHeute"]."\n";


###############################################################################

// 4. foreach - Arrays durchlaufen

// Einfache Variante
$sprachen = [
    "PHP", 
    "Java", 
    "JavaScript", 
    "R", 
    "C#"
];

foreach ($sprachen as $sprache){
    echo "$sprache\n";
}

// Schlüssel UND Wert mit foreach

$entwickler = [
    "name" => "Kevin",
    "alter" => 24,
    "lieblingssprache" => "PHP",
    "kaffeeHeute" => 17
];

foreach ($entwickler as $schluessel => $wert) {     // $schluessel => $wert = Namen frei wählbar!!!
    echo "$schluessel: $wert\n";
}
##############################################################################

// 5. Mehrdimensionale Arrays
// -> Arrays können in anderen Arrays drin stehen

$teams = [
    ["Frontend-Fee", "CSS-Zauberer"],
    ["Backend-Berserker", "SQL-Magier"],
    ["DevOps", "Typ der weiß warum Docker nicht startet"]
];

echo $teams[1][0]."\n";      // Ergebnis: Backend-Berserker
// 1. []  => gibt das Array an, welches wir Ansprechen wollen
// 2. []  => gibt den Wert im Array an, den wir haben möchten

#############################################################################

// 6. Verschachtelte foreach-Schleife
// -> wenn wir ein Array im Array haben, brauchen wir häufig auch eine Schleife in einer Schleife um das ganze auszulesen

$teams = [
    ["Frontend-Fee", "CSS-Zauberer"],
    ["Backend-Berserker", "SQL-Magier"],
    ["DevOps", "Typ der weiß warum Docker nicht startet"]
];

// Äußere Schleife = nimmt jedes Team
foreach ($teams as $team){
    // Innere Schleife = nimm jedes Teammitgleid aus diesen Team
    foreach($team as $mitglied){
        echo "$mitglied\n";
    }
}

// Mit Nummerierung

$nummer = 1;

foreach ($teams as $team){
    echo "Kellerraum $nummer:\n";

    foreach($team as $mitglied){
        echo "- $mitglied\n";
    }

    $nummer++;
}

###############################################################################

// 7. Mehrdimensionale assoziative Arrays

// Kombination aus zwei Ideen:
// 1. Äußere Array = eine Liste von Personen
// 2. Jede Person ist: ein Datensatz mit Eigenschaften
$personen =[
    [
        "name" => "Kevin",
        "alter" => 24,
        "rolle" => "Junior Developer"
    ],
    [
        "name" => "Lisa",
        "alter" => 31,
        "rolle" => "Senior Developer"
    ],
    [
        "name" => "Max",
        "alter" => 42,
        "rolle" => "Der Typ, der das Legacy-System versteht"
    ]
];

// Auf einzelne Datensätze zugreifen
echo $personen[2]["name"];  // Max

echo "\n";

echo $personen[2]["rolle"]; // Der Typ, der das Legacy-System versteht

echo "\n";

// Werte auch verändern
$personen[0]["rolle"] = "Senior Developer";

echo $personen[0]["rolle"]; // Senior Developer
?>
