<?php
include_once __DIR__ . '/../includes/funktionen.php';
?>

<header>
    <nav>
        <ul>
            <li><a href="<?= $relPath ?>php/datenschutz.php">Header 1</a></li>
            <li><a href="<?= $relPath ?>php/impressum.php">Header 2</a></li>
            <li><a href="<?= $relPath ?>php/kontakt.php">Header 3</a></li>
            <li><?php echo getMode($mode)?></li>
        </ul>
    </nav>
</header>