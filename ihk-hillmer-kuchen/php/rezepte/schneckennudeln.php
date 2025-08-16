<?php
include_once __DIR__ . "/../includes/funktionen.php";

$rezeptname = "Schneckennudeln";
$obst = erstelleListeRezept("ul", "80g Rosinen");
$gemuese = "";
$getreide = erstelleListeRezept("ul", "300g Mehl; 75g Zucker");
$tierisches = erstelleListeRezept("ul", "150g Magerquark; 6EL Milch");
$sonstiges = erstelleListeRezept("ul", "6EL Öl; 1 Pack. Backpulver");
$schritte = erstelleListeRezept("ol", "Magerquark, Zucker, Milch, Öl verkneten;
Mehl und Backpulver unterkneten;
Ausrollen, mit Rosinen füllen, Teig zusammenrollen, schneiden;
Bei 200°C Ober- und Unterhitze für 20min auf mittleren Schiene backen");
$kcal = 2569;
$eiweiss = 53;
$kohlenhydrate = 366;
$fett = 96;
$tfoot = erstelleKalorien($kcal, $eiweiss, $kohlenhydrate, $fett);
echo erstelleTabelleRezept($rezeptname, $schritte, $tfoot, $obst, $gemuese, $getreide, $tierisches, $sonstiges);
?>