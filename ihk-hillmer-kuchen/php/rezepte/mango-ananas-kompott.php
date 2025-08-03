<?php
include_once __DIR__ . '/../includes/funktionen.php';
?>

<?php
$rezeptname = "Mango-Ananas-Kompott";
$obst = erstelleListeRezept('ul', "200g frische Ananas; 200g frische Mango");
$gemuese = "";
$getreide = erstelleListeRezept('ul', "20g Puderzucker");
$tierisches = "";
$sonstiges = erstelleListeRezept('ul', "35ml Malibu; 2 Vanilleschoten; 275g Mangopüree; 166g Passionsfruchtpüree; 4g NH-Pektin");
$schritte = erstelleListeRezept('ol', "Obst fein würfeln;
Pektin in Puderzucker mischen;
Püree und Vanille in Topf erhitzen;
Bei 40°C Pektin-Puderzucker hinzugeben und aufkochen;
Nach 2min Vanilleschoten entfernen;
Obstwürfel und Malibu hinzufügen;
1h mit Frischhaltefolie bedeckt kühlen");
$kcal = 640;
$eiweiss = 2.7;
$kohlenhydrate = 141.7;
$fett = 1.4;
$tfoot = erstelleKalorien($kcal, $eiweiss, $kohlenhydrate, $fett);
echo erstelleTabelleRezept($rezeptname, $schritte, $tfoot, $obst, $gemuese, $getreide, $tierisches, $sonstiges)
?>