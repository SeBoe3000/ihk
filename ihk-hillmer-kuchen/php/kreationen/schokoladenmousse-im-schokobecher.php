<?php
$siteName = "Tiramisu";
$relPath = '../../';
include '../includes/grund-start.inc.php';
?>

<h1>Schokoladenmousse im Schokobecher</h1>

<article>
   <?= createPic("Schokoladenmousse im Schokobecher", "fig30") ?>

   <br>

   Zutaten:
   <?= erstelleListeRezept('ul', "1x Schokoladenmousse;
   6x Schokoladenbecher aus temparierter Schokolade"); ?>

   Zusammensetzung:
   <?= erstelleListeRezept('ul', "Schokoladenbecher mit etwas abgekühlter Schokoladenmousse füllen;
   Optional: mit Schokoladenchip aus temparierter Schokolade dekorieren;
   Über Nacht im Kühlschrank fest werden lassen"); ?>
   
</article>

<article>
   <h2>Rezepte</h2>

   <h3>Schokoladenmousse</h3>
   <?php include("../rezepte/schokoladenmousse.php"); ?> <br>
</article>

<?php include("../includes/grund-ende.inc.php"); ?>