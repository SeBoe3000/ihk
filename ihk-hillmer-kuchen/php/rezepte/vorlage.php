<?php
include_once __DIR__ . "/../includes/funktionen.php";

$rezeptname = "xxx";
$obst = erstelleListeRezept("ul", "xxx");
$gemuese = erstelleListeRezept("ul", "xxx");
$getreide = erstelleListeRezept("ul", "xxx");
$tierisches = erstelleListeRezept("ul", "xxx");
$sonstiges = erstelleListeRezept("ul", "xxx");
$schritte = erstelleListeRezept("ol", "xxx");
$kcal = 111;
$eiweiss = 111;
$kohlenhydrate = 111;
$fett = 111;
$tfoot = erstelleKalorien($kcal, $eiweiss, $kohlenhydrate, $fett);
echo erstelleTabelleRezept($rezeptname, $schritte, $tfoot, $obst, $gemuese, $getreide, $tierisches, $sonstiges);
?>