<?php
include_once __DIR__ . '/../includes/funktionen.php';
?>

<header>
    <nav>
        <ul>
            <li class = "icon"><a href="<?= $relPath ?>index.php"><img src="<?= $relPath ?>favicon.svg" alt="Kuchen"></a></li>
            <li><a href="<?= $relPath ?>php/uebersicht.php">Rezeptübersicht</a></li>
            <li class="dropdown"><a href="<?= $relPath ?>php/kreationen.php">Kreationen</a>
                <ul class="dropdown-content">
                    <li><a href="<?= $relPath ?>php/kreationen/dessertvariation.php">Dessertvariation</a></li>
                    <li><a href="<?= $relPath ?>php/kreationen/mango-kokos-kugel.php">Mango-Kokos-Kugel</a></li>
                    <li><a href="<?= $relPath ?>php/kreationen/schoko-kirsch-toertchen-mit-strukturbiskuit.php">Schoko-Kirsch-Törtchen-mit-Strukturbiskuit</a></li>
                    <li><a href="<?= $relPath ?>php/kreationen/tiramisu.php">Tiramisu</a></li>
                    <li><a href="<?= $relPath ?>php/kreationen/schokoladenmousse-im-schokobecher.php">Schokoladenmousse im Schokobecher</a></li>
                </ul>
            </li>
            <li><a href="<?= $relPath ?>php/kontakt.php">Kontakt</a></li>
            <li><?php echo getMode($mode) ?></li>
        </ul>
    </nav>
</header>