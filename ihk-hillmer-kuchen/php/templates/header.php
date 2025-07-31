<?php
include_once __DIR__ . '/../includes/funktionen.php';
?>

<header>
    <nav>
        <ul>
            <li><a href="<?= $relPath ?>index.php">Start</a></li>
            <li><a href="<?= $relPath ?>php/uebersicht.php">Rezeptübersicht</a></li>
            <li class="dropdown"><a href="<?= $relPath ?>php/uebersicht.php">Einzelne Rezepte</a>
                <ul class="dropdown-content">
                    <li><a href="<?= $relPath ?>php/uebersicht.php">Rezept 1</a></li>
                    <li><a href="<?= $relPath ?>php/uebersicht.php">Rezept 2</a></li>
                </ul>
            </li>
            <li class="dropdown"><a href="<?= $relPath ?>php/uebersicht.php">Kreationen</a>
                <ul class="dropdown-content">
                    <li><a href="<?= $relPath ?>php/uebersicht.php">Kreation 1</a></li>
                    <li><a href="<?= $relPath ?>php/uebersicht.php">Kreation 2</a></li>
                </ul>
            </li>
            <li><a href="<?= $relPath ?>php/kontakt.php">Header 3</a></li>
            <li><?php echo getMode($mode) ?></li>
        </ul>
    </nav>
</header>