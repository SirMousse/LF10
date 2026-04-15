<?php

// Klassen

// Die Klasse ist der Bauplan!
// Das ist Objekt ist das konkrete Exemplar.

/* Beipiel:

Klasse:

Name:________________
Art:_________________
Alter:_______________
Vermittelt:__________

Objekt:

Name: Bello
Art: Hund
Alter: 3
Vermittelt: nein

Objekt ist ein konkretes Ding, das nach einem Bauplan erstellt wurde.
Bsp.: Objekt: Bello

Attribut ist die Eigenschaft eines Objekts. Also alle Information, die in diesem Objekt gespeichert sind.
Bello Beispiel:
- Namen         )
- Art           }    -> Das sind Attribute
- Alter         )
- Vermittelt    )

Die Werte dieser Attribute:
Name: Bello
Art: Hund
Alter: 3
Vermittelt: nein

Objekte = die Sache selbst
Attribut = Information
*/

class Tier{                 // class = ist ein festes PHP-Wort -> benutzen um eine Klasse zu definieren || Tier = ist der Name meiner Klasse
    // Proberties - Eigenschaften
    public string $name;
    public string $art;
    public int $alter;
    public bool $vermittelt = false;

    // Konstruktor
    public function __construct(string $name, string $art, int $alter) {    
        $this->name = $name;        // $this->name = 'Bello';
        $this->art = $art;          // $this->art = 'Hund';
        $this->alter = $alter;      // $this->alter = 3;
    }

    // function = sagt jetzt kommt eine Funktion bzw. Methode. 
    // __construct = besonderer Methodenname und sagt diese Methode wird automatisch ausgeführt, wenn ein neues Objekt erstellt wird
    // (string $name, string $art, int $alter) = das sind Eingaben (Felder, die beim erstellen Ausgefüllt werde müssen)
    // -> = Obejektoperator = greife auf etwas zu, das zu diesem Objekt gehört
    // => = Arrays = gehört immer zusammen zum Key -> Value (Schlüssel -> Wert)
    // $this = bedeutet das aktuelle Objekt selbst, was gerade bearbeitet wird bzw. erstellt wird
    // $this->alter = Die Property des Objekts (Objekt in dem der Wert gespeichert werden soll)
    // $alter = das Parameter, was ausgefüllt wird (der Wert der eingefügt wird)

    // Methode vorstellen
    public function vorstellen(): string {
        return "Hallo, ich bin {$this->name}, ein/e {$this->alter} Jahre alte/r {$this->art}.\n";
    }
    // public = Methode darf auch von außen aufgerufen werden
    // function vorstellen() = das ist der Name der Methode
    // : string = bedeutet die Methode gibt Text zurück
    // {} = Innerhalb den geschweiften Klammern steht, was die Methode tun soll
    // return = gibt ein Ergebnis zurück (in unserem Fall einen Text)

    // Methode vermittlen
    public function vermittelt(): void{
        $this->vermittelt = true;
    }
    // :void = bedeutet, diese Methode gibt es nicht. Also keinen Text, keine Zahlen, NADA! Sie soll nur etwas verändern.
    // -> Warum machen wir das? Weil die Methode nur die Funktion hat etwas zu verändern, jedoch soll sie uns keinen Wert zurückliefern.

    // Methode vermittlungs Status
    public function vermittlungsStatus(): string{
        return $this->vermittelt                       
            ? "Ja, ich wurde vermittelt." : "Nein, ich suche noch ein Zuhause.";
    }
    // ternäre Operator ? :
    // das ist eine Kurzform von if/else
    // -> wenn die erste Aussage wahr ist -> dann bist du vermittelt
    // -> Aussage ist falsch -> dub bist nicht vermittelt
    
    /* Ausgeschrieben als If/else
    if ($this->vermittelt) {
        return "Ja, ich wurde vermittelt";
    } else {
        return "Nein, ich suche noch ein Zuhause.";
    }

    */
}

// Erstellen jetzt das Objekt
$bello = new Tier('Bello', 'Hund', 3);
// $bello = das ist die Variable wo wir das fertige Objekt drin speichern
// new = ist das Schlüsselwort zum erstellen eines neuen Objektes
// Tier = Ist die Klasse, also unser Bauplan
// ('Bello', 'Hund', 3) = sind die Werte die wir dem Konstruktor übergeben

$whisky = new Tier('Whisky', 'Katze', 5);

$spedy = new Tier('Spedy', 'Landschildkröte', 56);

// Methode aufrufen
echo $bello->vorstellen();     // $bello->vorstellen() = bedeutet führe die Methode vorstellen() beim Objekt $bello aus

// Ausgabe vor Vermittlung
echo $spedy->vorstellen();
echo $spedy->vermittlungsStatus() . "\n";

// Spedy wird vermittelt
$spedy->vermittelt();

// Ausgabe nach der Vermittlung
echo $spedy->vermittlungsStatus();


