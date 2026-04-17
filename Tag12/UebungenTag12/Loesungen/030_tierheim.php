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
    'email' => '',
    'telefon' => '',
    'tierart' => '',
    'tiername' => '',
    'wohnsituation' => '',
    'erfahrung' => '',
    'nachricht' => '',
    'datenschutz' => ''
];


// 3. Formular prüfen

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $values['name'] = trim($_POST['name'] ?? '');
    $values['email'] = trim($_POST['email'] ?? '');
    $values['telefon'] = trim($_POST['telefon'] ?? '');
    $values['tierart'] = trim($_POST['tierart'] ?? '');
    $values['tiername'] = trim($_POST['tiername'] ?? '');
    $values['wohnsituation'] = trim($_POST['wohnsituation'] ?? '');
    $values['erfahrung'] = trim($_POST['erfahrung'] ?? '');
    $values['nachricht'] = trim($_POST['nachricht'] ?? '');
    $values['datenschutz'] = isset($_POST['datenschutz']) ? 1 : 0;

    // Validierung
    if ($values['name'] === '') {
        $errors[] = "Bitte den vollständigen Namen eingeben.";
    }

    if ($values['email'] === '' || !filter_var($values['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Bitte eine gültige E-Mail-Adresse eingeben.";
    }

    if ($values['telefon'] === '') {
        $errors[] = "Bitte eine Telefonnummer eingeben.";
    }

    if ($values['tierart'] === '') {
        $errors[] = "Bitte eine Tierart auswählen.";
    }

    if (strlen($values['nachricht']) < 10) {
        $errors[] = "Bitte gib eine Begründung mit mindestens 10 Zeichen ein.";
    }

    if (!$values['datenschutz']) {
        $errors[] = "Bitte stimme der Verarbeitung der Daten zu.";
    }

    // Speichern, wenn keine Fehler vorhanden sind
    if (empty($errors)) {
        $stmt = $pdo->prepare("
            INSERT INTO bello (
                name, email, telefon, tierart, tiername,
                wohnsituation, erfahrung, nachricht, datenschutz
            )
            VALUES (
                :name, :email, :telefon, :tierart, :tiername,
                :wohnsituation, :erfahrung, :nachricht, :datenschutz
            )
        ");

        $stmt->execute([
            ':name' => $values['name'],
            ':email' => $values['email'],
            ':telefon' => $values['telefon'],
            ':tierart' => $values['tierart'],
            ':tiername' => $values['tiername'],
            ':wohnsituation' => $values['wohnsituation'],
            ':erfahrung' => $values['erfahrung'],
            ':nachricht' => $values['nachricht'],
            ':datenschutz' => $values['datenschutz']
        ]);

        $success = true;

        // Formular leeren
        $values = [
            'name' => '',
            'email' => '',
            'telefon' => '',
            'tierart' => '',
            'tiername' => '',
            'wohnsituation' => '',
            'erfahrung' => '',
            'nachricht' => '',
            'datenschutz' => ''
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
    <title>Adoptionsformular Tierheim</title>
</head>
<body>

    <header>
        <h1>Tierheim Sonnenschein</h1>
        <p>Formular zur Adoption eines Tieres</p>
    </header>

    <main>
        <section>
            <h2>Adoptionsanfrage</h2>
            <p>Bitte fülle das folgende Formular aus, wenn du einem Tier ein neues Zuhause schenken möchtest.</p>

            <?php if ($success): ?>
                <section>
                    <h2>Erfolg</h2>
                    <p>Deine Adoptionsanfrage wurde erfolgreich gespeichert.</p>
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
                    <label for="name">Vollständiger Name:</label><br>
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
                    <label for="telefon">Telefonnummer:</label><br>
                    <input
                        type="tel"
                        id="telefon"
                        name="telefon"
                        required
                        value="<?php echo old($values['telefon']); ?>"
                    >
                </div>

                <br>

                <div>
                    <label for="tierart">Welche Tierart möchtest du adoptieren?</label><br>
                    <select id="tierart" name="tierart" required>
                        <option value="">Bitte auswählen</option>
                        <option value="hund" <?php echo $values['tierart'] === 'hund' ? 'selected' : ''; ?>>Hund</option>
                        <option value="katze" <?php echo $values['tierart'] === 'katze' ? 'selected' : ''; ?>>Katze</option>
                        <option value="kaninchen" <?php echo $values['tierart'] === 'kaninchen' ? 'selected' : ''; ?>>Kaninchen</option>
                        <option value="hamster" <?php echo $values['tierart'] === 'hamster' ? 'selected' : ''; ?>>Hamster</option>
                        <option value="sonstiges" <?php echo $values['tierart'] === 'sonstiges' ? 'selected' : ''; ?>>Sonstiges</option>
                    </select>
                </div>

                <br>

                <div>
                    <label for="tiername">Name des gewünschten Tieres:</label><br>
                    <input
                        type="text"
                        id="tiername"
                        name="tiername"
                        value="<?php echo old($values['tiername']); ?>"
                    >
                </div>

                <br>

                <div>
                    <label for="wohnsituation">Wohnsituation:</label><br>
                    <input
                        type="text"
                        id="wohnsituation"
                        name="wohnsituation"
                        placeholder="z. B. Wohnung mit Balkon, Haus mit Garten"
                        value="<?php echo old($values['wohnsituation']); ?>"
                    >
                </div>

                <br>

                <div>
                    <label for="erfahrung">Hast du bereits Erfahrung mit Tieren?</label><br>
                    <textarea
                        id="erfahrung"
                        name="erfahrung"
                        rows="4"
                        cols="30"
                    ><?php echo old($values['erfahrung']); ?></textarea>
                </div>

                <br>

                <div>
                    <label for="nachricht">Warum möchtest du ein Tier adoptieren?</label><br>
                    <textarea
                        id="nachricht"
                        name="nachricht"
                        rows="5"
                        cols="30"
                        required
                    ><?php echo old($values['nachricht']); ?></textarea>
                </div>

                <br>

                <div>
                    <input
                        type="checkbox"
                        id="datenschutz"
                        name="datenschutz"
                        required
                        <?php echo $values['datenschutz'] ? 'checked' : ''; ?>
                    >
                    <label for="datenschutz">Ich stimme der Verarbeitung meiner Daten zu.</label>
                </div>

                <br>

                <button type="submit">Adoptionsanfrage senden</button>

            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Tierheim Sonnenschein</p>
    </footer>

</body>
</html>