<?php
$siteName = "Startseite";
$relPath = '';
include 'php/includes/grund-start.inc.php';
?>


<section>
zum Testen Anfang <br>
<a href="php/datenschutz.php">Datenschutz aus Footer direkt öffnen</a> <br>
<a href="php/unterseiten/test.php">Unterseite öffnen und hier Footer</a> <br>
<?php include("php/templates/footer.php"); ?> <br>
zum Testen Ende <br> <br>

<a href="php/kreationen/schoko-kirsch-toertchen-mit-strukturbiskuit.php">Schoko-Kirsch Törtchen mit Strukturbiskuit</a> <br>
<a href="php/kreationen/dessertvariation.php">Dessertvariation</a> <br>
<a href="php/kontakt.php">Kontakt</a> <br>
<?php include("php/rezepte/apfel-grieß-pancakes.php"); ?> <br>
<?php include("php/rezepte/apfel-grieß-pancakes.php"); ?> <br>
<?php include("php/rezepte/dekorbiskuit.php"); ?> <br>
</section>

<?php
$relPath = '';
include("php/includes/grund-ende.inc.php");
?>