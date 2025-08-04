<?php
$siteName = "Croissant";
$relPath = '../../';
include '../includes/grund-start.inc.php';
?>

<h1>Croissant</h1>

<article>
   <figure class="fig30">
      <img src="../../assets/images/croissant.png" alt="Croissant">
      <figcaption>Croissant</figcaption>
   </figure>
</article>

<article>
   <h2>Rezepte</h2>

   <h3>Croissant</h3>
   <?php include("../rezepte/croissant.php"); ?> <br>
</article>

<?php include("../includes/grund-ende.inc.php"); ?>