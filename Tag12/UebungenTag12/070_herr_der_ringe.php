<!DOCTYPE html>
<html lang="de">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mordor Arbeitsbewertung</title>
    </head>
    <body>

    <header>
        <h1>Mordor Personalabteilung</h1>
        <p>Bewertung der Arbeitsmoral durch Sauron</p>
    </header>

    <nav>
        <ul>
        <li><a href="#">Start</a></li>
        <li><a href="#">Festung</a></li>
        <li><a href="#">Ork-Abteilungen</a></li>
        <li><a href="#">Kontakt</a></li>
        </ul>
    </nav>

    <main>
        <section>
        <h2>Arbeitsbewertung</h2>
        <p>Fülle dieses Formular aus, um deine Loyalität und Arbeitsmoral gegenüber Mordor zu beweisen.</p>

        <form action="#" method="post">

            <div>
            <label for="name">Name des Dieners:</label><br>
            <input type="text" id="name" name="name" required>
            </div>

            <br>

            <div>
            <label for="rolle">Rolle in Mordor:</label><br>
            <select id="rolle" name="rolle">
                <option value="ork">Ork</option>
                <option value="troll">Troll</option>
                <option value="nazgul">Nazgûl</option>
                <option value="mensch">Verbündeter Mensch</option>
            </select>
            </div>

            <br>

            <div>
            <label for="loyalitaet">Loyalität gegenüber Sauron (1–10):</label><br>
            <input type="number" id="loyalitaet" name="loyalitaet" min="1" max="10">
            </div>

            <br>

            <div>
            <label for="arbeitsstunden">Tägliche Arbeitsstunden:</label><br>
            <input type="number" id="arbeitsstunden" name="arbeitsstunden" min="0" max="24">
            </div>

            <br>

            <div>
            <label for="strafen">Wie oft wurdest du bestraft?</label><br>
            <input type="number" id="strafen" name="strafen" min="0">
            </div>

            <br>

            <div>
            <label for="motivation">Was motiviert dich, für Mordor zu arbeiten?</label><br>
            <textarea id="motivation" name="motivation" rows="5" cols="30"></textarea>
            </div>

            <br>

            <div>
            <input type="checkbox" id="ring" name="ring" required>
            <label for="ring">Ich diene dem einen Ring und akzeptiere Saurons Herrschaft.</label>
            </div>

            <br>

            <button type="submit">Bewertung einreichen</button>

        </form>
        </section>

        <aside>
        <h3>Wichtiger Hinweis</h3>
        <p>Unzureichende Arbeitsmoral kann zu Konsequenzen führen.</p>
        <p>Sauron sieht alles.</p>
        </aside>
    </main>

    <footer>
        <p>&copy; 2026 Mordor GmbH</p>
    </footer>

</body>
</html>