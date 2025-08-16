<?php
$siteName = "Desserts";
$relPath = "../../";
include "../includes/grund-start.inc.php";
?>

<h1>Meine Desserts</h1>

<p>Hallo zusammen, ich möchte Euch hier meine Desserts vorstellen:</p>

<ul>
    <?= createList($dessert, "li") ?>
</ul>

<?php include "../includes/grund-ende.inc.php"; ?>