<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formular</title>
    </head>

    <body>
        <header>
            <h1>Formular für PHP</h1>
            <p>Bitte fülle das Formular aus. Fehler werdeb direkt angezeigt.</p>
        </header>

        <main>
            <?php 
            // 1. Datenstruktur vorbereiten
            $errors = [];           // leeres Fehler- Array -> sammeln Fehlermeldungen hier drin
            $values = [
                'email' => '',
                'age' => '',
                'msg' => ''
            ];                      // Array für die Formularwerte -> Formular ist am Anfang leer

            // 2. Prüfen: Wurde das Formular abgeschickt?
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // $_SERVER['REQUEST_METHOD'] = sagt mir wie die Methode aufgerufen werden soll (POST und GET)

                // 3. Werte holen und trimmen (Leerzeichen am Anfang und Ende weg)
                $values['email'] = trim($POST['email'] ?? '');  // trim = entfernt Leerzeichen und Umbrüche
                $values['age'] = trim($POST['age'] ?? '');      // ?? '' = Null-Coalescing => Wenn die E-Mail nicht existiert wird ein Leerer String ausgegeben
                $values['msg'] = trim($POST['msg'] ?? '');      

                // 4. Validierung (prüfen ob die Daten "okay" sind)
                // E-Mail: darf nicht leer sein und muss auch wie eine E-Mail Adresse aussehen
                if ($values['email'] === '' || !filter_var($values['email'], FILTER_VALIDATE_EMAIL)) {      // filter_var = Standardvalidator für E-Mails in PHP    | FILTER_VALIDATE_EMAIL = Konstante
                    $errors[] = 'Bitte eine gültige E-Mail eingeben!';
                } 
                
                // Alter: darf nicht leer sein und muss aus Ziffern bestehen
                if ($values['age'] === '' || !ctype_digit($values['age'])) {                                // ctype_digit = nur Zahlenwerte sind zulässig
                    $errors[] = 'Bitte gib ein gültiges Alter (nur Zahlen) an!';
                }

                // Nachricht: mindestens 10 Zeichen eingegeben werden
                if (strlen($values['msg']) < 10) {                                                          // strlen = zählt die Zeichen eines Textes
                    $errors[] = 'Nachricht muss mindestens 10 Zeichen enthalten!';
                }

                // 5. Wenn KEINE Fehler: ERFOLGSMELDUNG
                if (empty($errors)) {
                    $safeEmail = htmlspecialchars($values['email'], ENT_QUOTES, 'UTF-8');
                    // htmlspecialchars = schützt vor XSS, indem es HTML_Zeichen entschärft | XSS = Cross-Site-Scripting = Angriffe auf Webseiten
                    // ENT_Quotes = Konstante
                    $safeAge = htmlspecialchars($values['age'], ENT_QUOTES, 'UTF_8');
                    $safeMsg = nl2br(htmlspecialchars($values['msg'], ENT_QUOTES, 'UTF-8'));                // nl2br = Zeilenumbruch
                

                // SQL "vorbereiten", aber noch nicht ausführen
                $stmt = $pdo->prepare("
                    INSERT INTO infos(email, age, msg)
                    VALUES (:email, :age, :msg)"); 

                // $stmt = Statement Object
                // $pdo = ist meine Datenbankverbindung
                // -> = wird benutzt um auf die Eigenschaften oder Methoden eines Objektes zuzugreifen
                // prepare = Methode = schickt die SQL-Struktur an die Datenbank, aber OHNE konkrete Daten
                // INSERT INTO infos (email, age, msg) = ich füge eine neue Zeile ind die Tabelle infos ein
                // (email, age, msg) = das sind die Spalten, in die ich schreibe
                // VALUES = sind die Werte, die in die Spalte kommen
                // :email, :age, :msg = das sind die benannten Platzhalter(named placeholder)


                // Werte einsetzen und ausführen
                $stmt->execute([
                    ':email' => $values['email'],
                    ':age' => $values['age'],
                    ':msg' => $values['msg']
                ]);

                // execute([...]) = macht zwei Dinge:
                // 1. Bindet die Werte an die Platzhalter(:email...)
                // 2. führt das vorbereitete SQL dann wirklich aus

                echo '<section aria-label="Erfolgsmeldung">';
                echo '<h2>Erfolg</h2>';
                echo "<p><strong>E-Mail:</strong> $safeEmail</p>";
                echo "<p><strong>Alter:</strong> $safeAge</p>";
                echo "<p><strong>Nachricht:</strong> $safeMsg</p>";
                echo '<hr>';
                echo '</section>';

                }
            }
            ?>

            <form action="">
                <fieldset>
                    <legend>Deine Angaben</legend>

                    <div>
                        <label for="email">E-Mail</label>
                    </div>

                    <div>
                        <label for="age">Alter</label>
                    </div>

                    <div>
                        <label for="msg">Nachricht</label>
                    </div>

                    <button type="submit">Absenden</button>
                </fieldset>
            </form>
        </main>
    </body>
</html>