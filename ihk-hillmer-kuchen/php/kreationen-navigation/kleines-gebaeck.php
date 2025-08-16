<?php
$siteName = "Kleines Gebäck";
$relPath = "../../";
include "../includes/grund-start.inc.php";
?>

<h1>Mein kleines Gebäck</h1>

<p>Hallo zusammen, ich möchte Euch hier meine kleines Gebäck vorstellen:</p>

<ul>
    <?= createList($gebaeck, "li") ?>
</ul>

<?php include "../includes/grund-ende.inc.php"; ?>