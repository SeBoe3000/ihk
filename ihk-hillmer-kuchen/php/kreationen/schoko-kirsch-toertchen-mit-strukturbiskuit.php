<?php
$siteName = "Schoko-Kirsch Törtchen mit Strukturbiskuit";
$relPath = '../../';
include '../includes/grund-start.inc.php';
?>

<article>
   <h1>Schoko-Kirsch Törtchen mit Strukturbiskuit</h1>

   <figure class="fig30">
      <img src="../../assets/images/schoko-kirsch-toertchen-mit-strukturbiskuit.png" alt="Schoko-Kirsch-Törtchen mit Strukturbiskuit">
      <figcaption>Schoko-Kirsch-Törtchen mit Strukturbiskuit</figcaption>
   </figure>

   <pre>Zutaten für 12 Törtchen in 8cm Dessertring:
- 1x Strukturbiskuit (4x Dekorbiskuit und 1x Biskuitrolle) auf Reliefmatten backen
- 1x Brownie in 12 Formen mit 7 oder 8 cm backen (bleibt noch etwas übrig)
- 1x Kirschfüllung
- 1x Mascarpone-Sahnecreme (ggf. mit etwas mehr Sahne)

Zusammensetzung:
- 8cm Dessertring mit Tortenfolie bestücken
- Strukturbiskuit halbieren, ca. 23cm lange Streifen zuschneiden und in Dessertring legen
- Brownie etwas verkleinern und als Boden in Dessertring legen
- Kirschen auf Brownie geben und mit Mascarpone-Sahnecreme auffüllen
   </pre>
</article>

<article>
   <h2>Rezepte</h2>

   <h3>Strukturbiskuit</h3>
   <?php include("../rezepte/dekorbiskuit.php"); ?> <br>
   <?php include("../rezepte/biskuitrolle.php"); ?> <br>

   <h3>Brownie</h3>
   <?php include("../rezepte/brownie.php"); ?> <br>

   <h3>Kirschfüllung</h3>
   <?php include("../rezepte/kirschfüllung.php"); ?> <br>

   <h3>Mascarpone-Sahnecreme</h3>
   <?php include("../rezepte/mascarpone-sahnecreme.php"); ?> <br>
</article>

<?php include("../includes/grund-ende.inc.php"); ?>