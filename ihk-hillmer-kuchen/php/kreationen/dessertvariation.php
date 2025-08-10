<?php
$siteName = "Dessertvariation";
$relPath = '../../';
include '../includes/grund-start.inc.php';
?>

<h1>Dessertvariation</h1>

<figure class="fig90">
   <img src="../../assets/images/dessertvariation.png" alt="Dessertvariation">
   <figcaption>Dessertvariation</figcaption>
</figure>

<p>Die Dessertvariation besteht aus folgenden Desserts:</p>

<ul>
    <li><?= createLink("kreationen", "Tiramisu",) ?></li>
    <li><?= createLink("kreationen", "Mango-Kokos-Kugel",) ?></li>
    <li><?= createLink("kreationen", "Schoko-Kirsch Törtchen mit Strukturbiskuit",) ?></li>
</ul>

<?php include("../includes/grund-ende.inc.php"); ?>