<?php 
include_once __DIR__ . '/../includes/funktionen.php'; 

$rezeptname = "Maracuja-Limetten-Sirup";
$obst = erstelleListeRezept('ul', "Schale einer Limette");
$gemuese = "";
$getreide = erstelleListeRezept('ul', "185g Zucker");
$tierisches = "";
$sonstiges = erstelleListeRezept('ul', "350ml Wasser; 125ml Passionsfruchtpüree; 2 Vanilleschoten; 70ml dunkler Rum; 3g Gelatinepulver");
$schritte = erstelleListeRezept('ol', "Gelatine in 18ml Wasser einweichen;
Wasser, Zucker, Passionsfruchtpüree, Vanille erhitzen;
Wenn blubbert Limettenschale und Rum und bei 75°C eingeweichte Gelatine hinzufügen;
Bei 55°C Limetten-Baba einweichen (Kugeln in 500ml Glas, Scheiben in großer flacher Tupperware);
3h warten;
In Form schneiden");
$kcal = 1150;
$eiweiss = 3.2;
$kohlenhydrate = 201;
$fett = 0.4;
$tfoot = erstelleKalorien($kcal, $eiweiss, $kohlenhydrate, $fett);
echo erstelleTabelleRezept($rezeptname, $schritte, $tfoot, $obst, $gemuese, $getreide, $tierisches, $sonstiges)
?>