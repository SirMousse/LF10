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
    'klasse' => '',
    'level' => '',
    'waffe' => '',
    'email' => '',
    'motivation' => '',
    'regeln' => ''
];


// 3. Formular prüfen

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $values['name'] = trim($_POST['name'] ?? '');
    $values['klasse'] = trim($_POST['klasse'] ?? '');
    $values['level'] = trim($_POST['level'] ?? '');
    $values['waffe'] = trim($_POST['waffe'] ?? '');
    $values['email'] = trim($_POST['email'] ?? '');
    $values['motivation'] = trim($_POST['motivation'] ?? '');
    $values['regeln'] = isset($_POST['regeln']) ? 1 : 0;

    // Validierung
    if ($values['name'] === '') {
        $errors[] = "Bitte den Namen des Abenteurers eingeben.";
    }

    if ($values['klasse'] === '') {
        $errors[] = "Bitte eine Klasse auswählen.";
    }

    if ($values['level'] !== '' && !ctype_digit($values['level'])) {
        $errors[] = "Das Level darf nur aus Zahlen bestehen.";
    }

    if ($values['level'] !== '' && ((int)$values['level'] < 1 || (int)$values['level'] > 100)) {
        $errors[] = "Das Level muss zwischen 1 und 100 liegen.";
    }

    if ($values['email'] === '' || !filter_var($values['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Bitte eine gültige E-Mail-Adresse eingeben.";
    }

    if (!$values['regeln']) {
        $errors[] = "Bitte akzeptiere die Regeln der Gilde.";
    }

    // Speichern, wenn keine Fehler vorhanden sind
    if (empty($errors)) {
        $stmt = $pdo->prepare("
            INSERT INTO gilde (name, klasse, level, waffe, email, motivation, regeln)
            VALUES (:name, :klasse, :level, :waffe, :email, :motivation, :regeln)
        ");

        $stmt->execute([
            ':name' => $values['name'],
            ':klasse' => $values['klasse'],
            ':level' => $values['level'] !== '' ? (int)$values['level'] : null,
            ':waffe' => $values['waffe'],
            ':email' => $values['email'],
            ':motivation' => $values['motivation'],
            ':regeln' => $values['regeln']
        ]);

        $success = true;

        // Formular zurücksetzen
        $values = [
            'name' => '',
            'klasse' => '',
            'level' => '',
            'waffe' => '',
            'email' => '',
            'motivation' => '',
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
    <title>Abenteurergilde Registrierung</title>
</head>
<body>

    <header>
        <h1>Abenteurergilde</h1>
        <p>Werde Teil unserer legendären Gemeinschaft!</p>
    </header>

    <nav>
        <ul>
            <li><a href="#">Start</a></li>
            <li><a href="#">Quests</a></li>
            <li><a href="#">Mitglieder</a></li>
            <li><a href="#">Kontakt</a></li>
        </ul>
    </nav>

    <main>
        <section>
            <h2>Registrierung als Abenteurer</h2>
            <p>Fülle das Formular aus, um dich der Gilde anzuschließen.</p>

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
                    <label for="name">Name des Abenteurers:</label><br>
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
                    <label for="klasse">Klasse:</label><br>
                    <select id="klasse" name="klasse" required>
                        <option value="">Bitte auswählen</option>
                        <option value="krieger" <?php echo $values['klasse'] === 'krieger' ? 'selected' : ''; ?>>Krieger</option>
                        <option value="magier" <?php echo $values['klasse'] === 'magier' ? 'selected' : ''; ?>>Magier</option>
                        <option value="schurke" <?php echo $values['klasse'] === 'schurke' ? 'selected' : ''; ?>>Schurke</option>
                        <option value="heiler" <?php echo $values['klasse'] === 'heiler' ? 'selected' : ''; ?>>Heiler</option>
                    </select>
                </div>

                <br>

                <div>
                    <label for="level">Level:</label><br>
                    <input
                        type="number"
                        id="level"
                        name="level"
                        min="1"
                        max="100"
                        value="<?php echo old($values['level']); ?>"
                    >
                </div>

                <br>

                <div>
                    <label for="waffe">Bevorzugte Waffe:</label><br>
                    <input
                        type="text"
                        id="waffe"
                        name="waffe"
                        value="<?php echo old($values['waffe']); ?>"
                    >
                </div>

                <br>

                <div>
                    <label for="email">Kontakt (Magische Verbindung):</label><br>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        required
                        value="<?php echo old($values['email']); ?>"
                    >
                </div>

                <br>

                <div>
                    <label for="motivation">Warum möchtest du der Gilde beitreten?</label><br>
                    <textarea
                        id="motivation"
                        name="motivation"
                        rows="5"
                        cols="30"
                    ><?php echo old($values['motivation']); ?></textarea>
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
                    <label for="regeln">Ich akzeptiere die Regeln der Gilde.</label>
                </div>

                <br>

                <button type="submit">Der Gilde beitreten</button>

            </form>
        </section>

        <aside>
            <h3>Hinweise</h3>
            <p>Nur mutige Abenteurer werden aufgenommen.</p>
            <p>Level 1 ist ausreichend – Mut zählt mehr als Stärke!</p>
        </aside>
    </main>

    <footer>
        <p>&copy; 2026 Abenteurergilde</p>
    </footer>

</body>
</html>