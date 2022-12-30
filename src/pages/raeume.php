<!DOCTYPE html>
<html lang="de">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/nav-bar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script src="../js/nav-bar.js" defer></script>
    <title>Räume</title>
</head>

<body>

    <!--Navigation-bar-->
    <?php include "../../php/nav.php"; ?>


    <main>
        <div class="raumplan-container">
            <div class="raumplanEl">
                <h1>Erdgeschoss</h1>
                <img src="../../img/RaumplanEG.png" alt="Raumplan des Erdgeschosses" usemap="#erdgeschoss">
                <!--
                <map name="erdgeschoss">
                    <area alt="Saal 1" title="Saal1" href="#saal1" coords="12,260,250,415" shape="rect">
                    <area alt="Gemeinschaftsraum" title="Gemeinschaftsraum" href="#gmraum" coords="330,250,570,415" shape="rect">
                    <area alt="Saal 2" title="Saal2" href="#saal2" coords="12,80,250,255" shape="rect">
                </map>
-->
            </div>
            <div class="raumplanEl">
                <h1>Erster Stock</h1>
                <img src="../../img/RaumplanOG.png" alt="Raumplan des Ersten Stocks" usemap="#ersterstock">
                <map name="ersterstock">
                    <!--
                    <area alt="Z-Räume" title="Z-Räume" href="#z" coords="12,320,320,415" shape="rect">
                    <area alt="Saal 3" title="Saal 3" href="#saal3" coords="330,250,570,415" shape="rect">
                    <area alt="Küche" title="Küche" href="#kueche" coords="12,80,250,220" shape="rect">
                </map>
-->
            </div>
        </div>

        <hr>

        <div class="container-raumbeschreibung">
            <h1 id="gmraum">Gemeinschaftsraum</h1>
            <img class="raumbild" src="../../img/Gemeinschaftsraum.jpg" alt="Gemeinschaftsraum">
            <p>
                Ein Ort um sich mit Freunden und Bekannten zu Treffen und Spaß zu haben. Unser Gemeinschaftsraum bietet für jeden etwas. Seien es die Bücher oder Brettspiele, der Kickertisch, oder einfach die Menschen.
                Hier findest du ein Platz zum entspannen. Jeder ist hier gerne gesehen. Wir achten auf ein freundliches Miteinander und möchten das sich jeder hier Wohl fühlt. 

            </p>
        </div>
        
        <hr>

        <div class="container-raumbeschreibung">
            <h1 id="saal1">Saal 1</h1>
            <img class="raumbild" src="../../img/saal1.jpg" alt="Saal 1">

            <p>
                Der kleinste unserer Sääle, aber er hat viel zu bieten. Im Saal 1 hat man alles was man für eine gute Veranstaltung braucht. Tische und Stühle stehen frei zur Verfügung.
                Der Raum bietet Platz für bis zu 30 Personen sitzend, und für bis zu 60 Personen stehend. 
                Ideal kann der Saal für mittelgroße Partys und Kurse genutzt werden.
            </p>
        </div>

        <hr>

        <div class="container-raumbeschreibung">
            <h1  id="saal2">Saal 2</h1>
            <img class="raumbild" src="../../img/saal2.jpg" alt="Saal 2">
            <p>
                Ein großer Raum für große Veranstaltungen. Sei es die Silvesterparty oder das Sommerfest, hier finden die Hauptveranstaltungen statt. Mit einer Kapazität von über 100 Personen kann man hier richtig groß Feiern.

            </p>
        </div>

        <hr>

        <div class="container-raumbeschreibung">
            <h1 id="saal3">Saal 3</h1>
            <img class="raumbild" src="../../img/saal3.jpg" alt="Saal 3">
            <p>
                <strong>"The Show must go on!"</strong> So zumindest das Motto dieses Saals. Mit der großen Tribüne, den vielen Sitzplätzen, der Leinwand und der Lichtershow ist dieser Raum perfekt für alles das was beeindrucken soll.
                Bands finden hier den besten Ort um Konzerte zu halten. Regelmäßig finden Filmabende statt, Künstler haben die Chance sich zu präsentieren und mehr.

            </p>
        </div>

        <hr>

        <div class="container-raumbeschreibung">
            <h1 id="z">Z1, Z2, Z3</h1>
            <img class="raumbild" src="../../img/z.jpg" alt="Z Räume">
            <p>
                Sie möchten einen schönen Abend unter Freunden machen und wissen nicht wohin? Die Räume Z1-3 bieten sich hier perfekt an. Reservieren Sie für sich einen dieser Räume und haben Sie Spaß.
                In den Räumen befinden sich je zwei Tische und acht bequemen Stühle, die Sie so verschieben können wie Sie möchten. Seien es Spielabende, kleine Tuniere oder auch einfach ein netter Abend unter Freuden,
                hier sind Sie am richtigen Ort.
            </p>
        </div>

        <hr>

        <div class="container-raumbeschreibung">
            <h1 id="kueche">Küche</h1>
            <img class="raumbild" src="../../img/kueche.jpg" alt="Küche">
            <p>
                Die modern ausgestattete Küche ist perfekt fürs Kochen. Hier werden die Kuchen für die Sonntagskaffees gebacken, die Snacks für die Partys vorbereitet und mehr.
                Die Küche kann für eine Veranstaltung dazu gebucht werden, oder für zum Beispiel Kochkurse verwendet werden. Falls Sie die Küche extra dazubuchen möchten, geben Sie dies bitte im Eingabefeld des Formulars an. 
            </p>
        </div>

    </main>



    <!--Footer-->
    <?php include '../../php/footer.php'; ?>

</body>