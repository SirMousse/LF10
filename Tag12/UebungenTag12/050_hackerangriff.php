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

        <form action="#" method="post">

            <div>
            <label for="nickname">Nickname:</label><br>
            <input type="text" id="nickname" name="nickname" required>
            </div>

            <br>

            <div>
            <label for="teamname">Teamname:</label><br>
            <input type="text" id="teamname" name="teamname">
            </div>

            <br>

            <div>
            <label for="email">E-Mail-Adresse:</label><br>
            <input type="email" id="email" name="email" required>
            </div>

            <br>

            <div>
            <label for="erfahrung">Erfahrungslevel:</label><br>
            <select id="erfahrung" name="erfahrung">
                <option value="anfaenger">Anfänger</option>
                <option value="fortgeschritten">Fortgeschritten</option>
                <option value="profi">Profi</option>
            </select>
            </div>

            <br>

            <div>
            <label for="bereich">Lieblingsbereich:</label><br>
            <select id="bereich" name="bereich">
                <option value="web">Web Security</option>
                <option value="crypto">Kryptografie</option>
                <option value="forensik">Forensik</option>
                <option value="reverse">Reverse Engineering</option>
                <option value="programmierung">Programmierung</option>
            </select>
            </div>

            <br>

            <div>
            <label for="motivation">Warum möchtest du teilnehmen?</label><br>
            <textarea id="motivation" name="motivation" rows="5" cols="30"></textarea>
            </div>

            <br>

            <div>
            <input type="checkbox" id="regeln" name="regeln" required>
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