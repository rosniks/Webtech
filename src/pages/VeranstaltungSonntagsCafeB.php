<!DOCTYPE html>
<html lang="de">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/nav-bar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script src="../js/nav-bar.js" defer></script>
    <title>Sonntags-Café</title>
</head>

<body>

    <!--Navigation-bar-->
    <?php include '../../php/nav.php'; ?>

    <!--Main-Content-->
    <main>

        <button class="vButton" onclick="window.location.href='veranstaltungen.php';">
            Zurück zur Veranstaltungs-Übersicht
        </button>

        <h1 class="vTitel">
            Sonntags-Café
        </h1>
        <p class="schlagwort">
            Altentag, Café, Kuchen, Musikverein
        </p>
        <p class="datum">
            am 12.02.2023 - ab 15:00 Uhr, Saal 1
        </p>
        <p class="beschreibung">
            Unser Lieblingscafé, jeden zweiten Sonntag im Monat.
            <br><br>
            Mit jedem mal wechselndem Programm spielt unser Musikverein seine aktuellen Stücke. Kaffee und Kuchen wird
            laufend frisch in unserer Gemeinschaftsküche von Freiwilligien zubereitet. Auch an Gesellschaftsspielen wird
            es an diesem Tag nicht mangeln.
            <br><br>
            Ein festes Veranstaltungsende ist nicht vorgesehen!
        </p>

        <button class="vButton" onclick="window.location.href='kontakt.php';">
            Weiter zur Kontaktseite mit Formular
        </button>

    </main>


    <!--Footer-->
    <?php include '../../php/footer.php'; ?>

</body>

</html>