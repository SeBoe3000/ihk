<?php
include_once __DIR__ . "/../includes/funktionen.php";

$rezeptname = "Apfel-Grieß-Pancakes";
$obst = erstelleListeRezept("ul", "1 Apfel (oder 150g Apfelmark)");
$gemuese = "";
$getreide = erstelleListeRezept("ul", "80g Dinkelgrieß; 50g Dinkelmehl");
$tierisches = erstelleListeRezept("ul", "1 Ei; 100ml (pflanzliche) Milch");
$sonstiges = erstelleListeRezept("ul", "1 TL Backpulver (Weinstein); 1 EL Rapsöl; Optional: Zimt, Vanille");
$schritte = erstelleListeRezept("ol", "Apfel grob (oder fein) raspeln und mit restlichen Zutaten verrühren;
Mit etwas Öl in Pfanne oder als Waffeln ausbacken");
$kcal = 755;
$eiweiss = 26.3;
$kohlenhydrate = 112.5;
$fett = 20.3;
$tfoot = erstelleKalorien($kcal, $eiweiss, $kohlenhydrate, $fett);
echo erstelleTabelleRezept($rezeptname, $schritte, $tfoot, $obst, $gemuese, $getreide, $tierisches, $sonstiges);
?>