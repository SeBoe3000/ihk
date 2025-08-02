<?php
include_once __DIR__ . '/../includes/funktionen.php';
?>

<?php
$rezeptname = "Kokossahne";
$obst = "";
$gemuese = "";
$getreide = erstelleListeRezept('ul', "48g Puderzucker");
$tierisches = erstelleListeRezept('ul', "50g Mascarpone; 340g Sahne");
$sonstiges = erstelleListeRezept('ul', "70g Kokoscreme (fester Teil); 1 Vanilleschote; 3g Gelatine; Ggf. Sahnesteif");
$schritte = erstelleListeRezept('ol', "Gelatine in 18ml Wasser einweichen
Eingeweichte Gelatine, Kokoscreme, Puderzucker mittel bis stark erhitzen (ggf. zuerst Gelatine erhitzen);
30min warten;
Mascarpone, Sahne hinzugeben und mixen;
4h kühlen und danach aufschlagen;
Ggf. bis zu 4 Packungen Sahnesteif beim Aufschlagen hinzugeben");
$kcal = 1781;
$eiweiss = 8.6;
$kohlenhydrate = 59.3;
$fett = 144;
$tfoot = erstelleKalorien($kcal, $eiweiss, $kohlenhydrate, $fett);
echo erstelleTabelleRezept($rezeptname, $schritte, $tfoot, $obst, $gemuese, $getreide, $tierisches, $sonstiges)
?>