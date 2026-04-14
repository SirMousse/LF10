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
        <p>Melde dich an, um gegen Arenaleiter zu kämpfen.</p>

        <form action="#" method="post">

            <div>
            <label for="trainername">Trainername:</label><br>
            <input type="text" id="trainername" name="trainername" required>
            </div>

            <br>

            <div>
            <label for="region">Region:</label><br>
            <select id="region" name="region">
                <option value="kanto">Kanto</option>
                <option value="johto">Johto</option>
                <option value="hoenn">Hoenn</option>
                <option value="sinnoh">Sinnoh</option>
                <option value="unova">Einall</option>
                <option value="kalos">Kalos</option>
                <option value="galar">Galar</option>
            </select>
            </div>

            <br>

            <div>
            <label for="pokemon">Lieblings-Pokémon:</label><br>
            <input type="text" id="pokemon" name="pokemon">
            </div>

            <br>

            <div>
            <label for="arena">Bevorzugte Arena:</label><br>
            <select id="arena" name="arena">
                <option value="feuer">Feuer-Arena</option>
                <option value="wasser">Wasser-Arena</option>
                <option value="pflanze">Pflanzen-Arena</option>
                <option value="elektro">Elektro-Arena</option>
            </select>
            </div>

            <br>

            <div>
            <label for="email">Kontakt (PokéNav / E-Mail):</label><br>
            <input type="email" id="email" name="email" required>
            </div>

            <br>

            <div>
            <label for="nachricht">Nachricht:</label><br>
            <textarea id="nachricht" name="nachricht" rows="5" cols="30"></textarea>
            </div>

            <br>

            <button type="submit">Zur Arena anmelden</button>

        </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Pokémon Liga</p>
    </footer>

</body>
</html>