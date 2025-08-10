<?php
$siteName = "Tiramisu";
$relPath = '../../';
include '../includes/grund-start.inc.php';
?>

<h1>Tiramisu</h1>

<article>
   <?= createPic("Tiramisu", "fig30") ?>

   <pre>Zutaten:
-	1x Biskuitboden
-   1x Mascarpone-Sahnecreme

Zusammensetzung:
-	Biskuit in 8cm Dessertring backen, optional horizontal teilen
-   Mascarpone-Sahnecreme darüber verstreichen
-   Kakaopulver drüber sieben
-   Optional: mit Schokoladenchip aus temparierter Schokolade dekorieren
   </pre>
</article>

<article>
   <h2>Rezepte</h2>

   <h3>Biskuitboden</h3>
   <?php include("../rezepte/biskuitboden.php"); ?> <br>

   <h3>Mascarpone-Sahnecreme</h3>
   <?php include("../rezepte/mascarpone-sahnecreme.php"); ?> <br>
   
</article>

<?php include("../includes/grund-ende.inc.php"); ?>