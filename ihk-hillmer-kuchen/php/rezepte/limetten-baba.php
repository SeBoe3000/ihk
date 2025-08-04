<?php 
include_once __DIR__ . '/../includes/funktionen.php';

$rezeptname = "Limetten-Baba";
$obst = erstelleListeRezept('ul', "Schale einer Limette");
$gemuese = "";
$getreide = erstelleListeRezept('ul', "17g Puderzucker; 288g Mehl");
$tierisches = erstelleListeRezept('ul', "90ml Milch; 107g Eier (fast 4); 41g weiche Butter");
$sonstiges = erstelleListeRezept('ul', "10g Hefe; 3,5g Salz");
$schritte = erstelleListeRezept('ol', "30°C warme Milch, Hefe, Mehl, Puderzucker, Salz, Eier kneten;
Butter portionsweise und zum Schluss Limettenschale einkneten;
Elastischer Teig in Backform geben;
45min gehen lassen (Raumtemperatur);
Bei 150°C für 40min backen");
$kcal = 1582;
$eiweiss = 46.6;
$kohlenhydrate = 226;
$fett = 50.9;
$tfoot = erstelleKalorien($kcal, $eiweiss, $kohlenhydrate, $fett);
echo erstelleTabelleRezept($rezeptname, $schritte, $tfoot, $obst, $gemuese, $getreide, $tierisches, $sonstiges)
?>