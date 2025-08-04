<?php
$siteName = "Übersicht";
$relPath = '../';
include 'includes/grund-start.inc.php';
?>

<h1>Rezeptübersicht</h1>

<h2>Grundteige</h2>

<h3>Biskuit</h3>
<?php include("rezepte/biskuitboden.php"); ?> <br>
<?php include("rezepte/biskuitrolle.php"); ?> <br>
<?php include("rezepte/dekorbiskuit.php"); ?> <br>

<h3>Brownie</h3>
<?php include("rezepte/brownie.php"); ?> <br>

<h3>Hefeteig</h3>
<?php include("rezepte/limetten-baba.php"); ?> <br>

<h2>Füllungen</h2>

<h3>Fruchtfüllungen</h3>
<?php include("rezepte/kirschfüllung.php"); ?> <br>
<?php include("rezepte/mango-ananas-kompott.php"); ?> <br>
<?php include("rezepte/maracuja-limetten-sirup.php"); ?> <br>

<h3>Mousse</h3>
<?php include("rezepte/schokoladenmousse.php"); ?> <br>

<h3>Cremes</h3>
<?php include("rezepte/kokossahne.php"); ?> <br>
<?php include("rezepte/mascarpone-sahnecreme.php"); ?> <br>

<h2>Pancakes</h2>
<?php include("rezepte/apfel-grieß-pancakes.php"); ?> <br>

<?php include("includes/grund-ende.inc.php"); ?>