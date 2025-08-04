<?php 
include_once __DIR__ . '/../includes/funktionen.php';

$rezeptname = "Croissant Grundteig";
$obst = "";
$gemuese = "";
$getreide = erstelleListeRezept('ul', "500g Weizenmehl 550; 10g Zucker; 10g Salz");
$tierisches = erstelleListeRezept('ul', "270ml kalte Milch; 1 Eigelb; 30g weiche Butter; 200g kalte Butter (zum Tourieren)");
$sonstiges = erstelleListeRezept('ul', "4g Malzextrakt (oder Zucker, Honig); 20g Hefe");
$s1 = "Hinweis: kühlen und aufgehen des Teiges in / unter Plastikfolie (Haut vermeiden) <br><br>";
$s2 = "Teig vorbereiten:<br>";
$s3 = erstelleListeRezept('ol', "Zutaten in Küchenmaschine 2-3 min mischen (nicht kneten) und Teig quadratisch ausrollen auf 8-10mm;
200g Butter horizontal unterteilen, leicht überlappend zusammendrücken, mit Mehl weich klopfen, etwas ausrollen (Butter muss beweglich sein und darf nicht brechen);
Butter auf Teig legen, andrücken, komplett einschlagen, andrücken und geschmeidig klopfen");
$s4 = "Tourieren:<br>";
$s5 = erstelleListeRezept('ol', "1 Stunde kühlen;
3 einfache Touren geben: auf 1cm gegen Faltrichtung ausrollen, 1/3 rechts und links in Mitte klappen, mind. 30min kühlen vor nächsten Tour;
1-2 Stunden kühlen");
$s6 = "Formen:<br>";
$s7 = erstelleListeRezept('ol', "Auf 3mm rechteckig ausrollen und zuschneiden: Croissants: 22cm Höhe, 8cm einteilen / Gipferl: 17cm Höhe, 11cm einteilen;
Unten in Mitte leicht einschneiden, Ende etwas nach außen klappen und ohne Zug aufrollen (bei Gipferl leicht an Spitze ziehen);
Mit Spitze nach unten legen;
2 Stunden im Raum aufgehen lassen;
Teigabschnitte nie zusammenkneten, sondern zusammen drücken, aufeinander legen und nochmals ausrollen");
$s8 = "Backen:<br>";
$s9 = erstelleListeRezept('ol', "Backofen mit Auflaufform auf 190°C Umluft vorheizen;
Mit Ei (Glanz) bestreichen und mit großzügig Wasser (Gleichmäßigkeit) besprühen;
Croissants auf Gitter oder Lochblech legen (Wärmeleitung besser);
½ Liter Wasser in Auflaufform geben, Wasser in Backofen sprühen (backt durch Dampf weniger schnell an);
Für 20min goldgelb backen");
$s10 = "Haltbarkeiten und Backmethoden:<br>";
$s11 = erstelleListeRezept('ol', "Gekühlter Teig oder fertig gerollte Croissants einfrieren (nach anfrieren in Tüte packen) --> am Vortag über Kühlschrank auftauen, Teig verarbeiten, aufgehen lassen, backen (Haltbar für max. 2 Monate);
Gerollte Croissants 2 Stunden aufgehen lassen, einfrieren --> am Vortag über Kühlschrank auftauen, backen (Haltbar für 1-2 Wochen);
Gerollte Croissants 1 Stunde aufgehen lassen über Nacht in Kühlschrank stellen --> am nächsten Morgen backen");
$schritte = $s1 . $s2 . $s3 . $s4 . $s5 . $s6 . $s7 . $s8 . $s9 . $s10 . $s11;
$kcal = 3430;
$eiweiss = 64;
$kohlenhydrate = 393;
$fett = 259;
$tfoot = erstelleKalorien($kcal, $eiweiss, $kohlenhydrate, $fett);
echo erstelleTabelleRezept($rezeptname, $schritte, $tfoot, $obst, $gemuese, $getreide, $tierisches, $sonstiges)
?>