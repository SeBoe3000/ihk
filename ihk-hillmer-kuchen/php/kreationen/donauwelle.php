<?php
$siteName = "Donauwelle";
$relPath = '../../';
include '../includes/grund-start.inc.php';
?>

<h1>Donauwelle</h1>

<article class="start">
   <h2>Zubereitung und Zutaten</h2>
   <?= createPic("Donauwelle", "") ?>

   <div class="text">
      Zutaten:
      <?= erstelleListeRezept('ul', "1x Rührteig mit Kirschen;
      1x Deutsche Buttercreme;
      1x Weicher Guss"); ?>

      Zusammensetzung:
      <?= erstelleListeRezept('ul', "Buttercreme auf abgekühlten Teig verteilen;
Weicher Guss (abgekühlt) in zwei Schichten auf Buttercreme verteilen (nach ersten 30 min warten) dann Wellenmuster reinmachen"); ?>
   </div>
</article>

<hr>

<article>
   <h2>Rezepte</h2>

   <h3>Rührkuchen mit Kirschen</h3>
   <?php include("../rezepte/ruehrkuchen-mit-kirschen.php"); ?> <br>

   <h3>Deutsche Buttercreme</h3>
   <?php include("../rezepte/deutsche-buttercreme.php"); ?> <br>

   <h3>Weicher Guss</h3>
   <?php include("../rezepte/weicher-guss.php"); ?> <br>
</article>

<?php include("../includes/grund-ende.inc.php"); ?>