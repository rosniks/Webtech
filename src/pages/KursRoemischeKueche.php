<!DOCTYPE html>
<html lang="de">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/nav-bar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script src="../js/nav-bar.js" defer></script>
    <title>römischen Küche</title>
</head>

<body>

    <!--Navigation-bar-->
    <?php include '../../php/nav.php'; ?>

    <!--Main-Content-->
    <main>

        <button class="vButton" onclick="window.location.href='kurse.php';">
            Zurück zur Kurs-Übersicht
        </button>

        <h1 class="vTitel">
            Facetten der römischen Küche, 150€
        </h1>
        <p class="schlagwort">
            Ernährung, regionale Küche, Kultur, Kochen
        </p>
        <p class="datum">
            120 Minuten pro Kurseinheit, Saal 2 & Küche
        </p>
        <p class="beschreibung">
            'De re coquinaria' , die römische Küche gilt seit vielen Jahren als Geheimtipp unter Gourmets. <br> Es ist
            an der
            Zeit, mit althergebrachten Klischees aufzuräumen, die die Kochkunst der alten Römer als überaus
            gewöhnungsbedürftig schildern. Das durch Verwendung von Fischsauce und vielen Kräutern hervorgerufene
            Rümpfen der Nase steht im absoluten Gegensatz zum Geschmackserlebnis eines römischen 6-Gang Menüs.
            <br><br>
            Von den Vorspeisen über die
            sehr vielfältigen Hauptgerichte bis hin zu den Desserts des Imperium Romanum können die Teilnehmerinnen und
            Teilnehmer im wahrsten Sinne des Wortes "Antike schmecken".
            <br><br>
            Dozent: Irmgard Hoffmann
        </p>
        <p class="kUebersicht">
            Auflistung aller Kurs-Termine [Anzahl: 5 Termine]
        </p>
        <hr>
        <div class="flex-container">
            <div>
                Termin 1 <br>
                20.02.2023 19:00 Uhr
            </div>
            <div>
                Termin 2 <br>
                27.02.2023 19:00 Uhr
            </div>
            <div>
                Termin 3 <br>
                06.03.2023 19:00 Uhr
            </div>
            <div>
                Termin 4 <br>
                13.03.2023 19:00 Uhr
            </div>
            <div>
                Termin 5 <br>
                20.03.2023 19:00 Uhr
            </div>
        </div>

        <button class="vButton" onclick="window.location.href='kontakt.php';">
            Weiter zur Kontaktseite mit Formular
        </button>

    </main>


    <!--Footer-->
    <?php include '../../php/footer.php'; ?>

</body>

</html>