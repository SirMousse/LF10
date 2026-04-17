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
    'nickname' => '',
    'teamname' => '',
    'email' => '',
    'erfahrung' => '',
    'bereich' => '',
    'motivation' => '',
    'regeln' => ''
];


// 3. Formular prüfen

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $values['nickname'] = trim($_POST['nickname'] ?? '');
    $values['teamname'] = trim($_POST['teamname'] ?? '');
    $values['email'] = trim($_POST['email'] ?? '');
    $values['erfahrung'] = trim($_POST['erfahrung'] ?? '');
    $values['bereich'] = trim($_POST['bereich'] ?? '');
    $values['motivation'] = trim($_POST['motivation'] ?? '');
    $values['regeln'] = isset($_POST['regeln']) ? 1 : 0;

    // Validierung
    if ($values['nickname'] === '') {
        $errors[] = "Bitte einen Nickname eingeben.";
    }

    if ($values['email'] === '' || !filter_var($values['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Bitte eine gültige E-Mail-Adresse eingeben.";
    }

    if ($values['erfahrung'] === '') {
        $errors[] = "Bitte ein Erfahrungslevel auswählen.";
    }

    if ($values['bereich'] === '') {
        $errors[] = "Bitte einen Lieblingsbereich auswählen.";
    }

    if (!$values['regeln']) {
        $errors[] = "Bitte akzeptiere die Teilnahmebedingungen.";
    }

    // Speichern, wenn keine Fehler vorhanden sind
    if (empty($errors)) {
        $stmt = $pdo->prepare("
            INSERT INTO hacker (nickname, teamname, email, erfahrung, bereich, motivation, regeln)
            VALUES (:nickname, :teamname, :email, :erfahrung, :bereich, :motivation, :regeln)
        ");

        $stmt->execute([
            ':nickname' => $values['nickname'],
            ':teamname' => $values['teamname'],
            ':email' => $values['email'],
            ':erfahrung' => $values['erfahrung'],
            ':bereich' => $values['bereich'],
            ':motivation' => $values['motivation'],
            ':regeln' => $values['regeln']
        ]);

        $success = true;

        // Formular zurücksetzen
        $values = [
            'nickname' => '',
            'teamname' => '',
            'email' => '',
            'erfahrung' => '',
            'bereich' => '',
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
    <title>Hackerwettbewerb Anmeldung</title>
</head>
<body>

    <header>
        <h1>Cyber Challenge 2026</h1>
        <p>Anmeldung zum Hackerwettbewerb</p>
    </header>

    <nav>
        <ul>
            <li><a href="#">Startseite</a></li>
            <li><a href="#">Regeln</a></li>
            <li><a href="#">Teams</a></li>
            <li><a href="#">Kontakt</a></li>
        </ul>
    </nav>

    <main>
        <section>
            <h2>Teilnahmeformular</h2>
            <p>Registriere dich hier für den nächsten Hackerwettbewerb.</p>

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
                    <label for="nickname">Nickname:</label><br>
                    <input
                        type="text"
                        id="nickname"
                        name="nickname"
                        required
                        value="<?php echo old($values['nickname']); ?>"
                    >
                </div>

                <br>

                <div>
                    <label for="teamname">Teamname:</label><br>
                    <input
                        type="text"
                        id="teamname"
                        name="teamname"
                        value="<?php echo old($values['teamname']); ?>"
                    >
                </div>

                <br>

                <div>
                    <label for="email">E-Mail-Adresse:</label><br>
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
                    <label for="erfahrung">Erfahrungslevel:</label><br>
                    <select id="erfahrung" name="erfahrung" required>
                        <option value="">Bitte auswählen</option>
                        <option value="anfaenger" <?php echo $values['erfahrung'] === 'anfaenger' ? 'selected' : ''; ?>>Anfänger</option>
                        <option value="fortgeschritten" <?php echo $values['erfahrung'] === 'fortgeschritten' ? 'selected' : ''; ?>>Fortgeschritten</option>
                        <option value="profi" <?php echo $values['erfahrung'] === 'profi' ? 'selected' : ''; ?>>Profi</option>
                    </select>
                </div>

                <br>

                <div>
                    <label for="bereich">Lieblingsbereich:</label><br>
                    <select id="bereich" name="bereich" required>
                        <option value="">Bitte auswählen</option>
                        <option value="web" <?php echo $values['bereich'] === 'web' ? 'selected' : ''; ?>>Web Security</option>
                        <option value="crypto" <?php echo $values['bereich'] === 'crypto' ? 'selected' : ''; ?>>Kryptografie</option>
                        <option value="forensik" <?php echo $values['bereich'] === 'forensik' ? 'selected' : ''; ?>>Forensik</option>
                        <option value="reverse" <?php echo $values['bereich'] === 'reverse' ? 'selected' : ''; ?>>Reverse Engineering</option>
                        <option value="programmierung" <?php echo $values['bereich'] === 'programmierung' ? 'selected' : ''; ?>>Programmierung</option>
                    </select>
                </div>

                <br>

                <div>
                    <label for="motivation">Warum möchtest du teilnehmen?</label><br>
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
                    <label for="regeln">Ich akzeptiere die Teilnahmebedingungen.</label>
                </div>

                <br>

                <button type="submit">Jetzt anmelden</button>
            </form>
        </section>

        <aside>
            <h3>Wichtige Infos</h3>
            <p>Der Wettbewerb besteht aus mehreren Kategorien und unterschiedlichen Schwierigkeitsstufen.</p>
            <p>Teilnahme einzeln oder im Team möglich.</p>
        </aside>
    </main>

    <footer>
        <p>&copy; 2026 Cyber Challenge</p>
    </footer>

</body>
</html>