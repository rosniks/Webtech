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
            Anschrift: In dieser Straße 7, 54293 Trier<br>
            Telefonnummer: 06511 / 123456789 <br>
            E-Mail-Adresse: gemeidezentrum_west@trier.de <br>
            Soziale Medien: ICONS STILL MISSING <br>
        </p>

        <p>
            <strong>Öffnungszeiten</strong>
            <br><br>
            Montag bis Freitag: 16:00 bis 21:00 Uhr <br>
            Samstag und Sonntag: zu Veranstaltungszeiten
        </p>

        <img src="../../img/Landkarte.jpg" alt="Gemeindezentrum Trier West" class="map">

        <hr>

        <h1>Kontaktformular</h1>

        <p>
            Mit Hilfe dieses Formulars können Sie uns jegliches Anliegen schnell und einfach nahebringen. <br> Falls Sie eine Räumlichkeit von uns
            für eigene Zwecke buchen möchten finden Sie <a href="raeume.php">hier</a> eine entsprechende Auflistung.
            <br><br>
            Mit (*) gekennzeichnete Angaben sind Pflicht-Angaben. Diese benötigen wir um Ihre Anfrage beantworten
            können. <br>
        </p>

        <div class="formular">

            <form id="kontaktForm" name="kontaktForm" oninput="check_form()">

                <fieldset>
                    <legend>Betreff (*)</legend>

                    <select id="zweck" name="zweck">
                        <option value="zweck1">1. Teilnahme-Anfrage zu einer Veranstaltung oder einem Kurs</option>
                        <option value="zweck2">2. Raumbuchung zur Eigennutzung</option>
                        <option value="zweck3">3. Rückmeldung zu einer Veranstaltung</option>
                        <option value="zweck4">4. Meldung technischer Probleme</option>
                    </select>
                </fieldset>

                <fieldset>
                    <legend>Ihr Name (*)</legend>


                    <label for="anrede">Anrede:</label>
                    <select id="anrede" name="anrede">
                        <option value="anrede0">-/-</option>
                        <option value="anrede1">Divers</option>
                        <option value="anrede2">Frau</option>
                        <option value="anrede3">Herr</option>
                    </select>

                    <label for="titel">Titel:</label>
                    <select id="titel" name="titel">
                        <option value="titel0">-/-</option>
                        <option value="titel1">Prof.</option>
                        <option value="titel2">Dr.</option>
                        <option value="titel3">Dipl.-Ing.</option>
                        <option value="titel4">B.A.</option>
                        <option value="titel5">M.A.</option>
                    </select>

                    <label for="vorname">Vorname:</label>
                    <input type="text" id="vorname" name="Vorname" placeholder="Alex" maxlength="100" required>

                    <label for="nachname">Nachname:</label>
                    <input type="text" id="nachname" name="Nachname" placeholder="Schneider" maxlength="100" required>

                </fieldset>

                <fieldset>
                    <legend>Ihre E-Mail-Adresse (*)</legend>

                    <input type="email" id="email" name="email" maxlength="150" required>
                
                </fieldset>

                <fieldset>
                    <legend>Ihre Telefonnummer</legend>

                    <input type="text" id="telefon" name="telefon" maxlength="100">

                </fieldset>

                <fieldset>
                    <legend>Ihre Anliegen (*)</legend>

                    <textarea id="anliegen" name="anliegen" required></textarea>

                </fieldset>

                <div>
                    <input type="submit" name="Abschicken" value="Anfrage versenden">
                    <input type="reset" name="Abbrechen" value="Vorgang abbrechen">
                </div>

                <p>
                    <input type="checkbox" value="datenschutz" name="datenschutz" required>
                    Ich habe die <a href="datenschutzrichtlinien.php">Datenschutzhinweise</a> gelesen und stimme der
                    Übertragung meiner Daten zu. (*) <br>
                </p>

                <div class="kommentar"></div>

            </form>

        </div>

    </main>

    <!--Footer-->
    <?php include '../../php/footer.php'; ?>

</body>

</html>