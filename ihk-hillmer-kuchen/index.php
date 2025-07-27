<?php
$siteName = "Startseite";
$relPath = '';
include 'php/includes/grund-start.inc.php';
?>
zum Testen Anfang <br>
<a href="php/datenschutz.php">Datenschutz aus Footer direkt öffnen</a> <br>
<a href="php/unterseiten/test.php">Unterseite öffnen und hier Footer</a> <br>
<?php include("php/templates/footer.php"); ?> <br>
zum Testen Ende <br> <br>

<?php include("php/rezepte/testrezept.php"); ?>


<?php
$relPath = '';
include("php/includes/grund-ende.inc.php");
?>