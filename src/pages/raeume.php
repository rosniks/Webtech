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
                <img src="../../img/RaumplanEG.png" alt="Raumplan des Erdgeschosses">
            </div>
            <div class="raumpplanEl">
                <h1>Erster Stock</h1>
                <img src="../../img/RaumplanOG.png" alt="Raumplan des Ersten Stocks">
            </div>
        </div>
    </main>



    <!--Footer-->
    <?php include '../../php/footer.php'; ?>

</body>