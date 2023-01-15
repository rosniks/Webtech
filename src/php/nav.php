<header class="stick">
    <nav class="navbar">

        <a class="logo" href="../../index.php">GEMEINDEZENTRUM<br>Trier-West</a>

        <a class="sandwich-button">
            <span class="strich"></span>
            <span class="strich"></span>
            <span class="strich"></span>
        </a>

        <div class="navbar-links">
            <ul>
                <li>
                    <a href="veranstaltungen.php"
                        class="<?php echo ($_SERVER['PHP_SELF'] == '/webseite/src/pages/veranstaltungen.php' || $_SERVER['PHP_SELF'] == '/webseite/src/pages/kurse.php' ? 'aktuell' : ''); ?>">Veranstaltungen</a>
                </li>
                <li>
                    <a href="raeume.php"
                        class="<?php echo ($_SERVER['PHP_SELF'] == '/webseite/src/pages/raeume.php' ? 'aktuell' : ''); ?>">Räume</a>
                </li>
                <li>
                    <a href="uberuns.php"
                        class="<?php echo ($_SERVER['PHP_SELF'] == '/webseite/src/pages/uberuns.php' ? 'aktuell' : ''); ?>">Über
                        Uns</a>
                </li>
                <li>
                    <a href="galerie.php"
                        class="<?php echo ($_SERVER['PHP_SELF'] == '/webseite/src/pages/galerie.php' ? 'aktuell' : ''); ?>">Galerie</a>
                </li>
                <li>
                    <a href="kontakt.php"
                        class="<?php echo ($_SERVER['PHP_SELF'] == '/webseite/src/pages/kontakt.php' ? 'aktuell' : ''); ?>">Kontakt</a>
                </li>
            </ul>

            <?php echo ($_SERVER['PHP_SELF'] == '/webseite/src/pages/veranstaltungen.php' ? '<ul>
                        <li class="aktuell"><a href="veranstaltungen.php">aktuelle Veranstaltungen</a></li>
                        <li><a href="kurse.php">aktuelle Kurse</a></li>
            </ul>' : ''); ?>
            <?php echo ($_SERVER['PHP_SELF'] == '/webseite/src/pages/kurse.php' ? '<ul>
                        <li><a href="veranstaltungen.php">aktuelle Veranstaltungen</a></li>
                        <li class="aktuell"><a href="kurse.php">aktuelle Kurse</a></li>
            </ul>' : ''); ?>
        </div>

    </nav>
</header>