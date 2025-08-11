<?php
$siteName = "Schneckennudeln";
$relPath = '../../';
include '../includes/grund-start.inc.php';
?>

<h1>Schneckennudeln</h1>

<?= createPic("Schneckennudeln", "fig30") ?>

<hr>

<article>
   <h2>Rezepte</h2>

   <h3>Schneckennudeln</h3>
   <?php include("../rezepte/schneckennudeln.php"); ?> <br>
</article>

<?php include("../includes/grund-ende.inc.php"); ?>