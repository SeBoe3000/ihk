<?php
// Seitennamen ändern
function getPageTitle($siteName = null) {
    return $siteName ?? 'Standardtitel';
}

// aktueller Modus ermitteln
function getMode($mode){
    if ($mode === 'dark') {
        return '<a href="?mode=light">Heller Modus</a>';
    } else {
        return '<a href="?mode=dark">Dunkler Modus</a>';
    }
}

// Listen für Rezept (Zutaten und Schritte) erstellen
function erstelleListeRezept($listType = 'ul', $rezeptString) {
    // Ausgabe nur bei ul, ol ansonsten still abbrechen
    if ($listType != 'ul' && $listType != 'ol') {
        return;
    }

    // Einträge trennen
    $rezept = explode(';', $rezeptString);

    // leere Einträge und ausfiltern und Leerzeichen nach ; entfernen
    $zutaten = array_filter(array_map('trim', explode(';', $rezeptString)));

    // HTML-Liste erzeugen
    $html = "<$listType>\n";
    foreach ($rezept as $eintrag) {
        $html .= "    <li>" . htmlspecialchars($eintrag) . "</li>\n";
    }
    $html .= "</$listType>";

    return $html;
}

// Kalorienangabe erstellen
function erstelleKalorien($kalorien, $protein, $kohlenhydrate,$fett){
    $html = "Energie: <b>$kalorien"."kcal</b>, Eiweiß: <b>$protein"."g</b>, Kohlenhydrate: <b>$kohlenhydrate"."g</b>, Fett: <b>$fett"."g</b>";
    return $html;
}


// Rezepttabelle erstellen
function erstelleTabelleRezept($rezeptname, $schritte, $tfoot, $zutaten1, $zutaten2, $zutaten3, $zutaten4, $zutaten5) {
    $html = "<div class=\"table-wrapper\">
        <table class=\"rezept\">
            <caption><strong>$rezeptname</strong></caption>
            <thead>
                <tr>
                    <th>Zutaten</th>
                    <th>Zubereitung</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <!-- Zutaten -->
                    <td>
                        <div class=\"grid\">";
                        if (trim($zutaten1) !== '') {
                            $html .= "<!-- Block: Obst -->
                                <div>
                                    <b>🍏🍌🫐 Obst</b>
                                    $zutaten1
                                </div>";
                        }
                        if (trim($zutaten2) !== '') {
                            $html .= "<!-- Block: Gemüse -->
                                <div>
                                    <b>🥦🥕🍅 Gemüse</b>
                                    $zutaten2
                                </div>";
                        }
                        if (trim($zutaten3) !== '') {
                            $html .= "<!-- Block: Getreide -->
                                <div>
                                    <b>🥔🌾 Getreide</b>
                                    $zutaten3
                                </div>";
                        }
                        if (trim($zutaten4) !== '') {
                            $html .= "<!-- Block: Tierisches -->
                                <div>
                                    <b>🧀🥚🐮 Tierisches</b>
                                    $zutaten4
                                </div>";
                        }
                        if (trim($zutaten5) !== '') {
                            $html .= "<!-- Block: Sonstiges -->
                                <div>
                                    <b>Sonstiges</b>
                                    $zutaten5
                                </div>";
                        }
                        $html .= "</div>
                    </td>
                    <!-- Zubereitung -->
                    <td>
                        $schritte
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan=\"2\">
                        $tfoot
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>";
    
    return $html;
}
