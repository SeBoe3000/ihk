<?php
include_once __DIR__ . '/../includes/funktionen.php';
?>

<?php
$rezeptname = "Bisquitrolle";
$obst = "";
$gemuese = "";
$getreide = erstelleListeRezept('ul', "120g Zucker; 100g Mehl");
$tierisches = erstelleListeRezept('ul', "3 Eier; 3 Eigelb");
$sonstiges = erstelleListeRezept('ul', "15g Puddingpulver");
$schritte = erstelleListeRezept('ol', "Eier, Eigelb, Prise Salz und Zucker aufschlagen;
Mehl und Puddingpulver sieben und portionsweise unterrühren;
Bei vorgeheizten 190°C Umluft 10-12min backen;
Auf Backpapier stürzen und mit Backpapier belegen (für Flexibilität)");
$kcal = 1295;
$eiweiss = 34.1;
$kohlenhydrate = 205.4;
$fett = 32.2;
$tfoot = erstelleKalorien($kcal, $eiweiss, $kohlenhydrate, $fett);
echo erstelleTabelleRezept($rezeptname, $schritte, $tfoot, $obst, $gemuese, $getreide, $tierisches, $sonstiges)
?>