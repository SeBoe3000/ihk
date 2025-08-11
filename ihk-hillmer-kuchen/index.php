<?php
$siteName = "Startseite";
$relPath = '';
include 'php/includes/grund-start.inc.php';
?>

<h1>Herzlich Willkommen</h1>

<p>
    Beim Backen kann ich mich kreativ ausleben und dabei meine Liebsten mit Süßem verwöhnen.
    Hier möchte ich meine liebsten Rezepte und Kreationen mit Euch teilen.<br>
    Sobald das vertraute <strong>Ticken der Eieruhr</strong> ertönt, weiß ich: Jetzt beginnt die schönste Zeit des Tages.<br>
    <em>Klicke, um das vertraute Ticken zu hören:</em>
    <audio controls title="Eieruhr">
        <source src="assets/audio/eieruhr.mp3">
        <source src="assets/audio/eieruhr2.mp3">
    </audio>
</p>

<p>
    Folgendes Motto begleitet mich durch jede Teigschicht.
    Ob knusprige Tartes, luftige Torten oder süße Kleinigkeiten – für mich ist Backen Glück in jeder Form.
</p>

<blockquote>"Kein Kuchen ist auch keine Lösung. Viel Kuchen aber schon."</blockquote>

<p>
    Neugierig geworden?
    Hier geht es zu meinen <a href="php/kreationen.php">Kreationen</a> und
    <a href="php/uebersicht.php">liebsten Rezepten</a>.<br>
</p>

<p>
    Und manchmal, ganz still und heimlich, tanzen sogar die Croissants, in klein:
    <span class="emoji">&#x1F950</span><span class="emoji">&#x1F950</span> und in groß ... <br>
    <video controls title="Croissant" poster="assets/images/croissant.png">
        <source src="assets/videos/croissant.mp4">
        <source src="assets/videos/apfelstrudel.mp4">
    </video>
</p>

<hr>

<h2>Verwendete Mengeneinheiten</h2>

<p>
    In den Rezepten werden die Mengeneinheiten <abbr title="Gramm">g</abbr>,
    <abbr title="Teelöffel">TL</abbr>,
    <abbr title="Esslöffel">EL</abbr> und
    <abbr title="Milliliter">ml</abbr> verwendet.
</p>

<details>
    <summary>Umrechnungen</summary>
    <ul>
        <li>Dabei entspricht <abbr title="Teelöffel">TL</abbr> ca. 5–10g / 5ml (gestrichen) bzw. 10–20g (gehäuft).</li>
        <li><abbr title="Esslöffel">EL</abbr> entspricht ca. 10–15g / 15ml (gestrichen) bzw. 20–30g (gehäuft).</li>
        <li>Eine Prise Salz hat etwa 1–1,5g.</li>
    </ul>
</details>

<h2>Backtipps für den perfekten Kuchen</h2>

<pre>
- Zutaten immer abwiegen, nicht schätzen
- Butter und Eier rechtzeitig temperieren
- Mehl vorsichtig unterheben
- Backofen nicht zu früh öffnen
- Stäbchenprobe vor dem Herausnehmen
- Kuchen gut auskühlen lassen
</pre>

<?php include("php/includes/grund-ende.inc.php"); ?>