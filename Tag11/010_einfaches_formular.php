<?php
// 1. Verbindung zur Datenbank herstellen
$verbindung = mysqli_connect("localhost", "root", "", "gfn");


// 2. Prüfen, ob die Verbindung funktioniert
if (!$verbindung){
    die("Verbindung fehlgeschlagen: " . mysqli_connect_error());
}

// 3. Zeichensatz festlegen
mysqli_set_charset($verbindung, "utf8mb4");

// 4. Prüfen, ob das Formular auch abgeschickt wurde
if ($_SERVER["REQUEST_METHOD"] === "POST"){

    $vorname = $_POST["vorname"] ?? "";
    $nachname = $_POST["nachname"] ?? "";

    // Leerzeichen zu entfernen
    $vorname = trim($vorname);
    $nachname = trim($nachname);

    // 5. Nur speichern, wenn beide Felder ausgefüllt wurden
    if ($vorname !== "" && $nachname !== ""){

        // SQL Befehl vorbereitet werden
        $sql = "INSERT INTO personen (vorname, nachname) VALUES (?, ?)";

        $stmt = mysqli_prepare($verbindung, $sql);
        // Prepared Statement = ? werden anschließend mit den tatsächlichen Daten ersetzt. Wichtig zum verhindern von SQL-Injections


        // Werte einsetzen
        mysqli_stmt_bind_param(
            $stmt,
            "ss",
            $vorname,
            $nachname
        );

        // 6. SQL Befehl ausgeführt werden
        mysqli_stmt_execute($stmt);

        mysqli_stmt_close($stmt);
    }

}

// 7. Daten aus der Tabelle holen
$ausgabe = mysqli_query($verbindung, "SELECT * FROM personen ORDER BY id");
?>


<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP mit SQL Verbinden</title>
    </head>

    <body>
        <h1>Personen speichern</h1>

        <form action="./010_einfaches_formular.php" method="post">

            <label for="vorname">Vorname:</label><br>
            <input type="text" name="vorname" id="vorname">

            <br>
            <br>

            <label for="nachname">Nachname:</label><br>
            <input type="text" name="nachname" id="nachname">

            <br>
            <br>

            <button type="submit">Speichern</button>
        </form>

        <hr>

        <h2>Gespeicherte Personen</h2>

        <?php

        while ($zeile = mysqli_fetch_assoc($ausgabe)) {
            echo $zeile["id"] . ": ";

            echo htmlspecialchars($zeile["vorname"]) . " ";

            echo htmlspecialchars($zeile["nachname"]) . "<br>";
        }


        ?>
    </body>
</html>