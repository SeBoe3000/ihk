<?php
$siteName = "Übersicht";
$relPath = '../';
include 'includes/grund-start.inc.php';
?>

<h1>Meine Kreationen</h1>

<p>Hallo zusammen, ich möchte Euch hier meine Kreationen vorstellen:</p>

<dl>
    <dt><?= $dessertKategorie ?></dt>
    <?= createList($dessert, 'dd');?>
    <dt><?= $kuchenKategorie ?></dt>
    <?= createList($kuchen, 'dd');?>
    <dt><?= $gebaeckKategorie ?></dt>
    <?= createList($gebaeck, 'dd');?>
</dl>

<?php include("includes/grund-ende.inc.php"); ?>