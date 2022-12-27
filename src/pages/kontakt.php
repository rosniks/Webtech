<!DOCTYPE html>
<html lang="de">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/nav-bar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script src="../js/nav-bar.js" defer></script>
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
            Irgendwelche Information über das Kontaktformular, z.B. Beschreibung des Formulars, Verwendungszwecke,
            Information über Datenverarbeitungszeit.
            <br><br>
            Mit (*) gekennzeichnete Angaben sind Pflicht-Angaben. Diese benötigen wir um Ihre Anfrage beantworten
            können. <br>
        </p>

        <div class="formular">

            <form>

                <fieldset>
                    <legend>Betreff (*)</legend>

                    <select name="zweck" id="zweck" style="width: 905px;">
                        <option value="zweck1"> Organisation einer Veranstaltung </option>
                        <option value="zweck2"> Raumbuchung </option>
                        <option value="zweck3"> Teilnahme am Kurs </option>
                        <option value="zweck4"> Zweck4 </option>
                        <option value="zweck5"> Zweck5 </option>
                    </select>
                </fieldset>

                <fieldset>
                    <legend>Ihr Name (*) </legend>

                    <label for="vorname">Vorname:</label>
                    <input type="text" id="vorname" name="Vorname" size="56">
                    <label for="nachname">Nachname:</label>
                    <input type="text" id="nachname" name="Nachname" size="56">
                </fieldset>

                <fieldset>
                    <legend>Ihre E-Mail-Adresse (*)</legend>

                    <input type="email" name="email" id="email" size="147">
                </fieldset>

                <fieldset>
                    <legend>Ihre Telefonnummer </legend>

                    <input type="text" name="telefon" id="telefon" size="147">
                </fieldset>

                <fieldset>
                    <legend>Ihre Anfrage</legend>

                    <textarea name="tipp" cols="150" rows="10"></textarea>
                </fieldset>

                <div>
                    <input type="submit" name="Abschicken" value="Senden" style="width: 120px;">
                    <input type="reset" name="Abbrechen" value="Abbrechen" style="width: 120px;">
                </div>

                <p>
                    <input type="checkbox" value="datenschutz" name="datenschutz">Ich habe die Datenschutzhinweise
                    gelesen und
                    stimme der Übertragung meiner Daten zu. * <br>
                </p>

            </form>

        </div>

    </main>

    <!--Footer-->
    <?php include '../../php/footer.php'; ?>

</body>

</html>