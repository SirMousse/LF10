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
            <p>Bitte fülle das Formular aus. Fehler werden direkt angezeigt.</p>
        </header>

        <main>
            <?php 
            // Datenbank Verbindung

            // 1. Verbindungsdaten
            $host = "localhost";            // Wo läuft unsere Datenbank
            $dbname = "formularlf10";       // Name meiner Datenbank
            $user = "root";                 // Datenbank Nutzer / unser Benutzername
            $password = "";                 // Passwort hier bitte einfügen falls vorhanden, wenn nicht leer lassen


            // 2. Fehler sicher abfangen (try/catch)
            try {                                               // try bedeutet -> versucht den Code in diesem Block auszuführen
                $pdo = new PDO (                                // $pdo -> ist eine Variable in der die Verbindung gespeichert wird | new PDO -> erstellt ein neues PDO-Objekt, als eine neue Datenbankverbindung
                    "mysql:host=$host;port=3307;dbname=$dbname;charset=utf8mb4",      // "mysql:host=$host;dbname=$dbname;charset=utf8mb4"  = DSN -> Beschreibung der Datenquelle
                    $user,
                    $password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);      // Fehlerverhalten einstellen
            } catch (PDOException $e) {                         // wenn im try-Block ein PDO Fehler auftaucht, fangen wir ihn hier ab
                die("Datenbankverbindung ist fehlgeschlagen: " . $e->getMessage());
            }

            /*
            PDO = PHP DATA OBJECT
            ... ist ein Werkzeug, mit dem ein PHP-Programm mit einer Datenbank "sprechen" kann.
            z.B. kann damit:    - Daten lesen
                                - Daten speichern
                                - Daten ändern
                                - Daten löschen

            mysql:  -> nutzen MySQL/ MariaDB
            host=$host -> auf welchen Server läuft unsere Datenbank überhaput
            dbname=$dbname -> welche Datenbank verwendet wird
            charset=utf8mb4 -> welcher Zeichensatz soll benutzt werden

            $pdo-> = benutzen etwas vom Objekt $pdo
            setAttribute(...) = setzten wir die Einstellungen -> wir ändern also eine Eigenschaft unserer Datenbankverbindung
            PDO::ATTR_ERRMODE = das ist die Einstellung die wir ändern wollen -> Wie soll PDO bei Fehlern reagieren?
            PDO::ERRMODE_EXCEPTION = das ist der Wert, den wir setzten -> Bei Fehlern soll eine Exception(Fehlermeldung) ausgelöst werden!

            PDOException -> das ist ein spezieller Fehler für PDO, also ein Datenbankfehler

            die(...) - gibt uns Text aus und beendet das Script sofort!
            $e->getMessage() -> holt die genau Fehlermeldung aud dem Fehlerobject
            */

            /************************************************************************************************************************************************************** */

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
                $values['email'] = trim($_POST['email'] ?? '');  // trim = entfernt Leerzeichen und Umbrüche
                $values['age'] = trim($_POST['age'] ?? '');      // ?? '' = Null-Coalescing => Wenn die E-Mail nicht existiert wird ein Leerer String ausgegeben
                $values['msg'] = trim($_POST['msg'] ?? '');      

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
                    $safeAge = htmlspecialchars($values['age'], ENT_QUOTES, 'UTF-8');
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

            // 6. Hilfsfunktion: sicher ins HTML zurückschreiben (wiederbefüllen)
            function old($value) {
                return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');           // htmlspecialchars() -> wandelt die HTML-Zeichen um | ENT_QUOTES -> auch ' und " werden sicher gemacht | UTF-8 -> Zeichensatz
            }
            ?>

            <!-- Fehler prüfen und anzeigen -->
            <?php if (!empty($errors)): ?>
                <section aria-label="Fehlermeldung">
                    <h2>Bitte korrigieren:</h2>
                    <ul>
                        <?php foreach ($errors as $e): ?>                                   <!-- geht durch jeden Fehler im Array durch und speichert die aktuellen Fehler in $e-->
                        <li><?php echo htmlspecialchars($e, ENT_QUOTES, 'UTF-8'); ?></li>   <!-- Jeder Fehler wird als einzelner Listenpunkt angezeigt-->
                        <?php endforeach; ?>                                                <!-- Schleife wird beendet! -->
                    </ul>
                </section>
            <?php endif;?>      <!-- Beendet die if Anweisung in HTML -->

            <form action="./020_formular.php" method="post" novalidate> <!-- novalidate -> OHNE novalidate kann der Browser mich am absenden hindern und meine PHP Fehlerliste sehe ich auch nicht-->
                <fieldset>
                    <legend>Deine Angaben</legend>

                    <div>
                        <label for="email">E-Mail</label>
                        <input 
                            type="email" 
                            name="email" 
                            id="email"
                            autocomplete="email"
                            required
                            value="<?php echo old($values['email']); ?>"            
                            >       <!--$values['email'] -> das ist der Wert, den der Nutzer eingegeben hat (Bsp. mousse@gmail.com) 
                                        old($values['email']) -> ruft unsere Hilfsfunktion auf => Ergebnis: macht den Wert sicher und verhindert XSS
                                        echo old($values['email']); -> gibt den Wert in HTML aus -->
                    </div>
                    
                    <div>
                        <label for="age">Alter</label>
                        <input 
                            type="text" 
                            name="age" 
                            id="age"
                            inputmode="numeric"
                            autocomplete="off"
                            required
                            value="<?php echo old($values['age']); ?>"
                            >       <!-- inputmode -> nur Anzeige (Tastur) ist gemeint -->
                    </div>

                    <div>
                        <label for="msg">Nachricht</label>
                        <textarea 
                            name="msg" 
                            id="msg"
                            placeholder="Bitte schreibe hier deine Nachricht an uns!"
                            rows="6"
                            minlength="10"
                            required
                            ><?php echo old($values['msg']); ?></textarea>
                    </div>

                    <button type="submit">Absenden</button>
                </fieldset>
            </form>
        </main>
    </body>
</html>