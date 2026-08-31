<?php
// 1. Einfachen if-else

// Strengen Vergleich
$klasse = "Magier";

if ($klasse === "Magier"){
    echo "Der Wächter lässt dich zur Magierakademie durch!\n";
} else {
    echo "Der Wächetr sagt: Keine Robo, kein Zauberstab, kein Eintritt!\n";
}

// losen Vergleich
$tier = "Hund";

if ($tier == "Hund") {
    echo "Das Tier bellt!\n";
} else {
    echo "Das Tier macht ein anderes Geräusch!\n";
}

// if - elseif - else

$klasse = "Nekromant";

if ($klasse === "Krieger") {
    echo "Du bekommst ein Schwert. Bitte nicht ablecken!\n";
} elseif ($klasse === "Magier") {
    echo "Du bekommst einen Zauberstab. Bitte nicht das Auge ausstechen damit!\n";
} elseif ($klasse === "Nekromant") {
    echo "Du bekommst ein Skelett. Es heißt Günther!\n";
} else {
    echo "Unbekannte Klasse. Vermutlich ein wilder Barde.\n";
}

// Vergleichsoperatoren mit if...else

$level = 37;

if ($level >= 50) {
    echo "Du darfst gegen den Drachen kämpfen!\n";
} elseif ($level >= 20) {
    echo "Vielleicht erstmal ein paar Goblins verkloppen!\n";
} else {
    echo "Zurück ins Tutorial mit dir!\n";
}

// Fehler = und === sind nicht dasselbe!

$monster = "Goblin";

if ($monster = "Drache") {
    echo "Drache!\n";
}

// = -> Zuweisung ("Du bist jetzt ein Drache!")

// === -> Vergleich ("Bist du ein Drache?")


// Mehrere Bedingungen
// mit && (UND)

$level = 42;
$hatSchwert = true;
$hatQuest = true;

if ($level >= 30 && $hatSchwert && $hatQuest) {
    echo "Das Drachentor öffnet sich!\n";
} else {
    echo "Du bist der Quest noch nicht würdig!\n";
}

// mit || (ODER)

$klasse = "Dieb";

if ($klasse === "Dieb" || $klasse === "Assassine") {
    echo "Du kannst das Schloss knacken!\n";
} else {
    echo "Du trittst gegen die Tür. Die Tür gewinnt!!!!\n";
}

// mit ! (NICHT) -> Umkehrzauber

$istVerflucht = false;

if (!$istVerflucht) {
    echo "Du kannst das Schwert gefahrlos hochheben!\n";
} else {
    echo "Das Schwert flüsstert deinen Namen. Lass es lieber liegen oder du endest wie Gollum.\n";
}

// UND, ODER und NICHT kombinieren

$klasse = "Magier";
$level = 27;
$istVerflucht = false;

if (($klasse === "Magier" || $klasse === "Hexenmeister") && $level >= 20 && !$istVerflucht) {
    echo "Das magische Tor öffnet sich!\n";
} else {
    echo "Das Tor bleibt verschlossen und lacht dich aus!\n";
}

// Verschachtelten ifs

$hatSchluessel = true;
$level = 35;
$dracheSchlaeft = true;

if ($hatSchluessel){
    echo "Du öffnest das Dungeontor...\n";
    if ($level >= 30) {
        echo "Du betrittst die Drachenhöhle...\n";
        if ($dracheSchlaeft) {
            echo "Der Drache schläft. LOOT-Zeit!!!!\n";
        } else {
            echo "Der Drache ist wach. Das war eine kurze Quest!\n";
        }
    }else {
        echo "Eine mystische Stimme sagt: 'Haha, du bist zu schwach!'\n";
    }
} else {
    echo "Du brauchst den Schlüssel, frag doch mal Günther!\n";
}
?>