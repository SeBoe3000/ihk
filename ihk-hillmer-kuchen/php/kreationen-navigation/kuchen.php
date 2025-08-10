<?php
$siteName = "Kuchen";
$relPath = '../../';
include '../includes/grund-start.inc.php';
?>

<h1>Meine Kuchen</h1>

<p>Hallo zusammen, ich möchte Euch hier meine Kuchen vorstellen:</p>

<ul>
    <?= createList($kuchen, 'li');?>
</ul>

<?php include("../includes/grund-ende.inc.php"); ?>