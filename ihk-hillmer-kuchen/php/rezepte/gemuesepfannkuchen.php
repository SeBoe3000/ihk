<?php 
include_once __DIR__ . '/../includes/funktionen.php';

$rezeptname = "Gemüsepfannkuchen";
$obst = "";
$gemuese = erstelleListeRezept('ul', "1 kleine Karotte; ½ Zucchini; optional: ½ Paprika");
$getreide = erstelleListeRezept('ul', "120g Dinkelvollkornmehl");
$tierisches = erstelleListeRezept('ul', "2 Eier; 200ml Milch");
$sonstiges = erstelleListeRezept('ul', "optional: 1TL Backpulver");
$schritte = erstelleListeRezept('ol', "Karotte fein reiben;
Zucchini grob oder fein raspeln;
Paprika fein würfeln;
Zutaten (bis auf Gemüse) vermengen und 10 min quellen lassen;
Gemüse unterheben;
Mit etwas Öl in Pfanne ausbacken;
Z.B. mit Kräuterquark füllen");
$kcal = 762;
$eiweiss = 38.4;
$kohlenhydrate = 103.7;
$fett = 20.2;
$tfoot = erstelleKalorien($kcal, $eiweiss, $kohlenhydrate, $fett);
echo erstelleTabelleRezept($rezeptname, $schritte, $tfoot, $obst, $gemuese, $getreide, $tierisches, $sonstiges)
?>