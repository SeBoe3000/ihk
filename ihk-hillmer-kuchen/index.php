<?php
$siteName = "Startseite";
$relPath = '';
include 'php/includes/grund-start.inc.php';
?>

<section>


<audio controls title="Eieruhr" >
   <source src="assets/audio/eieruhr.mp3"> <!-- Pixabay - Fronbondi_Skegs -->
   <source src="assets/audio/eieruhr2.mp3"> <!-- Pixabay - freesound_community -->
</audio>

<video controls title = "Croissant" poster="assets/images/croissant.png">
   <source src="assets/videos/croissant.mp4"> <!-- Pixabay - grandmusicevents -->
   <source src="assets/videos/apfelstrudel.mp4"> <!-- Pixabay - Kaffeesüchtig -->
</video>



<a href="php/kreationen/schoko-kirsch-toertchen-mit-strukturbiskuit.php">Schoko-Kirsch Törtchen mit Strukturbiskuit</a> <br>
<a href="php/kreationen/dessertvariation.php">Dessertvariation</a> <br>
<a href="php/kontakt.php">Kontakt</a> <br>
<?php include("php/rezepte/apfel-grieß-pancakes.php"); ?> <br>
<?php include("php/rezepte/apfel-grieß-pancakes.php"); ?> <br>
<?php include("php/rezepte/dekorbiskuit.php"); ?> <br>
</section>

<?php
$relPath = '';
include("php/includes/grund-ende.inc.php");
?>