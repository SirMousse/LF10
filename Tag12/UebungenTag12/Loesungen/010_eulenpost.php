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
    'haus' => '',
    'email' => '',
    'nachricht' => ''
];


// 3. Formular prüfen


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $values['name'] = trim($_POST['name'] ?? '');
    $values['haus'] = trim($_POST['haus'] ?? '');
    $values['email'] = trim($_POST['email'] ?? '');
    $values['nachricht'] = trim($_POST['nachricht'] ?? '');

    // Validierung
    if ($values['name'] === '') {
        $errors[] = "Bitte einen Namen eingeben.";
    }

    if ($values['haus'] === '') {
        $errors[] = "Bitte ein Haus auswählen.";
    }

    if ($values['email'] === '' || !filter_var($values['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Bitte eine gültige E-Mail-Adresse eingeben.";
    }

    if (strlen($values['nachricht']) < 10) {
        $errors[] = "Die Nachricht muss mindestens 10 Zeichen lang sein.";
    }

    // Wenn keine Fehler: in DB speichern
    if (empty($errors)) {
        $stmt = $pdo->prepare("
            INSERT INTO eulenpost (name, haus, email, nachricht)
            VALUES (:name, :haus, :email, :nachricht)
        ");

        $stmt->execute([
            ':name' => $values['name'],
            ':haus' => $values['haus'],
            ':email' => $values['email'],
            ':nachricht' => $values['nachricht']
        ]);

        $success = true;

        // Formular leeren nach Erfolg
        $values = [
            'name' => '',
            'haus' => '',
            'email' => '',
            'nachricht' => ''
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
    <title>Hogwarts Kontaktformular</title>
</head>
<body>

    <header>
        <h1>Hogwarts Schule für Hexerei und Zauberei</h1>
        <p>Eulenpost-Kontaktformular</p>
    </header>

    <main>
        <section>
            <h2>Kontaktiere uns</h2>
            <p>Hast du Fragen oder möchtest du dich bewerben? Sende uns eine Nachricht!</p>

            <?php if ($success): ?>
                <section>
                    <h2>Erfolg</h2>
                    <p>Deine Nachricht wurde erfolgreich in der Datenbank gespeichert.</p>
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
                    <label for="name">Name:</label><br>
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
                    <label for="haus">Haus:</label><br>
                    <select id="haus" name="haus" required>
                        <option value="">Bitte auswählen</option>
                        <option value="Gryffindor" <?php echo $values['haus'] === 'Gryffindor' ? 'selected' : ''; ?>>Gryffindor</option>
                        <option value="Hufflepuff" <?php echo $values['haus'] === 'Hufflepuff' ? 'selected' : ''; ?>>Hufflepuff</option>
                        <option value="Ravenclaw" <?php echo $values['haus'] === 'Ravenclaw' ? 'selected' : ''; ?>>Ravenclaw</option>
                        <option value="Slytherin" <?php echo $values['haus'] === 'Slytherin' ? 'selected' : ''; ?>>Slytherin</option>
                    </select>
                </div>

                <br>

                <div>
                    <label for="email">Eulenpost-Adresse:</label><br>
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
                    <label for="nachricht">Nachricht:</label><br>
                    <textarea 
                        id="nachricht" 
                        name="nachricht" 
                        rows="5" 
                        cols="30" 
                        required
                    ><?php echo old($values['nachricht']); ?></textarea>
                </div>

                <br>

                <button type="submit">Absenden</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Hogwarts Schule für Hexerei und Zauberei</p>
    </footer>

</body>
</html>