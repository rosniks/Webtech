<!DOCTYPE html>
<html lang="de">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="stylesheet" href="../css/nav-bar.css">
        <link rel="stylesheet" href="../css/footer.css">
        <script src="../js/nav-bar.js" defer></script>
        <script src="../js/table-SearchEngine.js"></script>
        <title>aktuelle Veranstaltungen</title>
    </head>

    <body>

        <!--Navigation-bar-->
        <?php include "../../php/nav.php"; ?>

        <!--Main-Content-->
        <main>

            <h1>Aktuell geplante Veranstaltungen</h1>

            <p>Sie möchten genaueres zu einer Veranstaltung wissen? Klicken Sie auf die entsprechende Tabellen-Spalte!</p>

            <!--Input für die Veranstaltungssuche-->
            <input id="searchbar" onkeyup="search_veranstaltung()" type="text" name="search" placeholder="Tabelle durchsuchen">

            <!--Beginn der Veranstaltungstabelle-->
            <div class="tableContainer">
                <table class="table">
                    <tr>
                        <th>Termin</th>
                        <th>Uhrzeit</th>
                        <th>Veranstaltungsname</th>
                        <th>Raum</th>
                        <th>Schlagworte</th>
                    </tr>
                    <tr class="veranstaltung">
                        <td><a href="VeranstaltungSilvesterParty.php">31.12.2022</a></td>
                        <td><a href="VeranstaltungSilvesterParty.php">ab 21:00 Uhr</a></td>
                        <td><a href="VeranstaltungSilvesterParty.php">Silvester-Party</a></td>
                        <td><a href="VeranstaltungSilvesterParty.php">Saal 1</a></td>
                        <td><a href="VeranstaltungSilvesterParty.php">Silvester, Disco, Theke</a></td>
                    </tr>
                    <tr class="veranstaltung">
                        <td><a href="VeranstaltungNeujahresKonzert.php">01.02.2023</a></td>
                        <td><a href="VeranstaltungNeujahresKonzert.php">ab 17:00 Uhr</a></td>
                        <td><a href="VeranstaltungNeujahresKonzert.php">Neujahres-Konzert</a></td>
                        <td><a href="VeranstaltungNeujahresKonzert.php">Saal 2</a></td>
                        <td><a href="VeranstaltungNeujahresKonzert.php">Musikverein, Theke, Konzert</a></td>
                    </tr>
                    <tr class="veranstaltung">
                        <td><a href="VeranstaltungSonntagsCafeA.php">08.01.2023</a></td>
                        <td><a href="VeranstaltungSonntagsCafeA.php">ab 15:00 Uhr</a></td>
                        <td><a href="VeranstaltungSonntagsCafeA.php">Sonntags-Café</a></td>
                        <td><a href="VeranstaltungSonntagsCafeA.php">Saal 1</a></td>
                        <td><a href="VeranstaltungSonntagsCafeA.php">Altentag, Café, Kuchen, Musikverein</a></td>
                    </tr>
                    <tr class="veranstaltung">
                        <td><a href="VeranstaltungHeimatkino.php">20.02.2023</a></td>
                        <td><a href="VeranstaltungHeimatkino.php">19:00 Uhr</a></td>
                        <td><a href="VeranstaltungHeimatkino.php">Heimatkino - Der gestiefelte Kater</a></td>
                        <td><a href="VeranstaltungHeimatkino.php">Saal 3</a></td>
                        <td><a href="VeranstaltungHeimatkino.php">Kino, FSK 6 | Spielzeit 103 Minuten </a></td>
                    </tr>
                    <tr class="veranstaltung">
                        <td><a href="VeranstaltungSonntagsCafeB.php">12.02.2023</a></td>
                        <td><a href="VeranstaltungSonntagsCafeB.php">ab 15:00 Uhr</a></td>
                        <td><a href="VeranstaltungSonntagsCafeB.php">Sonntags-Café</a></td>
                        <td><a href="VeranstaltungSonntagsCafeB.php">Saal 1</a></td>
                        <td><a href="VeranstaltungSonntagsCafeB.php">Altentag, Café, Kuchen, Musikverein</a></td>
                    </tr>
                </table>
            </div>

        </main>

        <!--Footer-->
        <?php include '../../php/footer.php'; ?>

    </body>

</html>