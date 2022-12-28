<!DOCTYPE html>
<html lang="de">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/nav-bar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script src="../js/nav-bar.js" defer></script>
    <title>Silvester-Party</title>
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
            Silvester-Party
        </h1>
        <p class="schlagwort">
            Silvester, Disco, Theke
        </p>
        <p class="datum">
            am 31.01.2022 - ab 21:00 Uhr, Saal 1
        </p>
        <p class="beschreibung">
            Lasst uns das neue Jahr zusammen begrüßen!
            <br><br>
            Für das lebliche wohl ist gesorgt. Die Mitarbeiter des Hauses freuen sich darauf euch an der hauseigenen Theke begrüßen zu dürfen.
            Pünktlich um Mitternacht findet ein von uns organisiertes Feuerwerk auf dem großen Parkplatz vor dem Haus statt. 
            <br><br>
            Der Eintritt ist frei, lediglich für die Getränke müssen sie selbst aufkommen.
            <br><br>
            WICHTIG!<br>
            Für das Feuerwerk wird der halbe Parkplatz abgesperrt, damit das Schadensrisiko für parkende Autos reduziert wird!
        </p>

        <button class="vButton" onclick="window.location.href='kontakt.php';">
            Weiter zur Kontaktseite mit Formular
        </button>

    </main>


    <!--Footer-->
    <?php include '../../php/footer.php'; ?>

</body>

</html>