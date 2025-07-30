<?php
$siteName = "Kontakt";
$relPath = '../';
include 'includes/grund-start.inc.php';
?>

<?php
$formularAbgeschickt = ($_SERVER["REQUEST_METHOD"] === "POST");
?>

<?php if (!$formularAbgeschickt): ?>
    <p>Zur Kontaktaufnahme, füllen Sie bitte folgendes Formular aus:</p>
    <form method="post">
        <label for="anrede">Anrede</label>
        <select name="ar" required id="anrede">
            <option value="" disabled selected>Bitte auswählen</option>
            <option value="Frau">Frau</option>
            <option value="Herr">Herr</option>
        </select><br><br>

        <label for="vorname">Vorname</label>
        <input type="text" placeholder="Vorname angeben" name="vn" required id="vorname"><br><br>

        <label for="nachname">Nachname</label>
        <input type="text" placeholder="Nachname angeben" name="nn" required id="nachname"><br><br>

        <label for="mail">Mailadresse</label>
        <input type="email" placeholder="E-Mail-Adresse angeben" name="em" required id="mail"><br><br>

        <label for="betreff">Betreff</label>
        <input type="text" placeholder="Betreff angeben" name="bet" required id="betreff"><br><br>

        <label for="beschreibung">Beschreibung</label>
        <textarea placeholder="Beschreibung angeben" name="bes" required id="beschreibung"></textarea><br><br>

        <label for="nummer">Telefonnummer</label>
        <input type="text" placeholder="Telefonnummer angeben" name="tel" required id="nummer"><br><br>

        <input type="checkbox" name="dsgvo" required id="datenschutz">
        <label for="datenschutz">Zustimmung zur Verarbeitung der Daten (<a href="datenschutz.php">DSGVO</a>)</label><br><br>

        <button>Absenden</button>
        <button type="reset">Reset</button><br><br>
    </form>

<?php else: ?>
    <?php
        $anrede = $_POST["ar"] ?? "";
        $vorname = $_POST["vn"] ?? "";
        $nachname = $_POST["nn"] ?? "";
        $mail = $_POST["em"] ?? "";
        $betreff = $_POST["bet"] ?? "";
        $beschreibung = $_POST["bes"] ?? "";
        $telefonnummer = $_POST["tel"] ?? "";
        $Datenschutz  = $_POST["dsgvo"] ?? "";

        echo "Hallo $anrede $vorname $nachname wir haben ihre Nachricht mit dem Betreff \"$betreff\" und folgender Beschreibung erhalten: <br>";
        echo "\"$beschreibung\"<br>";
        echo "Wir werden uns schnellstmöglichst bei Ihnen melden, unter der Telefonnummer $telefonnummer bzw. E-Mail-Adresse $mail.";
     ?>
<?php endif; ?>

<?php include("includes/grund-ende.inc.php"); ?>