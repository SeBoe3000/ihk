<?php
include_once __DIR__ . '/../includes/funktionen.php';
?>

<?php
$rezeptname = "Biskuitboden";
$obst = "";
$gemuese = "";
$getreide = erstelleListeRezept('ul', "220g Zucker; 280g Mehl");
$tierisches = erstelleListeRezept('ul', "6 Eier");
$sonstiges = erstelleListeRezept('ul', "2TL Backpulver");
$schritte = erstelleListeRezept('ol', "Eier mit Salz, Zucker aufschlagen (Volumen verdreifacht);
Gesiebtes Mehl & Backpulver portionsweise unterheben.;
Bei vorgeheizten 175°C Umluft 40min backen.");
$kcal = 2317;
$eiweiss = 64;
$kohlenhydrate = 422;
$fett = 35;
$tfoot = erstelleKalorien($kcal, $eiweiss, $kohlenhydrate, $fett);
echo erstelleTabelleRezept($rezeptname, $schritte, $tfoot, $obst, $gemuese, $getreide, $tierisches, $sonstiges)
?>


