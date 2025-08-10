<?php include_once __DIR__ . '/../includes/funktionen.php'; ?>

<header>
    <nav>
        <ul>
            <li class="icon"><a href="<?= $relPath ?>index.php"><img src="<?= $relPath ?>favicon.svg" alt="Kuchen"></a></li>
            <li class="dropdown"><a href="<?= $relPath ?>php/kreationen.php">Kreationen</a>
                <ul class="dropdown-content">
                    <?= createDropdown($dessertKategorie, $dessert); ?>
                    <?= createDropdown($kuchenKategorie, $kuchen); ?>
                    <?= createDropdown($gebaeckKategorie, $gebaeck); ?>
                    
                    <!-- Davor Beispiel Desserts 
                    <li class="dropdown"> <?= $dessertKategorie ?>
                        <ul class="dropdown-content">
                            <?= createList($dessert, 'li');?>
                        </ul>
                    </li> -->
                    
                </ul>
            </li>
            <li><a href="<?= $relPath ?>php/uebersicht.php">Rezeptübersicht</a></li>
            <li><a href="<?= $relPath ?>php/kontakt.php">Kontakt</a></li>
            <li><?php echo getMode($mode) ?></li>
        </ul>
    </nav>
</header>