<?php
$siteName = "Schwarzwälder";
$relPath = '../../';
include '../includes/grund-start.inc.php';
?>

<h1>Schwarzwälder</h1>

<article>
   <figure class="fig30">
      <img src="../../assets/images/schwarzwaelder.png" alt="Schwarzwälder">
      <figcaption>Schwarzwälder</figcaption>
   </figure>

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