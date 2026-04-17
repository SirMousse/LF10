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
    'rolle' => '',
    'loyalitaet' => '',
    'arbeitsstunden' => '',
    'strafen' => '',
    'motivation' => '',
    'ring' => ''
];


// 3. Formular prüfen

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $values['name'] = trim($_POST['name'] ?? '');
    $values['rolle'] = trim($_POST['rolle'] ?? '');
    $values['loyalitaet'] = trim($_POST['loyalitaet'] ?? '');
    $values['arbeitsstunden'] = trim($_POST['arbeitsstunden'] ?? '');
    $values['strafen'] = trim($_POST['strafen'] ?? '');
    $values['motivation'] = trim($_POST['motivation'] ?? '');
    $values['ring'] = isset($_POST['ring']) ? 1 : 0;

    // Validierung
    if ($values['name'] === '') {
        $errors[] = "Name fehlt!";
    }

    if ($values['rolle'] === '') {
        $errors[] = "Bitte Rolle auswählen!";
    }

    if ($values['loyalitaet'] !== '' && ((int)$values['loyalitaet'] < 1 || (int)$values['loyalitaet'] > 10)) {
        $errors[] = "Loyalität muss zwischen 1 und 10 liegen.";
    }

    if ($values['arbeitsstunden'] !== '' && ((int)$values['arbeitsstunden'] < 0 || (int)$values['arbeitsstunden'] > 24)) {
        $errors[] = "Arbeitsstunden müssen zwischen 0 und 24 liegen.";
    }

    if ($values['strafen'] !== '' && !ctype_digit($values['strafen'])) {
        $errors[] = "Strafen muss eine Zahl sein.";
    }

    if (!$values['ring']) {
        $errors[] = "Du musst dem einen Ring dienen!";
    }

    // Speichern
    if (empty($errors)) {

        $stmt = $pdo->prepare("
            INSERT INTO mordor (name, rolle, loyalitaet, arbeitsstunden, strafen, motivation, ring)
            VALUES (:name, :rolle, :loyalitaet, :arbeitsstunden, :strafen, :motivation, :ring)
        ");

        $stmt->execute([
            ':name' => $values['name'],
            ':rolle' => $values['rolle'],
            ':loyalitaet' => $values['loyalitaet'] !== '' ? (int)$values['loyalitaet'] : null,
            ':arbeitsstunden' => $values['arbeitsstunden'] !== '' ? (int)$values['arbeitsstunden'] : null,
            ':strafen' => $values['strafen'] !== '' ? (int)$values['strafen'] : null,
            ':motivation' => $values['motivation'],
            ':ring' => $values['ring']
        ]);

        $success = true;

        // reset
        $values = [
            'name' => '',
            'rolle' => '',
            'loyalitaet' => '',
            'arbeitsstunden' => '',
            'strafen' => '',
            'motivation' => '',
            'ring' => ''
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
    <title>Mordor Arbeitsbewertung</title>
</head>
<body>

<header>
    <h1>Mordor Personalabteilung</h1>
</header>

<main>

<?php if ($success): ?>
    <p><strong>Sauron ist zufrieden… vorerst 😈</strong></p>
<?php endif; ?>

<?php if (!empty($errors)): ?>
    <ul>
        <?php foreach ($errors as $e): ?>
            <li><?php echo htmlspecialchars($e); ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<form method="post">

    <input type="text" name="name" placeholder="Name" value="<?php echo old($values['name']); ?>">

    <select name="rolle">
        <option value="">Rolle wählen</option>
        <option value="ork">Ork</option>
        <option value="troll">Troll</option>
        <option value="nazgul">Nazgûl</option>
    </select>

    <input type="number" name="loyalitaet" placeholder="Loyalität (1-10)">
    <input type="number" name="arbeitsstunden" placeholder="Stunden">
    <input type="number" name="strafen" placeholder="Strafen">

    <textarea name="motivation"><?php echo old($values['motivation']); ?></textarea>

    <label>
        <input type="checkbox" name="ring" <?php echo $values['ring'] ? 'checked' : ''; ?>>
        Ich diene dem Ring
    </label>

    <button type="submit">Absenden</button>

</form>

</main>

</body>
</html>