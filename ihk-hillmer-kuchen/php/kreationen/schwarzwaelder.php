<?php
$siteName = "Schwarzwälder";
$relPath = "../../";
include "../includes/grund-start.inc.php";
?>

<h1>Schwarzwälder</h1>

<article class="start">
   <h2>Zubereitung und Zutaten</h2>
   <?= createPic("Schwarzwälder", "") ?>

   <div class="text">
      Zutaten:
      <?= erstelleListeRezept("ul", "1x Biskuitboden;
      1x Kischfüllung;
      600-800ml aufgeschlagene Sahne;
      Optional: etwas Kirschwasser") ?>

      Zusammensetzung:
      <?= erstelleListeRezept("ul", "Biskuitboden in 3 Teile horiontal teilen;
      Optional: Böden mit Kirschwasser tränken, Kirschwasser in Sahne und Kirschfüllung einarbeiten;
      Kirschfüllung mit mindestens 1cm Abstand zum Rand auf zwei der drei Böden verteilen;
      Mit Sahne eintreichen und mit Schokostreuseln dekorieren") ?>
   </div>
</article>

<hr>

<article>
   <h2>Rezepte</h2>

   <h3>Biskuitboden</h3>
   <?php include "../rezepte/biskuitboden.php"; ?> <br>

   <h3>Kirschfüllung</h3>
   <?php include "../rezepte/kirschfuellung.php"; ?> <br>
</article>

<?php include "../includes/grund-ende.inc.php"; ?>