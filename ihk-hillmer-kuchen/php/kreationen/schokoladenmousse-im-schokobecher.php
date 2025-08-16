<?php
$siteName = "Schokoladenmousse im Schokobecher";
$relPath = "../../";
include "../includes/grund-start.inc.php";
?>

<h1>Schokoladenmousse im Schokobecher</h1>

<article class="start">
   <h2>Zubereitung und Zutaten</h2>
   <?= createPic("Schokoladenmousse im Schokobecher", "") ?>

   <div class="text">
      Zutaten:
      <?= erstelleListeRezept("ul", "1x Schokoladenmousse; 
      6x Schokoladenbecher aus temparierter Schokolade") ?>

      Zusammensetzung:
      <?= erstelleListeRezept("ul", "Schokoladenbecher mit etwas abgekühlter Schokoladenmousse füllen;
      Optional: mit Schokoladenchip aus temparierter Schokolade dekorieren;
      Über Nacht im Kühlschrank fest werden lassen") ?>
   </div>
</article>

<hr>

<article>
   <h2>Rezepte</h2>

   <h3>Schokoladenmousse</h3>
   <?php include "../rezepte/schokoladenmousse.php"; ?> <br>
</article>

<?php include "../includes/grund-ende.inc.php"; ?>