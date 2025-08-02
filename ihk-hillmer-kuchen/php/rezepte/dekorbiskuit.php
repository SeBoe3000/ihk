<?php
include_once __DIR__ . '/../includes/funktionen.php';
?>

<?php
$rezeptname = "Dekorbiskuit";
$obst = "";
$gemuese = "";
$getreide = erstelleListeRezept('ul', "18g Puderzucker; 18g Mehl");
$tierisches = erstelleListeRezept('ul', "18g Butter weich; 15g Eiweiß");
$sonstiges = "";
$schritte = erstelleListeRezept('ol', "Butter mit Zucker verrühren;
Eiweiß und danach Mehl einrühren;
Ggf. einfärben;
In Reliefmatte verstreichen;
Ggf. kurz anbacken oder einfrieren;
Masse ".'<a href="php/rezepte/biskuitrolle.php">Biskuitrolle</a>'." darüber geben"); /* TODO: anderer Link angeben */
$kcal = 270;
$eiweiss = 3.6;
$kohlenhydrate = 30.7;
$fett = 14.5;
$tfoot = erstelleKalorien($kcal, $eiweiss, $kohlenhydrate, $fett);
echo erstelleTabelleRezept($rezeptname, $schritte, $tfoot, $obst, $gemuese, $getreide, $tierisches, $sonstiges)
?>

	
