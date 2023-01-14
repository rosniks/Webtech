<!DOCTYPE html>
<html lang="de">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/nav-bar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script src="../js/nav-bar.js" defer></script>
    <title>Landschaftsfotografie</title>
</head>

<body>

    <!--Navigation-bar-->
    <?php include '../php/nav.php'; ?>

    <!--Main-Content-->
    <main>

        <button class="vButton" onclick="window.location.href='kurse.php';">
            Zurück zur Kurs-Übersicht
        </button>

        <h1 class="vTitel">
            Landschaftsfotografie, 15€
        </h1>
        <p class="schlagwort">
            Kultur, Gestalten, Kunst, Fotografie, Landschaft
        </p>
        <p class="datum">
            180 Minuten pro Kurseinheit, Saal 3
        </p>
        <p class="beschreibung">
            Teilen Sie auch die Leidenschaft für die Landschaftsfotografie?
            <br><br>
            Alles, was Sie mitbringen müssen, ist Ihre Kamera, Stativ - wenn vorhanden - und Unvoreingenommenheit. Der
            Kursleiter möchte nicht nur Ihr fotografisches Können verbessern, sondern auch seinen Enthusiasmus
            weitergeben und Sie kreativ inspirieren. Hierbei wird die Schönheit der Natur festgehalten.
            <br><br>
            Dozent: Johann Müller
        </p>
        <p class="kUebersicht">
            Auflistung aller Kurs-Termine [Anzahl: 3 Termine]
        </p>
        <hr>
        <div class="flex-container">
            <div>
                Termin 1 <br>
                18.02.23 13:00 Uhr
            </div>
            <div>
                Termin 2 <br>
                25.02.2023 13:00 Uhr
            </div>
            <div>
                Termin 3 <br>
                04.03.2023 13:00 Uhr
            </div>
        </div>

        <button class="vButton" onclick="window.location.href='kontakt.php';">
            Weiter zur Kontaktseite mit Formular
        </button>

    </main>


    <!--Footer-->
    <?php include '../php/footer.php'; ?>

</body>

</html>