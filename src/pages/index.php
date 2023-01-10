<!DOCTYPE html>
<html lang="de">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/nav-bar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script src="../js/nav-bar.js" defer></script>
    <script src="../js/slider.js" defer></script>
    <title>Gemeindezentrum Trier-West</title>
</head>


    <body>

        <!--Navigation-bar-->
        <?php include "../../php/nav.php"; ?>


    <!--Main-Content-->
    <main>
        <div class="slider">
            <div class="slide">
                <a href='raeume.php'><img src="../../img/Gemeinschaftsraum.jpg" alt="Gemeinschaftsraum"></a>
                <div class="slide-beschreibung">
                    <h1 class="slide-title">Freizeit</h1>
                    <p class="silde-text">Entspannung pur erwartet euch im Gemeinschaftraum des Gemeindezentrums. Lernt neue Leute kennen und habt Spaß.</p>
                </div>
            </div>
            <div class="slide">
                <a href="VeranstaltungenSilversterParty.php"><img src="../../img/Silvester-Party.jpg" alt="Silversterparty"></a>
                <div class="slide-beschreibung">
                    <h1 class="slide-title">Silvester-Party</h1>
                    <p class="slide-text">Lasst uns das neue Jahr zusammen begrüßen!</p>
                </div>
            </div>
            <div class="slide">
            <a href="VeranstaltungenSonntagsCafeA.php"><img src="../../img/Sonntags-Cafe.jpg" alt="Sonntags-Cafe">
                <div class="slide-beschreibung">
                    <h1 class="slide-title">Sonntagskaffee</h1>
                    <p class="slide-text">Nette Gespräche. Tolle Menschen. Leckerer Kaffee und Kuchen.</p>
                </div>
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <hr> 
            <div class="news">
                <div class="news-feld">
                    <a href="#"><img src="../../img/weihnachtsmarkt.jpg" alt="Trier Weihnachtsmarkt" class="newsbild"></a>
                    <h1><a href="#">Weihnachtsmarkt</a></h1>
                    <p>Die Vorfreude ist riesig: der Trierer Weihnachtsmarkt hat am Freitag, 18.11.2022 begonnen. Nach
                        zweijährige Corona-Pause kehrt er beinahe im Normalzustand zurück,... <a href="#">weiterlesen</a>
                    </p>
                </div>
                <div class="news-feld">
                    <a href="#"><img src="../../img/corona.jpg" alt="Corona" class="newsbild"></a>
                    <h1><a href="#" class="titel">Corona Regelung</a></h1>
                    <p>Corona ist noch nicht vorbei. Um unsere älteren Mitbürger zu schützen klären wir sie weiter auf. Bei
                        Infektionssymptomen bleiben sie bitte Zuhause...<a href="#">weiterlesen</a></p>
                </div>
            </div>
        </main>

        <!--Footer-->
        <?php include '../../php/footer.php'; ?>

    </body>

</html>