<!DOCTYPE html>
<html lang="de">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hogwarts Kontaktformular</title>
    </head>
    <body>

    <header>
        <h1>Hogwarts Schule für Hexerei und Zauberei</h1>
        <p>Eulenpost-Kontaktformular</p>
    </header>

    <main>
        <section>
        <h2>Kontaktiere uns</h2>
        <p>Hast du Fragen oder möchtest du dich bewerben? Sende uns eine Nachricht!</p>

        <form action="#" method="post">
            
            <div>
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required>
            </div>

            <br>

            <div>
            <label for="haus">Haus:</label><br>
            <select id="haus" name="haus">
                <option value="gryffindor">Gryffindor</option>
                <option value="hufflepuff">Hufflepuff</option>
                <option value="ravenclaw">Ravenclaw</option>
                <option value="slytherin">Slytherin</option>
            </select>
            </div>

            <br>

            <div>
            <label for="email">Eulenpost-Adresse:</label><br>
            <input type="email" id="email" name="email" required>
            </div>

            <br>

            <div>
            <label for="nachricht">Nachricht:</label><br>
            <textarea id="nachricht" name="nachricht" rows="5" cols="30" required></textarea>
            </div>

            <br>

            <button type="submit">Absenden</button>
        </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Hogwarts Schule für Hexerei und Zauberei</p>
    </footer>

</body>
</html>