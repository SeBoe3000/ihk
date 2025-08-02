<?php
include_once __DIR__ . '/../includes/funktionen.php';
?>

<?php
$rezeptname = "Kirschfüllung";
$obst = erstelleListeRezept('ul', "1 Glas Sauerkirschen; 250ml Kirschsaft");
$gemuese = "";
$getreide = erstelleListeRezept('ul', "2EL Stärke gestrichen; 2EL Zucker");
$tierisches = "";
$sonstiges = "";
$schritte = erstelleListeRezept('ol', "Kirschen abtropfen lassen;
Etwas Kirschsaft mit Stärke und Zucker mischen;
Kirschsaft erhitzen und restlichen dazugeben;
Abkühlen lassen und ggf. Kirschwasser einrühren");
$kcal = 266;
$eiweiss = 0;
$kohlenhydrate = 64;
$fett = 0;
$tfoot = erstelleKalorien($kcal, $eiweiss, $kohlenhydrate, $fett);
echo erstelleTabelleRezept($rezeptname, $schritte, $tfoot, $obst, $gemuese, $getreide, $tierisches, $sonstiges)
?>