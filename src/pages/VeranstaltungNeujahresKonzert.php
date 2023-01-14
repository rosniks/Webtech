<!DOCTYPE html>
<html lang="de">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/nav-bar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script src="../js/nav-bar.js" defer></script>
    <title>Neujahres-Konzert</title>
</head>

<body>

    <!--Navigation-bar-->
    <?php include '../php/nav.php'; ?>

    <!--Main-Content-->
    <main>

        <button class="vButton" onclick="window.location.href='veranstaltungen.php';">
            Zurück zur Veranstaltungs-Übersicht
        </button>

        <h1 class="vTitel">
            Neujahres-Konzert
        </h1>
        <p class="schlagwort">
            Musikverein, Theke, Konzert
        </p>
        <p class="datum">
            am 01.02.2023 - ab 17:00 Uhr, Saal 2
        </p>
        <p class="beschreibung">
            Alle Jahre wieder gibt unser verehrter Musikverein seine schönsten Polkastücke zum besten. So auch dieses
            Jahr.<br><br> Der Eintritt ist frei, es wird jedoch eine Spendenbox neben dem Saaleingang aufgestellt. Für die Getränke müssen Sie
            selbst aufkommen.
        </p>

        <button class="vButton" onclick="window.location.href='kontakt.php';">
            Weiter zur Kontaktseite mit Formular
        </button>

    </main>


    <!--Footer-->
    <?php include '../php/footer.php'; ?>

</body>

</html>