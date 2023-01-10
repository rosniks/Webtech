<!DOCTYPE html>
<html lang="de">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/nav-bar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script src="../js/nav-bar.js" defer></script>
    <script src="../js/kontaktformular.js" defer></script>
    <title>Kontakte</title>
</head>

<body>

    <!--Navigation-bar-->
    <?php include "../../php/nav.php"; ?>

    <!--Main-Content-->
    <main>

        <h1>So sind wir zu erreichen:</h1>

        <p>
            <strong> Gemeindezentrum Trier-West </strong>
            <br><br>
            Anschrift: Eurener Str. 1, 54294 Trier<br>
            Telefonnummer: 06511 / 123456789 <br>
            E-Mail-Adresse: gemeidezentrum_west@trier.de <br><br>
            <a href="#" class="icon"><img src="../../img/Facebook.png" alt="Facebook"></a>
            <a href="#" class="icon"><img src="../../img/Instagram.png" alt="Instagram"></a>
            <a href="#" class="icon"><img src="../../img/Twitter.png" alt="Twitter"></a><br>
        </p>

        <p>
            <strong>Öffnungszeiten</strong>
            <br><br>
            Montag bis Freitag: 16:00 bis 21:00 Uhr <br>
            Samstag und Sonntag: zu Veranstaltungszeiten
        </p>

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d648.6639422961708!2d6.620159943946318!3d49.751219055685404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47957ca6f5d23081%3A0x84c4b85cb4d53ff0!2sEurener%20Str.%201%2C%2054294%20Trier!5e1!3m2!1sde!2sde!4v1672769920554!5m2!1sde!2sde"
            width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" class="map"
            alt="Gemeindezentrum Trier West" referrerpolicy="no-referrer-when-downgrade">
        </iframe>

        <hr>

        <h1>Kontaktformular</h1>

        <p>
            Mit Hilfe dieses Formulars können Sie uns jegliches Anliegen schnell und einfach nahebringen. <br> Falls Sie
            eine Räumlichkeit von uns
            für eigene Zwecke buchen möchten finden Sie <a href="raeume.php">hier</a> eine entsprechende Auflistung.
            <br><br>
            Mit (*) gekennzeichnete Angaben sind Pflicht-Angaben. Diese benötigen wir um Ihre Anfrage beantworten
            können. <br>
        </p>

        <div class="formular">

            <form id="kontaktForm" name="kontaktForm" action="kontakt.php" method="GET">

                <fieldset>
                    <legend>Betreff (*)</legend>

                    <select id="zweck" name="zweck" onclick="add_raume()">
                        <option value="zweck1">1. Teilnahme-Anfrage zu einer Veranstaltung oder einem Kurs</option>
                        <option value="zweck2">2. Raumbuchung zur Eigennutzung</option>
                        <option value="zweck3">3. Rückmeldung zu einer Veranstaltung</option>
                        <option value="zweck4">4. Meldung technischer Probleme</option>
                    </select>
                </fieldset>

                <fieldset>
                    <legend>Ihr Name (*)</legend>

                    <div class="formBreak">
                        <label for="anrede">Anrede:</label>
                        <select id="anrede" name="anrede">
                            <option value="anrede0">-/-</option>
                            <option value="anrede1">Divers</option>
                            <option value="anrede2">Frau</option>
                            <option value="anrede3">Herr</option>
                        </select>
                    </div>

                    <div class="formBreak">                    
                        <label for="titel">Titel:</label>
                        <select id="titel" name="titel">
                            <option value="titel0">-/-</option>
                            <option value="titel1">Prof.</option>
                            <option value="titel2">Dr.</option>
                            <option value="titel3">Dipl.-Ing.</option>
                            <option value="titel4">B.A.</option>
                            <option value="titel5">M.A.</option>
                        </select>
                    </div>

                    <div class="formBreak">
                        <label for="vorname">Vorname:</label>
                        <input type="text" id="vorname" name="Vorname" placeholder="Alex" minlength="2" maxlength="100"
                            required>
                    </div>

                    <div class="formBreak">
                        <label for="nachname">Nachname:</label>
                        <input type="text" id="nachname" name="Nachname" placeholder="Schneider" minlength="2"
                            maxlength="100" required>
                    </div>

                </fieldset>

                <fieldset>
                    <legend>Ihre E-Mail-Adresse (*)</legend>

                    <input type="email" id="email" name="email" placeholder="AlexSchneider@web.de" size="50"
                        maxlength="150" required>

                </fieldset>

                <fieldset>
                    <legend>Ihre Telefonnummer</legend>

                    <input type="text" id="telefon" name="telefon" placeholder="12345 456789" size="50" maxlength="100">

                </fieldset>

                <div id="fieldsetRaum"></div>

                <fieldset>
                    <legend>Ihre Anliegen (*)</legend>

                    <textarea id="anliegen" name="anliegen" rows="10" cols="40" minlength="10" maxlength="1000"
                        required></textarea>

                </fieldset>

                <p>
                    <input type="checkbox" value="datenschutz" name="datenschutz" required>
                    Ich habe die <a href="datenschutzrichtlinien.php">Datenschutzhinweise</a> gelesen und stimme der
                    Übertragung meiner Daten zu. (*) <br>
                </p>

                <p id="error">Bitte bestätigen Sie ihre Angaben mit "Anfrage versenden"!</p>

                <div class="flex-container">
                    <button class="kButton" type="submit" name="Abschicken">Anfrage versenden</button>
                    <button class="kButton" type="reset" name="Abbrechen">Vorgang abbrechen</button>
                </div>

            </form>

        </div>

    </main>

    <!--Footer-->
    <?php include '../../php/footer.php'; ?>

</body>

</html>