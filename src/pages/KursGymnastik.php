<!DOCTYPE html>
<html lang="de">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/nav-bar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script src="../js/nav-bar.js" defer></script>
    <title>Gymnastik-Kurs</title>
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
            Gymnastik-Kurs, 70€
        </h1>
        <p class="schlagwort">
            Bewegung, Gymnastik, Sport, Gesundheit
        </p>
        <p class="datum">
            60 Minuten pro Kurseinheit, Saal 1
        </p>
        <p class="beschreibung">
            Dieser Kurs richtet sich an alle, die etwas für die Gesundheit ihres Körpers tun möchten.
            Erlernt werden unter exakter Anleitung spezielle Übungen zur Kräftigung, Stabilisierung und Beweglichkeit
            sowie auch zur Dehnung und Lockerung der Muskulatur. Besonders beachtet und trainiert werden dabei die
            Atmung und eine gute und entspannte Körperhaltung, die Beschwerden und Schmerzen vor allem im Kopf-, Nacken-
            oder Rücken lindern kann.
            <br><br>
            Die Übungen sind für Teilnehmer jeden Alters geeignet.
            Bei entsprechender Teilnehmerzahl wird der Kurs fortlaufend (außerhalb der Ferien) angeboten. Einstieg ist
            jederzeit möglich.
            <br><br>
            Dozent: Margit Dyllenburger
        </p>
        <p class="kUebersicht">
            Auflistung aller Kurs-Termine [Anzahl: 10 Termine]
        </p>
        <hr>
        <div class="flex-container">
            <div>
                Termin 1 <br>
                08.03.2023 18:00 Uhr
            </div>
            <div>
                Termin 2 <br>
                15.03.2023 18:00 Uhr
            </div>
            <div>
                Termin 3 <br>
                22.03.2023 18:00 Uhr
            </div>
            <div>
                Termin 4 <br>
                29.03.2023 18:00 Uhr
            </div>
            <div>
                Termin 5 <br>
                05.04.2023 18:00 Uhr
            </div>
            <div>
                Termin 6 <br>
                12.04.2023 18:00 Uhr
            </div>
            <div>
                Termin 7 <br>
                19.04.2023 18:00 Uhr
            </div>
            <div>
                Termin 8 <br>
                26.04.2023 18:00 Uhr
            </div>
            <div>
                Termin 9 <br>
                03.05.2023 18:00 Uhr
            </div>
            <div>
                Termin 10 <br>
                10.05.2023 18:00 Uhr
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