<!DOCTYPE html>
<html lang="de">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/nav-bar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script src="../js/nav-bar.js" defer></script>
    <title>Heimatkino</title>
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
            Heimatkino - Der gestiefelte Kater
        </h1>
        <p class="schlagwort">
            Kino, FSK 6 | Spielzeit 103 Minuten
        </p>
        <p class="datum">
            am 20.02.2023 - beginn 19:00 Uhr, Saal 3
        </p>
        <p class="beschreibung">
            Ein Film für die ganze Familie!<br><br>
            Der Einlass beginnt ab 18:30 Uhr. Ticketpreis 5€.<br>
            Tickets sind telefonisch reservierbar und an der Abendkasse erhältlich. Getränke können Sie vor Spielbeginn
            an unserer Hauseigenen Theke erwerben.<br><br>

            Filmbeschreibung:<br><br>
            Auch ein Kater kann ein unangenehmes Erwachen haben.
            Nach unzähligen riskanten Reisen und achtlosen Abenteuern muss der gestiefelte Kater entsetzt feststellen,
            dass seine Leidenschaft für Gefahren letztlich ihren Preis hatte - in seiner Abenteuerlust hat er bereits
            acht seiner neun Leben verbraucht. Um für die dringend nötige neue Vitalität zu sorgen, begibt sich der
            charmante Schnurrhaargauner auf den langen Weg in den Schwarzen Wald, um dort den mythischen Wunschstern zu
            finden. Leider entpuppt sich dieses Unterfangen mit nur einem verbleibenden Leben auf dem Katerkonto als
            ungewohnt risikoreich, sodass nicht nur ernsthafte Zurückhaltung gefragt ist, sondern auch ein wenig
            Unterstützung in Form der so hinreißenden wie hinterhältigen Kitty Samtpfote und des gutgelaunt
            geschwätzigen Vierbeiners Perro. Gemeinsam muss das ungewöhnliche Trio die Stiefel in die Hand nehmen, um
            sowohl Goldlöckchen und ihren drei berüchtigten Bandenbären als auch dem fiesen Kopfgeldjäger großer böser
            Wolf immer einen Schritt voraus zu sein.
        </p>

        <button class="vButton" onclick="window.location.href='kontakt.php';">
            Weiter zur Kontaktseite mit Formular
        </button>

    </main>


    <!--Footer-->
    <?php include '../php/footer.php'; ?>

</body>

</html>