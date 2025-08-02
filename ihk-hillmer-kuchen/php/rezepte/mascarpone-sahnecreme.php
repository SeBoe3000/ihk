<?php
include_once __DIR__ . '/../includes/funktionen.php';
?>

<?php
$rezeptname = "Mascarpone-Sahnecreme";
$obst = "";
$gemuese = "";
$getreide = erstelleListeRezept('ul', "50g Zucker");
$tierisches = erstelleListeRezept('ul', "250g Mascarpone; 300ml Sahne");
$sonstiges = erstelleListeRezept('ul', "5TL Sahnefest");
$schritte = erstelleListeRezept('ol', "Alles mischen bis feste Masse entsteht");
$kcal = 2155;
$eiweiss = 8;
$kohlenhydrate = 65;
$fett = 184;
$tfoot = erstelleKalorien($kcal, $eiweiss, $kohlenhydrate, $fett);
echo erstelleTabelleRezept($rezeptname, $schritte, $tfoot, $obst, $gemuese, $getreide, $tierisches, $sonstiges)
?>