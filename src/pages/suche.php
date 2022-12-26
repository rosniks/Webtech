<!DOCTYPE html>
<html lang="de">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="stylesheet" href="../css/nav-bar.css">
        <link rel="stylesheet" href="../css/footer.css">
        <script src="../js/nav-bar.js" defer></script>
        <title>Suche</title>
    </head>

    <body>

        <!--Navigation-bar-->
        <?php include "../../php/nav.php"; ?>

        <!--Main-Content-->
        <main>

            <h1>Webseite des Gemeindezentrums durchsuchen</h1>

            <input id="searchbar" placeholder="Suchbegriff">

            <div class="flex-container">
                <button class="SearchButton">Finden</button>
                <!--Einfach die Seite neu laden! Ist am effizientesten.-->
                <button class="SearchButton" onclick="window.location.href='SucheIntern.html';">Suche zurücksetzen</button>
            </div>

            <p>Bitte geben Sie einen Suchbegriff in der Suchzeile ein und klicken Sie auf 'Finden'.</p>

        </main>

        <!--Footer-->
        <?php include '../../php/footer.php'; ?>
    
    </body>
    
    </html>