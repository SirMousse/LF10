<!DOCTYPE html>
<html lang="de">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoptionsformular Tierheim</title>
    </head>
    <body>

    <header>
        <h1>Tierheim Sonnenschein</h1>
        <p>Formular zur Adoption eines Tieres</p>
    </header>

    <main>
        <section>
        <h2>Adoptionsanfrage</h2>
        <p>Bitte fülle das folgende Formular aus, wenn du einem Tier ein neues Zuhause schenken möchtest.</p>

        <form action="#" method="post">

            <div>
            <label for="name">Vollständiger Name:</label><br>
            <input type="text" id="name" name="name" required>
            </div>

            <br>

            <div>
            <label for="email">E-Mail-Adresse:</label><br>
            <input type="email" id="email" name="email" required>
            </div>

            <br>

            <div>
            <label for="telefon">Telefonnummer:</label><br>
            <input type="tel" id="telefon" name="telefon" required>
            </div>

            <br>

            <div>
            <label for="tierart">Welche Tierart möchtest du adoptieren?</label><br>
            <select id="tierart" name="tierart" required>
                <option value="">Bitte auswählen</option>
                <option value="hund">Hund</option>
                <option value="katze">Katze</option>
                <option value="kaninchen">Kaninchen</option>
                <option value="hamster">Hamster</option>
                <option value="sonstiges">Sonstiges</option>
            </select>
            </div>

            <br>

            <div>
            <label for="tiername">Name des gewünschten Tieres:</label><br>
            <input type="text" id="tiername" name="tiername">
            </div>

            <br>

            <div>
            <label for="wohnsituation">Wohnsituation:</label><br>
            <input type="text" id="wohnsituation" name="wohnsituation" placeholder="z. B. Wohnung mit Balkon, Haus mit Garten">
            </div>

            <br>

            <div>
            <label for="erfahrung">Hast du bereits Erfahrung mit Tieren?</label><br>
            <textarea id="erfahrung" name="erfahrung" rows="4" cols="30"></textarea>
            </div>

            <br>

            <div>
            <label for="nachricht">Warum möchtest du ein Tier adoptieren?</label><br>
            <textarea id="nachricht" name="nachricht" rows="5" cols="30" required></textarea>
            </div>

            <br>

            <div>
            <input type="checkbox" id="datenschutz" name="datenschutz" required>
            <label for="datenschutz">Ich stimme der Verarbeitung meiner Daten zu.</label>
            </div>

            <br>

            <button type="submit">Adoptionsanfrage senden</button>

        </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Tierheim Sonnenschein</p>
    </footer>

</body>
</html>