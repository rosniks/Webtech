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

            <h1>aktuell geplante Kurse</h1>

            <p>Sie möchten genaueres zu einer Veranstaltung wissen? Klicken Sie auf die entsprechende Tabellen-Spalte!</p>


            <!--Input für die Veranstaltungssuche-->
            <input id="searchbar" onkeyup="search_veranstaltung()" type="text" name="search" placeholder="Tabelle durchsuchen">

            <!--Beginn der Veranstaltungstabelle-->
            <div class="tableContainer">
                <table class="table">
                    <tr>
                        <th class="vDate">Datum & Uhrzeit</th>
                        <th class="vName">Kursname</th>
                        <th>Terminanzahl</th>
                        <th>Preis</th>
                        <th>Raumangabe</th>
                        <th>Schlagworte</th>
                    </tr>
                    <tr class="veranstaltung">
                        <td><a href="Kurse/Kursmuster.html">12.12.2022 19:00 Uhr</a></td>
                        <td><a href="Kurse/Kursmuster.html">Kursmuster 1</a></td>
                        <td><a href="Kurse/Kursmuster.html">10x</a></td>
                        <td><a href="Kurse/Kursmuster.html">120€</a></td>
                        <td><a href="Kurse/Kursmuster.html">Mustersaal 1</a></td>
                        <td><a href="Kurse/Kursmuster.html">Musterschlagwort A</a></td>
                    </tr>
                    <tr class="veranstaltung">
                        <td><a href="Kurse/Kursmuster.html">13.12.2022 19:00 Uhr</a></td>
                        <td><a href="Kurse/Kursmuster.html">Kursmuster 2</a></td>
                        <td><a href="Kurse/Kursmuster.html">7x</a></td>
                        <td><a href="Kurse/Kursmuster.html">55€</a></td>
                        <td><a href="Kurse/Kursmuster.html">Mustersaal 2</a></td>
                        <td><a href="Kurse/Kursmuster.html">Musterschlagwort B</a></td>
                    </tr>
                    <tr class="veranstaltung">
                        <td><a href="Kurse/Kursmuster.html">14.12.2022 19:00 Uhr</a></td>
                        <td><a href="Kurse/Kursmuster.html">Kursmuster 3</a></td>
                        <td><a href="Kurse/Kursmuster.html">10x</a></td>
                        <td><a href="Kurse/Kursmuster.html">70€</a></td>
                        <td><a href="Kurse/Kursmuster.html">Mustersaal 3</a></td>
                        <td><a href="Kurse/Kursmuster.html">Musterschlagwort C</a></td>
                    </tr>
                    <tr class="veranstaltung">
                        <td><a href="Kurse/Kursmuster.html">15.12.2022 19:00 Uhr</a></td>
                        <td><a href="Kurse/Kursmuster.html">Kursmuster 4</a></td>
                        <td><a href="Kurse/Kursmuster.html">5x</a></td>
                        <td><a href="Kurse/Kursmuster.html">30€</a></td>
                        <td><a href="Kurse/Kursmuster.html">Mustersaal 4</a></td>
                        <td><a href="Kurse/Kursmuster.html">Musterschlagwort D</a></td>
                    </tr>
                    <tr class="veranstaltung">
                        <td><a href="Kurse/Kursmuster.html">16.12.2022 19:00 Uhr</a></td>
                        <td><a href="Kurse/Kursmuster.html">Kursmuster 5</a></td>
                        <td><a href="Kurse/Kursmuster.html">10x</a></td>
                        <td><a href="Kurse/Kursmuster.html">100€</a></td>
                        <td><a href="Kurse/Kursmuster.html">Mustersaal 5</a></td>
                        <td><a href="Kurse/Kursmuster.html">Musterschlagwort E</a></td>
                    </tr>
                </table>
            </div>        

        </main>

        <!--Footer-->
        <?php include '../../php/footer.php'; ?>

    </body>

</html>