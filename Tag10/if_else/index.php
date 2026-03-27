<?php

// If-Else

$tier = "Hund";

if ($tier == "Hund"){
    echo "Das Tier bellt.\n";
} else {
    echo " Das Tier macht ein anderes Geräuch.\n";
}

// If - Elseif - Else

$tier = "Katze";

if ($tier == "Hund"){
    echo "Das Tier bellt.\n";
} elseif ($tier == "Katze") {
    echo "Das Tier miaut.\n";
} else {
    echo " Das Tier macht ein anderes Geräuch.\n";
}

// If - Elseif - Else mit Vergleichsoperatoren

$tiergewicht = 800;

if ($tiergewicht > 900) {
    echo "Die Kuh braucht eine Diät!\n";
} elseif ($tiergewicht >= 500) {
    echo "Die Kuh hat Normalgewicht!\n";
} else {
    echo "Bitte fütter die Kuh!!!!!!\n";
}


if ($tiergewicht > 800) {
    echo "Die Kuh braucht eine Diät!\n";
} elseif ($tiergewicht >= 500 && $tiergewicht <= 800) {
    echo "Die Kuh hat Normalgewicht!\n";
} else {
    echo "Bitte fütter die Kuh!!!!!!\n";
}

// Mehrere Bedingungen gleichzeitig

$tier = "Hund";
$alter = 3;

// UND -> &&
if ($tier == "HUnd" && $alter <3) {
    echo "Das ist ein junger HUnd!\n";
} else{
    echo "Der Hund ist etwas älter.\n";
}

// ODER -> ||
if ($tier == "Hund" || $tier == "Katze") {
    echo "Das ist ein Haustier!\n";
} else {
    echo "Das ist wahrscheinlich ein Wildtier!\n";
}

// Verschachtelte Ifs (Nested ifs)
if($tier == "Hund") {
    if ($alter >= 3) {
        echo " Das ist ein Erwachsener Hund!\n";
    } else {
        echo "Es ist ein Welpe!\n";
    }
} else {
    echo "Brauchst du eine Brille!\n";
}

?>