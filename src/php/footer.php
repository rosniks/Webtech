<footer>
    <div class="col1">
        <h3>Kontakt</h3>
        <p>
            Gemeindezentrum Trier-West<br>
            Eurener Str. 1<br>
            54294 Trier<br>
            Tel.: 06511 / 123456789<br><br>
            <?php 
            if ($_SERVER["PHP_SELF"] == "/webseite/index.php" || $_SERVER["PHP_SELF"] == "/webseite"){
                echo ('
                <a href="#" class="icon"><img src="img/Facebook.png" alt="Facebook"></a>
                <a href="#" class="icon"><img src="img/Instagram.png" alt="Instagram"></a>
                <a href="#" class="icon"><img src="img/Twitter.png" alt="Twitter"></a><br>
                </div>
                <div class="col2">
                    <a href="src/pages/impressum.php">Impressum</a>
                    <a href="src/pages/datenschutzrichtlinien.php">Datenschutzrichtlinien</a>
                </div>');
            }
            else{
                echo('            
                <a href="#" class="icon"><img src="../../img/Facebook.png" alt="Facebook"></a>
                <a href="#" class="icon"><img src="../../img/Instagram.png" alt="Instagram"></a>
                <a href="#" class="icon"><img src="../../img/Twitter.png" alt="Twitter"></a><br>
                </div>
                <div class="col2">
                    <a href="impressum.php">Impressum</a>
                    <a href="datenschutzrichtlinien.php">Datenschutzrichtlinien</a>
                </div>');
            }
            ?>
</footer>