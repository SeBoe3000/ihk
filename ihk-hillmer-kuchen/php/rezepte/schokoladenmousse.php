<?php
include_once __DIR__ . '/../includes/funktionen.php';
?>

<?php
$rezeptname = "Schokoladenmousse";
$obst = "";
$gemuese = "";
$getreide = erstelleListeRezept('ul', "70g Zucker");
$tierisches = erstelleListeRezept('ul', "200g Butter; 4 Eigelb; 500g Sahne");
$sonstiges = erstelleListeRezept('ul', "300g Kuvertüre");
$schritte = erstelleListeRezept('ol', "Kuvertüre und Butter in getrennten Töpfen schmelzen und mischen;
Eigelb mit Zucker mischen;
Sahne leicht anschlagen;
Kuvertüre und Eigelb mischen, danach Sahne einrühren");
$kcal = 5250;
$eiweiss = 33;
$kohlenhydrate = 201.6;
$fett = 446;
$tfoot = erstelleKalorien($kcal, $eiweiss, $kohlenhydrate, $fett);
echo erstelleTabelleRezept($rezeptname, $schritte, $tfoot, $obst, $gemuese, $getreide, $tierisches, $sonstiges)
?>