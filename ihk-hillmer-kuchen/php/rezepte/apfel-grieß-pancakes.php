<?php
include_once __DIR__ . '/../includes/funktionen.php';
?>

<?php
$rezeptname = "Apfel-Grieß-Pancakes";
$zutaten1 = erstelleListeRezept('ul', "1 Apfel (oder 150g Apfelmark)");
$zutaten2 = "";
$zutaten3 = erstelleListeRezept('ul', "80g Dinkelgrieß; 50g Dinkelmehl");
$zutaten4 = erstelleListeRezept('ul', "1 Ei; 100ml (pflanzliche) Milch");
$zutaten5 = erstelleListeRezept('ul', "1 TL Backpulver (Weinstein); 1 EL Rapsöl; Optional: Zimt, Vanille");
$schritte = erstelleListeRezept('ol', "Apfel grob (oder fein) raspeln und mit restlichen Zutaten verrühren; Mit etwas Öl in Pfanne oder als Waffeln ausbacken");
$tfoot = erstelleKalorien("755", "26,3", "112,5", "20,3");
"Energie: <b>755kcal</b>, Eiweiß: <b>26,3g</b>, Kohlenhydrate: <b>112,5g</b>, Fett: <b>20,3g</b>";

echo erstelleTabelleRezept($rezeptname, $schritte, $tfoot, $zutaten1, $zutaten2, $zutaten3, $zutaten4, $zutaten5)
?>