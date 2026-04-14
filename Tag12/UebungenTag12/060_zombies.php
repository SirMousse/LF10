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

        <form action="#" method="post">

            <div>
            <label for="name">Name / ehemaliger Name:</label><br>
            <input type="text" id="name" name="name" required>
            </div>

            <br>

            <div>
            <label for="art">Ich bin ein:</label><br>
            <select id="art" name="art">
                <option value="mensch">Mensch</option>
                <option value="zombie">Zombie</option>
                <option value="halb">Halb-Zombie</option>
            </select>
            </div>

            <br>

            <div>
            <label for="kontakt">Kontaktmöglichkeit:</label><br>
            <input type="text" id="kontakt" name="kontakt" placeholder="E-Mail oder Rauchsignal">
            </div>

            <br>

            <div>
            <label for="sprache">Bevorzugte Kommunikationsform:</label><br>
            <select id="sprache" name="sprache">
                <option value="sprache">Sprache</option>
                <option value="grunzen">Grunzen</option>
                <option value="telepathie">Telepathie</option>
            </select>
            </div>

            <br>

            <div>
            <label for="thema">Themenvorschlag:</label><br>
            <textarea id="thema" name="thema" rows="4" cols="30"></textarea>
            </div>

            <br>

            <div>
            <input type="checkbox" id="regeln" name="regeln" required>
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