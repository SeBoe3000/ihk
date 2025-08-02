<?php
$siteName = "Tiramisu";
$relPath = '../../';
include '../includes/grund-start.inc.php';
?>
<h1>Tiramisu</h1>

<figure>
   <img class="einzeldessert" src="../../assets/images/tiramisu.png" alt="Tiramisu">
   <figcaption>Tiramisu</figcaption>
</figure>

<pre>Zutaten:
-	1x Biskuitboden
-   1x Mascarpone-Sahnecreme

Zusammensetzung:
-	Biskuit in 8cm Dessertring backen, optional horizontal teilen
-   Mascarpone-Sahnecreme darüber verstreichen
-   Kakaopulver drüber sieben
-   Optional: mit Schokoladenchip aus temparierter Schokolade dekorieren

</pre>

<h2>Rezepte</h2>
<h3>Biskuitboden</h3>
<?php include("../rezepte/biskuitboden.php"); ?> <br>
<h3>Mascarpone-Sahnecreme</h3>
<?php include("../rezepte/mascarpone-sahnecreme.php"); ?> <br>

<?php include("../includes/grund-ende.inc.php"); ?>