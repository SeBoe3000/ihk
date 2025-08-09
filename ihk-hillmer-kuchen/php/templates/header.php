<header>
    <nav>
        <ul>
            <li class="icon"><a href="<?= $relPath ?>index.php"><img src="<?= $relPath ?>favicon.svg" alt="Kuchen"></a></li>
            
            <li class="dropdown"><a href="<?= $relPath ?>php/kreationen.php">Kreationen</a>
                <ul class="dropdown-content">

                    <li class="dropdown"><a href="<?= $relPath ?>php/kreationen-navigation/desserts.php">Desserts</a>
                        <ul class="dropdown-content">
                            <!-- zum Testen extra Menüpunkt Ebene 2 mit Untermenüpunkte 3 und 4
                            <li class="dropdown"><a href="<?= $relPath ?>php/kreationen-navigation/desserts.php">Zweite Ebene</a>
                                <ul class="dropdown-content">
                                    <li class="dropdown"><a href="<?= $relPath ?>php/kreationen-navigation/desserts.php">Dritte Ebene</a>
                                        <ul class="dropdown-content">
                                            <li><a href="<?= $relPath ?>php/kreationen/dessertvariation.php">Vierte Ebene</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            zum Testen Ende -->
                            <li><a href="<?= $relPath ?>php/kreationen/dessertvariation.php">Dessertvariation</a></li>
                            <li><a href="<?= $relPath ?>php/kreationen/tiramisu.php">Tiramisu</a></li>
                            <li><a href="<?= $relPath ?>php/kreationen/mango-kokos-kugel.php">Mango-Kokos-Kugel</a></li>
                            <li><a href="<?= $relPath ?>php/kreationen/schoko-kirsch-toertchen-mit-strukturbiskuit.php">Schoko-Kirsch Törtchen</a></li>
                            <li><a href="<?= $relPath ?>php/kreationen/schokoladenmousse-im-schokobecher.php">Schokoladenmousse</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="<?= $relPath ?>php/kreationen-navigation/kuchen.php">Kuchen</a>
                        <ul class="dropdown-content">
                            <li><a href="<?= $relPath ?>php/kreationen/schwarzwaelder.php">Schwarzwälder</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="<?= $relPath ?>php/kreationen-navigation/kleines-gebaeck.php">Kleines Gebäck</a>
                        <ul class="dropdown-content">
                            <li><a href="<?= $relPath ?>php/kreationen/schneckennudeln.php">Schneckennudeln</a></li>
                            <li><a href="<?= $relPath ?>php/kreationen/croissant.php">Croissant</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="<?= $relPath ?>php/uebersicht.php">Rezeptübersicht</a></li>
            <li><a href="<?= $relPath ?>php/kontakt.php">Kontakt</a></li>
            <li><?php echo getMode($mode) ?></li>
        </ul>
    </nav>
</header>