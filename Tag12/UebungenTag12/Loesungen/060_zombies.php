<?php

// 1. Datenbankverbindung


$host = "localhost";
$dbname = "uebungen_db";
$user = "root";
$password = "";

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $user,
        $password
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Datenbankverbindung fehlgeschlagen: " . $e->getMessage());
}


// 2. Variablen vorbereiten


$errors = [];
$success = false;

$values = [
    'name' => '',
    'art' => '',
    'kontakt' => '',
    'sprache' => '',
    'thema' => '',
    'regeln' => ''
];


// 3. Formular prüfen


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $values['name'] = trim($_POST['name'] ?? '');
    $values['art'] = trim($_POST['art'] ?? '');
    $values['kontakt'] = trim($_POST['kontakt'] ?? '');
    $values['sprache'] = trim($_POST['sprache'] ?? '');
    $values['thema'] = trim($_POST['thema'] ?? '');
    $values['regeln'] = isset($_POST['regeln']) ? 1 : 0;

    // Validierung
    if ($values['name'] === '') {
        $errors[] = "Bitte einen Namen eingeben.";
    }

    if ($values['art'] === '') {
        $errors[] = "Bitte auswählen, ob du Mensch, Zombie oder Halb-Zombie bist.";
    }

    if ($values['sprache'] === '') {
        $errors[] = "Bitte eine Kommunikationsform auswählen.";
    }

    if (!$values['regeln']) {
        $errors[] = "Bitte bestätige, dass du keine Teilnehmer isst.";
    }

    // Speichern, wenn keine Fehler vorhanden sind
    if (empty($errors)) {
        $stmt = $pdo->prepare("
            INSERT INTO zombie (name, art, kontakt, sprache, thema, regeln)
            VALUES (:name, :art, :kontakt, :sprache, :thema, :regeln)
        ");

        $stmt->execute([
            ':name' => $values['name'],
            ':art' => $values['art'],
            ':kontakt' => $values['kontakt'],
            ':sprache' => $values['sprache'],
            ':thema' => $values['thema'],
            ':regeln' => $values['regeln']
        ]);

        $success = true;

        // Formular zurücksetzen
        $values = [
            'name' => '',
            'art' => '',
            'kontakt' => '',
            'sprache' => '',
            'thema' => '',
            'regeln' => ''
        ];
    }
}


// 4. Hilfsfunktion

function old($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zombie-Konferenz Anmeldung</title>
</head>
<body>

    <header>
        <h1>🧟 Internationale Zombie-Konferenz 2026</h1>
        <p>Für ein besseres Verständnis zwischen Zombies und Menschen</p>
    </header>

    <nav>
        <ul>
            <li><a href="#">Start</a></li>
            <li><a href="#">Programm</a></li>
            <li><a href="#">Teilnahme</a></li>
            <li><a href="#">Kontakt</a></li>
        </ul>
    </nav>

    <main>
        <section>
            <h2>Anmeldung zur Konferenz</h2>
            <p>Bitte gib deine Daten an – egal ob Mensch oder Zombie.</p>

            <?php if ($success): ?>
                <section>
                    <h2>Erfolg</h2>
                    <p>Deine Anmeldung wurde erfolgreich in der Datenbank gespeichert.</p>
                </section>
            <?php endif; ?>

            <?php if (!empty($errors)): ?>
                <section>
                    <h2>Bitte korrigieren:</h2>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </section>
            <?php endif; ?>

            <form action="" method="post">

                <div>
                    <label for="name">Name / ehemaliger Name:</label><br>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        required
                        value="<?php echo old($values['name']); ?>"
                    >
                </div>

                <br>

                <div>
                    <label for="art">Ich bin ein:</label><br>
                    <select id="art" name="art" required>
                        <option value="">Bitte auswählen</option>
                        <option value="mensch" <?php echo $values['art'] === 'mensch' ? 'selected' : ''; ?>>Mensch</option>
                        <option value="zombie" <?php echo $values['art'] === 'zombie' ? 'selected' : ''; ?>>Zombie</option>
                        <option value="halb" <?php echo $values['art'] === 'halb' ? 'selected' : ''; ?>>Halb-Zombie</option>
                    </select>
                </div>

                <br>

                <div>
                    <label for="kontakt">Kontaktmöglichkeit:</label><br>
                    <input
                        type="text"
                        id="kontakt"
                        name="kontakt"
                        placeholder="E-Mail oder Rauchsignal"
                        value="<?php echo old($values['kontakt']); ?>"
                    >
                </div>

                <br>

                <div>
                    <label for="sprache">Bevorzugte Kommunikationsform:</label><br>
                    <select id="sprache" name="sprache" required>
                        <option value="">Bitte auswählen</option>
                        <option value="sprache" <?php echo $values['sprache'] === 'sprache' ? 'selected' : ''; ?>>Sprache</option>
                        <option value="grunzen" <?php echo $values['sprache'] === 'grunzen' ? 'selected' : ''; ?>>Grunzen</option>
                        <option value="telepathie" <?php echo $values['sprache'] === 'telepathie' ? 'selected' : ''; ?>>Telepathie</option>
                    </select>
                </div>

                <br>

                <div>
                    <label for="thema">Themenvorschlag:</label><br>
                    <textarea
                        id="thema"
                        name="thema"
                        rows="4"
                        cols="30"
                    ><?php echo old($values['thema']); ?></textarea>
                </div>

                <br>

                <div>
                    <input
                        type="checkbox"
                        id="regeln"
                        name="regeln"
                        required
                        <?php echo $values['regeln'] ? 'checked' : ''; ?>
                    >
                    <label for="regeln">Ich verspreche, keine Teilnehmer zu essen.</label>
                </div>

                <br>

                <button type="submit">Zur Konferenz anmelden</button>

            </form>
        </section>

        <aside>
            <h3>Hinweis</h3>
            <p>Gehirne werden vor Ort NICHT serviert.</p>
            <p>Respektvolles Verhalten ist Pflicht.</p>
        </aside>
    </main>

    <footer>
        <p>&copy; 2026 Zombie-Mensch Verständigungsrat</p>
    </footer>

</body>
</html>