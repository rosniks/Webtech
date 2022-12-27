<!DOCTYPE html>
<html lang="de">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/nav-bar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script src="../js/nav-bar.js" defer></script>
    <script src="../js/table-SearchEngine.js"></script>
    <title>aktuelle Kurse</title>
</head>

<body>

    <!--Navigation-bar-->
    <?php include '../../php/nav.php'; ?>

    <!--Main-Content-->
    <main>

        <h1>Aktuell geplante Kurse</h1>

        <p>Sie möchten genaueres zu einer Veranstaltung wissen? Klicken Sie auf die entsprechende Tabellen-Spalte!</p>


        <!--Input für die Veranstaltungssuche-->
        <input id="searchbar" onkeyup="search_veranstaltung()" type="text" name="search" placeholder="Tabelle durchsuchen">

        <!--Beginn der Veranstaltungstabelle-->
        <div class="tableContainer">
            <table class="table">
                <tr>
                    <th>Termin</th>
                    <th>Uhrzeit</th>
                    <th>Kursname</th>
                    <th>Raum</th>
                    <th>Termine</th>
                    <th>Kosten</th>
                    <th>Schlagworte</th>
                </tr>
                <tr class="veranstaltung">
                    <td><a href="Kurse/Kursmuster.html">Dienstag, ab 07.02.23</a></td>
                    <td><a href="Kurse/Kursmuster.html">19:00 - 19:45 Uhr</a></td>
                    <td><a href="Kurse/Kursmuster.html">Französisch für Anfänger</a></td>
                    <td><a href="Kurse/Kursmuster.html">Saal 3</a></td>
                    <td><a href="Kurse/Kursmuster.html">12</a></td>
                    <td><a href="Kurse/Kursmuster.html">60€</a></td>
                    <td><a href="Kurse/Kursmuster.html">Sprachen, Französisch</a></td>
                </tr>
                <tr class="veranstaltung">
                    <td><a href="Kurse/Kursmuster.html">Dienstag, ab 14.02.23</a></td>
                    <td><a href="Kurse/Kursmuster.html">18:00 - 18:45 Uhr</a></td>
                    <td><a href="Kurse/Kursmuster.html">Luxemburgisch lernen</a></td>
                    <td><a href="Kurse/Kursmuster.html">Saal 3</a></td>
                    <td><a href="Kurse/Kursmuster.html">12</a></td>
                    <td><a href="Kurse/Kursmuster.html">60€</a></td>
                    <td><a href="Kurse/Kursmuster.html">Sprachen, Luxemburgisch</a></td>
                </tr>
                <tr class="veranstaltung">
                    <td><a href="Kurse/Kursmuster.html">Samstag, ab 18.02.23</a></td>
                    <td><a href="Kurse/Kursmuster.html">14:00 - 15:00 Uhr</a></td>
                    <td><a href="Kurse/Kursmuster.html">Landschaftsfotografie</a></td>
                    <td><a href="Kurse/Kursmuster.html">Saal 3</a></td>
                    <td><a href="Kurse/Kursmuster.html">3</a></td>
                    <td><a href="Kurse/Kursmuster.html">15€</a></td>
                    <td><a href="Kurse/Kursmuster.html">Kultur, Gestalten, Kunst, Fotografie, Landschaft</a></td>
                </tr>
                <tr class="veranstaltung">
                    <td><a href="Kurse/Kursmuster.html">Montag, ab 20.02.23</a></td>
                    <td><a href="Kurse/Kursmuster.html">19:00 - 21:00 Uhr</a></td>
                    <td><a href="Kurse/Kursmuster.html">Facetten der römischen Küche</a></td>
                    <td><a href="Kurse/Kursmuster.html">Saal 2</a></td>
                    <td><a href="Kurse/Kursmuster.html">5</a></td>
                    <td><a href="Kurse/Kursmuster.html">150€</a></td>
                    <td><a href="Kurse/Kursmuster.html">Ernährung, regionale Küche, Kultur, Kochen</a></td>
                </tr>
                <tr class="veranstaltung">
                    <td><a href="Kurse/Kursmuster.html">Mittwoch, ab 08.03.23</a></td>
                    <td><a href="Kurse/Kursmuster.html">18:00 - 19:00 Uhr</a></td>
                    <td><a href="Kurse/Kursmuster.html">Gymnastik-Kurs</a></td>
                    <td><a href="Kurse/Kursmuster.html">Saal 1</a></td>
                    <td><a href="Kurse/Kursmuster.html">10</a></td>
                    <td><a href="Kurse/Kursmuster.html">70€</a></td>
                    <td><a href="Kurse/Kursmuster.html">Bewegung, Gymnastik, Sport, Gesundheit</a></td>
                </tr>
            </table>
        </div>

    </main>

    <!--Footer-->
    <?php include '../../php/footer.php'; ?>

</body>

</html>