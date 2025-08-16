<?php
$siteName = "Kontakt";
$relPath = "../";
include "includes/grund-start.inc.php";
?>

<?php $formularAbgeschickt = $_SERVER["REQUEST_METHOD"] === "POST"; ?>

<?php if (!$formularAbgeschickt): ?>
    <h1>Kontakt</h1>

    <p>Zur Kontaktaufnahme, füllen Sie bitte folgendes Formular aus:</p>

    <form class="form-container" method="post">
        <div class="form-group">
            <label for="anrede">Anrede</label>
            <select name="ar" required id="anrede">
                <option value="" disabled selected>Bitte auswählen</option>
                <option value="Frau">Frau</option>
                <option value="Herr">Herr</option>
            </select>
        </div>

        <div class="form-group">
            <label for="vorname">Vorname</label>
            <input type="text" placeholder="Vorname angeben" name="vn" required id="vorname">
        </div>

        <div class="form-group">
            <label for="nachname">Nachname</label>
            <input type="text" placeholder="Nachname angeben" name="nn" required id="nachname">
        </div>

        <div class="form-group">
            <label for="mail">Mailadresse</label>
            <input type="email" placeholder="E-Mail-Adresse angeben" name="em" required id="mail">
        </div>

        <div class="form-group">
            <label for="betreff">Betreff</label>
            <input type="text" placeholder="Betreff angeben" name="bet" required id="betreff">
        </div>

        <div class="form-group">
            <label for="beschreibung">Beschreibung</label>
            <textarea placeholder="Beschreibung angeben" name="bes" required id="beschreibung"></textarea>
        </div>

        <div class="form-group">
            <label for="nummer">Telefonnummer</label>
            <input type="text" placeholder="Telefonnummer angeben" name="tel" required id="nummer">
        </div>

        <div class="form-checkbox">
            <input type="checkbox" name="dsgvo" required id="datenschutz">
            <label for="datenschutz">Zustimmung zur Verarbeitung der Daten (<a href="datenschutz.php">DSGVO</a>)</label>
        </div>

        <div class="form-button">
            <button>Absenden</button>
            <button type="reset">Reset</button>
        </div>
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
    $Datenschutz = $_POST["dsgvo"] ?? "";

    echo "<p>Hallo $anrede $vorname $nachname, wir haben ihre Nachricht mit dem Betreff \"$betreff\"
    und folgender Beschreibung erhalten: <br></p>";

    echo "<p>\"$beschreibung\"<br></p>";

    echo "<p>Wir werden uns schnellst möglichst bei Ihnen unter der Telefonnummer $telefonnummer
    bzw. E-Mail-Adresse $mail melden.</p>";
    ?>
<?php endif; ?>

<?php include "includes/grund-ende.inc.php"; ?>