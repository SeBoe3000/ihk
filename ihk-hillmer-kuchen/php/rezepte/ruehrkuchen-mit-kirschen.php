<?php
include_once __DIR__ . "/../includes/funktionen.php";

$rezeptname = "Rührkuchen mit Kirschen";
$obst = erstelleListeRezept("ul", "1 Glas Kirschen (ggf. Hälfte)");
$gemuese = "";
$getreide = erstelleListeRezept("ul", "280g Zucker; 270g Mehl; 1TL Backpulver; 30g Backkakao");
$tierisches = erstelleListeRezept("ul", "50g weiche Butter; 5 Eier; 100ml Milch");
$sonstiges = erstelleListeRezept("ul", "Etwas Vanille; 150ml Öl");
$schritte = erstelleListeRezept("ol", "Butter und Öl aufschlagen, Zucker, Salz einrieseln lassen, Eier nach und nach dazugeben 
(weiter aufschlagen);
Mehl, Backpulver, Hälfte der Milch dazugeben;
¾ Teig in Form geben.;
Restliche Milch erwärmen, mit Backkakao mischen und zu restlichem Teig geben;
Restlicher Teig auf hellen geben;
Kirschen drauf verteilen;
Bei vorgeheizten 170°C Umluft für 40 min backen");
$kcal = 4405;
$eiweiss = 72.3;
$kohlenhydrate = 770.7;
$fett = 223.3;
$tfoot = erstelleKalorien($kcal, $eiweiss, $kohlenhydrate, $fett);
echo erstelleTabelleRezept($rezeptname, $schritte, $tfoot, $obst, $gemuese, $getreide, $tierisches, $sonstiges);
?>