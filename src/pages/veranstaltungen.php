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
                        <td><a href="Veranstaltungen/VeranstaltungSilvesterParty.html">31.01.2022</a></td>
                        <td><a href="Veranstaltungen/VeranstaltungSilvesterParty.html">ab 21:00 Uhr</a></td>
                        <td><a href="Veranstaltungen/VeranstaltungSilvesterParty.html">Silvester-Party</a></td>
                        <td><a href="Veranstaltungen/VeranstaltungSilvesterParty.html">Saal 1</a></td>
                        <td><a href="Veranstaltungen/VeranstaltungSilvesterParty.html">Silvester, Disco, Theke</a></td>
                    </tr>
                    <tr class="veranstaltung">
                        <td><a href="Veranstaltungen/VeranstaltungNeujahresKonzert.html">01.02.2023</a></td>
                        <td><a href="Veranstaltungen/VeranstaltungNeujahresKonzert.html">ab 17:00 Uhr</a></td>
                        <td><a href="Veranstaltungen/VeranstaltungNeujahresKonzert.html">Neujahres-Konzert</a></td>
                        <td><a href="Veranstaltungen/VeranstaltungNeujahresKonzert.html">Saal 2</a></td>
                        <td><a href="Veranstaltungen/VeranstaltungNeujahresKonzert.html">Musikverein, Theke, Konzert</a></td>
                    </tr>
                    <tr class="veranstaltung">
                        <td><a href="Veranstaltungen/VeranstaltungSonntagsCafeA.html">08.01.2023</a></td>
                        <td><a href="Veranstaltungen/VeranstaltungSonntagsCafeA.html">ab 15:00 Uhr</a></td>
                        <td><a href="Veranstaltungen/VeranstaltungSonntagsCafeA.html">Sonntags-Café</a></td>
                        <td><a href="Veranstaltungen/VeranstaltungSonntagsCafeA.html">Saal 1</a></td>
                        <td><a href="Veranstaltungen/VeranstaltungSonntagsCafeA.html">Altentag, Café, Kuchen, Musikverein</a></td>
                    </tr>
                    <tr class="veranstaltung">
                        <td><a href="Veranstaltungen/VeranstaltungHeimatkino.html">20.02.2023</a></td>
                        <td><a href="Veranstaltungen/VeranstaltungHeimatkino.html">19:00 Uhr</a></td>
                        <td><a href="Veranstaltungen/VeranstaltungHeimatkino.html">Heimatkino - Der gestiefelte Kater</a></td>
                        <td><a href="Veranstaltungen/VeranstaltungHeimatkino.html">Saal 3</a></td>
                        <td><a href="Veranstaltungen/VeranstaltungHeimatkino.html">Kino, FSK 6 | Spielzeit 103 Minuten </a></td>
                    </tr>
                    <tr class="veranstaltung">
                        <td><a href="Veranstaltungen/VeranstaltungSonntagsCafeB.html">12.02.2023</a></td>
                        <td><a href="Veranstaltungen/VeranstaltungSonntagsCafeB.html">ab 15:00 Uhr</a></td>
                        <td><a href="Veranstaltungen/VeranstaltungSonntagsCafeB.html">Sonntags-Café</a></td>
                        <td><a href="Veranstaltungen/VeranstaltungSonntagsCafeB.html">Saal 1</a></td>
                        <td><a href="Veranstaltungen/VeranstaltungSonntagsCafeB.html">Altentag, Café, Kuchen, Musikverein</a></td>
                    </tr>
                </table>
            </div>

        </main>

        <!--Footer-->
        <?php include '../../php/footer.php'; ?>

    </body>

</html>