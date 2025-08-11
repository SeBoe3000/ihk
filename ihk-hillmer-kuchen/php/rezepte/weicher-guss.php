<?php 
include_once __DIR__ . '/../includes/funktionen.php';

$rezeptname = "Weicher Guss";
$obst = "";
$gemuese = "";
$getreide = "";
$tierisches = erstelleListeRezept('ul', "125ml Milch; 80g Butter");
$sonstiges = erstelleListeRezept('ul', "250 Zartbitter Kuvertüre");
$schritte = erstelleListeRezept('ol', "Milch stark erhitzen (nicht kochen);
Kuvertüre und Butter einrühren;
Auf Raumtemperatur abkühlen lassen");
$kcal = 1908;
$eiweiss = 	19.85;
$kohlenhydrate = 106.85;
$fett = 153.4;
$tfoot = erstelleKalorien($kcal, $eiweiss, $kohlenhydrate, $fett);
echo erstelleTabelleRezept($rezeptname, $schritte, $tfoot, $obst, $gemuese, $getreide, $tierisches, $sonstiges)
?>