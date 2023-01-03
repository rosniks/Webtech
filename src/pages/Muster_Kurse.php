<!DOCTYPE html>
<html lang="de">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/nav-bar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script src="../js/nav-bar.js" defer></script>
    <title>Kursmuster</title>
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
            Kursmuster 1, Kosten
        </h1>
        <p class="schlagwort">
            Musterschlagwörter
        </p>
        <p class="datum">
            Mustersaal, xx Minuten pro Kurseinheit
        </p>
        <p class="beschreibung">
            Dies ist lediglich ein Muster.
            <br>
            Es ist jetzt nicht besonders schön, aber hier steckt viel Arbeit drin.
            <br><br>
            Hier seh ich definitiv einen Yoga-Kurs!
        </p>
        <p class="kUebersicht">
            Auflistung aller Kurs-Termine [Anzahl: xx Termine]
        </p>
        <p class="dozent">
            Dozent: xxx
        </p>
        <hr>
        <div class="flex-container">
            <div>
                Termin 1 <br>
                01.02.2023 19:30 Uhr
            </div>
            <div>
                Termin 2 <br>
                08.02.2023 20:00 Uhr
            </div>
            <div>
                Termin 3 <br>
                15.02.2023 19:30 Uhr
            </div>
            <div>
                Termin 4 <br>
                22.02.2023 19:30 Uhr
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