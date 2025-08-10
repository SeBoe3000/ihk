<?php
$siteName = "Tiramisu";
$relPath = '../../';
include '../includes/grund-start.inc.php';
?>

<h1>Schokoladenmousse im Schokobecher</h1>

<article>
   <?= createPic("Schokoladenmousse im Schokobecher", "fig30") ?>

   <pre>Zutaten:
-	Schokoladenmousse
-   Schokoladenbecher

xxx:
-	xxxx
   </pre>
</article>

<article>
   <h2>Rezepte</h2>

   <h3>Schokoladenmousse</h3>
   <?php include("../rezepte/schokoladenmousse.php"); ?> <br>
</article>

<?php include("../includes/grund-ende.inc.php"); ?>