<?php
include_once __DIR__ . '/../includes/funktionen.php';

$rezeptname = "Brownie";
$obst = "";
$gemuese = "";
$getreide = erstelleListeRezept('ul', "170g Zucker; 85g Mehl");
$tierisches = erstelleListeRezept('ul', "160g Butter; 20ml Milch; 3 Eier");
$sonstiges = erstelleListeRezept('ul', "125g Zartbitterkuvertüre; 40g Kakaopulver; ½ Vanilleschote");
$schritte = erstelleListeRezept('ol', "Kuvertüre und Butter schmelzen;
Zucker, Prise Salz, Milch, Vanille einrühren;
Eier einrühren;
Mehl, Kakaopulver sieben und einrühren;
Bei vorgeheizten 170°C Umluft für 25min backen;
Innentemperatur muss 85 – 95°C betragen");
$kcal = 3182;
$eiweiss = 45.7;
$kohlenhydrate = 291.3;
$fett = 202.8;
$tfoot = erstelleKalorien($kcal, $eiweiss, $kohlenhydrate, $fett);
echo erstelleTabelleRezept($rezeptname, $schritte, $tfoot, $obst, $gemuese, $getreide, $tierisches, $sonstiges)
?>