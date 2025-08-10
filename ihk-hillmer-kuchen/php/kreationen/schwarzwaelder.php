<?php
$siteName = "Schwarzwälder";
$relPath = '../../';
include '../includes/grund-start.inc.php';
?>

<h1>Schwarzwälder</h1>

<article>
   <?= createPic("Schwarzwälder", "fig30") ?>

   <pre>
xxx
   </pre>
</article>

<article>
   <h2>Rezepte</h2>

   <h3>Biskuitboden</h3>
   <?php include("../rezepte/biskuitboden.php"); ?> <br>

   <h3>Kirschfüllung</h3>
   <?php include("../rezepte/kirschfuellung.php"); ?> <br>
</article>

<?php include("../includes/grund-ende.inc.php"); ?>