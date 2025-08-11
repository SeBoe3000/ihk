<?php 
include_once __DIR__ . '/../includes/funktionen.php';

$rezeptname = "Deutsche Buttercreme";
$obst = "";
$gemuese = "";
$getreide = erstelleListeRezept('ul', "120g Zucker; 40g Stärke");
$tierisches = erstelleListeRezept('ul', "500ml Milch; 3 Eigelb; 300g weiche Butter");
$sonstiges = erstelleListeRezept('ul', "Optional: Mark Vanilleschote");
$schritte = erstelleListeRezept('ol', "Stärke, Zucker, Eigelb und Milch verrühren.;
Milch mit restlichem Zucker aufkochen;
Etwas Milch zu der Eigelbmasse geben und dann wieder zurück zur Milch.;
1 min rumrühren, in andere Schüssel geben.;
Mit Frischhaltefolie abdecken und auf die Creme drücken.;
Butter kremig aufschlagen, Pudding dazugeben.;");
$kcal = 3320;
$eiweiss = 25;
$kohlenhydrate = 185.6;
$fett = 273.5;
$tfoot = erstelleKalorien($kcal, $eiweiss, $kohlenhydrate, $fett);
echo erstelleTabelleRezept($rezeptname, $schritte, $tfoot, $obst, $gemuese, $getreide, $tierisches, $sonstiges)
?>