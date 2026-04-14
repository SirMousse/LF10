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

        <form action="#" method="post">

            <div>
            <label for="name">Name des Abenteurers:</label><br>
            <input type="text" id="name" name="name" required>
            </div>

            <br>

            <div>
            <label for="klasse">Klasse:</label><br>
            <select id="klasse" name="klasse">
                <option value="krieger">Krieger</option>
                <option value="magier">Magier</option>
                <option value="schurke">Schurke</option>
                <option value="heiler">Heiler</option>
            </select>
            </div>

            <br>

            <div>
            <label for="level">Level:</label><br>
            <input type="number" id="level" name="level" min="1" max="100">
            </div>

            <br>

            <div>
            <label for="waffe">Bevorzugte Waffe:</label><br>
            <input type="text" id="waffe" name="waffe">
            </div>

            <br>

            <div>
            <label for="email">Kontakt (Magische Verbindung):</label><br>
            <input type="email" id="email" name="email" required>
            </div>

            <br>

            <div>
            <label for="motivation">Warum möchtest du der Gilde beitreten?</label><br>
            <textarea id="motivation" name="motivation" rows="5" cols="30"></textarea>
            </div>

            <br>

            <div>
            <input type="checkbox" id="regeln" name="regeln" required>
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