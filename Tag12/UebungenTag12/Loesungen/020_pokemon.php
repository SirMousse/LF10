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
    'trainername' => '',
    'region' => '',
    'pokemon' => '',
    'arena' => '',
    'email' => '',
    'nachricht' => ''
];


// 3. Formular prüfen


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $values['trainername'] = trim($_POST['trainername'] ?? '');
    $values['region'] = trim($_POST['region'] ?? '');
    $values['pokemon'] = trim($_POST['pokemon'] ?? '');
    $values['arena'] = trim($_POST['arena'] ?? '');
    $values['email'] = trim($_POST['email'] ?? '');
    $values['nachricht'] = trim($_POST['nachricht'] ?? '');

    // Validierung
    if ($values['trainername'] === '') {
        $errors[] = "Trainername fehlt!";
    }

    if ($values['region'] === '') {
        $errors[] = "Region auswählen!";
    }

    if ($values['email'] === '' || !filter_var($values['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Ungültige E-Mail!";
    }

    // Wenn keine Fehler -> speichern
    if (empty($errors)) {

        $stmt = $pdo->prepare("
            INSERT INTO poke (trainername, region, pokemon, arena, email, nachricht)
            VALUES (:trainername, :region, :pokemon, :arena, :email, :nachricht)
        ");

        $stmt->execute([
            ':trainername' => $values['trainername'],
            ':region' => $values['region'],
            ':pokemon' => $values['pokemon'],
            ':arena' => $values['arena'],
            ':email' => $values['email'],
            ':nachricht' => $values['nachricht']
        ]);

        $success = true;

        // reset
        $values = [
            'trainername' => '',
            'region' => '',
            'pokemon' => '',
            'arena' => '',
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
    <title>Pokémon Arena Anmeldung</title>
</head>
<body>

<header>
    <h1>Pokémon Arena Anmeldung</h1>
    <p>Werde ein offizieller Arena-Herausforderer!</p>
</header>

<main>
    <section>

        <h2>Trainer Registrierung</h2>

        <?php if ($success): ?>
            <p><strong>Erfolg!</strong> Du wurdest gespeichert 🎉</p>
        <?php endif; ?>

        <?php if (!empty($errors)): ?>
            <ul>
                <?php foreach ($errors as $e): ?>
                    <li><?php echo htmlspecialchars($e); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <form action="" method="post">

            <div>
                <label>Trainername:</label><br>
                <input type="text" name="trainername" required value="<?php echo old($values['trainername']); ?>">
            </div>

            <br>

            <div>
                <label>Region:</label><br>
                <select name="region">
                    <option value="kanto">Kanto</option>
                    <option value="johto">Johto</option>
                    <option value="hoenn">Hoenn</option>
                    <option value="sinnoh">Sinnoh</option>
                </select>
            </div>

            <br>

            <div>
                <label>Lieblings-Pokémon:</label><br>
                <input type="text" name="pokemon" value="<?php echo old($values['pokemon']); ?>">
            </div>

            <br>

            <div>
                <label>Arena:</label><br>
                <select name="arena">
                    <option value="feuer">Feuer</option>
                    <option value="wasser">Wasser</option>
                    <option value="pflanze">Pflanze</option>
                    <option value="elektro">Elektro</option>
                </select>
            </div>

            <br>

            <div>
                <label>E-Mail:</label><br>
                <input type="email" name="email" required value="<?php echo old($values['email']); ?>">
            </div>

            <br>

            <div>
                <label>Nachricht:</label><br>
                <textarea name="nachricht"><?php echo old($values['nachricht']); ?></textarea>
            </div>

            <br>

            <button type="submit">Anmelden</button>

        </form>

    </section>
</main>

<footer>
    <p>&copy; 2026 Pokémon Liga</p>
</footer>

</body>
</html>